<?php
session_start();
if($_SESSION['isLogin']){
    include "../us_layout/us_dashboard.php";
    $user=$_SESSION['user'];
    if($user['jenis_kelamin']==0)
    {
        $kelamin="Laki-laki";
    }else{
        $kelamin="Perempuan";
    }
    echo'
        <title>Akun Anda - PAW Laundry</title>
        <div class="jumbotron mt-5 mb-0 about-page text-dark text-left">
            <div class="container">
                <h2 class="display-6 font-weight-bold mt-3">Detail Akun Anda</h2>
                <h1 class="display-3 font-weight-bold mt-5" name="nama">'.$user['nama'].'</h1>
                <p class="lead font-weight-normal" name="username">'.$user['username'].'</p>
                <a href="#"><p class="lead font-weight-normal text-right" style="color: red">Logout</p></a>
                <hr class="my-5" style="color: black">
                <p class="lead font-weight-normal" name="email">'.$user['email'].'</p>
                <p class="lead font-weight-normal" name="telp">'.$user['telepon'].'</p>
                <p class="lead font-weight-normal" name="tanggalLahir">'.$user['tanggal_lahir'].'</p>
                <p class="lead font-weight-normal mb-5" name="kelamin">'.$kelamin.'</p>
            </div>
        </div>
    </body>
</html>';
}

?>