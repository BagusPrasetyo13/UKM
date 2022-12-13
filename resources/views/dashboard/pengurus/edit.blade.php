@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Data Pengurus</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="col-lg-8 ml-2">
                <form method="POST" action="/dashboard/pengurus/{{ $pengurus->id }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error ('nama') is-invalid @enderror" 
                            id="nama" name="nama" value="{{ old('nama', $pengurus->nama) }}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan_id">Jabatan</label>
                        <select class="form-control" aria-label="Default select example" placeholder="Select" name="jabatan_id" id="jabatan_id">
                            @foreach ($jabatans as $jabatan)
                                @if (old('jabatan_id', $pengurus->jabatan_id) == $jabatan->id)
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
                                @if (old('divisi_id', $pengurus->divisi_id) == $divisi->id)
                                    <option value="{{ $divisi->id }}" selected>{{ $divisi->nama }}</option>
                                @else
                                    <option value="{{ $divisi->id }}">{{ $divisi->nama }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="angkatan">Angkatan</label>
                        <input type="text" class="form-control @error ('angkatan') is-invalid @enderror" 
                            id="angkatan" name="angkatan" value="{{ old('angkatan', $pengurus->angkatan) }}">
                         @error('angkatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control @error ('jurusan') is-invalid @enderror" 
                            id="jurusan" name="jurusan" value="{{ old('jurusan', $pengurus->jurusan) }}">
                         @error('jurusan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="prodi">Prodi</label>
                        <input type="text" class="form-control @error ('prodi') is-invalid @enderror" 
                            id="prodi" name="prodi" value="{{ old('prodi', $pengurus->prodi) }}">
                         @error('prodi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">File Input</label>
                        <input type="hidden" name="oldImage" value="{{ $pengurus->gambar }}">
                        @if ($pengurus->gambar)
                            <img src="{{ asset('storage/' . $pengurus->gambar) }}" class="img-preview img-fluid mb-3 
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
                    <a href="/dashboard/pengurus" class="btn btn-primary">Kembali</a>
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
