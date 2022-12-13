<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $user = User::all();
        $countbarang = DB::table('barangs')->count();
        $countpinjam = DB::table('peminjamen')->count();
        $countalumni = DB::table('alumnis')->count();
        $countpengurus = DB::table('penguruses')->count();
        $countberita = DB::table('beritas')->count();
        $countstruktur = DB::table('strukturs')->count();
        $countpendaftar = DB::table('daftar_ukms')->count();
        $countuser = DB::table('users')->count();
        return view('dashboard.index', compact(
            'countpendaftar',
            'countstruktur',
            'countuser',
            'user',
            'countalumni',
            'countpengurus',
            'countberita',
            'countbarang',
            'countpinjam',
        ));
    }
}
