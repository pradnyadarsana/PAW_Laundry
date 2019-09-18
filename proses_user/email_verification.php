<?php

if(isset($_POST['verification'])){
    include('../db.php');
      
    $email = $_POST['email']; 
    $kode = $_POST['kode'];

    $query = mysqli_query($con,"SELECT * FROM data_pengguna WHERE email='$email' AND status_aktif=0 AND kode_verif='$kode'")or die(mysqli_error($con));
    if($query){
        $input = mysqli_query($con,"UPDATE data_pengguna set status_aktif=1 WHERE email='$email'") or die(mysqli_error($con));
        if($input){
            echo '<script>alert("Email telah aktif!");
                window.location="../index.php" </script>';
        }
    }else{
        echo '<script>alert("Verifikasi gagal!")</script>';
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>