

<?php $__env->startSection('navbar'); ?>
    
<!--? Services Area Start -->
        <section class="pt-60 border-bottom pb-20 mb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Status Pengerjaan</h2>
                        </div>
                    </div>
                </div>

                <?php if(auth()->guard()->check()): ?>
                  
                <div class="row justify-content-center mt-5">
                    <div class="row justify-content-center">
                      <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Kode Transaksi</th>
                                <th scope="col">: <?php echo e($s->id); ?></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">Nama</th>
                                <td>: <?php echo e($s->data_user->nama); ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Alamat</th>
                                <td>: <?php echo e($s->data_user->alamat); ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Jenis Jasa</th>
                                <td>: <?php echo e($s->jns_jasa); ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Jenis Barang</th>
                                <td>: <?php echo e($s->jns_barang); ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Jumlah Barang (/kg)</th>
                                <td>: <?php echo e($s->jumlah_barang); ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Total Harga</th>
                                <td>: <?php echo e($s->total_harga); ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Tanggal Terima</th>
                                <td>: <?php echo e($s->tgl_terima); ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Tanggal Selesai</th>
                                <td>: <?php echo e($s->tgl_selesai); ?></td>
                              </tr>
                              <tr>
                                <th scope="row">Status Pengerjaan</th>
                                <td>: <?php echo e($s->status); ?></td>
                              </tr>
                            </tbody>
                        </table>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                      <div>
                        <?php echo e($status->links()); ?>

                      </div>
                    </div>
                </div>
                
                <?php else: ?>
                  <div class="p-5">
              
                    <h1 class="text-center">Silahkan Login untuk Melihat Status Pengerjaan</h1>
        
                  </div>
                <?php endif; ?>
            </div>
        </section>
        <!-- Services End -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Game\skripsi\viola\violalaundry - Copy (2)\resources\views/status.blade.php ENDPATH**/ ?>