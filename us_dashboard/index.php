<?php
session_start();
if($_SESSION['isLogin']){
    include "../us_layout/us_dashboard.php";
    $user=$_SESSION['user'];
echo'
    <title>Beranda - PAW Laundry</title>
  
    <div class="bd-example mt-5">
            <div id="carouselBeranda" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselBeranda" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselBeranda" data-slide-to="1"></li>
                    <li data-target="#carouselBeranda" data-slide-to="2"></li>
                    <li data-target="#carouselBeranda" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                           
                        <img src="../img/bg/blanket.jpg"  style="size:cover; attachment:fixed;" class="d-block w-100" alt="..." style="max-height:100%">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>PAW Laundry</h5>
                            <p>Jasa cuci laundry yang dijamin pasti bersih, wangi, rapi, dan murah meriah.</p>
                            <a href="./tambah_pesanan.php"><p>Pesan Sekarang</p></a>
                        </div>
                            
                    </div>
                    <div class="carousel-item">
                        <img src="../img/gambar/arch1fix.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>PAW Laundry</h5>
                            <p>Jasa cuci laundry yang dijamin pasti bersih, wangi, rapi, dan murah meriah.</p>
                            <a href="./tambah_pesanan.php"><p>Pesan Sekarang</p></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/gambar/arch2fix.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>PAW Laundry</h5>
                            <p>Jasa cuci laundry yang dijamin pasti bersih, wangi, rapi, dan murah meriah.</p>
                            <a href="./tambah_pesanan.php"><p>Pesan Sekarang</p></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/gambar/arch3fix.jpg" class="d-block w-100" alt="..." style="margin-bottom:-7%">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>PAW Laundry</h5>
                            <p>Jasa cuci laundry yang dijamin pasti bersih, wangi, rapi, dan murah meriah.</p>
                            <a href="./tambah_pesanan.php"><p>Pesan Sekarang</p></a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselBeranda" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselBeranda" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </body>
</html>';}
?>