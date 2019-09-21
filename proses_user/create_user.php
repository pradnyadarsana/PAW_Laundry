<?php

if(isset($_POST['store'])){
    include('../db.php');

    $nama = $_POST['nama'];
    $telp = $_POST['telp'];      
    $email = $_POST['email']; 
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $tanggalLahir = $_POST['tanggal_lahir'];
    $jenisKelamin = $_POST['jenis_kelamin'];
    /*$tanggal = $_POST['tanggal']; 
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $date = $bulan."/".$tanggal."/".$tahun;
    $timestamp = strtotime($date);
    $tanggalLahir = date('y-m-d', $timestamp); */

    $status = 0;
    $verif_code = rand(10000,99999);
    
    $query = mysqli_query($con, "SELECT * FROM data_pengguna WHERE username='$username' OR email='$email'") or die(mysqli_error($con));
    if(mysqli_num_rows($query) == 0){
        $input = mysqli_query($con,"INSERT INTO data_pengguna(nama, telepon, email, username, password, tanggal_lahir, jenis_kelamin, status_aktif, kode_verif)
        VALUE('$nama','$telp','$email','$username','$password','$tanggalLahir','$jenisKelamin','$status','$verif_code')") or die(mysqli_error($con));

        if($input){
            echo '<script>alert("success"); window.location = "../verification_page.php?username='.$username.'"</script>';
        }else{
            echo '<script>alert("failed"); window.location = "../user_signup.php"</script>';
        }
    }else{ 
        echo '<script>alert("Username atau email anda sudah digunakan"); window.history.back()</script>';
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>