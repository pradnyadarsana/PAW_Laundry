<?php
if(isset($_POST['store'])){
    include('../db.php');

    $username = $_POST['username'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];
    $berat = $_POST['berat'];
    $paket = $_POST['paket'];

    $querypaket = mysqli_query($con, "SELECT * FROM data_paketharga WHERE nama_paket='$paket'") or die(mysqli_error($con));
    $jenis_paket = mysqli_fetch_assoc($querypaket);

    $total_harga = $berat*$jenis_paket['harga'];
    
    $tanggal = date('Y-m-d');

    /*status : belum diproses, sedang diproses, pesanan selesai*/

    $status = "belum diproses";

    $input = mysqli_query($con,"INSERT INTO data_pesanan(username, telepon, alamat, paket, berat, harga, status, tanggal)
    VALUE('$username','$telepon','$alamat','$paket','$berat','$total_harga','$status','$tanggal')") or die(mysqli_error($con));

    if($input){
        echo '<script>alert("success"); window.location = "../us_dashboard/tampil_pesanan.php"</script>';
    }else{
        echo '<script>alert("failed"); window.history.back()"</script>';
    }
}
else{
    echo '<script>window.history.back()</script>';
}
?>