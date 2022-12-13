@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Peminjaman</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="card ml-3">
                <div class="card-header">
                    <div class="row">
                        <h3 class="card-title">Data peminjaman barang yang tersimpan</h3>
                        <a href="/dashboard/peminjaman/create" class="btn btn-primary ml-auto"
                            style="margin-right: 1rem">Tambah
                            Data</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Pemberi Pinjaman</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Nama Peminjam</th>
                                <th>Status</th>
                                <th>Jumlah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peminjaman as $peminjaman)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $peminjaman->barang->kode_barang }}</td>
                                    <td>{{ $peminjaman->barang->nama_barang }}</td>
                                    <td>{{ $peminjaman->user->nama }}</td>
                                    <td>{{ $peminjaman->tanggal_pinjam }}</td>
                                    <td>{{ $peminjaman->nama_peminjam }}</td>
                                    <td>
                                        @if ($peminjaman->status == 1)
                                            Dipinjam
                                        @else
                                            Dikembalikan
                                        @endif
                                    </td>
                                    <td>{{ $peminjaman->jumlah }}</td>
                                    <td>
                                     
                                            <form action="/dashboard/peminjaman/{{ $peminjaman->id }}" class="d-inline">
                                                <button class="btn btn-sm btn-warning"><i class="fas fa-exchange-alt"></i></button>
                                            </form>

                                        {{-- @if ($peminjaman->status == 1)
                                        <form action="/dashboard/peminjaman/{{ $peminjaman->id }}/edit" class="d-inline">
                                            <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                        </form>
                                        @endif --}}

                                        @if ($peminjaman->status == 2)
                                        <form method="POST" action="/dashboard/peminjaman/{{ $peminjaman->id }}"
                                            class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Yakin Menghapus Data?')"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </section>
    </div>
@endsection
