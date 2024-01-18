@extends('layouts/main')

@section('content')

<body class="d-flex justify-content-center align-items-center">
<video width="100%" controls muted loop autoplay>
    <source src="video/ptsp.mp4" type="video/mp4">
</video>
<div class="main-container pb-5">
        <div class="container text-center mt-3 pb-1">
            <img class="img-fluid" src="img/logo_pn.png" alt="Logo" width="100px">
            <h1 class="text-dark fw-bold mt-3 animate__animated animate__bounce">PENGADILAN NEGERI PEKANBARU</h1>
        </div>
        <div class="container mt-5 pt-5 pb-5">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <a href="/ptsp">
                        <button type="button" class="btn btn-success p-5 fs-2 border-white">PTSP</button>
                    </a>
                </div>
                <div class="col d-flex justify-content-center">
                    <a href="/buku-tamu">
                        <button type="button" class="btn btn-success p-5 fs-2 border-white">Buku Tamu</button>
                    </a>
                </div>
            </div>
        </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

@endsection
