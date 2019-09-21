<?php
if(isset($_POST['update'])){
    include('../db.php');
    
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];      
    $email = $_POST['email']; 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $tanggalLahir = $_POST['tanggal_lahir'];
    $jenisKelamin = $_POST['kelamin'];

    $edit = mysqli_query($con,"UPDATE data_pegawai SET nama='$nama', telepon='$telp',
    email='$email', password='$password', tanggal_lahir='$tanggalLahir', jenis_kelamin='$jenisKelamin' WHERE username='$username'")or die(mysqli_error($con));   
    if($edit){
        $query = mysqli_query($con, "SELECT * FROM data_pegawai WHERE username='$username' Limit 1") or die(mysqli_error($con));
        $user = mysqli_fetch_assoc($query);
        session_start();
        $_SESSION['pegawai'] = $user;
        echo '<script>alert("Success"); window.location ="../pg_dashboard/lihat_akun_pg.php"</script>';
    }else{
        echo '<script>alert("Failed"); window.location ="../pg_dashboard/ubah_akun.php"</script>';
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>