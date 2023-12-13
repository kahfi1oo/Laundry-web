

<?php $__env->startSection('navbar'); ?>

<style>
    .form-signin {
        max-width: 330px;
        padding: 15px;
      }
      
      .form-signin .form-floating:focus-within {
        z-index: 2;
      }
      
      .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }
      
      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }
</style>

<section class="text-center">
    <form class="form-signin w-100 m-auto">
        <!--image

        imageend-->

        <div class="">
            <input type="email" class="form-control" id="floatinginput">
            <label for="floatinginput">email</label>
        </div>
    </form>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Game\skripsi\viola\violalaundry\resources\views/login.blade.php ENDPATH**/ ?>