@extends('layouts.main')

@section('content')
    <section class="info-daftar">
        <div class="hero">
            <img src="image/hero4.png" alt="">
            <div class="page-title">
                <h1>Info Pendaftaran</h1>
            </div>
        </div>
        <div class="container">
            {{-- <div class="row text-center py-5">
                <h2>Informasi Pendaftaran Anggota <br>
                    UKM Panahan Politeknik Negeri Pontianak</h2>
                <p>Berikut informasi yang diberikan sebelum mendaftar sebagai anggota</p>
            </div> --}}
            <div class="info mt-5">
                <div class="row mx-2 text-center">
                    <h3>Anda telah berhasil melakukan pendaftaran ! </h3>
                    <h6> Pantau terus akun instagram kami untuk mendapatkan informasi lebih lanjut</h6>
                    <div class="image justify-content-center mt-3">
                        <img src="image/instagram.png" style="width:50%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
