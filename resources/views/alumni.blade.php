@extends('layouts.main')

@section('content')
    <section id="alumni">
        <div class="hero">
            <img src="image/hero3.png" alt="">
            <div class="page-title">
                <h1>Alumni</h1>
            </div>
        </div>
        <div class="container">
            <div class="row text-center py-5">
                <h3>Alumni UKM Panahan <br>
                    Politeknik Negeri Pontianak</h3>
                <p>Berikut di bawah ini merupakan daftar alumni UKM Panahan</p>
            </div>
    </section>

    <section class="tabel">
        <div class="container">
            <div class="row">
                <table id="example" class="table table-striped bg-white pt-2" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Angkatan</th>
                            <th>Jabatan</th>
                            <th>Divisi</th>
                            <th>Jurusan/Prodi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alumnis as $alumni)
                        <tr>
                            <td>{{ $alumni->nama }}</td>
                            <td>{{ $alumni->angkatan }}</td>
                            <td>{{ $alumni->jabatan->nama }}</td>
                            <td>{{ $alumni->divisi->nama }}</td>
                            <td>{{ $alumni->jurusan }}</td>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
