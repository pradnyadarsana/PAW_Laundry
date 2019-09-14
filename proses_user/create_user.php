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
    

    $input = mysqli_query($con,"INSERT INTO data_pengguna(nama, telepon, email, username, password, tanggal_lahir, jenis_kelamin, status_aktif, kode_verif)
    VALUE('$nama','$telp','$email','$username','$password','$tanggalLahir','$jenisKelamin','$status','$verif_code')") or die(mysqli_error($con));
    
    $to 	= $email;
    $judul 	= 'Sign Up | Verifikasi';
    $dari	= 'From: pawlaundry@gmail.com' . "\r\n";

    $pesan	= '
    Terima kasih sudah ingin bergabung bersama kami!
    Akun anda telah dibuat, kamu bisa login setelah melakukan verifikasi dengan memberikan kode di bawah ini.
    
    ------------------------
    Username: '.$username.'
    Email: '.$email.'
    ------------------------
     
    Kode Verifikasi : '.$verif_code.'
     
    ';


    $kirim	= mail($to, $judul, $pesan, $dari);

    if($kirim AND $input){
        echo '<script>alert("success"); window.location = "../verification_page.php?username='.$username.'"</script>';
    }else{
        //echo '<script>alert("failed"); window.location = "../user_signup.php"</script>';
        //echo '<script>window.history.back()</script>';
        echo '<script>alert("test")</script>';
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>