<?php
if($_GET['status']=="Belum diproses")
{
    if(!empty($_GET['id'])){
        include('../db.php');
        $id = $_GET['id'];

        $query = mysqli_query($con,"DELETE FROM data_pesanan WHERE id='$id'")or die(mysqli_error($con));
        if($query){
            echo '<script>alert("Success"); window.location ="../us_dashboard/tampil_pesanan.php"</script>';
        }else{
            echo '<script>alert("Failed"); window.location ="../us_dashboard/tampil_pesanan.php"</script>';
        }
    }else{
        echo '<script>window.history.back()</script>';
    }
}else{
    echo '<script>alert("Anda tidak dapat menghapus pesanan yang telah diproses"); window.location ="../us_dashboard/tampil_pesanan.php"</script>';
}
?>