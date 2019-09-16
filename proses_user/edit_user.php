<?php
if(isset($_POST['store'])){
    include('../db.php');
    $id = $_POST['id'];
    $name = $_POST['name'];
    $telp = $_POST['telp'];      
    $email = $_POST['email']; 
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $tanggalLahir = $_POST['tanggal_lahir'];
    $jenisKelamin = $_POST['jenis_kelamin'];
   

$edit=mysqli_query($con,"UPDATE data_pengguna SET name='$name',telp='$telp', ,email='$email',username-'$username',password='$password',tanggalLahir='$tangga_lLahir',jenisKelamin='$jenis_kelamin'  WHERE id='$id'")or die(mysqli_error($con));
if($edit){
    echo '<script>alert("Berhasil Mengubah"); window.location = ".."</script>';
}else{
    echo '<script>alert("Terjadi Kesalahan"); window.location = ".."</script>';
}
}else{
    echo '<script>window.history.back()</script>';
} 
?>