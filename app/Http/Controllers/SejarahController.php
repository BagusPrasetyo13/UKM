<?php

namespace App\Http\Controllers;

use App\Models\Sejarah;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guest(){
        $sejarah = Sejarah::all();
        return view('sejarah', compact('sejarah'));
    }
    public function index()
    {
        $sejarah = Sejarah::all();
        return view('dashboard.sejarah.index', compact('sejarah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.sejarah.create');
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
            'konten' => 'required'
        ]);

        Sejarah::create($validatedData);
        return redirect('/dashboard/sejarah')->with('status', 'Data sejarah berhasil ditambah !');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function show(Sejarah $sejarah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function edit(Sejarah $sejarah)
    {
        // $sejarah = Sejarah::find($id);
        return view('dashboard.sejarah.edit',[
            "title" => "Sejarah",
            "sejarah" => $sejarah
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sejarah $sejarah)
    {
        $rules = [
            'konten' => 'required',
        ];

        // $sejarah = Sejarah::find($id);
        $validatedData = $request->validate($rules);

        Sejarah::where('id', $sejarah->id)
        ->update($validatedData);
        return redirect('/dashboard/sejarah')->with('status', 'Data sejarah berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sejarah $sejarah)
    {
        
        Sejarah::destroy($sejarah->id);
        return redirect('/dashboard/sejarah')->with('status', 'Data sejarah berhasil dihapus!');;
    }
}
