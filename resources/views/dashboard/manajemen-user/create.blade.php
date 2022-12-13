@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Data User</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="col-lg-8 ml-2">
                <form method="POST" action="/dashboard/manajemen-user">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                         id="nama" name="nama" autofocus value="{{ old('nama') }}">
                         @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                         id="email" name="email"autofocus value="{{ old('email') }}">
                         @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                         id="password" name="password" value="{{ old('passsword') }}">
                         @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                         @enderror
                      </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control" aria-label="Default select example" placeholder="Select"
                         name="role" id="role" required>
                            <option value="1">Administrator</option>
                            <option value="2">Divisi UPT</option>
                          </select>
                    </div>
                  </div>
                    <button type="submit" class="btn btn-success ml-3">Simpan</button>
                    <a href="/dashboard/manajemen-user" class="btn btn-primary">Kembali</a>
                </form>
            </div>
        </section>
    </div>
@endsection
