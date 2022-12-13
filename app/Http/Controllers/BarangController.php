<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Unique;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('dashboard.barang.index',  compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required|max:50',
            'kode_barang' => 'required|unique:barangs|max:5',
            'jumlah' => 'required',
        ]);
       Barang::create($validatedData);
       return redirect('/dashboard/barang')->with('status', 'Data barang berhasil ditambah!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = DB::table('barangs')->where('id', $id)->first();
        return view('dashboard.barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $rules = [
            'nama_barang' => 'required|max:50',
            'jumlah' => 'required',
        ];

        if($request->kode_barang != $barang->kode_barang){
            $request['kode_barang'] = 'required|unique:barang, kode_barang,|max:5'.$barang->id;
        }

        $validatedData = $request->validate($rules);
        Barang::where('id', $barang->id)
         ->update($validatedData);
        return redirect('/dashboard/barang')->with('status', 'Data Barang Berhasil diUbah!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);
        Barang::destroy($barang->id);
        return redirect('/dashboard/barang')->with('status', 'Data Barang Berhasil diHapus!!!');
    }
}
