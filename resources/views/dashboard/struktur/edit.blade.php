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
                <form method="POST" action="/dashboard/struktur/{{ $struktur->id }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                     <div class="form-group">
                        <label for="periode">Periode</label>
                        <input type="text" class="form-control @error('periode') is-invalid @enderror" id="periode"
                            name="periode" value="{{ old('periode', $struktur->periode) }}">
                        @error('periode')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input type="hidden" name="oldImage" value="{{ $struktur->gambar }}">
                        @if ($struktur->gambar)
                            <img src="{{ asset('storage/' . $struktur->gambar) }}" class="img-preview img-fluid mb-3 
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
                    <a href="/dashboard/struktur" class="btn btn-primary">Kembali</a>
                    <button type="submit" class="btn btn-success">Simpan</button>
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
