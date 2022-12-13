    @extends('layouts.main')

    @section('content')
    <section id="struktur">
        <div class="hero">
            <img src="image/hero6.png" alt="">
            <div class="page-title">
                <h1>Struktur Organisasi</h1>
            </div>
        </div>
        <div class="container">
            <div class="strukorganisasi">
                <div class="col">
                    <div class="row text-center py-5">
                        <h3>Struktur Organisasi UKM Panahan <br>
                            Politeknik Negeri Pontianak</h3>
                        <p>Di bawah ini merupakan struktur UKM Panahan</p>
                    </div>
                    <div class="row">
                        @foreach ($struktur as $struktur)
                            <div class="struktur">
                                <img src="{{ asset('storage/' . $struktur->gambar) }}" alt="struktur" style="max-width: 100%;">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection