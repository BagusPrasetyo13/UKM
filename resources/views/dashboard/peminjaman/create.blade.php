@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Data Peminjaman</h1>
                    </div><!-- /.col -->
                </div>

                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session()->get('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="col-lg-8 ml-2">
                <form action="/dashboard/peminjaman" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="barang_id">Nama Barang</label>
                        <select class="form-control" id="barang_id" name="barang_id">
                            @foreach ($barangs as $barang)
                                @if (old('barang_id') == $barang->id)
                                    <option value="{{ $barang->id }}" selected>{{ $barang->nama_barang }}</option>
                                @else
                                    <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <label for="nama_peminjam">Nama Peminjam </label>
                        <input class="form-control" type="text" id="nama_peminjam" name="nama_peminjam">
                    </div>
                    <div class="form-group mt-4">
                        <label for="tanggal_pinjam">Tanggal Peminjaman </label> <br>
                        <input type="date" id="tanggal_pinjam" name="tanggal_pinjam">
                    </div>
                    <div class="form-group mt-4">
                        <label for="tujuan" class="form-label">Tujuan</label>
                        <textarea class="form-control" name="tujuan" id="tujuan"></textarea>
                    </div>
                    <div class="form-group mt-4">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah">
                    </div>
                    <div class="mt-4">
                        <input class="btn btn-primary" type="submit" value="Simpan">
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
