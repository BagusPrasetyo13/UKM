@extends('dashboard.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header ml-2">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Tambah Data</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="col-lg-8 ml-2">
                <form method="POST" action="/dashboard/visimisi" enctype="multipart/form-data">
                    @csrf
                     <div class="form-group">
                        <label for="periode">Periode</label>
                        <input type="text" class="form-control @error('periode') is-invalid @enderror"
                         id="periode" name="periode" autofocus value="{{ old('periode') }}">
                         @error('periode')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="visi">Visi</label>
                        <input id="visi"  type="hidden" name="visi" value="{{ old('visi') }}">
                        <trix-editor input="visi" style="background-color: #fff"></trix-editor>
                            @error('visi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label for="misi">Misi</label>
                        <input id="misi"  type="hidden" name="misi" value="{{ old('misi') }}">
                        <trix-editor input="misi" style="background-color: #fff"></trix-editor>
                            @error('misi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <a href="/dashboard/visimisi" class="btn btn-primary">Kembali</a>
                    <button type="submit" class="btn btn-success ml-2">Simpan</button>
                </form>
            </div>
        </section>
    </div>
@endsection
