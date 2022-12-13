@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Detail Data Peminjaman</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="col-lg-8 ml-2">
                <form method="POST" action="/dashboard/peminjaman/{{ $peminjaman->id }}/konfirmasi">
                    @csrf
                    <div class="container">

                        <div class="mb-3 row">
                            <label for="kode_barang" class="col-sm-4 col-form-label">Kode Barang</label>
                            <div class="col-sm-6">
                                <input type="text" readonly class="form-control-plaintext" id="kode_barang"
                                    value="{{ $peminjaman->barang->kode_barang }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama_barang" class="col-sm-4 col-form-label">Nama Peminjam</label>
                            <div class="col-sm-6">
                                <input type="text" readonly class="form-control-plaintext" id="nama_barang"
                                    value="{{ $peminjaman->barang->nama_barang }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="user_id" class="col-sm-4 col-form-label">Pemberi Pinjaman</label>
                            <div class="col-sm-6">
                                <input type="text" readonly class="form-control-plaintext" id="user_id"
                                    value="{{ $peminjaman->user->nama }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama_peminjam" class="col-sm-4 col-form-label">Nama Peminjam</label>
                            <div class="col-sm-6">
                                <input type="text" readonly class="form-control-plaintext" id="nama_peminjam"
                                    value="{{ $peminjaman->nama_peminjam }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tanggal_pinjam" class="col-sm-4 col-form-label">Tanggal Pinjam</label>
                            <div class="col-sm-6">
                                <input type="text" readonly class="form-control-plaintext" id="tanggal_pinjam"
                                    value="{{ $peminjaman->tanggal_pinjam }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jumlah" class="col-sm-4 col-form-label">Jumlah</label>
                            <div class="col-sm-6">
                                <input type="text" readonly class="form-control-plaintext" name="jumlah" id="jumlah"
                                    value="{{ $peminjaman->jumlah }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="tanggal_kembali" class="col-sm-4 col-form-label">Tanggal Kembali</label>
                            <div class="col-sm-6">
                                @if ($peminjaman->status == 1)
                                    <input type="date" class="form-control" name="tanggal_kembali" id="tanggal_kembali"
                                        value="{{ $peminjaman->tanggal_kembali }}">
                                @else
                                    <input type="date" disabled class="form-control" name="tanggal_kembali"
                                        id="tanggal_kembali" value="{{ $peminjaman->tanggal_kembali }}">
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama_kembali" class="col-sm-4 col-form-label">Nama Pengembali</label>
                            <div class="col-sm-6">
                                @if ($peminjaman->status == 1)
                                <input type="text" class="form-control" name="nama_kembali" id="nama_kembali"
                                    value="{{ $peminjaman->nama_kembali }}">
                                @else
                                 <input type="text" disabled class="form-control" name="nama_kembali" id="nama_kembali"
                                    value="{{ $peminjaman->nama_kembali }}">
                                @endif
                            </div>
                        </div>
                    </div>
                    @if ($peminjaman->status == 1)
                        <button type="submit" class="btn btn-success">Simpan</button>
                    @endif
                    <a href="/dashboard/peminjaman" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </section>
    </div>
@endsection
