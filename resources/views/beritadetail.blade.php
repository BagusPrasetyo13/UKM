@extends('layouts.main')

@section('content')
    <section class="agenda">
        <div class="container g-0">
            <div class="content-agenda">
                <div class="judul py-4 px-4">
                    <h4>{{ $berita->title }}</h4>
                        <span class="date mr-2">
                           Tanggal : {{ $berita->created_at }}
                        </span>
                        <span class="category" style="float: right;">
                            Kategori : {{ $berita->kategori->nama }}
                        </span>
                </div>
            
                <div class="hero px-4">
                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="agenda-detail">
                </div>
                <div class="blog-agenda py-5 px-4">
                    {!! $berita->description !!}
                </div>
            </div>
        </div>
    </section>
@endsection
