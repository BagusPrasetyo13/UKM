@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Sejarah</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="col-lg-8 ml-2">
                <form method="POST" action="/dashboard/sejarah/{{ $sejarah->id }}">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="konten">Konten Sejarah</label>
                        <input id="konten"  type="hidden" name="konten" value="{{ old('konten', $sejarah->konten) }}">
                        <trix-editor input="konten" style="background-color: #fff"></trix-editor>
                            @error('konten')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <a href="/dashboard/sejarah" class="btn btn-primary">Kembali</a>
                    <button type="submit" class="btn btn-success ml-2">Simpan</button>
                </form>
            </div>
        </section>
    </div>
@endsection
