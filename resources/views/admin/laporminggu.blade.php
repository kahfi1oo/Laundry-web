@extends('admin.mainadmin')

@section('mainadmin')

<div class="row justify-content-between">
    <div class="col pagetitle">
        <h1>Laporan Harian</h1>
    </div>

    <hr class="mt-2">
</div>

<div class="card">
    <div class="card-body">
      <div class="dropdown">
        {{--  <button class="btn dropdown-toggle card-title" type="date" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          16/01/2023
        </button>  --}}
        {{--  <input type="date" class="btn card-title" name="tgl_selesai" id="tgl_selesai">
        <a href="/laporhari/{{  }}"></a><button class="btn btn-success">Cari</button>  --}}

        <form action="/laporminggu/cari" method="GET">
          <input type="week" class="btn card-title" name="cari" value="{{ old('cari') }}">
          <input type="submit" class="btn btn-success" value="Cari">
        </form>
      </div>
    
      <table class="table table-sm">
        <thead>
          <tr class="table-secondary">
            <th scope="col">Kode Transaksi</th>
            <th scope="col">Jumlah Barang(/kg)</th>
            <th scope="col">Penghasilan</th>
          </tr>
        </thead>
        <tbody>
          @if (is_null($laporan))
          @else
          
          @foreach ($laporan as $l)
            
          
          <tr>
            <th scope="row">{{ $l->tgl_selesai }}</th>
            <td>{{ $l->jumlah_barang }}</td>
            <td>{{ $l->total_harga }}</td>
          </tr>
          @endforeach
          @endif
        </tbody>
      </table>
      <!-- End small tables -->

    </div>
  </div>

@endsection