<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="{{ route('dashboard.index') }}" class="logo logo-light">
        <span class="logo-lg">
            <img src="assets/images/logo1.png" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo-teh-poci.png" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="{{ route('dashboard.index') }}" class="logo logo-dark">
        <span class="logo-lg">
            <img src="assets/images/logo-teh-dark.png" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo-teh-poci.png" alt="small logo">
        </span>
    </a>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">Main</li>

            <li class="side-nav-item">
                <a href="{{ route('dashboard.index') }}" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span class="badge bg-success float-end">9+</span>
                    <span> Dashboard </span>
                </a>
            </li>

            {{-- <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                  <i class="ri-pages-line"></i>
                  <span> Pages </span>
                  <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarPages">
                  <ul class="side-nav-second-level">
                      <li>
                          <a href="pages-starter.html">Manajemen Produk</a>
                      </li>
                      <li>
                          <a href= >Pemesanan</a>
                      </li>
                      <li>
                          <a href="pages-profile.html">Pelanggan</a>
                      </li>
                      <li>
                          <a href="pages-profile.html">Pengaturan Toko</a>
                          {{-- Atur informasi dasar toko seperti nama, deskripsi, dan alamat.
                              Konfigurasi pengaturan pengiriman dan pajak, Kelola metode pembayaran dan opsi pengiriman. --}}
            {{-- </li>
                      <li>
                          <a href="pages-invoice.html"> Analisis dan Laporan</a>
                      </li>
              </div>
          </li> --}}

            <li class="side-nav-item">
                <a href="{{ route('manajemen.index') }}" class="side-nav-link">
                    <i class=" ri-briefcase-4-line"></i>
                    <span class="badge bg-success float-end"></span>
                    <span> Manajemen Produk </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ url('/daftarProduk') }}" class="side-nav-link">
                    <i class="ri-book-3-line"></i>
                    <span class="badge bg-success float-end"></span>
                    <span> Katalog Produk </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('pelanggan.index') }}" class="side-nav-link">
                    <i class="ri-contacts-book-2-line"></i>
                    <span class="badge bg-success float-end"></span>
                    <span> Pelanggan </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('pemesanan.index') }}" class="side-nav-link">
                    <i class=" ri-shopping-cart-2-line"></i>
                    <span class="badge bg-success float-end"></span>
                    <span> Pemesanan </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('laporan.index') }}" class="side-nav-link">
                    <i class=" ri-slideshow-line"></i>
                    <span class="badge bg-success float-end"></span>
                    <span> Analisis dan Laporan </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="{{ route('promo.index') }}" class="side-nav-link">
                    <i class="ri-price-tag-3-line"></i>
                    <span class="badge bg-success float-end"></span>
                    <span> Promo </span>
                </a>
            </li>


            <!--- End Sidemenu -->

            <div class="clearfix"></div>
    </div>
</div>
<!-- ========== Left Sidebar End ========== -->
