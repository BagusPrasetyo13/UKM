@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Berita</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="col-lg-8 ml-2">
                <form method="POST" action="/dashboard/berita" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" value="{{ old('title') }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kategori_id">Kategori</label>
                        <select class="form-control" aria-label="Default select example" placeholder="Select"
                            name="kategori_id" id="kategori_id">
                            @foreach ($kategoris as $kategori)
                                @if (old('kategori_id') == $kategori->id)
                                    <option value="{{ $kategori->id }}" selected>{{ $kategori->nama }}</option>
                                @else
                                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Konten</label>
                        <input id="description" type="hidden" name="description" value="{{ old('description') }}">
                        <trix-editor input="description" style="background-color: #fff"></trix-editor>
                    </div>
                    <div class="form-group">
                        <label for="image">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                    id="image" name="image">
                            </div>
                        </div>
                    </div>
                    <a href="/dashboard/berita" class="btn btn-primary">Kembali</a>
                    <button type="submit" class="btn btn-success ml-2">Simpan</button>
                </form>
            </div>
        </section>
    </div>
@endsection
