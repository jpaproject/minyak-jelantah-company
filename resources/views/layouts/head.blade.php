<!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/images/logo.png') }}" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{ set_active('home') }}" href="{{ route('home') }}">Home</a></li>
          <li class="dropdown"><a class="{{ set_active(['minyak','dampak','regulasi']) }}" href="#"><span>Tentang Jelantah</span> <i class="bi bi-caret-down-fill"></i></a>
            <ul>
              <li><a class="{{ set_active('minyak') }}" href="{{ route('minyak') }}">Minyak Jelantah</a></li>
              <li><a class="{{ set_active('dampak') }}" href="{{ route('dampak') }}">Dampak Jelantah</a></li>
              <li><a class="{{ set_active('regulasi') }}" href="{{ route('regulasi') }}">Regulasi</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="{{ set_active(['edukasi-kampanye','pengumpulan-jelantah','pengelolaan-jelantah','aksi-sosial']) }}"  href="#"><span>Program</span> <i class="bi bi-caret-down-fill"></i></a>
            <ul>
              <li><a class="{{ set_active('edukasi-kampanye') }}" href="{{ route('edukasi-kampanye') }}">Edukasi/Kampanye</a></li>
              <li><a class="{{ set_active('pengumpulan-jelantah') }}" href="{{ route('pengumpulan-jelantah') }}">Pengumpulan Jelantah</a></li>
              <li><a class="{{ set_active('pengelolaan-jelantah') }}" href="{{ route('pengelolaan-jelantah') }}">Pengelolaan Jelantah</a></li>
              <li><a class="{{ set_active('aksi-sosial') }}" href="{{ route('aksi-sosial') }}">Aksi Sosial</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto {{ set_active('produk') }}" href="{{ route('produk') }}">Produk</a></li>
          <li><a class="nav-link scrollto {{ set_active('not-login') }}" href="{{ route('not-login') }}">Jelantah Heroes</a></li>
          <li><a class="nav-link scrollto {{ set_active('blog') }}" href="{{ route('blog') }}">Blog</a></li>
          <li class="dropdown"><a class="{{ set_active(['galeri','dokumentasi','materi','statistik','informasi','sapa']) }}"  href="#"><span>Lainnya</span> <i class="bi bi-caret-down-fill"></i></a>
            <ul>
              <li><a class="{{ set_active('galeri') }}" href="{{ route('galeri') }}">Galeri</a></li>
              <li><a class="{{ set_active('dokumentasi') }}" href="{{ route('dokumentasi') }}">Dokumentasi Kegiatan</a></li>
              <li><a class="{{ set_active('materi') }}" href="{{ route('materi') }}">Materi Kegiatan</a></li>
              <li><a class="{{ set_active('statistik') }}" href="{{ route('statistik') }}">Statistik</a></li>
              <li><a class="{{ set_active('informasi') }}" href="{{ route('informasi') }}">Informasi</a></li>
              <li><a class="{{ set_active('sapa') }}" href="{{ route('sapa') }}">Sapa Relawan</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto {{ set_active('about') }}" href="{{ route('about') }}">Tentang Kami</a></li>
          <li><a class="getstarted scrollto" href="{{ route('login') }}"><span style="margin-left: 10px">Login </span> <i class="bi bi-person" style="font-size: 2rem; margin-right: 10px"></i></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle align-content-end"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->