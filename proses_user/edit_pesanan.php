<?php

    if(isset($_POST['update']) && !empty($_POST['id'])){
        include('../db.php');
        $id = $_POST['id'];
        $alamat = $_POST['alamat'];
        $berat = $_POST['berat']; 
        $paket = $_POST['paket'];

        $querypaket = mysqli_query($con, "SELECT * FROM data_paketharga WHERE nama_paket='$paket'") or die(mysqli_error($con));
        $jenis_paket = mysqli_fetch_assoc($querypaket);

        $total_harga = $berat*$jenis_paket['harga'];
        
        $tanggal = date('Y-m-d');

        $query = mysqli_query($con,"UPDATE data_pesanan SET alamat='$alamat', paket='$paket', berat='$berat', harga='$total_harga', tanggal='$tanggal' WHERE id='$id'")or die(mysqli_error($con));
        if($query){
            echo '<script>alert("Success"); window.location ="../us_dashboard/tampil_pesanan.php"</script>';
        }else{
            echo '<script>alert("Failed"); window.location ="../us_dashboard/ubah_pesanan.php"</script>';
        }
    }else{
        echo '<script>window.history.back()</script>';
    }

?>