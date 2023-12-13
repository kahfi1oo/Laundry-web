

<?php $__env->startSection('mainadmin'); ?>
    
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Data Admin</h5>

      <!-- Table with stripped rows -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Kahfi</td>
            <td>kahfi123</td>
            <td>kahfi123</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Tes</td>
            <td>tes123</td>
            <td>tes123</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Adam</td>
            <td>adam123</td>
            <td>132456</td>
          </tr>
        </tbody>
      </table>
        
            <button type="button" class="btn btn-success">Tambah</button>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Hapus</button>
        
    </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.mainadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Game\skripsi\viola\violalaundry\resources\views/admin/akunadmin.blade.php ENDPATH**/ ?>