@extends('admin/layouts/main')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Panggil Antrian || {{ ucwords(str_replace('_', ' ', $jenis)) }}</h1>
</div>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Kategori</th>
            <th scope="col">Jenis</th>
            <th scope="col">Jml. Antrian</th>
            <th scope="col">Telah Dipanggil</th>
            <th scope="col">Sisa Antrian</th>
            <th scope="col">Panggil</th>
            <th scope="col">Panggil Ulang</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Prioritas</td>
            <td>{{ ucwords(str_replace('_', ' ', $jenis)) }}</td>
            <td>{{ $jumlahAntrianPrioritas }}</td>
            <td>{{ $nomorDipanggilPrioritas = intval(file_get_contents("txt/prioritas/$jenis.txt")) }}</td>
            <td>{{ $sisaPrioritas = ($jumlahAntrianPrioritas - $nomorDipanggilPrioritas) }}</td>
            <td>
                <button type="button" class="btn btn-primary btn-sm {{ $sisaPrioritas == 0 ? 'disabled' : '' }}" onclick="panggilAntrian('prioritas', '{{ $jenis }}', {{ $nomorDipanggilPrioritas }}, false)"><span data-feather="bell"></span>
                    Panggil
                    </button>
            </td>
            <td>
                <button type="button" class="btn btn-danger btn-sm {{ $jumlahAntrianPrioritas == 0 ? 'disabled' : '' }}" onclick="panggilAntrian('prioritas', '{{ $jenis }}', {{ $nomorDipanggilPrioritas - 1 }}, true)"><span data-feather="repeat"></span>
                    Panggil Ulang
                    </button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Umum</td>
            <td>{{ ucwords(str_replace('_', ' ', $jenis)) }}</td>
            <td>{{ $jumlahAntrianUmum }}</td>
            <td>{{ $nomorDipanggilUmum = intval(file_get_contents("txt/umum/$jenis.txt")) }}</td>
            <td>{{ $sisaUmum = ($jumlahAntrianUmum - $nomorDipanggilUmum) }}</td>
            <td>
                <button type="button" class="btn btn-primary btn-sm {{ $sisaUmum == 0 || $sisaPrioritas != 0 ? 'disabled' : '' }}" onclick="panggilAntrian('umum', '{{ $jenis }}', {{ $nomorDipanggilUmum }}, false)"><span data-feather="bell"></span>
                Panggil
                </button>
            </td>
            <td>
                <button type="button" class="btn btn-danger btn-sm {{ $jumlahAntrianUmum == 0 ? 'disabled' : '' }}" onclick="panggilAntrian('umum', '{{ $jenis }}', {{ $nomorDipanggilUmum - 1 }}, true)"><span data-feather="repeat"></span>
                    Panggil Ulang
                    </button>
            </td>
          </tr>
        </tbody>
      </table>
</div>

@endsection