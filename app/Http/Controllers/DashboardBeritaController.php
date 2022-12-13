<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $beritas = Berita::all();
        return view('dashboard.berita.index', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('dashboard.berita.create', compact('kategoris'));
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
            'title' => 'required|max:255',
            'kategori_id' => 'required',
            'description' => 'required',
            'gambar' => 'image|file',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        if($request->file('image')){
            $validatedData['gambar'] = $request->file('image')->store('images');
        }
        
        Berita::create($validatedData);
        return redirect('/dashboard/berita')->with('status', 'Data berita berhasil ditambah !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita, $id)
    {
        $kategoris = Kategori::all();
        $berita = Berita::find($id);
        return view('dashboard.berita.edit', compact(
            'kategoris',
            'berita',
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
            'title' => 'required|max:255',
            'kategori_id' => 'required',
            'description' => 'required',
            'gambar' => 'image|file',
        ];

        $berita = Berita::findOrFail($id);

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('image')->store('images');
        }

        Berita::where('id', $berita->id)
            ->update($validatedData);
        return redirect('/dashboard/berita')->with('status', 'Data berita berhasil diedit !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita, $id)
    {
        $berita = Berita::find($id);
        if($berita->gambar){
            Storage::delete($berita->gambar);
        }
        Berita::destroy($berita->id);
        return redirect('/dashboard/berita')->with('status', 'Data berita berhasil dihapus !');
    }
}
