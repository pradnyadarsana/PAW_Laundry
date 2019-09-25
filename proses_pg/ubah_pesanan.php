<?php
if(isset($_POST['update']) && !empty($_POST['id'])){
    include('../db.php');
    $id = $_POST['id'];
    $status = $_POST['status'];

    $query = mysqli_query($con,"UPDATE data_pesanan SET status='$status' WHERE id='$id' ")or die(mysqli_error($con));
    if($query){
        echo '<script>alert("Success"); window.location ="../pg_dashboard/kelola_pesanan.php"</script>';
    }else{
        echo '<script>alert("Failed"); window.location ="../pg_dashboard/kelola_pesanan.php"</script>';
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>