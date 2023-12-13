

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
        <button class="btn dropdown-toggle card-title" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          16/01/2023
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
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
          <tr>
            <th scope="row">129452</th>
            <td>2</td>
            <td>10000</td>
          </tr>
          <tr class="table-primary">
            <th scope="row">Total</th>
            <td>2</td>
            <td>10000</td>
          </tr>
          
        </tbody>
      </table>
      <!-- End small tables -->

    </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.mainadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Game\skripsi\viola\violalaundry\resources\views/admin/laporhari.blade.php ENDPATH**/ ?>