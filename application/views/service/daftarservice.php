<?= $this->session->flashdata('pesan'); ?>
<img src="<?php echo base_url(); ?>assets/img/upload//welcome1.png" class="card-img" alt="...">

<div style="padding: 50px;">
    <div class="x_panel">
        <div class="x_content">
            <section class="service" id="service">
                <h1
                    style="font-family: 'Almarai', sans-serif; font-size: 35px; font-weight: bold; margin-bottom: 50px; color: #FF89BF; text-align: center; height: 50px;">
                    CHOOSE YOUR SERVICE
                </h1>

                <!-- Tampilkan semua produk -->
                <div class="container">
                    <div class="row justify-content-center">
                        <!-- looping products -->
                        <?php foreach ($kategori as $kategori) { ?>
                            <div class="col-md-3 col-sm-6 mb-4">
                                <div class="card"
                                    style="border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); border-radius: 10px;">
                                    <div class="card-body text-center">
                                        <img src="<?php echo base_url(); ?>assets/img/upload/<?= $kategori->image; ?>"
                                            alt="<?= $kategori->kategori; ?>"
                                            style="max-width: 100%; max-height: 100px; height: 100px; width: 100px; margin-bottom: 15px; border-radius: 50%;">
                                        <h6 class="card-title" style="font-size: 16px; font-weight: bold; color: #333;">
                                            <?= $kategori->kategori ?></h6>
                                        <p class="card-text" style="font-size: 14px; color: #777;">Lorem ipsum dolor sit
                                            amet</p>
                                        <a href="<?= base_url('home/detailKategori/' . $kategori->id); ?>"
                                            class="btn btn-primary"
                                            style="background-color: #FF89BF; border: none; border-radius: 20px; padding: 5px 20px; font-size: 14px;">View
                                            Details</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <!-- end looping -->
                    </div>
                </div>
            </section>

            <style>
                .service h1 {
                    font-family: 'Almarai', sans-serif;
                    font-size: 35px;
                    font-weight: bold;
                    margin-bottom: 50px;
                    color: #FF89BF;
                    text-align: center;
                }

                .card {
                    transition: transform 0.3s, box-shadow 0.3s;
                }

                .card:hover {
                    transform: scale(1.05);
                    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
                }

                .btn-primary:hover {
                    background-color: #e678a9;
                }
            </style>

<section class="about" id="about" style="background-color: #FF83A8; padding: 50px 0;">
                <div class="container">
                    <header class="section-header text-center mb-5">
                        <h1
                            style="font-family: 'Almarai', sans-serif; font-size: 35px; font-weight: bold; color: #ffffff;">
                            ABOUT US
                        </h1>
                        <p style="font-family: 'Almarai', sans-serif; font-size: 15px; font-weight: bold; color: #ffffff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et
                            dolore magna aliqua.</p>
                    </header>

                    <div class="row about-cols">
                        <div class="col-md-4 text-center">
                            <div class="about-col">
                                <div class="icon mb-3" style="font-size: 50px; color: white;">
                                    <i class="ion-ios-speedometer-outline"></i>
                                </div>
                                <h2 class="title"><a href="#" style="color: white;">Our Mission</a></h2>
                                <p style="color: white;">
                                    Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et
                                    dolore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                    aliquip ex ea
                                    commodo consequat.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4 text-center" data-wow-delay="0.1s">
                            <div class="about-col">
                                <div class="icon mb-3" style="font-size: 50px; color: white;">
                                    <i class="ion-ios-list-outline"></i>
                                </div>
                                <h2 class="title"><a href="#" style="color: white;">Our Plan</a></h2>
                                <p style="color: white;">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque
                                    laudantium, totam rem
                                    aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                    vitae dicta sunt
                                    explicabo.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4 text-center" data-wow-delay="0.2s">
                            <div class="about-col">
                                <div class="icon mb-3" style="font-size: 50px; color: white;">
                                    <i class="ion-ios-eye-outline"></i>
                                </div>
                                <h2 class="title"><a href="#" style="color: white;">Our Vision</a></h2>
                                <p style="color: white;">
                                    Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni
                                    dolores eos qui
                                    ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia
                                    dolor sit
                                    amet.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- #about -->
            <br>
            <h1
                style="font-family: 'Almarai', sans-serif; font-size: 35px; font-weight: bold; margin-bottom: 50px; color: #FF89BF; text-align: center; height: 50px;">
                COUPONS!
            </h1>
            <section class="coupon" id="coupon">
                <div class="container">
                    <div class="row">
                        <!-- Coupon 1 -->
                        <div class="col-md-4 mb-4">
                            <div class="coupon"
                                style="border: 5px dotted #bbb; width: 100%; border-radius: 15px; max-width: 100%; transition: transform 0.3s;">
                                <div class="container1"
                                    style="padding: 2px 16px; background-color: #f1f1f1; text-align: center;">
                                    <h3>Nail Art Studio</h3>
                                </div>
                                <img src="assets/img/upload/face.png" alt="Avatar"
                                    style="width:100%; border-bottom: 5px dotted #bbb;">
                                <div class="container1" style="background-color:white; padding: 16px;">
                                    <h2><b>20% OFF YOUR PURCHASE</b></h2>
                                    <p>Get 20% off on all nail art services. Book now and save big!</p>
                                </div>
                                <div class="container1" style="padding: 16px; background-color: #f1f1f1;">
                                    <p>Use Promo Code: <span class="promo"
                                            style="background: #FF89BF; padding: 3px; color: white;">BOH232</span></p>
                                    <p class="expire" style="color: red;">Expires: June 25, 2024</p>
                                </div>
                            </div>
                        </div>
                        <!-- Coupon 2 -->
                        <div class="col-md-4 mb-4">
                            <div class="coupon"
                                style="border: 5px dotted #bbb; width: 100%; border-radius: 15px; max-width: 100%; transition: transform 0.3s;">
                                <div class="container1"
                                    style="padding: 2px 16px; background-color: #f1f1f1; text-align: center;">
                                    <h3>Nail Art Studio</h3>
                                </div>
                                <img src="assets/img/upload/nail.png" alt="Avatar"
                                    style="width:100%; border-bottom: 5px dotted #bbb;">
                                <div class="container1" style="background-color:white; padding: 16px;">
                                    <h2><b>20% OFF YOUR PURCHASE</b></h2>
                                    <p>Get 20% off on all nail art services. Book now and save big!</p>
                                </div>
                                <div class="container1" style="padding: 16px; background-color: #f1f1f1;">
                                    <p>Use Promo Code: <span class="promo"
                                            style="background: #FF89BF; padding: 3px; color: white;">BOH232</span></p>
                                    <p class="expire" style="color: red;">Expires: Jan 03, 2021</p>
                                </div>
                            </div>
                        </div>
                        <!-- Coupon 3 -->
                        <div class="col-md-4 mb-4">
                            <div class="coupon"
                                style="border: 5px dotted #bbb; width: 100%; border-radius: 15px; max-width: 100%; transition: transform 0.3s;">
                                <div class="container1"
                                    style="padding: 2px 16px; background-color: #f1f1f1; text-align: center;">
                                    <h3>Nail Art Studio</h3>
                                </div>
                                <img src="assets/img/upload/hair.png" alt="Avatar"
                                    style="width:100%; border-bottom: 5px dotted #bbb;">
                                <div class="container1" style="background-color:white; padding: 16px;">
                                    <h2><b>20% OFF YOUR PURCHASE</b></h2>
                                    <p>Get 20% off on all nail art services. Book now and save big!</p>
                                </div>
                                <div class="container1" style="padding: 16px; background-color: #f1f1f1;">
                                    <p>Use Promo Code: <span class="promo"
                                            style="background: #FF89BF; padding: 3px; color: white;">BOH232</span></p>
                                    <p class="expire" style="color: red;">Expires: Jan 03, 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="contact" id="contact" style="background-color: #FF83A8; padding: 20px 0;">
    <div class="container-fluid text-center">
        <a class="navbar-brand mx-auto" href="<?= base_url(); ?>">
            <img src="<?= base_url('assets/img/upload/footer.png'); ?>" alt="Logo Pustaka" height="70" class="d-inline-block align-top">
        </a>
        <div class="row mt-4">
            <div class="col-md-4 wow fadeInUp">
                <div class="about-col">
                    <h5 class="title"><a href="#" style="color: white;">Company</a></h5>
                    <p style="color: white;">About Us</p>
                    <p style="color: white;">Service</p>
                    <p style="color: white;">Contact</p>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="about-col">
                    <h5 class="title"><a href="#" style="color: white;">Resources</a></h5>
                    <p style="color: white;">Blog</p>
                    <p style="color: white;">FAQ</p>
                    <p style="color: white;">Support</p>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="about-col">
                    <h5 class="title"><a href="#" style="color: white;">Legal</a></h5>
                    <p style="color: white;">Privacy Policy</p>
                    <p style="color: white;">Terms of Service</p>
                    <p style="color: white;">Cookie Policy</p>
                </div>
            </div>
        </div>
        <!-- Social Media Icons -->
        <div class="row mt-4">
            <div class="col-md-12">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#" style="color: white;"><i class="fab fa-instagram fa-2x"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" style="color: white;"><i class="fab fa-facebook fa-2x"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" style="color: white;"><i class="fab fa-twitter fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

            <style>
                .coupon:hover {
                    transform: scale(1.05);
                }
            </style>


           