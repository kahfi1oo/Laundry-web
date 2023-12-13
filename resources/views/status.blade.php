@extends('main')

@section('navbar')
    
<!--? Services Area Start -->
        <section class="pt-60 border-bottom pb-20 mb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Status Pengerjaan</h2>
                        </div>
                    </div>
                </div>

                @auth
                  
                <div class="row justify-content-center mt-5">
                    <div class="row justify-content-center">
                      @foreach ($status as $s)
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Kode Transaksi</th>
                                <th scope="col">: {{ $s->id }}</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">Nama</th>
                                <td>: {{ $s->data_user->nama }}</td>
                              </tr>
                              <tr>
                                <th scope="row">Alamat</th>
                                <td>: {{ $s->data_user->alamat }}</td>
                              </tr>
                              <tr>
                                <th scope="row">Jenis Jasa</th>
                                <td>: {{ $s->jns_jasa }}</td>
                              </tr>
                              <tr>
                                <th scope="row">Jenis Barang</th>
                                <td>: {{ $s->jns_barang }}</td>
                              </tr>
                              <tr>
                                <th scope="row">Jumlah Barang (/kg)</th>
                                <td>: {{ $s->jumlah_barang }}</td>
                              </tr>
                              <tr>
                                <th scope="row">Total Harga</th>
                                <td>: {{ $s->total_harga }}</td>
                              </tr>
                              <tr>
                                <th scope="row">Tanggal Terima</th>
                                <td>: {{ $s->tgl_terima }}</td>
                              </tr>
                              <tr>
                                <th scope="row">Tanggal Selesai</th>
                                <td>: {{ $s->tgl_selesai }}</td>
                              </tr>
                              <tr>
                                <th scope="row">Status Pengerjaan</th>
                                <td>: {{ $s->status }}</td>
                              </tr>
                            </tbody>
                        </table>
                      @endforeach

                      <div>
                        {{ $status->links() }}
                      </div>
                    </div>
                </div>
                
                @else
                  <div class="p-5">
              
                    <h1 class="text-center">Silahkan Login untuk Melihat Status Pengerjaan</h1>
        
                  </div>
                @endauth
            </div>
        </section>
        <!-- Services End -->
@endsection