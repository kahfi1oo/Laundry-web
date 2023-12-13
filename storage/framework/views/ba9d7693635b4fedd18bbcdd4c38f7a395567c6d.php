

<?php $__env->startSection('navbar'); ?>
    
<!--? Services Area Start -->
        <section class="pt-60 border-bottom pb-20 mb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Cek Status Pengerjaan</h2>
                        </div>
                    </div>
                </div>
            
                <div class="row justify-content-center">
                    <div class="col-lg-4 form-signin">
                        <form>
                            <div class="p-2">
                                <input type="id" class="form-control" id="transaksi" placeholder="Kode Transaksi">
                              </div>
                            <button class="w-100 btn btn-lg btn-primary mt-4" type="cekstatus">Cek Status Pengerjaan</button>
                        </form>
                    </div>
                </div>

                <div class="row justify-content-center mt-5">
                    <div class="row justify-content-center">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Kode Transaksi</th>
                                <th scope="col">: 156324</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">Nama</th>
                                <td>Kahfi</td>
                              </tr>
                              <tr>
                                <th scope="row">Alamat</th>
                                <td>Kasang, Jambi</td>
                              </tr>
                              <tr>
                                <th scope="row">Jenis Jasa</th>
                                <td>Cuci dan Setrika</td>
                              </tr>
                              <tr>
                                <th scope="row">Jenis Barang</th>
                                <td>Pakaian</td>
                              </tr>
                              <tr>
                                <th scope="row">Jumlah Barang (/kg)</th>
                                <td>1</td>
                              </tr>
                              <tr>
                                <th scope="row">Total Harga</th>
                                <td>10000</td>
                              </tr>
                              <tr>
                                <th scope="row">Tanggal Terima</th>
                                <td>16/01/2023</td>
                              </tr>
                              <tr>
                                <th scope="row">Tanggal Selesai</th>
                                <td>-</td>
                              </tr>
                              <tr>
                                <th scope="row">Status Pengerjaan</th>
                                <td>Sedang dicuci</td>
                              </tr>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Game\skripsi\viola\violalaundry\resources\views/status.blade.php ENDPATH**/ ?>