@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Update Data User</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="col-lg-8 ml-2">
                <form method="post" action="/dashboard/manajemen-user/{{ $user->id }}">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" readonly class="form-control @error('nama') is-invalid @enderror"
                         id="nama" name="nama"  value="{{ $user->nama }}">
                         @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" readonly class="form-control @error('email') is-invalid @enderror"
                         id="email" name="email" value="{{ $user->email }}">
                         @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" placeholder="Select"
                         name="role" id="role" required>
                         <option {{ ($user->role) === 1 ? 'selected' : ''}} value="1">Administrator</option>
                         <option {{ ($user->role) === 2 ? 'selected' : ''}} value="2">Divisi UPT</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Update Data</button>
                    <a href="/dashboard/manajemen-user" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </section>
    </div>
@endsection
