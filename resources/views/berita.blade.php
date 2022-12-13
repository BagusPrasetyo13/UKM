@extends('layouts.main')

@section('content')
    <section class="agenda">
        <div class="hero">
            <img src="image/hero3.png" alt="">
            <div class="page-title">
                <h1>Berita</h1>
            </div>
        </div>
        @if ($berita->count())
        <div class="container">
            <div class="row text-center py-5">
                <h2>Berita UKM Panahan <br>
                    Politeknik Negeri Pontianak</h2>
                <p>Di bawah ini merupakan berita UKM Panahan</p>
                <div class="col-md-4 col-5">
                    <div class="input-group mb-3">
                        {{-- <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
                        <select class="form-select" id="inputGroupSelect01">
                                @foreach ($kategori as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                @endforeach
                            </select> --}}
                            
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                        <form action="/berita">
                            <div class="input-group mb-3">
                                <input class="form-control" type="text" placeholder="Search..." name="search"
                                    value="{{ request('search') }}">
                                <button class="btn btn-primary" type="submit">Search</button>
                            </div>
                        </form>
                    </div>
            </div>
            <div class="content-agenda">
                <div class="row">
                    @foreach ($berita as $berita)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="card-berita shadow-sm">
                            <img src="{{ asset('storage/' . $berita->gambar) }}" class="card-img-top p-2" alt="">
                            <div class="card-body">
                                <h6 class="card-title">{{ $berita->title }}</h6>
                                <p class="category" style="font-size:14px; color: rgb(100, 100, 100);">{{ $berita->kategori->nama }}</p>
                                <div class="button-detail">
                                    <a class="btn btn-primary" href="/berita/{{ $berita->id }}" role="button">Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @else
            <p class="text-center fs-4">Tidak ditemukan.</p>
        @endif  
    </section>
@endsection
