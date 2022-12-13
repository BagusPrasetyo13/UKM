<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{

    public function index(){

        $berita = Berita::latest();
        
        if(request('search')){
            $berita->where('title', 'like', '%' . request('search'). '%')
                ->orWhere('description', 'like', '%' . request('search') . '%');
        }
        return view('berita', [
            "berita" => $berita->get(),
            "active" => 'berita',
        ]);

    }

    public function show($id){
        $berita = Berita::where('id', $id)->first();
        return view('beritadetail', compact('berita'));
    }
}
