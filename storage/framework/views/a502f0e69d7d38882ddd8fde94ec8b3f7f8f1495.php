

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
          <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <th scope="row"><?php echo e($u->id); ?></th>
            <td><?php echo e($u->nama); ?></td>
            <td><?php echo e($u->alamat); ?></td>
            <td><?php echo e($u->no_hp); ?></td>
            <td><?php echo e($u->username); ?></td>
            <td>*****</td>
            <td>
              <a href="/akunuser/edit/<?php echo e($u->id); ?>"><button type="button" class="btn btn-primary">Edit</button></a>
              <a href="/akunuser/hapus/<?php echo e($u->id); ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        
      </table>
      
        <div>
          <a href="/tambahuser"><button type="button" class="btn btn-success">Tambah</button></a>
        </div> 

    </div>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.mainadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Game\skripsi\viola\violalaundry - Copy (2)\resources\views/admin/akunuser.blade.php ENDPATH**/ ?>