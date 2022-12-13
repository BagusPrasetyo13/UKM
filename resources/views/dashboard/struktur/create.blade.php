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
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="col-lg-8 ml-2">
                <form method="POST" action="/dashboard/struktur" enctype="multipart/form-data">
                    @csrf
                     <div class="form-group">
                        <label for="periode">Periode</label>
                        <input type="text" class="form-control @error('periode') is-invalid @enderror" id="periode"
                            name="periode" value="{{ old('periode') }}">
                        @error('periode')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                   <div class="form-group">
                        <label for="image" class=form-label>Foto</label>
                        <input class="form-control" type="file" id="image" name="image"
                            value="{{ old('image') }}" onchange="previewImage()">
                        <div id="foto-text" class="form-text">
                            Gambar max ukuran 2 MB
                        </div>
                        <div class="text-danger">
                            @error('image')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <a href="/dashboard/struktur" class="btn btn-primary">Kembali</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </section>
    </div>
@endsection
