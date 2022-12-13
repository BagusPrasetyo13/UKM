@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Berita</h1>
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
                        <h3 class="card-title">Daftar berita yang tersimpan</h3>
                        <a href="/dashboard/berita/create" class="btn btn-primary ml-auto" style="margin-right: 1rem">Tambah Data</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($beritas as $berita)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset('storage/' . $berita->gambar) }}" class="col-sm-6" ></td>
                                <td>{{ $berita->title }}</td>
                                <td>{{ $berita->kategori->nama }}</td>
                                <td>
                                    <form action="/dashboard/berita/{{ $berita->id }}/edit" class="d-inline">
                                        <button class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                                    </form>
                                    <form action="/dashboard/berita/{{ $berita->id }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                         <button class="btn btn-sm btn-danger border-0"
                                            onclick="return confirm('Yakin menghapus data?')"><i
                                                class="fas fa-trash"></i></button>
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
