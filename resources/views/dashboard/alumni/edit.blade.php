@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Data Alumni</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="col-lg-8 ml-2">
                <form method="POST" action="/dashboard/alumni/{{ $alumni->id }}">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error ('nama') is-invalid @enderror" 
                            id="nama" name="nama" value="{{ old('nama', $alumni->nama) }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="angkatan">Angkatan</label>
                        <input type="text" class="form-control @error ('angkatan') is-invalid @enderror" 
                            id="angkatan" name="angkatan" value="{{ old('angkatan', $alumni->angkatan) }}">
                        @error('angkatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan_id">Jabatan</label>
                        <select class="form-control" aria-label="Default select example" placeholder="Select" name="jabatan_id" id="jabatan_id">
                            @foreach ($jabatans as $jabatan)
                                @if (old('jabatan_id', $alumni->jabatan_id) == $jabatan->id)
                                    <option value="{{ $jabatan->id }}" selected>{{ $jabatan->nama }}</option>
                                @else
                                    <option value="{{ $jabatan->id }}">{{ $jabatan->nama }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="divisi_id">Divisi</label>
                        <select class="form-control" aria-label="Default select example" placeholder="Select" name="divisi_id" id="divisi_id">
                            @foreach ($divisis as $divisi)
                                @if (old('divisi_id', $alumni->divisi_id) == $divisi->id)
                                    <option value="{{ $divisi->id }}" selected>{{ $divisi->nama }}</option>
                                @else
                                    <option value="{{ $divisi->id }}">{{ $divisi->nama }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan/Prodi</label>
                        <input type="text" class="form-control @error ('jurusan') is-invalid @enderror" 
                            id="jurusan" name="jurusan" value="{{ old('jurusan', $alumni->jurusan) }}">
                         @error('jurusan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <a href="/dashboard/alumni" class="btn btn-primary">Kembali</a>
                    <button type="submit" class="btn btn-success ml-2">Simpan</button>
                </form>
            </div>
        </section>
    </div>
@endsection
