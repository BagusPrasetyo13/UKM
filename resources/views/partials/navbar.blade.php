<section class="header">
    <div class="header mx-auto p-0 position-relative">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="beranda.html">
                <img src="image/logo panah.png" alt="" width="230">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal"
                data-bs-target="#targetModal-item">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- ===== HAMBURGER MENU ===== -->
            <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
                aria-labelledby="targetModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content border-0">
                        <div class="modal-header border-0"
                            style="padding: 2rem; padding-bottom: 0; background-color: #cfe6da">
                            <!-- <a class="modal-title" id="targetModalLabel">
                                                  </a> -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body"
                            style="padding: 2rem; padding-top: 0; padding-bottom: 0; background-color: #cfe6da">
                            <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                                <li class="nav-item {{ Request::is ('beranda') ? 'active' : ' ' ;}}">
                                    <a class="nav-link" href="/beranda">Beranda</a>
                                </li>
                                <li class="nav-item dropdown  {{ Request::is ('sejarah', 'struktur', 'visimisi') ? 'active' : ' ' ;}}">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Profil
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="/sejarah">Sejarah</a></li>
                                        <li><a class="dropdown-item" href="/struktur">Struktur</a></li>
                                        <li><a class="dropdown-item" href="/visimisi">Visi dan Misi</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown {{ Request::is ('pengurus', 'alumni') ? 'active' : ' ' ;}}">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Anggota
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a class="dropdown-item" href="/pengurus">Pengurus</a></li>
                                        <li><a class="dropdown-item" href="/alumni">Alumni</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item {{ Request::is ('berita') ? 'active' : ' ' ;}}">
                                    <a class="nav-link" href="/berita">Berita</a>
                                </li>
                                {{-- <li class="nav-item">
                    <a class="nav-link" href="galeri-foto.html">Galeri</a>
                  </li> --}}
                                <li class="nav-item {{ Request::is ('info-daftar') ? 'active' : ' ' ;}}">
                                    <a class="nav-link" href="/info-daftar">Pendaftaran</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="/login">Login</a>
                                </li>
                            </ul>
                        </div>
                        <div class="modal-footer border-0 gap-3"
                            style="padding: 2rem; padding-top: 0.75rem; background-color: #cfe6da">
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===== CLOSE HAMBURGER MENU ===== -->

            <!-- ===== NAVBAR DESKTOP ===== -->
            <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                <!-- <ul class="navbar-nav ms-auto mt-2 mt-lg-0"> -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item {{ Request::is ('beranda') ? 'active' : ' ' ;}}">
                        <a class="nav-link" href="/beranda">Beranda</a>
                    </li>
                    <li class="nav-item dropdown {{ Request::is ('sejarah', 'struktur', 'visimisi') ? 'active' : ' ' ;}}">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/sejarah">Sejarah</a></li>
                            <li><a class="dropdown-item" href="/struktur">Struktur</a></li>
                            <li><a class="dropdown-item" href="/visimisi">Visi dan Misi</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown {{ Request::is ('pengurus', 'alumni') ? 'active' : ' ' ;}}">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Anggota
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/pengurus">Pengurus</a></li>
                            <li><a class="dropdown-item" href="/alumni">Alumni</a></li>
                        </ul>
                    </li>
                    <li class="nav-item {{ Request::is ('berita') ? 'active' : ' ' ;}}">
                        <a class="nav-link" href="/berita">Berita</a>
                    </li>
                    {{-- <li class="nav-item">
              <a class="nav-link" href="galeri-foto.html">Galeri</a>
            </li> --}}
                    <li class="nav-item {{ Request::is ('info-daftar') ? 'active' : ' ' ;}}">
                        <a class="nav-link" href="/info-daftar">Pendaftaran</a>
                    </li>
                    <div class="d-flex">
                        <a class="btn btn-get-started btn-get-started-blue text-white px-4" style="background-color:#83aa99; border-radius:1.5rem;" href="/login">Login</a>
                    </div>
                </ul>
            </div>
            <!-- ===== CLOSE NAVBAR DESKTOP ===== -->
        </nav>
    </div>
</section>
