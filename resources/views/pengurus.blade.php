@extends('layouts.main')

@section('content')
    <section id="pengurus">
        <div class="hero">
            <img src="image/hero3.png" alt="">
            <div class="page-title">
                <h1>Pengurus</h1>
            </div>
        </div>

        @if ($pengurus->count())
            <div class="container">
                <div class="row text-center py-5">
                    <div class="col">
                        <h3>Pengurus UKM Panahan <br>
                            Politeknik Negeri Pontianak</h3>
                        <p>Di bawah ini merupakan pengurus UKM Panahan</p>

                        

                        {{-- <div class="widget-area mb-5">
                        <div class="search-widget">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
                                <button class="btn" type="submit">Search</button>
                            </form>
                        </div>
                    </div> --}}
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                            <form action="/pengurus">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" placeholder="Search..." name="search"
                                        value="{{ request('search') }}">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                </div>

                <div class="row mt-5">
                    @foreach ($pengurus as $pengurus)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-5">
                            <div class="card shadow-sm">
                                <div class="imgprofile">
                                    <img src="{{ asset('storage/' . $pengurus->image) }}" alt="">
                                </div>
                                <div class="content text-center px-2">
                                    <h3>{{ $pengurus->nama }}</h3>
                                    <h4>{{ $pengurus->jabatan->nama }}</h4>
                                    <h5>{{ $pengurus->divisi->nama }}</h5>
                                    <p>{{ $pengurus->jurusan }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <p class="text-center fs-4">Tidak ditemukan.</p>
        @endif
    </section>



@endsection
