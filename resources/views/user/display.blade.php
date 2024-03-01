@extends('user/layouts/main')

@section('content')
    <body>
        <div class="container-fluid pb-1 shadow">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-2 border-bottom">
                <div class="background-overlay"></div>
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <img class="me-2" src="/img/logo_pn.png" alt="" width="30" height="32">
                <span class="fs-2 fw-bold text-light">Pengadilan Negeri Pekanbaru</span>
              </a>
            </header>
          </div>
        <div class="container-fluid mt-2">
            <div class="row d-flex justify-content-around py-3 mx-3">
                <div class="col-md-5 video-card h-100 rounded-3 embed-responsive embed-responsive-16by9 d-flex justify-content-center bg-light">
                    <video class="embed-responsive-item shadow" muted loop autoplay controls style="width: 105%;">
                            <source src="/video/ptsp.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-md-5">
                    <div class="square-button-primary rounded-2 shadow">
                        <div class="pt-3">
                            <p class="title-primary fs-3 bg-light text-dark">UMUM & KEUANGAN</p>
                        </div>
                        <div class="pt-4">
                            <h1 class="ticket-primary display-1 fw-bold">A-0</h1>
                        </div>
                        <div class="pt-5">
                            <p class="title-primary fs-3 bg-light text-dark">UMUM</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-2">
                    <div class="square-button umum rounded-4" data-category="umum" data-type="umum_dan_keuangan">
                        <p class="title-umum rounded-top-4">UMUM & KEUANGAN</p>
                        <p class="ticket">A-{{ intval(file_get_contents("txt/umum/umum_dan_keuangan.txt")) }}</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="square-button umum rounded-4" data-category="umum" data-type="hukum">
                        <p class="title-umum rounded-top-4">HUKUM</p>
                        <p class="ticket">B-{{ intval(file_get_contents("txt/umum/hukum.txt")) }}</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="square-button umum rounded-4" data-category="umum" data-type="phi">
                        <p class="title-umum rounded-top-4">PHI</p>
                        <p class="ticket">C-{{ intval(file_get_contents("txt/umum/phi.txt")) }}</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="square-button umum rounded-4" data-category="umum" data-type="tipikor">
                        <p class="title-umum rounded-top-4">TIPIKOR</p>
                        <p class="ticket">D-{{ intval(file_get_contents("txt/umum/tipikor.txt")) }}</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="square-button umum rounded-4" data-category="umum" data-type="pidana">
                        <p class="title-umum rounded-top-4">PIDANA</p>
                        <p class="ticket">E-{{ intval(file_get_contents("txt/umum/pidana.txt")) }}</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="square-button umum rounded-4" data-category="umum" data-type="perdata">
                        <p class="title-umum rounded-top-4">PERDATA</p>
                        <p class="ticket">F-{{ intval(file_get_contents("txt/umum/perdata.txt")) }}</p>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-2">
                    <div class="square-button prioritas rounded-4" data-category="prioritas" data-type="umum_dan_keuangan">
                        <p class="title-prioritas rounded-top-4">UMUM & KEUANGAN</p>
                        <p class="ticket">PA-{{ intval(file_get_contents("txt/prioritas/umum_dan_keuangan.txt")) }}</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="square-button prioritas rounded-4" data-category="prioritas" data-type="hukum">
                        <p class="title-prioritas rounded-top-4">HUKUM</p>
                        <p class="ticket">PB-{{ intval(file_get_contents("txt/prioritas/hukum.txt")) }}</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="square-button prioritas rounded-4" data-category="prioritas" data-type="phi">
                        <p class="title-prioritas rounded-top-4">PHI</p>
                        <p class="ticket">PC-{{ intval(file_get_contents("txt/prioritas/phi.txt")) }}</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="square-button prioritas rounded-4" data-category="prioritas" data-type="tipikor">
                        <p class="title-prioritas rounded-top-4">TIPIKOR</p>
                        <p class="ticket">PD-{{ intval(file_get_contents("txt/prioritas/tipikor.txt")) }}</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="square-button prioritas rounded-4" data-category="prioritas" data-type="pidana">
                        <p class="title-prioritas rounded-top-4">PIDANA</p>
                        <p class="ticket">PE-{{ intval(file_get_contents("txt/prioritas/pidana.txt")) }}</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="square-button prioritas rounded-4" data-category="prioritas" data-type="perdata">
                        <p class="title-prioritas rounded-top-4">PERDATA</p>
                        <p class="ticket">PF-{{ intval(file_get_contents("txt/prioritas/perdata.txt")) }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid fixed-bottom bg-light">
            <marquee class="fs-5" scrolldelay="150" direction="left">Selamat Datang, anda memasuki kawasan zona integritas Wilayah Bebas dari Korupsi(WBK) dan Wilayah Birokrasi Bersih Melayani (WBBM)</marquee>
        </div>
    </body>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script src="js/display.js"></script>
@endsection