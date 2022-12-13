<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Divisi;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function guest(){
        $alumnis = Alumni::all();
        return view('alumni', compact('alumnis'));
    }
    public function index()
    {
        $alumnis = Alumni::latest()->get();
        return view('dashboard.alumni.index', compact(
            'alumnis'
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
        return view('dashboard.alumni.create', compact(
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
        ]);
        Alumni::create($validatedData);
        return redirect('/dashboard/alumni');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show(Alumni $alumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function edit(Alumni $alumni, $id)
    {
        $jabatans = Jabatan::all();
        $divisis = Divisi::all();
        $alumni = Alumni::find($id);
        return view('dashboard.alumni.edit', compact(
            'alumni',
            'jabatans',
            'divisis'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumni $alumni, $id)
    {
        $rules = [
            'nama' => 'required | max:50',
            'jabatan_id' => 'required',
            'divisi_id' => 'required',
            'angkatan' => 'required | max:50',
            'jurusan' => 'required | max:50',
        ];

        $alumni = Alumni::find($id);

        $validatedData = $request->validate($rules);

        Alumni::where('id', $alumni->id)
            ->update($validatedData);
        return redirect('/dashboard/alumni');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumni $alumni, $id)
    {
        $alumni = Alumni::find($id);
        Alumni::destroy($alumni->id);
        return redirect('/dashboard/alumni');
    }
}
