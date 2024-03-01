<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse overflow-auto">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
            <span data-feather="home"></span>Antrian Sidang</a>
          <nav class="collapse ps-3" id="home-collapse" >
            <ul class="btn-toggle-nav list-unstyled pb-1">
              <li class="nav-item"><a href="{{ url('/ptsp/call/show/umum_dan_keuangan') }}" class="nav-link">
                <span data-feather="chevrons-right"></span>Umum & Keuangan</a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/ptsp/call/show/hukum') }}" class="nav-link"><span data-feather="chevrons-right"></span>Hukum</a>
              </li>
              <li class="nav-item"><a href="{{ url('/ptsp/call/show/phi') }}" class="nav-link">
                <span data-feather="chevrons-right"></span>PHI</a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/ptsp/call/show/tipikor') }}" class="nav-link"><span data-feather="chevrons-right"></span>Tipikor</a>
              </li>
              <li class="nav-item"><a href="{{ url('/ptsp/call/show/pidana') }}" class="nav-link">
                <span data-feather="chevrons-right"></span>Pidana</a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/ptsp/call/show/perdata') }}" class="nav-link"><span data-feather="chevrons-right"></span>Perdata</a>
              </li>
            </ul>
          </nav>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/ptsp/reset') }}"><span data-feather="refresh-ccw"></span>Reset Antrian</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/ptsp/recap/today') }}"><span data-feather="file-text"></span>Rekap Antrian</a>
        </li>
      </ul>
    </div>
  </nav>