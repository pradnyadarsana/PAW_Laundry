<?php
if(isset($_POST['update']) && !empty($_POST['id'])){
    include('../db.php');
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $lama = $_POST['lama'];      
    $harga = $_POST['harga']; 

    $query = mysqli_query($con,"UPDATE data_paketharga SET nama_paket='$nama',lama='$lama',harga='$harga' WHERE id='$id' ")or die(mysqli_error($con));
    if($query){
        echo '<script>alert("Success"); window.location ="../pg_dashboard/list_paket.php"</script>';
    }else{
        echo '<script>alert("Failed"); window.location ="../pg_dashboard/edit_paket.php"</script>';
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>