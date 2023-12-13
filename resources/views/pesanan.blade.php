@extends('main')

@section('navbar')

<div class="row justify-content-center mt-5">
  <div class="col-md-5">
    <div class="form-signin">
    <h1 class="h3 mb-4 fw-normal text-center">Membuat Pesanan</h1>
    @auth
        
        <form action="pesan" method="post">
            @csrf
            <div>
                <input type="hidden" class="form-control" id="id_user" name="id_user" value={{ $dt_user->id }}>
                <input type="hidden" class="form-control" id="tgl_terima" name="tgl_terima" value="{{ date('Y-m-d') }}">
                <input type="hidden" class="form-control" id="status" name="status" value="Menunggu Konfirmasi">
            </div>
            <div class="p-2" style="">
                <input type="text" class="form-control" id="nama" name="nama" value={{ $dt_user->nama }} readonly="true">
            </div>
            <div class="p-2" style="">
                <input type="text" class="form-control" id="alamat" name="alamat" value={{ $dt_user->alamat }} readonly="true">
            </div>
    
            <div class="p-2" style="">
                <input type="tel" class="form-control" id="no_hp" name="no_hp" value={{ $dt_user->no_hp }} readonly="true"> 
            </div>
            <div class="p-2">
                <div>
                    <label for="exampleFormControlSelect1">Jenis Barang</label>
                </div>
                <div class="p-2 form-group">
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
            <div class="p-2">
                <div>
                    <label for="exampleFormControlSelect1">Jenis Layanan</label>
                </div>
                <div class="p-2 form-group">
                    <select class="form-control mb-3 w-100" id="jns_jasa" name="jns_jasa">
                    <option>Cuci</option>
                    <option>Setrika</option>
                    <option>Cuci dan Setrika</option>
                    </select> 
                </div>
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Pesan</button>
            
        </form>
        @else

        <div class="p-5">
            
            <h1 class="text-center">Silahkan Login untuk Membuat Pesanan</h1>

        </div>

        @endauth
    
  </div>
  </div>
</div>


@endsection