<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Struktur;
use Illuminate\Http\Request;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guest(){
        $struktur = Struktur::all();
        return view('struktur', compact('struktur'));
    }

    public function index()
    {
        $struktur = Struktur::all();
        return view('dashboard.struktur.index', compact('struktur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.struktur.create');
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
            'periode' => 'required',
            'gambar' => 'image|file',
        ]);
        if($request->file('image')){
            $validatedData['gambar'] = $request->file('image')->store('images');
        }

        Struktur::create($validatedData);
        return redirect('/dashboard/struktur')->with('status', 'Data struktur organisasi berhasil ditambah !');;
        //dd($validatedData);
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
    public function edit($id)
    {
        $struktur = Struktur::find($id);
        return view('dashboard.struktur.edit', compact('struktur'));
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
            'periode' => 'required',
            'gambar' => 'image|file',
        ];

        $struktur = Struktur::find($id);

        $validatedData = $request->validate($rules);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['gambar'] = $request->file('image')->store('images');
        }

        Struktur::where('id', $struktur->id)
            ->update($validatedData);
        return redirect('/dashboard/struktur')->with('status', 'Data struktur organisasi berhasil diedit !');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Struktur $struktur)
    {
        Struktur:: destroy($struktur->id);
        return redirect('/dashboard/struktur')->with('status', 'Data struktur organisasi berhasil dihapus !');;
    }
}
