@extends('dashboard.layouts.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          @if (auth()->user()->role == 2)
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color: #C9BBCF">
              <div class="inner">
                <h3>{{ $countbarang }}</h3>
                <p>Daftar Barang</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/dashboard/barang" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color: #DAEAF1">
              <div class="inner">
                <h3>{{ $countpinjam }}</h3>
                <p>Daftar Peminjaman</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/dashboard/peminjaman" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 
          @endif
          @if (auth()->user()->role == 1)
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color: #C9BBCF">
              <div class="inner">
                <h3>{{ $countalumni }}</h3>
                <p>Alumni</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/dashboard/alumni" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color: #E9DAC1">
              <div class="inner">
                <h3>{{ $countpengurus }}</h3>
                <p>Pengurus</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/dashboard/pengurus" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color: #FAF4B7">
              <div class="inner">
                <h3>{{ $countberita }}</h3>
                <p>Berita</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/dashboard/berita" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color: #DAEAF1">
              <div class="inner">
                <h3>{{ $countpendaftar }}</h3>
                <p>Daftar Anggota Baru</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/dashboard/pendaftaran" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color: #C3B091">
              <div class="inner">
                <h3>{{ $countuser }}</h3>
                <p>Manajemen User</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/dashboard/manajemen-user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color: #C4DFAA">
              <div class="inner">
                <h3>{{ $countstruktur }}</h3>
                <p>Struktur Organisasi</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 
          @endif
          <!-- ./col -->
        </div>
        <!-- /.row -->
     
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection