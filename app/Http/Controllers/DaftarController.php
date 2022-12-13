<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarUkm;
use Illuminate\Support\Facades\Storage;

class DaftarController extends Controller
{
    public function guest(){
        return view('pendaftaran');
    }

    public function index(){
        $daftar = DaftarUkm::latest()->get();
        return view('dashboard.pendaftaran.index', compact(
            'daftar',
        ));
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nama' => 'required |max :100',
            'nim' => 'required |max :100',
            'jurusan' => 'required |max :100',
            'prodi' => 'required |max :100',
            'jk' => 'required',
            'nohp' => 'required|max :100',
            'bidik_ms' => 'required|max :100',
            'gambar' => 'image|file|mimes:jpg,jpeg,png,bmp|max:1024',
        ]);

        if($request->file('image')){
            $validatedData['gambar'] = $request->file('image')->store('images');
        }

        //  dd($validatedData);
        DaftarUkm::create($validatedData);
        return redirect('/pesan');
    }

    public function destroy(DaftarUkm $daftar, $id){
        $daftar = DaftarUkm::find($id);
        if($daftar->gambar){
            Storage::delete($daftar->gambar);
        }
        DaftarUkm::destroy($daftar->id);
        return redirect('/dashboard/pendaftaran')->with('status', 'Data anggota baru berhasil dihapus !');
    }
}
