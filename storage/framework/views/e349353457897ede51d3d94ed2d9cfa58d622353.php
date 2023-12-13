

<?php $__env->startSection('mainadmin'); ?>
    
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Data Admin</h5>
<div class="row justify-content">
    <div class="col-md-5">
      <div class="form-signin">
            
      <form action="/registeradmin" method="post">
        <?php echo csrf_field(); ?>
          <div class="row m-1">
            <div class="d-flex align-items-center col-md-3">
                Nama
            </div>
            <div class="d-flex align-items-center col-sm-1">
                :
            </div>
            <div class="col">
              <input type="text" class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
              is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nama_admin" name="nama_admin" placeholder="Nama" required>
              <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                  <?php echo e($message); ?>

                </div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
          </div>

          <div class="row m-1">
            <div class="d-flex align-items-center col-md-3">
                Username
            </div>
            <div class="d-flex align-items-center col-sm-1">
                :
            </div>
            <div class="col">
                <input type="text" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="username_admin" name="username_admin" placeholder="Username" required>
                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <div class="invalid-feedback">
                    <?php echo e($message); ?>

                  </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
          </div>
  
          <div class="row m-1">
            <div class="d-flex align-items-center col-md-3">
                Password
            </div>
            <div class="d-flex align-items-center col-sm-1">
                :
            </div>
            <div class="col">
                <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="password_admin" name="password_admin" placeholder="Password" required>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                  <div class="invalid-feedback">
                    <?php echo e($message); ?>

                  </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
          </div>
          <button class="btn btn-danger mt-4" type="submit"><a href="/akunadmin" style="color:white">Batal</a></button>
          <button class="btn btn-primary mt-4" type="submit">Simpan</button>
      </form>

    </div>
    </div>
  </div>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.mainadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Game\skripsi\viola\violalaundry - Copy (2)\resources\views/admin/tambahadmin.blade.php ENDPATH**/ ?>