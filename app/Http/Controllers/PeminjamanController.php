<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::all();
        $user = User::all();
        $peminjaman = Peminjaman::orderBy('id', 'desc')->get();
        return view('dashboard.peminjaman.index', compact(
            'peminjaman',
            'user',
            'barang'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangs = Barang::all();
        $users = Auth::user()->id;
        return view('dashboard.peminjaman.create', compact(
            'barangs',
            'users'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cekstok = Barang::where('id',$request->barang_id)->value('jumlah');
        if($request->jumlah > $cekstok){
            return back()->with('error','Jumlah yang dipinjam melebihi stok !!!');
        }
        Peminjaman::create([
            'barang_id' => $request->barang_id,
            'user_id' => auth()->user()->id,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'nama_peminjam' => $request->nama_peminjam,
            'tujuan' => $request->tujuan,
            'jumlah' => $request->jumlah,
            'status' => 1,
        ]);

        $barang = Barang::find($request->barang_id);

        if($barang->jumlah < $request->jumlah){
            return back()->with('');
        } else {
            $barang->jumlah -= $request->jumlah;
            $barang->save();
        }
        return redirect('/dashboard/peminjaman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $barangs = Barang::all();
        $peminjaman = Peminjaman::find($id);
        return view('dashboard.peminjaman.show', compact('peminjaman',  'barangs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $barangs = Barang::all();
        $peminjaman = Peminjaman::find($id);
        return view('dashboard.peminjaman.edit', compact('peminjaman', 'barangs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id){
        $rules = [
            'barang_id' => 'required',
            'tanggal_pinjam' => 'required',
            'nama_peminjam' => 'required',
            'tujuan' => 'required',
            'jumlah' => 'required',
        ];

        // baru
        // $peminjaman_data = Peminjaman::where('id',$id)->first();
        // if($peminjaman_data->status == 1){
           
        //     $barang = Barang::find($peminjaman_data->barang_id);
        //     $barang->jumlah += $request->jumlah;
        //     $barang->save();
        // }
        //

        $peminjaman = Peminjaman::findOrFail($id);
        $validatedData = $request->validate($rules);

        Peminjaman::where('id', $peminjaman->id)
            ->update($validatedData);
            
        return redirect('/dashboard/peminjaman');
    }

    public function konfirmasi(Request $request, $id){
        $peminjaman_data = Peminjaman::where('id',$id)->first();
        if($peminjaman_data->status == 1){
           
            $barang = Barang::find($peminjaman_data->barang_id);
            $barang->jumlah += $request->jumlah;
            $barang->save();
        }

        $this->validate($request,[
            'tanggal_kembali' => 'required',
            'nama_kembali' => 'required',
            'jumlah' => 'required',
        ]);

        $request['status'] = 2;
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update($request->all());

        return redirect('/dashboard/peminjaman');

        // $barang = Barang::findOrFail($id);
        // $barang->jumlah += $request->jumlah;
        // $barang->update();

        
        // $peminjaman = Peminjaman::where('id', $id)->first();

        // $peminjaman->tanggal_kembali = $request->tanggal_kembali;
        // $peminjaman->nama_kembali = $request->nama_kembali;
        // $peminjaman->status = 2;

        // $barang = Barang::find($id);

        // if($barang->jumlah)
        // // if(!empty($peminjaman->jumlah)){
        // //     $peminjaman->jumlah += $peminjaman->barang->jumlah;
        // // }

        // $peminjaman->update();
        // return redirect('/dashboard/peminjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjaman = Peminjaman::find($id);
        Peminjaman::destroy($peminjaman->id);
        return redirect('/dashboard/peminjaman');
    }
}
