@extends('admin/layouts/main')

@section('content')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Panggil Antrian || {{ ucwords(str_replace('_', ' ', $jenis)) }}</h1>
  </div>
  <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover align-middle text-center">
          <thead>
            <tr>
              <th scope="col">Antrian yang Masuk</th>
              <th scope="col">Telah Dipanggil</th>
              <th scope="col">Sisa Antrian</th>
              <th scope="col">Panggil</th>
              <th scope="col">Panggil Ulang</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="d-flex justify-content-center">
                <div class="square-button-prioritas prioritas rounded-4" data-category="prioritas" data-type="{{ $jenis }}">
                  <p class="title-prioritas rounded-top-4">PRIORITAS</p>
                  <p class="ticket">P{{ $letter }}-<span id="jumlahAntrianPrioritas">{{ $jumlahAntrianPrioritas }}</span></p>
                </div>
              </td>
              <td>
                <div class="square-button-prioritas prioritas rounded-4" data-category="prioritas" data-type="{{ $jenis }}">
                  <p class="title-prioritas rounded-top-4">PRIORITAS</p>
                  <p class="ticket">P{{ $letter }}-<span id="nomorDipanggilPrioritas">{{ $nomorDipanggilPrioritas = intval(file_get_contents("txt/prioritas/$jenis.txt")) }}</span></p>
                </div>
              </td>
              <td id="sisaPrioritas" class="fs-1">{{ $sisaPrioritas = ($jumlahAntrianPrioritas - $nomorDipanggilPrioritas) }}</td>
              <td>
                  <button id="panggilPrioritas" type="button" class="btn btn-primary btn {{ $sisaPrioritas == 0 ? 'disabled' : '' }}" onclick="panggilAntrian('prioritas', '{{ $jenis }}', {{ $nomorDipanggilPrioritas }}, false)"><span data-feather="bell"></span>
                      Panggil
                  </button>
              </td>
              <td>
                  <button id="panggilUlangPrioritas" type="button" class="btn btn-danger btn {{ $jumlahAntrianPrioritas == 0 ? 'disabled' : '' }}" onclick="panggilAntrian('prioritas', '{{ $jenis }}', {{ $nomorDipanggilPrioritas - 1 }}, true)"><span data-feather="repeat"></span>
                      Panggil Ulang
                      </button>
              </td>
            </tr>
            <tr>
              <td class="d-flex justify-content-center">
                <div class="square-button-umum umum rounded-4" data-category="umum" data-type="{{ $jenis }}">
                  <p class="title-umum rounded-top-4">UMUM</p>
                  <p class="ticket">{{ $letter }}-<span id="jumlahAntrianUmum">{{ $jumlahAntrianUmum }}</span></p>
                </div>
              </td>
              <td>
                <div class="square-button-umum umum rounded-4" data-category="umum" data-type="{{ $jenis }}">
                  <p class="title-umum rounded-top-4">UMUM</p>
                  <p class="ticket">{{ $letter }}-<span id="nomorDipanggilUmum">{{ $nomorDipanggilUmum = intval(file_get_contents("txt/umum/$jenis.txt")) }}</span></p>
                </div>
              </td>
              <td id="sisaUmum" class="fs-1">{{ $sisaUmum = ($jumlahAntrianUmum - $nomorDipanggilUmum) }}</td>
              <td>
                  <button id="panggilUmum" type="button" class="btn btn-primary btn {{ $sisaUmum == 0 || $sisaPrioritas != 0 ? 'disabled' : '' }}" onclick="panggilAntrian('umum', '{{ $jenis }}', {{ $nomorDipanggilUmum }}, false)"><span data-feather="bell"></span>
                  Panggil
                  </button>
              </td>
              <td>
                  <button id="panggilUlangUmum" type="button" class="btn btn-danger btn {{ $jumlahAntrianUmum == 0 ? 'disabled' : '' }}" onclick="panggilAntrian('umum', '{{ $jenis }}', {{ $nomorDipanggilUmum - 1 }}, true)"><span data-feather="repeat"></span>
                      Panggil Ulang
                  </button>
              </td>
            </tr>
          </tbody>
        </table>
  </div>
  @push('call-script')
        <script src="{{ asset('js/call.js') }}"></script>
  @endpush
@endsection