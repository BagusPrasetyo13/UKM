@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Pendaftaran Anggota Baru</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
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
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data pendaftar anggota baru yang disimpan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Jurusan</th>
                                <th>Prodi</th>
                                <th>Jenis Kelamin</th>
                                <th>Gambar</th>
                                <th>Bidikmisi</th>
                                <th>No HP</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($daftar as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->nim }}</td>
                                    <td>{{ $user->jurusan }}</td>
                                    <td>{{ $user->prodi }}</td>
                                    <td>
                                        @if ($user->jk == 0)
                                            Perempuan
                                        @else
                                            Laki-laki
                                        @endif
                                    </td>
                                    <td> <a href="{{ asset('storage/' . $user->gambar) }}" class="galeri-lightbox">
                                        <img src="{{ asset('storage/' . $user->gambar) }}"  style="width:50%" alt=""></a></td>
                                    <td>
                                        @if ($user->bidik_ms == 1)
                                            Ya
                                        @else
                                            Tidak
                                        @endif
                                    </td>
                                    <td>{{ $user->nohp }}</td>
                                    <td>
                                        {{-- <form action="" class="d-inline">
                                            <button class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                                        </form> --}}
                                        <form action="/dashboard/pendaftaran/{{ $user->id }}" method="POST"
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
