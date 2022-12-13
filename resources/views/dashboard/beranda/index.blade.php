@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Beranda</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">

            <div class="card ml-3">
                <div class="card-header">
                    <div class="row">
                        <h3 class="card-title">Data slideshow beranda yang tersimpan</h3>
                        <a href="/dashboard/beranda/create" class="btn btn-primary ml-auto"
                            style="margin-right: 1rem">Tambah
                            Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar 1</th>
                                <th>Gambar 2</th>
                                <th>Gambar 3</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($users as $user) --}}
                            <tr>
                                <td>1</td>
                                <td>tes</td>
                                <td>tes</td>
                                <td>tes</td>
                                <td>
                                    <form action="/dashboard/sejarah/edit" class="d-inline">
                                        <button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></button>
                                    </form>
                                    <form method="POST" action="/dashboard/beranda/" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-sm btn-danger border-0"
                                            onclick="return confirm('Yakin menghapus data?')"><i
                                                class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
