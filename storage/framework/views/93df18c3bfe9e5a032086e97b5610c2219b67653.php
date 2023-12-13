

<?php $__env->startSection('mainadmin'); ?>

<div class="row justify-content-between">
    <div class="col pagetitle">
        <h1>Laporan Harian</h1>
    </div>

    <hr class="mt-2">
</div>

<div class="card">
    <div class="card-body">
      <div class="dropdown">
        
        

        <form action="/laporhari/cari" method="GET">
          <input type="date" class="btn card-title" name="cari" value="<?php echo e(old('cari')); ?>">
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
          <?php if(is_null($laporan)): ?>
          <?php else: ?>
          
          <?php $__currentLoopData = $laporan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
          
          <tr>
            <th scope="row"><?php echo e($l->id); ?></th>
            <td><?php echo e($l->jumlah_barang); ?></td>
            <td><?php echo e($l->total_harga); ?></td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </tbody>
      </table>
      <!-- End small tables -->

    </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.mainadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Game\skripsi\viola\violalaundry - Copy (2)\resources\views/admin/laporhari.blade.php ENDPATH**/ ?>