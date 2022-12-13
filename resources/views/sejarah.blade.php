@extends('layouts.main')

@section('content')
<section id="sejarah">
    <div class="hero">
        <img src="image/hero6.png" alt="">
        <div class="page-title">
            <h1>Sejarah</h1>
        </div>
    </div>
    <div class="container">
        <div class="sejarah-ukm">
            <div class="row">
                <div class="col text-center py-5">
                    <h3>Sejarah UKM Panahan <br>
                        Politeknik Negeri Pontianak</h3>
                    <p>Berikut penjelasan mengenai sejarah UKM Panahan POLNEP</p>
                </div>
            </div>
        </div>

        <div class="blog-sejarah">
            <div class="row">
                @foreach ($sejarah as $sejarah)
                    <p>{!! $sejarah->konten !!}</p>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection