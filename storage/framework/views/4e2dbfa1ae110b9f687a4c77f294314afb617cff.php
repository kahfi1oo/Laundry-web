

<?php $__env->startSection('mainadmin'); ?>
    
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Reset Password</h5>
<div class="row justify-content">
    <div class="col-md-5">
      <div class="form-signin">
        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
      <form action="/akunuser/updatepw" method="post">
        <?php echo csrf_field(); ?>
            <input type="hidden" name="id" value="<?php echo e($u->id); ?>">
          
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
unset($__errorArgs, $__bag); ?>" id="password" name="password" placeholder="Password Baru" required>
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
          <button class="btn btn-danger mt-4" type="submit"><a href="/akunuser" style="color:white">Batal</a></button>
          <button class="btn btn-primary mt-4" type="submit">Simpan</button>
      </form>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
    </div>
  </div>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.mainadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Game\skripsi\viola\violalaundry - Copy (2)\resources\views/admin/resetpw.blade.php ENDPATH**/ ?>