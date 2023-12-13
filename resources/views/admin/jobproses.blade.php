@extends('admin.mainadmin')

@section('mainadmin')
    
<div class="row justify-content-between">
    <div class="col pagetitle">
        <h1>Sedang Proses</h1>
    </div>
    <div class="col-lg-4">
        <a href="/tambahjob"><button type="button" class="btn btn-success">Tambah</button></a>
    </div>
    <hr class="mt-2">
</div>

  <section class="section">
    <div class="row align-items-top">
      <div class="col-lg-10">
      
        @foreach ($transaksi as $t)
        <!-- Default Card -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Id Transaksi: {{ $t->id }}</h5>
            <div class="row">
                <div class="col-md-3">
                    <span>Nama</span>
                </div>
                <div class="col-md-3">
                    <span>: {{ $t->data_user->nama }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Alamat</span>
                </div>
                <div class="col-md-3">
                    <span>: {{ $t->data_user->alamat }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Jenis Jasa</span>
                </div>
                <div class="col-md-3">
                    <span>: {{ $t->jns_jasa }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Jenis Barang</span>
                </div>
                <div class="col-md-3">
                    <span>: {{ $t->jns_barang }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Jumlah Barang (/kg)</span>
                </div>
                <div class="col-md-3">
                    <span>: {{ $t->jumlah_barang }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Total Harga</span>
                </div>
                <div class="col-md-3">
                    <span>: {{ $t->total_harga }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Tanggal Terima</span>
                </div>
                <div class="col-md-3">
                    <span>: {{ $t->tgl_terima }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Tanggal Selesai</span>
                </div>
                <div class="col-md-3">
                    <span>: {{ $t->tgl_selesai }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Status Pengerjaan</span>
                </div>
                <div class="col-md-3">
                    <span>: {{ $t->status }}</span>
                </div>
            </div>
            <div class="mt-3 mx-2">
            <a href="/jobproses/edit/{{ $t->id }}"><button type="button" class="btn btn-primary">Edit</button></a>
            <a href="/jobproses/hapus/{{ $t->id }}"><button type="button" class="btn btn-danger">Hapus</button></a>
            </div>
          </div>
        </div><!-- End Default Card -->
        @endforeach
        <div>
            {{ $transaksi->links() }}
          </div>
      </div>
    </div>
  </section>

@endsection