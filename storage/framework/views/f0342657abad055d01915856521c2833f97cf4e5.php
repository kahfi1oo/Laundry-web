

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
            <th scope="col">Username</th>
            <th scope="col">Password</th>
          </tr>
        </thead>
        
        <tbody>
          <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th scope="row"><?php echo e($a->id); ?></th>
            <td><?php echo e($a->nama_admin); ?></td>
            <td><?php echo e($a->username_admin); ?></td>
            <td>*****</td>
            <td>
              <a href="/akunadmin/edit/<?php echo e($a->id); ?>"><button type="button" class="btn btn-primary">Edit</button></a>
              <a href="/akunadmin/hapus/<?php echo e($a->id); ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        
      </table>
      
        <div>
            <a href="/tambahadmin"><button type="button" class="btn btn-success">Tambah</button></a>
        </div> 

    </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.mainadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Game\skripsi\viola\violalaundry - Copy (2)\resources\views/admin/akunadmin.blade.php ENDPATH**/ ?>