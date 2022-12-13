@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manajemen User</h1>
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
            <div class="card ml-3 mr-2">
                <div class="card-header">
                    <div class="row">
                        <h3 class="card-title">Data user yang tersimpan</h3>
                        <a href="/dashboard/manajemen-user/create" class="btn btn-primary ml-auto"
                            style="margin-right: 1rem">Tambah Data</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                @if ($user->id == auth()->user()->id)
                                @else
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->nama }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if ($user->role === 1)
                                                Administrator
                                            @else
                                                Divisi UPT
                                            @endif
                                        </td>
                                        <td>
                                            {{-- <form action="/dashboard/manajemen-user/{{ $user->id }}/edit" class="d-inline">
                                            <button class="btn btn-sm btn-info"><i class="fas fa-edit"></i></button>
                                        </form> --}}
                                            <form method="POST" action="/dashboard/manajemen-user/{{ $user->id }}"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-sm btn-danger border-0"
                                                    onclick="return confirm('Yakin menghapus data?')"><i
                                                        class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </section>
    </div>
@endsection
