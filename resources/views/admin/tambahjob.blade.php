@extends('admin.mainadmin')

@section('mainadmin')
    
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Data Admin</h5>
<div class="row justify-content">
    <div class="col-md-5">
      <div class="form-signin">
            
        <form action="/tambahjob" method="post">
            @csrf

            <input type="hidden" name="tgl_terima" id="tgl_terima" value="{{ date('Y-m-d') }}">
              <div class="row m-1">
                <div class="d-flex align-items-center col-md-4">
                    ID User
                </div>
                <div class="d-flex align-items-center col-sm-1">
                    :
                </div>
                <div class="col">
                  <input type="text" class="form-control @error('id_user') 
                  is-invalid @enderror" id="id_user" name="id_user">
                  @error('id_user')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
    
              <div class="row m-1">
                <div class="d-flex align-items-center col-md-4">
                    Jenis Barang
                </div>
                <div class="d-flex align-items-center col-sm-1">
                    :
                </div>
                <div class="col">
                    <select class="form-control mb-3 w-100" id="jns_barang" name="jns_barang">
                        <option>Pakaian</option>
                        <option>Sepatu</option>
                        <option>Karpet</option>
                        <option>Bed Cover</option>
                        <option>Boneka</option>
                        <option>Gorden</option>
                        </select> 
                </div>
              </div>
    
              <div class="row m-1">
                <div class="d-flex align-items-center col-md-4">
                    Jenis Layanan
                </div>
                <div class="d-flex align-items-center col-sm-1">
                    :
                </div>
                <div class="col">
                    <select class="form-control mb-3 w-100" id="jns_jasa" name="jns_jasa">
                        <option>Cuci</option>
                        <option>Setrika</option>
                        <option>Cuci dan Setrika</option>
                        </select> 
                </div>
              </div>
      
              <div class="row m-1">
                <div class="d-flex align-items-center col-md-4">
                    Jumlah Barang
                </div>
                <div class="d-flex align-items-center col-sm-1">
                    :
                </div>
                <div class="col">
                    <input type="text" class="form-control @error('jumlah_barang') 
                    is-invalid @enderror" id="jumlah_barang" name="jumlah_barang">
                    @error('jumlah_barang')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
              </div>
    
              <div class="row m-1">
                <div class="d-flex align-items-center col-md-4">
                    Total Harga
                </div>
                <div class="d-flex align-items-center col-sm-1">
                    :
                </div>
                <div class="col">
                    <input type="text" class="form-control @error('total_harga') 
                    is-invalid @enderror" id="total_harga" name="total_harga">
                    @error('total_harga')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
              </div>
    
              <div class="row m-1">
                <div class="d-flex align-items-center col-md-4">
                    Status
                </div>
                <div class="d-flex align-items-center col-sm-1">
                    :
                </div>
                <div class="col">
                    <select class="form-control mb-3 w-100" id="status" name="status">
                        <option>Menunggu Konfirmasi</option>
                        <option>Dalam Penjemputan</option>
                        <option>Sedang Dikerjakan</option>
                        <option>Dalam Pengantaran</option>
                        <option>Selesai</option>
                        </select> 
                </div>
              </div>
              
              <button class="btn btn-danger mt-4" type="submit"><a href="/jobproses" style="color:white">Batal</a></button>
              <button class="btn btn-primary mt-4" type="submit">Simpan</button>
          </form>

    </div>
    </div>
  </div>

</div>
</div>
@endsection