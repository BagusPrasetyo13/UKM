@extends('layouts.main')

@section('content')
    <section id="pendaftaran">
        <div class="hero">
            <img src="image/hero4.png" alt="">
            <div class="page-title">
                <h1>Pendaftaran</h1>
            </div>
        </div>
        <div class="container">
            <div class="row text-center py-5">
                <h3>Pendaftaran Anggota <br>
                    UKM Panahan Politeknik Negeri Pontianak</h3>
                <p>Mohon isi form di bawah ini dengan benar</p>
            </div>

            <form action="/pendaftaran" method="POST" enctype="multipart/form-data">
                @csrf 
                <div class="form">
                    <div class="row">
                        <div class="col-12 mt-4">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error ('nama') is-invalid @enderror"  id="nama" name="nama" autofocus 
                                value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 mt-4">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control @error ('nim') is-invalid @enderror" id="nim" name="nim" autofocus 
                                value="{{ old('nim') }}">
                            @error('nim')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 mt-4">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" class="form-control @error ('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" autofocus 
                                value="{{ old('jurusan') }}">
                            @error('jurusan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 mt-4">
                            <label for="prodi">Prodi</label>
                            <input type="text" class="form-control @error ('prodi') is-invalid @enderror" id="prodi" name="prodi" autofocus 
                                value="{{ old('prodi') }}">
                            @error('prodi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 mt-4">
                            <label>Jenis Kelamin</label>
                            <div class="form-check">
                                <label class="form-check-label" for="jk">
                                <input class="form-check-input" value="0" type="radio" name="jk" id="jk" required>
                                    Perempuan
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="jk">
                                <input class="form-check-input" value="1" type="radio" name="jk" id="jk">
                                    Laki-laki
                                </label>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <label for="nohp">No HP</label> <br>
                            <input type="text" id="nohp" name="nohp" class="@error ('nohp') is-invalid @enderror"
                            value="{{ old('nohp') }}">
                            @error('nohp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 mt-4">
                            <label for="bidik_ms">Bidikmisi</label>
                            <div class="form-check">
                                <label class="form-check-label" for="bidik_ms">
                                <input class="form-check-input" value="1" type="radio" name="bidik_ms" id="bidik_ms" required>
                                    Ya
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="bidik_ms">
                                <input class="form-check-input" value="0" type="radio" name="bidik_ms" id="bidik_ms">
                                    Tidak
                                </label>
                            </div>
                        </div>
                        <div class="col-12 mt-4 mb-3">
                            <label for="image" class="form-label">Upload foto KTM atau slip pembayaran
                                semester</label>
                            <input class="form-control" type="file" id="image" name="image" onchange="previewImage()" >
                            <div class="text-danger">
                            @error('image')
                                    {{ $message }}
                            @enderror
                            </div>
                        </div>
                        <div class="btn">
                            <input class="btn-kirim" type="submit" value="Kirim">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
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