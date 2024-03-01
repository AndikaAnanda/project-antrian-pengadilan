@extends('admin/layouts/main')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Reset Antrian</h1>
</div>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Loket</th>
                <th scope="col">Kategori</th>
                <th scope="col">Reset Antrian</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Umum & Keuangan</td>
                <td>Umum</td>
                <td>
                    <div class="d-grid">
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal_1"><span data-feather="refresh-ccw"></span>
                            Reset
                        </button>
                        @include('admin/partials/modal', [
                            'id' => 'modal_1',
                            'modalBody' => 'Yakin mereset antrian Umum & Keuangan (Umum)?',
                            'category' => 'umum',
                            'type' => 'umum_dan_keuangan',
                            'isAll' => false
                        ])
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Umum & Keuangan</td>
                <td>Prioritas</td>
                <td>
                    <div class="d-grid">
                        <button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modal_2"><span data-feather="refresh-ccw"></span>
                            Reset
                        </button>
                        @include('admin/partials/modal', [
                            'id' => 'modal_2',
                            'modalBody' => 'Yakin mereset antrian Umum & Keuangan (Prioritas)?',
                            'category' => 'prioritas',
                            'type' => 'umum_dan_keuangan',
                            'isAll' => false
                        ])
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Hukum</td>
                <td>Umum</td>
                <td>
                    <div class="d-grid">
                        <button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modal_3"><span data-feather="refresh-ccw"></span>
                            Reset
                        </button>
                        @include('admin/partials/modal', [
                            'id' => 'modal_3',
                            'modalBody' => 'Yakin mereset antrian Hukum (Umum)?',
                            'category' => 'umum',
                            'type' => 'hukum',
                            'isAll' => false
                        ])
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Hukum</td>
                <td>Prioritas</td>
                <td>
                    <div class="d-grid">
                        <button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modal_4"><span data-feather="refresh-ccw"></span>
                            Reset
                        </button>
                        @include('admin/partials/modal', [
                            'id' => 'modal_4',
                            'modalBody' => 'Yakin mereset antrian Hukum (Prioritas)?',
                            'category' => 'prioritas',
                            'type' => 'hukum',
                            'isAll' => false
                        ])
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>PHI</td>
                <td>Umum</td>
                <td>
                    <div class="d-grid">
                        <button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modal_5"><span data-feather="refresh-ccw"></span>
                            Reset
                        </button>
                        @include('admin/partials/modal', [
                            'id' => 'modal_5',
                            'modalBody' => 'Yakin mereset antrian PHI (Umum)?',
                            'category' => 'umum',
                            'type' => 'phi',
                            'isAll' => false
                        ])
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>PHI</td>
                <td>Prioritas</td>
                <td>
                    <div class="d-grid">
                        <button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modal_6"><span data-feather="refresh-ccw"></span>
                            Reset
                        </button>
                        @include('admin/partials/modal', [
                            'id' => 'modal_6',
                            'modalBody' => 'Yakin mereset antrian PHI (Prioritas)?',
                            'category' => 'prioritas',
                            'type' => 'phi',
                            'isAll' => false
                        ])
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>Tipikor</td>
                <td>Umum</td>
                <td>
                    <div class="d-grid">
                        <button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modal_7"><span data-feather="refresh-ccw"></span>
                            Reset
                        </button>
                        @include('admin/partials/modal', [
                            'id' => 'modal_7',
                            'modalBody' => 'Yakin mereset antrian Tipikor (Umum)?',
                            'category' => 'umum',
                            'type' => 'tipikor',
                            'isAll' => false
                        ])
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">8</th>
                <td>Tipikor</td>
                <td>Prioritas</td>
                <td>
                    <div class="d-grid">
                        <button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modal_8"><span data-feather="refresh-ccw"></span>
                            Reset
                        </button>
                        @include('admin/partials/modal', [
                            'id' => 'modal_8',
                            'modalBody' => 'Yakin mereset antrian Tipikor (Prioritas)?',
                            'category' => 'prioritas',
                            'type' => 'tipikor',
                            'isAll' => false
                        ])
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">9</th>
                <td>Pidana</td>
                <td>Umum</td>
                <td>
                    <div class="d-grid">
                        <button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modal_9"><span data-feather="refresh-ccw"></span>
                            Reset
                        </button>
                        @include('admin/partials/modal', [
                            'id' => 'modal_9',
                            'modalBody' => 'Yakin mereset antrian Pidana (Umum)?',
                            'category' => 'umum',
                            'type' => 'pidana',
                            'isAll' => false
                        ])
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">10</th>
                <td>Pidana</td>
                <td>Prioritas</td>
                <td>
                    <div class="d-grid">
                        <button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modal_10"><span data-feather="refresh-ccw"></span>
                            Reset
                        </button>
                        @include('admin/partials/modal', [
                            'id' => 'modal_10',
                            'modalBody' => 'Yakin mereset antrian Pidana (Prioritas)?',
                            'category' => 'prioritas',
                            'type' => 'pidana',
                            'isAll' => false
                        ])
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">11</th>
                <td>Perdata</td>
                <td>Umum</td>
                <td>
                    <div class="d-grid">
                        <button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modal_11"><span data-feather="refresh-ccw"></span>
                            Reset
                        </button>
                        @include('admin/partials/modal', [
                            'id' => 'modal_11',
                            'modalBody' => 'Yakin mereset antrian Perdata (Umum)?',
                            'category' => 'umum',
                            'type' => 'perdata',
                            'isAll' => false
                        ])
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row">12</th>
                <td>Perdata</td>
                <td>Prioritas</td>
                <td>
                    <div class="d-grid">
                        <button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modal_12"><span data-feather="refresh-ccw"></span>
                            Reset
                        </button>
                        @include('admin/partials/modal', [
                            'id' => 'modal_12',
                            'modalBody' => 'Yakin mereset antrian Perdata (Prioritas)?',
                            'category' => 'prioritas',
                            'type' => 'perdata',
                            'isAll' => false
                        ])
                    </div>
                </td>
            </tr>
            <tr>
                <th scope="row" colspan="3" class="text-center">Reset Semua Loket</th>
                <td>
                    <div class="d-grid">
                        <button type="button" class="btn btn-primary btn-sm " data-bs-toggle="modal" data-bs-target="#modal_13"><span data-feather="refresh-ccw"></span>
                            Reset
                        </button>
                        @include('admin/partials/modal', [
                            'id' => 'modal_13',
                            'modalBody' => 'Yakin mereset semua Antrian?',
                            'category' => 'umum',
                            'type' => 'umum_dan_keuangan',
                            'isAll' => true
                        ])
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
    
@endsection