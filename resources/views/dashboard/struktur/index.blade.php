@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Struktur Organisasi</h1>
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
            <div class="card ml-3 mr-2">
                <div class="card-header">
                    <div class="row">
                        <h3 class="card-title">Data struktur organisasi yang tersimpan</h3>
                        <a href="/dashboard/struktur/create" class="btn btn-primary ml-auto"
                            style="margin-right: 1rem">Tambah Data</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Periode</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($struktur as $struktur)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $struktur->periode }}</td>
                                <td><img src="{{ asset('storage/' . $struktur->gambar ) }}" alt="" style="width: 100%"></td>
                                <td>
                                    <form action="/dashboard/struktur/{{ $struktur->id }}/edit" class="d-inline">
                                        <button class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                                    </form>
                                    <form method="POST" action="/dashboard/struktur/{{ $struktur->id }}" class="d-inline">
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
