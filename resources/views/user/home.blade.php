@extends('user/layouts/main')

@section('content')

<body class="d-flex justify-content-center align-items-center">
<div class="main-container container-fluid">
        <video src="video/ptsp.mp4" muted loop autoplay></video>
        <div class="container text-center mt-3 pb-1">
            <img class="img-fluid logo" src="img/logo_pn.png" alt="Logo">
            <h2 class="h2 text-dark mt-3">Mahkamah Agung Republik Indonesia</h2>
            <h1 class="text-dark fw-bold fw-semibold">PENGADILAN NEGERI PEKANBARU</h1>
            <h2 class="h2 text-dark mt-3">Jl. Teratai No. 85, Sukajadi, Pekanbaru. (0761-22573)</h2>
        </div>
        <div class="container mt-5 pt-5 pb-5">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <a href="{{ url('/ptsp') }}">
                        <button type="button" class="btn p-5 fs-2 btn-ptsp rounded-4 fw-semibold">PTSP</button>
                    </a>
                </div>
                <div class="col d-flex justify-content-center">
                    <a href="{{ url('/buku-tamu') }}">
                        <button type="button" class="btn p-5 fs-2 btn-buku-tamu rounded-4 fw-semibold">Buku Tamu</button>
                    </a>
                </div>
            </div>
        </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

@endsection
