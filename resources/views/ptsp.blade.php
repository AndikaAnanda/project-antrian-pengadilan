@extends('layouts/main')

@section('content')
<body>
    <div class="container-fluid text-center ms-0 mt-0">
        <div class="row">
            <div class="col-3 d-flex flex-column align-items-start pt-5">
                <h3 class="h3 text-dark">ANTRIAN UMUM</h3>
            <table>
                <tr>
                    <td>
                        <div class="square-button umum rounded-4" data-category="umum" data-type="umum_dan_keuangan">
                            <p class="title-umum rounded-top-4">UMUM & KEUANGAN</p>
                            <p class="ticket ticket_umum_umum_dan_keuangan">A-{{ $antrian_umum_umum_dan_keuangan }}</p>
                            @include('partials/loading')
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="square-button umum rounded-4" data-category="umum" data-type="hukum">
                            <p class="title-umum rounded-top-4">HUKUM</p>
                            <p class="ticket">B-{{ $antrian_umum_hukum }}</p>
                            @include('partials/loading')
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="square-button umum rounded-4" data-category="umum" data-type="phi">
                            <p class="title-umum rounded-top-4">PHI</p>
                            <p class="ticket">C-{{ $antrian_umum_phi }}</p>
                            @include('partials/loading')
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="square-button umum rounded-4" data-category="umum" data-type="tipikor">
                            <p class="title-umum rounded-top-4">TIPIKOR</p>
                            <p class="ticket">D-{{ $antrian_umum_tipikor }}</p>
                            @include('partials/loading')
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="square-button umum rounded-4" data-category="umum" data-type="pidana">
                            <p class="title-umum rounded-top-4">PIDANA</p>
                            <p class="ticket">E-{{ $antrian_umum_pidana }}</p>
                            @include('partials/loading')
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="square-button umum rounded-4" data-category="umum" data-type="perdata">
                            <p class="title-umum rounded-top-4">PERDATA</p>
                            <p class="ticket">F-{{ $antrian_umum_perdata }}</p>
                            @include('partials/loading')
                        </div>
                    </td>
                </tr>
            </table>  
            </div>
            <div class="col-6 d-flex flex-column align-items-center justify-content-start pt-1">
                <img class="logo img-fluid mt-5" src="img/logo_pn.png" alt="logo">
                <h2 class="h2 text-dark mt-3">Mahkamah Agung Republik Indonesia</h2>
                <h1 class="h1 text-dark fw-semibold">PENGADILAN NEGERI PEKANBARU</h1>
                <h1 class="h1 text-dark mt-5 fw-semibold">PELAYANAN TERPADU SATU PINTU (PTSP)</h1>
            </div>
            <div class="col-3 d-flex flex-column align-items-end pt-5">
                <h3 class="text-dark">ANTRIAN PRIORITAS</h3>
                <table>
                    <tr>
                        <td>
                            <div class="square-button prioritas rounded-4" data-category="prioritas" data-type="umum_dan_keuangan">
                                <p class="title-prioritas rounded-top-4">UMUM & KEUANGAN</p>
                                <p class="ticket">PA-{{ $antrian_prioritas_umum_dan_keuangan }}</p>
                                @include('partials/loading')
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="square-button prioritas rounded-4" data-category="prioritas" data-type="hukum">
                                <p class="title-prioritas rounded-top-4">HUKUM</p>
                                <p class="ticket">PB-{{ $antrian_prioritas_hukum }}</p>
                                @include('partials/loading')
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="square-button prioritas rounded-4" data-category="prioritas" data-type="phi">
                                <p class="title-prioritas rounded-top-4">PHI</p>
                                <p class="ticket">PC-{{ $antrian_prioritas_phi }}</p>
                                @include('partials/loading')
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="square-button prioritas rounded-4" data-category="prioritas" data-type="tipikor">
                                <p class="title-prioritas rounded-top-4">TIPIKOR</p>
                                <p class="ticket">PD-{{ $antrian_prioritas_tipikor }}</p>
                                @include('partials/loading')
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="square-button prioritas rounded-4" data-category="prioritas" data-type="pidana">
                                <p class="title-prioritas rounded-top-4">PIDANA</p>
                                <p class="ticket">PE-{{ $antrian_prioritas_pidana }}</p>
                                @include('partials/loading')
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="square-button prioritas rounded-4" data-category="prioritas" data-type="perdata">
                                <p class="title-prioritas rounded-top-4">PERDATA</p>
                                <p class="ticket">PF-{{ $antrian_prioritas_perdata }}</p>
                                @include('partials/loading')
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script src="js/ptsp.js"></script>
    
</body>

@endsection