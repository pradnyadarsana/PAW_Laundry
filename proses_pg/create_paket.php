<?php
if(isset($_POST['create'])){
    include('../db.php');

    $nama = $_POST['nama'];
    $lama = $_POST['lama'];      
    $harga = $_POST['harga']; 

    $input = mysqli_query($con,"INSERT INTO data_paketharga(nama_paket, lama, harga)
    VALUE('$nama','$lama','$harga')") or die(mysqli_error($con));

    if($input){
        echo '<script>alert("success"); window.location = "../pg_dashboard/list_paket.php"</script>';
    }else{
        echo '<script>alert("failed"); window.location = "../pg_dashboard/tambah_paket.php.php"</script>';
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>