@extends('dashboard.layouts.main')

@section('content')
 <div class="content-wrapper">
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Beranda</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <section class="content">
            <div class="col-lg-8 ml-2">
                <form method="POST" action="/dashboard/beranda" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="gambar1" class=form-label>Gambar slide 1</label>
                        <input class="form-control" type="file" id="gambar1" name="gambar1"
                            value="{{ old('gambar1') }}" onchange="previewImage()">
                        <div id="foto-text" class="form-text">
                            Gambar harus berukuran 1920x650 px dan max ukuran 2 MB
                        </div>
                        <div class="text-danger">
                            @error('gambar1')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gambar2" class=form-label>Gambar slide 2</label>
                        <input class="form-control" type="file" id="gambar2" name="gambar2"
                            value="{{ old('gambar2') }}" onchange="previewImage()">
                        <div id="foto-text" class="form-text">
                            Gambar harus berukuran 1920x650 px dan max ukuran 2 MB
                        </div>
                        <div class="text-danger">
                            @error('gambar2')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gambar3" class=form-label>Gambar slide 3</label>
                        <input class="form-control" type="file" id="gambar3" name="gambar3"
                            value="{{ old('gambar3') }}" onchange="previewImage()">
                        <div id="foto-text" class="form-text">
                            Gambar harus berukuran 1920x650 px dan max ukuran 2 MB
                        </div>
                        <div class="text-danger">
                            @error('gambar3')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <a href="/dashboard/beranda" class="btn btn-primary">Kembali</a>
                    <button type="submit" class="btn btn-success ml-2">Simpan</button>
                </form>
            </div>
        </section>
    </div>
@endsection
