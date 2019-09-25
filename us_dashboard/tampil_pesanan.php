<?php
session_start();
if(!$_SESSION['isLogin']){
    header("../index.php");
}else{
    include "../us_layout/us_dashboard.php";
    $user=$_SESSION['user'];
    $username=$user['username'];
    
    $pesanan = mysqli_query($con, "SELECT * FROM data_pesanan WHERE username='$username'") or die(mysqli_error($con));

    echo'
        <div style="margin-top:6%">
            <div class="container">
                <div class="form-row mt-5 justify-content-between">
                    <div class="form-group col-md-10">
                        <h1 class="text-center">Kelola Pesanan</h1> 
                    </div>
                </div>
                <table class="table table-striped table-primary"> 
                    <thead> 
                        <tr> 
                        <th scope="col">ID</th>
                        <th scope="col">PAKET</th>
                        <th scope="col">BERAT</th>  
                        <th scope="col">TOTAL HARGA</th>
                        <th scope="col">ALAMAT</th> 
                        <th scope="col">STATUS</th>
                        <th scope="col">TANGGAL</th>
                        <th scope="col">PENGATURAN</th>  
                        </tr> 
                    </thead> 
                    <tbody> 
                    ';if(mysqli_num_rows($pesanan) == 0){
                        echo '<tr class="table-success">
                            <td colspan="8">Tidak Ada data</td>';
                    }else{
                        while($row = mysqli_fetch_array($pesanan))
                        {
                        echo '<tr class="table-success"> 
                                <td>'.$row['id'].'</td> 
                                <td>'.$row['paket'].'</td> 
                                <td>'.$row['berat'].'</td> 
                                <td>'.$row['harga'].'</td> 
                                <td>'.$row['alamat'].'</td>
                                <td>'.$row['status'].'</td>
                                <td>'.$row['tanggal'].'</td>
                                <td><a class="btn btn-primary" href="./ubah_pesanan.php?id='.$row['id'].'&status='.$row['status'].'" role="button">Edit</a>
                                <a class="btn btn-primary" href="../proses_user/delete_pesanan.php?id='.$row['id'].'&status='.$row['status'].'" role="button">Delete</a>
                                </td>
                            </tr>';
                        }
                    }echo'
                            
                    </tbody> 
                </table> 
            </div>
        </div>
    </body>
</html>';
}
?>
