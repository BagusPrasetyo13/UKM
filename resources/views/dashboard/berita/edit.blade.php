@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Berita</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="col-lg-8 ml-2">
                <form method="POST" action="/dashboard/berita/{{ $berita->id }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $berita->title) }}">
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
                                @if (old('kategori_id', $berita->kategori_id) == $kategori->id)
                                    <option value="{{ $kategori->id }}" selected>{{ $kategori->nama }}</option>
                                @else
                                    <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Konten</label>
                        <input id="description" type="hidden" name="description" value="{{ old('description', $berita->description) }}">
                        <trix-editor input="description" style="background-color: #fff"></trix-editor>
                    </div>
                    <div class="form-group">
                        <label for="image">File input</label>
                        <input type="hidden" name="oldImage" value="{{ $berita->gambar }}">
                        @if ($berita->gambar)
                            <img src="{{ asset('storage/' . $berita->gambar) }}" class="img-preview img-fluid mb-3 
                            col-sm-5 d-block"> 
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                        <img class="img-preview img-fluid mb-3 col-sm-5">
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                        name="image" onchange="previewImage()">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <a href="/dashboard/berita" class="btn btn-primary">Kembali</a>
                    <button type="submit" class="btn btn-success ml-2">Simpan</button>
                </form>
            </div>
        </section>
    </div>
    <script>
        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
    
            imgPreview.style.display = 'block';
    
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
    
            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
