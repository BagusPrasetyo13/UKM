@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Anggota Pengurus</h1>
                    </div><!-- /.col -->
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
                        <h3 class="card-title">Data pengurus yang tersimpan</h3>
                        <a href="/dashboard/pengurus/create" class="btn btn-primary ml-auto" style="margin-right: 1rem">Tambah
                            Data</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama </th>
                                <th>Jabatan</th>
                                <th>Divisi</th>
                                <th>Angkatan</th>
                                <th>Jurusan</th>
                                <th>Prodi</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penguruses as $pengurus)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pengurus->nama }}</td>
                                    <td>{{ $pengurus->jabatan->nama }}</td>
                                    <td>{{ $pengurus->divisi->nama }}</td>
                                    <td>{{ $pengurus->angkatan }}</td>
                                    <td>{{ $pengurus->jurusan }}</td>
                                    <td>{{ $pengurus->prodi }}</td>
                                    <td>
                                        <a href="{{ asset('storage/' . $pengurus->image) }}" class="galeri-lightbox">
                                        <img src="{{ asset('storage/' . $pengurus->image) }}" style="width:50%" alt=""></a>
                                    </td>
                                    <td>
                                        <form action="/dashboard/pengurus/{{ $pengurus->id }}/edit" class="d-inline">
                                            <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                        </form>
                                        <form action="/dashboard/pengurus/{{ $pengurus->id }}" method="POST"
                                            class="d-inline" onclick="return confirm('Yakin menghapus data?')">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
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
