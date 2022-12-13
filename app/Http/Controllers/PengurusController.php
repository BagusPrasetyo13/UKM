<?php

namespace App\Http\Controllers;
use App\Models\Pengurus;
use App\Models\Divisi;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function guest(){

        $pengurus = Pengurus::latest();

        if(request('search')) {
            $pengurus->where('nama', 'like', '%' . request('search') . '%')
                ->orWhere('jurusan', 'like', '%' . request('search') . '%');
            
        }
        
        return view('pengurus', [
            'pengurus' => $pengurus->get(),
        ]);

        // $pengurus = Pengurus::latest();

        // if(request('search')){
        //     $pengurus->where('nama', 'like', '%' . request('search') . '%');
        // }

        // if($request){
        //      $penguruses = Pengurus::where('nama', 'like', '%'.$request->search.'%');
        // } else{
        //      $penguruses = Pengurus::all();
        // }

        // dd(request('search'));
        // $penguruses = Pengurus::all();
        // return view('pengurus', compact('penguruses'));
    }

    public function index()
    {
        $penguruses = Pengurus::all();
        return view('dashboard.pengurus.index', compact(
            'penguruses',
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatans = Jabatan::all();
        $divisis = Divisi::all();
        return view('dashboard.pengurus.create', compact(
            'jabatans',
            'divisis',
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
        $validatedData = $request->validate([
            'nama' => 'required | max:50',
            'jabatan_id' => 'required',
            'divisi_id' => 'required',
            'angkatan' => 'required | max:50',
            'jurusan' => 'required | max:50',
            'prodi' => 'required | max:50',
            'image' => 'required|image|file|max:1024',
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('images');
        }

        Pengurus::create($validatedData);
        return redirect('/dashboard/pengurus')->with('status', 'Data anggota pengurus berhasil ditambah !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengurus $pengurus, $id)
    {
        $jabatans = Jabatan::all();
        $divisis = Divisi::all();
        $pengurus = Pengurus::find($id);
        return view('dashboard.pengurus.edit', compact(
            'pengurus',
            'jabatans',
            'divisis',
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'nama' => 'required | max:50',
            'jabatan_id' => 'required',
            'divisi_id' => 'required',
            'angkatan' => 'required | max:50',
            'jurusan' => 'required | max:50',
            'prodi' => 'required | max:50',
            'image' => 'image|file', 
        ];

        $pengurus = Pengurus::findOrFail($id);

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('images');
        }

        Pengurus::where('id', $pengurus->id)
            ->update($validatedData);
        return redirect('/dashboard/pengurus')->with('status', 'Data anggota berhasil diedit !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengurus $pengurus, $id)
    {
        $pengurus = Pengurus::find($id);
        if($pengurus->image){
            Storage::delete($pengurus->image);
        }
        Pengurus::destroy($pengurus->id);
        return redirect('/dashboard/pengurus')->with('status', 'Data anggota pengurus berhasil dihapus !');;
    }
}
