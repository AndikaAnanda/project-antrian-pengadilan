@extends('layouts/main')

@section('content')
<body>
    <div class="container-fluid text-center ms-0 mt-0">
        <div class="row">
            <div class="col-3 d-flex flex-column align-items-start pt-5">
                <h3 class="text-light">ANTRIAN PRIORITAS</h3>
            <table>
                <tr>
                    <td>
                        <div class="square-button umum">
                            <p class="title-prioritas">UMUM & KEUANGAN</p>
                            <p class="ticket">PA-{{ $number=0 }}</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="square-button hukum">
                            <p class="title-prioritas">HUKUM</p>
                            <p class="ticket">PB-{{ $number=0 }}</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="square-button phi">
                            <p class="title-prioritas">PHI</p>
                            <p class="ticket">PC-{{ $number=0 }}</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="square-button tipikor">
                            <p class="title-prioritas">TIPIKOR</p>
                            <p class="ticket">PD-{{ $number=0 }}</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="square-button pidana">
                            <p class="title-prioritas">PIDANA</p>
                            <p class="ticket">PE-{{ $number=0 }}</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="square-button perdata">
                            <p class="title-prioritas">PERDATA</p>
                            <p class="ticket">PF-{{ $number=0 }}</p>
                        </div>
                    </td>
                </tr>
            </table>  
            </div>
            <div class="col-6 d-flex flex-column align-items-center pt-1">
                <img class="logo img-fluid" src="img/logo_pn.png" alt="logo">
                <h1 class="text-light mt-2">PELAYANAN TERPADU SATU PINTU (PTSP)</h1>
                
            </div>
            <div class="col-3 d-flex flex-column align-items-end pt-5">
                <h3 class="text-light">ANTRIAN UMUM</h3>
                <table>
                    <tr>
                        <td>
                            <div class="square-button umum">
                                <p class="title-umum">UMUM & KEUANGAN</p>
                                <p class="ticket">A-{{ $number=0 }}</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="square-button hukum">
                                <p class="title-umum">HUKUM</p>
                                <p class="ticket">B-{{ $number=0 }}</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="square-button phi">
                                <p class="title-umum">PHI</p>
                                <p class="ticket">C-{{ $number=0 }}</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="square-button tipikor">
                                <p class="title-umum">TIPIKOR</p>
                                <p class="ticket">D-{{ $number=0 }}</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="square-button pidana">
                                <p class="title-umum">PIDANA</p>
                                <p class="ticket">E-{{ $number=0 }}</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="square-button perdata">
                                <p class="title-umum">PERDATA</p>
                                <p class="ticket">F-{{ $number=0 }}</p>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <script src="/js/ptsp.js"></script>
    
</body>

@endsection