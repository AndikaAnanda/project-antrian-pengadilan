@extends('layouts/main')

@section('content')
    <body class="container-fluid">
        <div class="d-flex flex-row justify-content-around mt-3 mb-3 pt-5 pb-5 border rounded">
            <div class="square-button umum rounded-4" data-category="umum" data-type="umum_dan_keuangan">
                <p class="title-umum rounded-top-4">DALAM ANTRIAN</p>
                <p class="ticket ticket_umum_umum_dan_keuangan">A-{{ $antrian_umum_umum_dan_keuangan }}</p>
            </div>
    
            <div class="square-button umum rounded-4" data-category="umum" data-type="umum_dan_keuangan">
                <p class="title-umum rounded-top-4">SEDANG DILAYANI</p>
                <p class="ticket ticket_umum_umum_dan_keuangan">A-{{ $antrian_umum_umum_dan_keuangan }}</p>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-around mt-3 mb-3 pt-5 pb-5 border rounded">
            <div class="square-button prioritas rounded-4" data-category="prioritas" data-type="umum_dan_keuangan">
                <p class="title-prioritas rounded-top-4">UMUM & KEUANGAN</p>
                <p class="ticket">PA-{{ $antrian_prioritas_umum_dan_keuangan }}</p>
            </div>
            <div class="square-button prioritas rounded-4" data-category="prioritas" data-type="umum_dan_keuangan">
                <p class="title-prioritas rounded-top-4">SEDANG DILAYANI</p>
                <p class="ticket">PA-{{ $antrian_prioritas_umum_dan_keuangan }}</p>
            </div>
        </div>
    </body>

    <script src="js/admin.js"></script>

@endsection