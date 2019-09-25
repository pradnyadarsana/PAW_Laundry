<?php
session_start();
if($_SESSION['isLoginPegawai'])
    include "../pg_layout/pg_dashboard.php";
    $query = mysqli_query($con,"SELECT * FROM data_paketharga") or die(mysqli_error($con)); 
    echo'
    <div style="margin-top:7%">
            <div class="container">
                <div class="form-row mt-5 justify-content-between">
                    <div class="form-group col-md-10">
                        <h1 class="text-center">List Paket</h1> 
                    </div>
                </div>
                <table class="table table-striped table-primary"> 
                    <thead> 
                        <tr> 
                            <th scope="col">NO</th> 
                            <th scope="col">Jenis Paket</th> 
                            <th scope="col">Lama Waktu (Hari)</th> 
                            <th scope="col">Harga Per KG</th>
                            <th scope="col">Pengaturan</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                    ';if(mysqli_num_rows($query) == 0){
                        echo '<tr class="table-success">
                            <td colspan="5">Tidak Ada data</td>';
                    }else{
                        $no=1;
                        while($row = mysqli_fetch_array($query))
                        {
                            echo '<tr class="table-success"> 
                                <td>'.$no.'</td> 
                                <td>'.$row['nama_paket'].'</td> 
                                <td>'.$row['lama'].'</td> 
                                <td>'.$row['harga'].'</td> 
                                <td><a class="btn btn-primary" href="./ubah_paket.php?id='.$row['id'].'" role="button">Edit</a>
                                <a class="btn btn-primary" href="../proses_pg/delete_paket.php?id='.$row['id'].'" role="button">Delete</a>
                                </td>
                            </tr>';
                            $no++;
                        }
                    }echo'
                            
                    </tbody> 
                </table> 
            </div>
            </div>
        </body>
    </html>';
?>

    