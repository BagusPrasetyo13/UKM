<?php

use App\Http\Controllers\AlumniController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardBeritaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('beranda', [
        "active" => 'beranda'
    ]);
    
});
Route::get('/beranda', function () {
    return view('beranda', [
        'active' => 'beranda'
    ]);
    
});

Route::get('/struktur', function () {
    return view('struktur');
});


Route::get('/info-daftar', function () {
    return view('info-daftar');
});

Route::get('/pesan', function () {
    return view('pesan');
});

Route::get('/pendaftaran', [DaftarController::class, 'guest']);
Route::post('/pendaftaran', [DaftarController::class, 'store']);

// dashboard

Route::resource('/dashboard/berita', DashboardBeritaController::class)->middleware('auth');

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{id}', [BeritaController::class, 'show']);


Route::resource('/dashboard/pendaftaran', DaftarController::class)->middleware('auth');

Route::post('/dashboard/manajemen-user/create', [UserController::class, 'store'])->middleware('auth');
Route::resource('/dashboard/manajemen-user', UserController::class)->middleware('auth');

Route::resource('/dashboard/barang', BarangController::class);

Route::resource('/dashboard/alumni', AlumniController::class);
Route::get('/alumni', [AlumniController::class, 'guest']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('/dashboard/struktur', StrukturController::class)->middleware('auth');
Route::get('/struktur', [StrukturController::class, 'guest']);

Route::resource('/dashboard/peminjaman', PeminjamanController::class)->middleware('auth');
Route::post('/dashboard/peminjaman/{Id}/konfirmasi', [PeminjamanController::class, 'konfirmasi'])->middleware('auth');

Route::post('/dashboard/pengurus/create', [PengurusController::class, 'store'])->middleware('auth');
Route::resource('/dashboard/pengurus', PengurusController::class)->middleware('auth');
Route::get('/pengurus', [PengurusController::class, 'guest']);


Route::resource('/dashboard/sejarah', SejarahController::class)->middleware('auth');
Route::get('sejarah', [SejarahController::class, 'guest']);

Route::resource('/dashboard/visimisi', VisimisiController::class)->middleware('auth');
Route::get('/visimisi', [VisimisiController::class, 'guest']);

Route::get('/dashboard/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::post('/dashboard/profile', [ProfileController::class, 'update'])->middleware('auth');

Route::resource('/dashboard/beranda', BerandaController::class)->middleware('auth');