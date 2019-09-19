<?php
if(isset($_POST['update'])){
    include('../db.php');

    $name = $_POST['nama'];     
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $tanggal_lahir = $_POST['tanggalLahir'];    
    $telp = $_POST['telp'];     
    $jenisKelamin = $_POST['kelamin'];

    $input = mysqli_query($con,"UPDATE data_pengguna set nama='$name', telepon='$telp', username='$username', password='$password', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenisKelamin' WHERE email='$email'") or die(mysqli_error($con));
    if($input){
        $query = mysqli_query($con, "SELECT * FROM data_pengguna WHERE username='$username' Limit 1") or die(mysqli_error($con));
        $user = mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['user'] = $user;
        echo '<script>alert("success"); window.location = "../us_dashboard/lihat_akun.php"</script>';
    }else{
        echo '<script>alert("failed"); window.location = "../us_dashboard/ubah_akun.php"</script>';
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>