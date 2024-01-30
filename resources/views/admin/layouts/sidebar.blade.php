<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse overflow-auto">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ $active == true ? 'active' : '' }}" aria-current="page" href="/ptsp/dashboard" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
            <span data-feather="home"></span>Antrian Sidang</a>
          <nav class="collapse ps-3" id="home-collapse" >
            <ul class="btn-toggle-nav list-unstyled pb-1">
              <li class="nav-item"><a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#loket1_collapse" aria-expanded="false">
                <span data-feather="chevrons-right"></span>Umum & Keuangan</a>
                <nav class="collapse ps-4" id="loket1_collapse">
                  <li class="nav-item">
                    <a class="nav-link" href="/ptsp/call/show/umum_dan_keuangan"><span data-feather="volume-2"></span>Panggil Antrian</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><span data-feather="refresh-cw"></span>Reset Antrian</a>
                  </li>
                </nav>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#loket2_collapse" aria-expanded="false"><span data-feather="chevrons-right"></span>Hukum</a>
                <nav class="collapse ps-4" id="loket2_collapse">
                  <li class="nav-item">
                    <a class="nav-link" href="/ptsp/call/show/hukum"><span data-feather="volume-2"></span>Panggil Antrian</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"><span data-feather="refresh-cw"></span>Reset Antrian</a>
                  </li>
                </nav>
              </li>
              <li class="nav-item"><a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#loket3_collapse" aria-expanded="false">
                <span data-feather="chevrons-right"></span>PHI</a>
                <nav class="collapse ps-4" id="loket3_collapse">
                  <li class="nav-item">
                    <a class="nav-link" href="/ptsp/call/show/phi"><span data-feather="volume-2"></span>Panggil Antrian</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="#"><span data-feather="refresh-cw"></span>Reset Antrian</a>
                  </li>
                </nav>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#loket4_collapse" aria-expanded="false"><span data-feather="chevrons-right"></span>Tipikor</a>
                <nav class="collapse ps-4" id="loket4_collapse">
                  <li class="nav-item"><a class="nav-link" href="/ptsp/call/show/tipikor"><span data-feather="volume-2"></span>Panggil Antrian</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="#"><span data-feather="refresh-cw"></span>Reset Antrian</a>
                  </li>
                </nav>
              </li>
              <li class="nav-item"><a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#loket5_collapse" aria-expanded="false">
                <span data-feather="chevrons-right"></span>Pidana</a>
                <nav class="collapse ps-4" id="loket5_collapse">
                  <li class="nav-item">
                    <a class="nav-link" href="/ptsp/call/show/pidana"><span data-feather="volume-2"></span>Panggil Antrian</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="#"><span data-feather="refresh-cw"></span>Reset Antrian</a>
                  </li>
                </nav>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" data-bs-toggle="collapse" data-bs-target="#loket6_collapse" aria-expanded="false"><span data-feather="chevrons-right"></span>Perdata</a>
                <nav class="collapse ps-4" id="loket6_collapse">
                  <li class="nav-item"><a class="nav-link" href="/ptsp/call/show/perdata"><span data-feather="volume-2"></span>Panggil Antrian</a>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="#"><span data-feather="refresh-cw"></span>Reset Antrian</a>
                  </li>
                </nav>
              </li>
            </ul>
          </nav>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ptsp/recap/today"><span data-feather="file-text"></span>Rekap Antrian</a>
        </li>
      </ul>
    </div>
  </nav>