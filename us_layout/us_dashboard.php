<?php
include "../db.php";
    echo '<!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link rel="stylesheet" href="./css/style.css">
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        
    </head>
    <body>
        <div class="backgroundAll"></div>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="./us_dashboard"><img src="../img/icon/logo.png" width="30" alt="logo"></a>
                <a href="../us_dashboard"><h3 class="navbar-brand">PAW Laundry</h3></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link" href="../us_dashboard">Beranda</a>
                        <a class="nav-item nav-link" href="../us_dashboard/tentang.php">Tentang Kami</a>
                        <a class="nav-item nav-link" href="../us_dashboard/hubungi_kami.php">Hubungi Kami</a>
                        <div class="dropdown">
                            <a class="dropdown-toggle nav-item nav-link" data-toggle="dropdown" href="#">Kelola Pesanan</a>
                            <div class="dropdown-menu mt-2">
                                <a class="dropdown-item" href="../us_dashboard/tambah_pesanan.php">Tambah Pesanan</a>
                                <a class="dropdown-item" href="../us_dashboard/tampil_pesanan.php">Lihat Pesanan</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a class="dropdown-toggle nav-item nav-link" data-toggle="dropdown" href="#">Kelola Akun</a>
                            <div class="dropdown-menu mt-2">
                                <a class="dropdown-item" href="../us_dashboard/lihat_akun.php">Lihat Akun</a>
                                <a class="dropdown-item" href="../us_dashboard/ubah_akun.php">Ubah Akun</a>
                                <a class="dropdown-item" href="../proses_user/logout_user.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>';
?>