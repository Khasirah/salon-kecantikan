<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nail Art Studio | <?= $judul; ?></title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logo/'); ?>logo-pb.png">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>user/css/bootstrap.css">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>datatable/datatables.css" rel="stylesheet" type="text/css">
    <style>
        html {
            scroll-behavior: smooth;
            
        }

        /* Custom CSS untuk posisi navbar kedua */
        .navbar-fixed-top {
            position: fixed;
            top: 90px;
            /* Sesuaikan dengan tinggi navbar pertama */
            width: 100%;
            z-index: 1030;
            /* Pastikan z-index lebih tinggi daripada konten yang mungkin overlay */
        }
        
    </style>
</head>

<body>
    <!-- Navbar pertama dengan logo -->
    <nav class="navbar navbar-light bg-white fixed-top">
        <div class="container">
            <a class="navbar-brand mx-auto" href="<?= base_url(); ?>">
                <img src="<?= base_url('assets/img/upload/logoheader.png'); ?>" alt="Logo Pustaka" height="70"
                    class="d-inline-block align-top">
            </a>
            <?php if (!empty($this->session->userdata('email'))) { ?>
                <a class="nav-item nav-link nav-right" style="color: #FF89BF; display:block; margin-left:20px;"
                    href="<?= base_url('member/myprofil'); ?>">
                    <b><?= $user; ?><i class="fas fa-user"></i></b>
                </a>
                <a class="nav-item nav-link" style="color: #FF89BF;" href="<?= base_url('booking'); ?>">
                    <i class="fas fa-shopping-cart"></i>

                    <b><?= $this->ModelBooking->getDataWhere('temp', ['email_user' => $this->session->userdata('email')])->num_rows(); ?></b>
                </a>
            <?php } else { ?>
               
                    <a class="nav-item nav-link btn" style="background-color: #FFBD59; color: white; padding: 5px 15px; border-radius: 25px;" href="<?= base_url('autentifikasi/index'); ?>">Login/Daftar</a>


            <?php } ?>
        </div>
    </nav>

    <!-- Navbar kedua dengan menu -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top" style="background-color: #FEC3DF; ">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" style="color: #ffffff; font-weight: bold;" href="<?= base_url(); ?>">HOME <span
                            class="sr-only">(current)</span>
                    </a>
                    <a class="nav-item nav-link active" style="color: #ffffff; font-weight: bold;" href="#service">SERVICE <span
                            class="sr-only">(current)</span>
                    </a>
                    <a class="nav-item nav-link active" style="color: #ffffff;font-weight: bold;" href="#about">ABOUT <span
                            class="sr-only">(current)</span>
                    </a>
                    <a class="nav-item nav-link active" style="color: #ffffff;font-weight: bold;" href="<?= base_url(); ?>">CONTACT <span
                            class="sr-only">(current)</span>
                    </a>
                    <?php if (!empty($this->session->userdata('email'))) { ?>

                        <a class="nav-item nav-link" style="color: #ffffff;font-weight: bold;" href="<?= base_url('member/logout'); ?>"><i
                                class="fas fw fa-login"></i> Log out</a>

                    <?php } else { ?>
                        <a class="nav-item nav-link" style="color: #ffffff;font-weight: bold;" data-toggle="modal" data-target="#daftarModal"
                            href="#"><i class="fas fw fa-login"></i> DAFTAR</a>


                    <?php } ?>

                </div>
            </div>
        </div>
    </nav>


    <!-- Konten halaman -->
    <div style="padding: 73px;"></div>


    <!-- Script JS -->
    <script src="<?= base_url('assets/'); ?>user/js/bootstrap.bundle.min.js"></script>