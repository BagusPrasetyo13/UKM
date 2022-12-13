@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Data Peminjaman</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="col-lg-8 ml-2">
                <form method="POST" action="/dashboard/peminjaman/{{ $peminjaman->id }}">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="barang_id">Nama Barang</label>
                        <select class="form-control" id="barang_id" name="barang_id">
                           @foreach ($barangs as $barang)
                               @if(old('barang_id', $peminjaman->barang_id) == $barang->id)
                                    <option value="{{ $barang->id }}" selected>{{ $barang->nama_barang }}</option>
                               @else
                                    <option value="{{ $barang->id }}">{{ $barang->nama_barang }}</option>
                                @endif
                           @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_peminjam">Nama Peminjam</label>
                        <input type="text" class="form-control @error('nama_peminjam') is-invalid @enderror"
                         id="nama_peminjam" name="nama_peminjam" value="{{ old('nama_peminjam', $peminjaman->nama_peminjam) }}">
                         @error('nama_peminjam')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal_pinjam" class="form-label">Tanggal Peminjaman</label>
                        <input type="date" class="form-control @error('tanggal_pinjam') is-invalid @enderror"
                         id="tanggal_pinjam" name="tanggal_pinjam" value="{{ old('tanggal_pinjam', $peminjaman->tanggal_pinjam) }}">
                         @error('tanggal_pinjam')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="tujuan">Tujuan</label>
                        <input type="text" class="form-control @error('tujuan') is-invalid @enderror"
                         id="tujuan" name="tujuan" value="{{ old('tujuan', $peminjaman->tujuan) }}">
                         @error('tujuan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                         @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah"
                            value="{{ old('jumlah', $peminjaman->jumlah) }}">
                        @error('jumlah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Update Data</button>
                    <a href="/dashboard/peminjaman" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </section>
    </div>
@endsection
