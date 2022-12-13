@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Daftar Barang</h1>
                    </div>
                </div>
                <div class="col-sm-4 ml-auto">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="card ml-3">
                <div class="card-header">
                    <div class="row">
                        <h3 class="card-title">Data daftar barang yang tersimpan</h3>
                        <a href="/dashboard/barang/create" class="btn btn-primary ml-auto" style="margin-right: 1rem">Tambah
                            Data</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Kode Barang</th>
                                <th>Jumlah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barangs as $barang)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $barang->nama_barang }}</td>
                                    <td>{{ $barang->kode_barang }}</td>
                                    <td>{{ $barang->jumlah }}</td>
                                    <td>
                                        <form action="/dashboard/barang/{{ $barang->id }}/edit" class="d-inline">
                                            <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                        </form>
                                        <form action="/dashboard/barang/{{ $barang->id }}" method="POST"
                                            class="d-inline" onsubmit="return confirm('Yakin hapus data ?')">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
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
