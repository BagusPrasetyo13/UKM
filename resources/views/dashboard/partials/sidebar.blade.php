  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index" class="brand-link">
        <img class="brand-image" src="image/logo panah light.png" alt="logo">
        <span class="brand-text font-weight-light"> <br></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              @auth
                  <div class="info">
                      <a href="#" class="d-block">{{ auth()->user()->nama }}</a>
                  </div>
              @endauth
          </div>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="/dashboard" class="nav-link">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  @if (auth()->user()->role == 2)
                      <li class="nav-item ">
                          <a href="/dashboard/barang" class="nav-link">
                              <i class="nav-icon fas fa-stream"></i>
                              <p>Daftar Barang</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="/dashboard/peminjaman" class="nav-link">
                              <i class="nav-icon fas fa-dolly"></i>
                              <p>
                                  Peminjaman
                              </p>
                          </a>
                      </li>
                  @endif


                  @if (auth()->user()->role == 1)
                    {{-- <li class="nav-item">
                      <a href="/dashboard/beranda" class="nav-link">
                          <i class="nav-icon fas fa-home"></i>
                          <p>
                              Beranda
                          </p>
                      </a>
                  </li> --}}
                      <li class="nav-item ">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fab fa-buffer"></i>
                              <p>
                                  Profil UKM
                                  <i class="right fas fa-angle-left"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="/dashboard/sejarah" class="nav-link">
                                      <p>Sejarah</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="/dashboard/visimisi" class="nav-link">
                                      <p>Visi dan Misi</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="/dashboard/struktur" class="nav-link">
                                      <p>Struktur Organisasi</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item ">
                          <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-user-friends"></i>
                              <p>
                                  Anggota
                                  <i class="right fas fa-angle-left"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                              <li class="nav-item">
                                  <a href="/dashboard/alumni" class="nav-link">
                                      <p>Alumni</p>
                                  </a>
                              </li>
                              <li class="nav-item">
                                  <a href="/dashboard/pengurus" class="nav-link">
                                      <p>Pengurus</p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="nav-item">
                          <a href="/dashboard/berita" class="nav-link">
                              <i class="nav-icon fas fa-bookmark"></i>
                              <p>
                                  Berita
                              </p>
                          </a>
                      </li>

                      <li class="nav-item">
                          <a href="/dashboard/pendaftaran" class="nav-link">
                              <i class="nav-icon fas fa-clipboard-list"></i>
                              <p>
                                  Daftar Anggota Baru
                              </p>
                          </a>
                      </li>

                      <li class="nav-item">
                          <a href="/dashboard/manajemen-user" class="nav-link">
                              <i class="nav-icon fas fa-edit"></i>
                              <p>
                                  Manajemen User
                              </p>
                          </a>
                      </li>

                      {{-- <li class="nav-item">
                        <a href="/dashboard/sejarah" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Sejarah
                            </p>
                        </a>
                    </li>
                      <li class="nav-item">
                        <a href="/dashboard/visimisi" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Visi & Misi
                            </p>
                        </a>
                    </li> --}}
                  @endif
                  <li class="nav-item">
                    <a href="/dashboard/profile" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
