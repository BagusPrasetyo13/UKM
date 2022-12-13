@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Data Barang</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="col-lg-8 ml-2">
                <form action="/dashboard/barang/{{ $barang->id }}" method="POST">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang </label>
                        <input type="text" class="form-control @error('nama_barang') is-invalid @enderror"
                            id="nama_barang" name="nama_barang" value="{{ old('nama_barang', $barang->nama_barang) }}"  autofocus>
                        @error('nama_barang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang </label>
                        <input type="text" class="form-control @error('kode_barang') is-invalid @enderror"
                            id="kode_barang" name="kode_barang" value="{{ old('kode_barang', $barang->kode_barang) }}" >
                        @error('kode_barang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label for="jumlah" class="form-label">Jumlah </label>
                        <input type="number" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah"
                            name="jumlah" value="{{ old('jumlah', $barang->jumlah) }}">
                        @error('jumlah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <a href="/dashboard/barang" class="btn btn-primary">Kembali</a>
                        <input class="btn btn-success" type="submit" value="Simpan">
                    </div>
                </form>
            </div>
        </section>

    </div>
@endsection