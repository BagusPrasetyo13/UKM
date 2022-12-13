@extends('layouts.main')

@section('content')
    <section class="visimisi">
        <div class="hero">
            <img src="image/hero6.png" alt="">
            <div class="page-title">
                <h1>Visi dan Misi</h1>
            </div>
        </div>
        <div class="container">
            <div class="row text-center py-5">
                <h3>Visi dan Misi UKM Panahan <br>
                    Politeknik Negeri Pontianak</h3>
                <p>Berikut visi dan misi UKM Panahan POLNEP</p>
            </div>
            <div class="blog">
                @foreach ($visimisi as $visimisi)
                    <h3 class="visi">Visi</h3>
                    <br>
                    <p>{!! $visimisi->visi !!}</p>

                    <h3 class="misi">Misi</h3>
                    <br>
                    <p>{!! $visimisi->misi !!}</p>
                @endforeach
            </div>
        </div>
    </section>
@endsection
