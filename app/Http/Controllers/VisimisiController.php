<?php

namespace App\Http\Controllers;

use App\Models\Visimisi;
use Illuminate\Http\Request;

class VisimisiController extends Controller
{
    public function guest(){
        $visimisi = Visimisi::all();
        return view('visimisi', compact('visimisi'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visimisi = Visimisi::all();
        return view('dashboard.visimisi.index', compact('visimisi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.visimisi.create');
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
            'visi' => 'required',
            'misi' => 'required',
        ]);

        Visimisi::create($validatedData);
        return redirect('/dashboard/visimisi')->with('status', 'Data visi dan misi berhasil ditambah !');
    }   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visimisi  $visimisi
     * @return \Illuminate\Http\Response
     */
    public function show(Visimisi $visimisi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visimisi  $visimisi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $visimisi = Visimisi::find($id);
        return view('dashboard.visimisi.edit', compact('visimisi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visimisi  $visimisi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visimisi $visimisi)
    {
        $rules = [
            'periode' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ];

        $validatedData = $request->validate($rules);

        Visimisi::where('id', $visimisi->id)
            ->update($validatedData);
        return redirect('/dashboard/visimisi')->with('status', 'Data visi dan misi berhasil di edit !');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visimisi  $visimisi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visimisi $visimisi)
    {
        Visimisi::destroy($visimisi->id);
        return redirect('/dashboard/visimisi')->with('status', 'Data visi dan misi berhasil dihapus !');;
    }
}
