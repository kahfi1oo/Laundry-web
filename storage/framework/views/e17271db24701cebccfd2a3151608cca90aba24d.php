

<?php $__env->startSection('mainadmin'); ?>
    
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Data User</h5>

      <!-- Table with stripped rows -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No HP</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>aaa</td>
            <td>aaaaa</td>
            <td>087769002468</td>
            <td>asdsa</td>
            <td>asdsa</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Kahfi</td>
            <td>Kasang</td>
            <td>081234567898</td>
            <td>kahfi132</td>
            <td>kahfi123</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Suisei</td>
            <td>Telanai</td>
            <td>089874563212</td>
            <td>suichan</td>
            <td>suisui</td>
          </tr>
        </tbody>
      </table>
        <div>
            <button type="button" class="btn btn-success">Tambah</button>
            <button type="button" class="btn btn-primary">Edit</button>
            <button type="button" class="btn btn-danger">Hapus</button>
        </div> 

    </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.mainadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Game\skripsi\viola\violalaundry\resources\views/admin/akunuser.blade.php ENDPATH**/ ?>