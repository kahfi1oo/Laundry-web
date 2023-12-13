

<?php $__env->startSection('navbar'); ?>

<div class="row justify-content-center mt-5">
  <div class="col-md-4">
    <div class="form-signin">
    <h1 class="h3 mb-4 fw-normal text-center">Membuat Pesanan</h1>

    <form>
        <div class="p-2" style="">
            <input type="nama" class="form-control" id="nama" placeholder="Nama">
        </div>

        <div class="p-2" style="">
            <input type="alamat" class="form-control" id="alamat" placeholder="Alamat">
        </div>

        <div class="p-2" style="">
            <input type="notelp" class="form-control" id="notelp" placeholder="No Telepon"> 
        </div>
        <div class="p-2">
            <div>
                <label for="exampleFormControlSelect1">Jenis Barang</label>
            </div>
            <div class="p-2 form-group">
                <select class="form-control mb-3 w-100" id="exampleFormControlSelect1">
                <option>Pakaian</option>
                <option>Sepatu</option>
                <option>Karpet</option>
                <option>Bed Cover</option>
                <option>Boneka</option>
                <option>Gorden</option>
                </select> 
            </div>
        </div>
        <div class="p-2">
            <div>
                <label for="exampleFormControlSelect1">Jenis Layanan</label>
            </div>
            <div class="p-2 form-group">
                <select class="form-control mb-3 w-100" id="exampleFormControlSelect1">
                <option>Cuci</option>
                <option>Setrika</option>
                <option>Cuci dan Setrika</option>
                </select> 
            </div>
        </div>

        <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Pesan</button>
    </form>

  
  </div>
  </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Game\skripsi\viola\violalaundry\resources\views/pesanan.blade.php ENDPATH**/ ?>