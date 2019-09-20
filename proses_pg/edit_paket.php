<?php
if(isset($_POST['create']) && ! empty($_POST['id'])){
    include('../db.php');
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $lama = $_POST['lama'];      
    $harga = $_POST['harga']; 

    $edit = mysqli_query($con,"UPDATE data_paketharga SET nama='$nama',lama='$lama',harga='$harga' WHERE id='$id' ")or die(mysqli_error($con));
    if($edit){
        echo '<script>alert("Success"); window.location ="../pg_dashboard/Edit_paket.php"</script>';
    }else{
        echo '<script>alert("Failed"); window.location ="../pg_dashboard/list_paket.php"</script>';
    }
    }else{
        echo '<script>window.history.back()</script>';
    }
?>