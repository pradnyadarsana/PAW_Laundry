<?php
if(isset($_POST['store'])&& ! empty($_POST['id'])){
    include('../db.php');
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];      
    $email = $_POST['email']; 
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $tanggalLahir = $_POST['tanggal_lahir'];
    $jenisKelamin = $_POST['jenis_kelamin'];
   

$edit=mysqli_query($con,"UPDATE data_pengguna SET nama='$nama',telp='$telp', ,email='$email',username-'$username',password='$password',tanggalLahir='$tangga_lLahir',jenisKelamin='$jenis_kelamin'  WHERE id='$id'")or die(mysqli_error($con));
if($edit){
    echo '<script>alert("Berhasil Mengubah"); window.location = "../us_dashboard/edit_user.php"</script>';
}else{
    echo '<script>alert("Terjadi Kesalahan"); window.location = "../us_dashboard/lihat_akun.php"</script>';
}
}else{
    echo '<script>window.history.back()</script>';
} 
?>