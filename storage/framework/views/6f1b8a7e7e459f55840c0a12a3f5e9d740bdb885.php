

<?php $__env->startSection('mainadmin'); ?>
    
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Data Admin</h5>
<div class="row justify-content">
    <div class="col-md-5">
      <div class="form-signin">
            
        <form action="/tambahjob" method="post">
            <?php echo csrf_field(); ?>

            <input type="hidden" name="tgl_terima" id="tgl_terima" value="<?php echo e(date('Y-m-d')); ?>">
              <div class="row m-1">
                <div class="d-flex align-items-center col-md-4">
                    ID User
                </div>
                <div class="d-flex align-items-center col-sm-1">
                    :
                </div>
                <div class="col">
                  <input type="text" class="form-control <?php $__errorArgs = ['id_user'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                  is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="id_user" name="id_user">
                  <?php $__errorArgs = ['id_user'];
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
                <div class="d-flex align-items-center col-md-4">
                    Jenis Barang
                </div>
                <div class="d-flex align-items-center col-sm-1">
                    :
                </div>
                <div class="col">
                    <select class="form-control mb-3 w-100" id="jns_barang" name="jns_barang">
                        <option>Pakaian</option>
                        <option>Sepatu</option>
                        <option>Karpet</option>
                        <option>Bed Cover</option>
                        <option>Boneka</option>
                        <option>Gorden</option>
                        </select> 
                </div>
              </div>
    
              <div class="row m-1">
                <div class="d-flex align-items-center col-md-4">
                    Jenis Layanan
                </div>
                <div class="d-flex align-items-center col-sm-1">
                    :
                </div>
                <div class="col">
                    <select class="form-control mb-3 w-100" id="jns_jasa" name="jns_jasa">
                        <option>Cuci</option>
                        <option>Setrika</option>
                        <option>Cuci dan Setrika</option>
                        </select> 
                </div>
              </div>
      
              <div class="row m-1">
                <div class="d-flex align-items-center col-md-4">
                    Jumlah Barang
                </div>
                <div class="d-flex align-items-center col-sm-1">
                    :
                </div>
                <div class="col">
                    <input type="text" class="form-control <?php $__errorArgs = ['jumlah_barang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                    is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="jumlah_barang" name="jumlah_barang">
                    <?php $__errorArgs = ['jumlah_barang'];
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
                <div class="d-flex align-items-center col-md-4">
                    Total Harga
                </div>
                <div class="d-flex align-items-center col-sm-1">
                    :
                </div>
                <div class="col">
                    <input type="text" class="form-control <?php $__errorArgs = ['total_harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> 
                    is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="total_harga" name="total_harga">
                    <?php $__errorArgs = ['total_harga'];
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
                <div class="d-flex align-items-center col-md-4">
                    Status
                </div>
                <div class="d-flex align-items-center col-sm-1">
                    :
                </div>
                <div class="col">
                    <select class="form-control mb-3 w-100" id="status" name="status">
                        <option>Menunggu Konfirmasi</option>
                        <option>Dalam Penjemputan</option>
                        <option>Sedang Dikerjakan</option>
                        <option>Dalam Pengantaran</option>
                        <option>Selesai</option>
                        </select> 
                </div>
              </div>
              
              <button class="btn btn-danger mt-4" type="submit"><a href="/jobproses" style="color:white">Batal</a></button>
              <button class="btn btn-primary mt-4" type="submit">Simpan</button>
          </form>

    </div>
    </div>
  </div>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.mainadmin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Game\skripsi\viola\violalaundry - Copy (2)\resources\views/admin/tambahjob.blade.php ENDPATH**/ ?>