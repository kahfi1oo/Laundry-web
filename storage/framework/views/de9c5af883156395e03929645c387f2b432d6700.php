

<?php $__env->startSection('mainadmin'); ?>
    
<div class="row justify-content-between">
    <div class="col pagetitle">
        <h1>Sedang Proses</h1>
    </div>
    <div class="col-lg-4">
        <button type="button" class="btn btn-success">Tambah</button>
    </div>
    <hr class="mt-2">
</div>

  <section class="section">
    <div class="row align-items-top">
      <div class="col-lg-10">

        <!-- Default Card -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Kode Transaksi: 156324</h5>
            <div class="row">
                <div class="col-md-3">
                    <span>Nama</span>
                </div>
                <div class="col-md-3">
                    <span>: Kahfi</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Alamat</span>
                </div>
                <div class="col-md-3">
                    <span>: Kasang, Jambi</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Jenis Jasa</span>
                </div>
                <div class="col-md-3">
                    <span>: Cuci dan Setrika</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Jenis Barang</span>
                </div>
                <div class="col-md-3">
                    <span>: Pakaian</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Jumlah Barang (/kg)</span>
                </div>
                <div class="col-md-3">
                    <span>: 1</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Total Harga</span>
                </div>
                <div class="col-md-3">
                    <span>: 10000</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Tanggal Terima</span>
                </div>
                <div class="col-md-3">
                    <span>: 16/01/2023</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Tanggal Selesai</span>
                </div>
                <div class="col-md-3">
                    <span>: -</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Status Pengerjaan</span>
                </div>
                <div class="col-md-3">
                    <span>: Sedang dicuci</span>
                </div>
            </div>
            <div class="mt-3 mx-2">
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Hapus</button>
            </div>
          </div>
        </div><!-- End Default Card -->
      </div>
    </div>
  </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.mainadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Game\skripsi\viola\violalaundry\resources\views/admin/jobproses.blade.php ENDPATH**/ ?>