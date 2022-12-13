<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function berita_kategori($kategori_id){
        $kategori = Kategori::where('slug', $kategori_id)->first();
        
        if($kategori){
            $berita = Berita::where('kategori_id', $kategori->id)->get();
            return view('berita');
        }        

        
    }
}
