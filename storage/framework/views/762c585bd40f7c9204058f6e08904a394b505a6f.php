

<?php $__env->startSection('navbar'); ?>
    <!--? slider Area Start-->
        <section class="slider-area hero-overly">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-10 col-sm-9">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">Viola Laundry</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">Bersih, Harum, Rapi, dan Berkualitas</p>
                                    <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Order Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section>
        <!-- slider Area End-->
        <!--? Services Area Start -->
        <section class="services-area pt-top border-bottom pb-20 mb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Tentang</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services-icon1.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Laundry Pakaian</a></h5>
                                <p>Menyediakan jasa mencuci pakaian dan setrika pakaian, dapat mencuci berbagai jenis pakaian</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services-icon2.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Pemesanan Online</a></h5>
                                <p>Dapat melakukan pemesanan jasa secara online melalui website ini</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services-icon3.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Delivery</a></h5>
                                <p>Menyediakan jasa antar-jemput! Anda tidak perlu menuju ke lokasi. Kami akan menjemput pakaian anda dan mengantarnya ketika pakaian anda telah selesai di laundry</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!--? Offer-services Start  -->
        <section class="offer-services pb-bottom2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Layanan yang ditawarkan</h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="assets/img/gallery/offers1.png" alt="" class=" w-100">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="assets/img/gallery/offers2.png" alt="" class=" w-100">
                            <div class="offers-caption text-center">
                                <div class="cat-icon">
                                    <img src="assets/img/icon/offers-icon1.png" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.html">Mencuci Pakaian</a></h5>
                                    <p>Menyediakan jasa mencuci pakaian hingga bersih. Dapat mencuci Sepatu, Karpet, Boneka, Bed Cover, dan Gorden</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="assets/img/gallery/offers2.png" alt="" class=" w-100">
                            <div class="offers-caption text-center">
                                <div class="cat-icon">
                                    <img src="assets/img/icon/offers-icon1.png" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.html">Setrika Pakaian</a></h5>
                                    <p>Menyediakan jasa menyetrika pakaian agar pakaian menjadi rapi dan harum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-offers">
                            <img src="assets/img/gallery/offers4.png" alt="" class=" w-100">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Offer-services End  -->
        <!--? Want To work -->
        <section class="container">
            <section class="wantToWork-area" data-background="assets/img/gallery/section_bg01.png">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-8 col-lg-9 col-md-7">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Hubungi kami</h2>
                                <p>Untuk informasi lebih lanjut, silahkan menghubungi kami</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5">
                            <a href="/kontak" class="btn wantToWork-btn"><img src="assets/img/icon/call2.png" alt=""> Kontak</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- Want To work End -->
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\Game\skripsi\viola\violalaundry - Copy (2)\resources\views/home.blade.php ENDPATH**/ ?>