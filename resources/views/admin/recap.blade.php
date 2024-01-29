@extends('admin/layouts/main')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Rekap Data Antrian</h1>
    @include('admin/partials/toolbar')
</div>
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>

            <th scope="col">No.</th>
            <th scope="col">Kategori</th>
            <th scope="col">Jenis</th>
            <th scope="col">Jumlah Antrian</th>
            <th scope="col">Tanggal</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($recapData as $data)
          <tr>
            <th scope="row">{{ $index += 1 }}</th>
            <td>{{ ucwords($data->kategori_antrian) }}</td>
            <td>{{ ucwords(str_replace('_', ' ', $data->jenis_antrian)) }}</td>
            <td>{{ $data->jumlah_antrian }}</td>
            <td>{{ \Carbon\Carbon::parse($data->tanggal)->format('d-m-Y') }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>

@endsection