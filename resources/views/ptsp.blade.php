@extends('layouts/main')

@section('content')
<body>
    <div class="container-fluid text-center ms-0 mt-0">
        <div class="row">
            <div class="col-3 d-flex flex-column align-items-start pt-5">
                <h3 class="h3 text-light">ANTRIAN UMUM</h3>
            <table>
                <tr>
                    <td>
                        <div class="square-button umum" data-category="umum" data-type="umum_dan_keuangan">
                            <p class="title-umum">UMUM & KEUANGAN</p>
                            <p class="ticket ticket_umum_umum_dan_keuangan">PA-{{ $antrian_umum_umum_dan_keuangan }}</p>
                            @include('partials/loading')
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="square-button umum" data-category="umum" data-type="hukum">
                            <p class="title-umum">HUKUM</p>
                            <p class="ticket">PB-{{ $antrian_umum_hukum }}</p>
                            @include('partials/loading')
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="square-button umum" data-category="umum" data-type="phi">
                            <p class="title-umum">PHI</p>
                            <p class="ticket">PC-{{ $antrian_umum_phi }}</p>
                            @include('partials/loading')
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="square-button umum" data-category="umum" data-type="tipikor">
                            <p class="title-umum">TIPIKOR</p>
                            <p class="ticket">PD-{{ $antrian_umum_tipikor }}</p>
                            @include('partials/loading')
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="square-button umum" data-category="umum" data-type="pidana">
                            <p class="title-umum">PIDANA</p>
                            <p class="ticket">PE-{{ $antrian_umum_pidana }}</p>
                            @include('partials/loading')
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="square-button umum" data-category="umum" data-type="perdata">
                            <p class="title-umum">PERDATA</p>
                            <p class="ticket">PF-{{ $antrian_umum_perdata }}</p>
                            @include('partials/loading')
                        </div>
                    </td>
                </tr>
            </table>  
            </div>
            <div class="col-6 d-flex flex-column align-items-center justify-content-center pt-1">
                <img class="logo img-fluid" src="img/logo_pn.png" alt="logo">
                <h1 class="h1 text-light mt-2">PELAYANAN TERPADU SATU PINTU (PTSP)</h1>
                
            </div>
            <div class="col-3 d-flex flex-column align-items-end pt-5">
                <h3 class="text-light">ANTRIAN PRIORITAS</h3>
                <table>
                    <tr>
                        <td>
                            <div class="square-button prioritas" data-category="prioritas" data-type="umum_dan_keuangan">
                                <p class="title-prioritas">UMUM & KEUANGAN</p>
                                <p class="ticket">A-{{ $antrian_prioritas_umum_dan_keuangan }}</p>
                                @include('partials/loading')
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="square-button prioritas" data-category="prioritas" data-type="hukum">
                                <p class="title-prioritas">HUKUM</p>
                                <p class="ticket">B-{{ $antrian_prioritas_hukum }}</p>
                                @include('partials/loading')
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="square-button prioritas" data-category="prioritas" data-type="phi">
                                <p class="title-prioritas">PHI</p>
                                <p class="ticket">C-{{ $antrian_prioritas_phi }}</p>
                                @include('partials/loading')
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="square-button prioritas" data-category="prioritas" data-type="tipikor">
                                <p class="title-prioritas">TIPIKOR</p>
                                <p class="ticket">D-{{ $antrian_prioritas_tipikor }}</p>
                                @include('partials/loading')
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="square-button prioritas" data-category="prioritas" data-type="pidana">
                                <p class="title-prioritas">PIDANA</p>
                                <p class="ticket">E-{{ $antrian_prioritas_pidana }}</p>
                                @include('partials/loading')
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="square-button prioritas" data-category="prioritas" data-type="perdata">
                                <p class="title-prioritas">PERDATA</p>
                                <p class="ticket">F-{{ $antrian_prioritas_perdata }}</p>
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