

<?php $__env->startSection('navbar'); ?>

<div class="row justify-content-center">
  <div class="col-md-3">
    <?php if(session()->has('success')): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('success')); ?>

      </div>
    <?php endif; ?>

    <?php if(session()->has('loginError')): ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo e(session('loginError')); ?>

      </div>
    <?php endif; ?>

    <div class="form-signin">
    <h1 class="h3 mb-4 fw-normal text-center">Login</h1>

    <form action="/login" method="post">
      <?php echo csrf_field(); ?>
      <div class="text-center">
        <img class="mb-4" src="assets/img/logo/login.png" alt="" width="140" height="140">
      </div>
      <div class="p-2">
        <input type="username" class="form-control" id="username" name="username" placeholder="Username" autofocus required>
      </div>
      <div class="p-2">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
      </div>
      <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Login</button>
      
    </form>

    <hr>
  <div class="signin">
    <p>Belum memiliki akun? <a href="/register">Daftar Sekarang</a></p>
  </div>
  </div>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Game\skripsi\viola\violalaundry\resources\views/login/index.blade.php ENDPATH**/ ?>