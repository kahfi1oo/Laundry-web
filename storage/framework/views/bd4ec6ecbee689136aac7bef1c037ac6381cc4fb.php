

<?php $__env->startSection('mainadmin'); ?>
    
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
      
        <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Default Card -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Id Transaksi: <?php echo e($t->id); ?></h5>
            <div class="row">
                <div class="col-md-3">
                    <span>Nama</span>
                </div>
                <div class="col-md-3">
                    <span>: <?php echo e($t->data_user->nama); ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Alamat</span>
                </div>
                <div class="col-md-3">
                    <span>: <?php echo e($t->data_user->alamat); ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Jenis Jasa</span>
                </div>
                <div class="col-md-3">
                    <span>: <?php echo e($t->jns_jasa); ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Jenis Barang</span>
                </div>
                <div class="col-md-3">
                    <span>: <?php echo e($t->jns_barang); ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Jumlah Barang (/kg)</span>
                </div>
                <div class="col-md-3">
                    <span>: <?php echo e($t->jumlah_barang); ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Total Harga</span>
                </div>
                <div class="col-md-3">
                    <span>: <?php echo e($t->total_harga); ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Tanggal Terima</span>
                </div>
                <div class="col-md-3">
                    <span>: <?php echo e($t->tgl_terima); ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Tanggal Selesai</span>
                </div>
                <div class="col-md-3">
                    <span>: <?php echo e($t->tgl_selesai); ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <span>Status Pengerjaan</span>
                </div>
                <div class="col-md-3">
                    <span>: <?php echo e($t->status); ?></span>
                </div>
            </div>
            <div class="mt-3 mx-2">
            <a href="/jobproses/edit/<?php echo e($t->id); ?>"><button type="button" class="btn btn-primary">Edit</button></a>
            <a href="/jobproses/hapus/<?php echo e($t->id); ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
            </div>
          </div>
        </div><!-- End Default Card -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div>
            <?php echo e($transaksi->links()); ?>

          </div>
      </div>
    </div>
  </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.mainadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Game\skripsi\viola\violalaundry - Copy (2)\resources\views/admin/jobproses.blade.php ENDPATH**/ ?>