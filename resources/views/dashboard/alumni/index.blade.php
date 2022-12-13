@extends('dashboard.layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header ml-2">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Anggota Alumni</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

       <section class="content">
            <a href="/dashboard/alumni/create" class="btn btn-primary mb-3 ml-3">Tambah Data</a>
            <div class="card ml-3">
                <div class="card-header">
                    <h3 class="card-title">Data alumni yang tersimpan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama </th>
                                <th>Angkatan</th>
                                <th>Jabatan</th>
                                <th>Divisi</th>
                                <th>Jurusan/Prodi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alumnis as $alumni)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $alumni->nama }}</td>
                                <td>{{ $alumni->angkatan }}</td>
                                <td>{{ $alumni->jabatan->nama }}</td>
                                <td>{{ $alumni->divisi->nama }}</td>
                                <td>{{ $alumni->jurusan }}</td>
                                <td>
                                    <form action="/dashboard/alumni/{{ $alumni->id }}/edit" class="d-inline">
                                        <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                                    </form>
                                    <form action="/dashboard/alumni/{{ $alumni->id }}" method="POST" class="d-inline"
                                        onclick="return confirm('Yakin menghapus data?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
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