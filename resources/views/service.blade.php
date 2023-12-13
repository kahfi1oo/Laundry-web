@extends('main')

@section('navbar')

        <!--? Hero Start -->
        <div class="slider-area2 section-bg2 hero-overly" data-background="assets/img/hero/hero2.png">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2">
                                <h2>Layanan</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Services Area Start -->
        <section class="services-area pt-top border-bottom pb-20 mb-60">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Jenis Layanan</h2>
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
                                <h5><a href="services.html">Cuci</a></h5>
                                <p>Mencuci pakaian hingga kering <br> Harga : 5000 /kg</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services-icon2.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Setrika</a></h5>
                                <p>Menyetrika pakaian hingga rapi <br>Harga : 4500 /kg</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-cat text-center">
                            <div class="cat-icon">
                                <img src="assets/img/icon/services-icon3.svg" alt="">
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Cuci dan Setrika</a></h5>
                                <p>Mencuci sekaligus menyetrika pakaian <br>Harga : 6000 /kg</p>
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
                            <h2>Jenis Barang</h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters justify-content-center">
                    <div class="col-lg-5 col-md-5">
                        <div class="single-offers">
                            <img src="assets/img/gallery/bajulaundry.jpg" alt="" class=" w-100">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="single-offers">
                            <img src="assets/img/gallery/offers2.png" alt="" class=" w-100">
                            <div class="offers-caption text-center">
                                <div class="cat-icon">
                                    <img src="assets/img/icon/offers-icon1.png" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.html">Pakaian</a></h5>
                                    <p>Baju dan Celana <br>Harga sesuai dengan jenis jasa yang digunakan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="single-offers">
                            <img src="assets/img/gallery/offers2.png" alt="" class=" w-100">
                            <div class="offers-caption text-center">
                                <div class="cat-icon">
                                    <img src="assets/img/icon/offers-icon1.png" alt="">
                                </div>
                                <div class="cat-cap">
                                    <h5><a href="services.html">Sepatu</a></h5>
                                    <p>Sepatu ukuran kecil : 10000 /sepatu <br>Sepatu ukuran besar : 15000 /sepatu</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5">
                        <div class="single-offers">
                            <img src="assets/img/gallery/sepatulaundry.jpg" alt="" class=" w-100">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Offer-services End  -->
        
@endsection