@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Visi dan Misi</h1>
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

        <section class="content">

            <div class="card ml-3">
                <div class="card-header">
                    <div class="row">
                        <h3 class="card-title">Data visi dan misi yang tersimpan</h3>
                        <a href="/dashboard/visimisi/create" class="btn btn-primary ml-auto" style="margin-right: 1rem">Tambah
                            Data</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Periode</th>
                                <th>Visi</th>
                                <th>Misi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($visimisi as $visimisi)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $visimisi->periode }}</td>
                                <td>{!! $visimisi->visi !!}</td>
                                <td>{!! $visimisi->misi !!}</td>
                                <td>
                                    <form action="/dashboard/visimisi/{{ $visimisi->id }}/edit" class="d-inline">
                                        <button class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                                    </form>
                                    <form method="POST" action="/dashboard/visimisi/{{ $visimisi->id }}" class="d-inline">
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
