<?php
session_start();
if($_SESSION['isLoginPegawai'])
    include "../pg_layout/pg_dashboard.php";?>
    <title>List Paket - PAW Laundry</title>
    <div class="container">
            <div class="form-row mt-5 justify-content-center">
                <div class="form-group col-md-10">
                    <h1 class="text-center">Pesanan Anda</h1> 
                </div>
            </div>
            
            <table class="table table-striped table-primary" > 
                <thead> 
                    <tr> 
                    <th scope="col">NO</th> 
                    <th scope="col">Jenis Paket</th> 
                    <th scope="col">Lama Waktu</th> 
                    <th scope="col">Harga Per KG</th>
                    <th scope="col">Pengaturan</th>
                    </tr> 
                </thead> 
            </table>
            <?php
            $query = mysqli_query($con,"SELECT * FROM data_paketharga") or die(mysqli_error($con)); 
            if(mysqli_num_rows($query) == 0){             
                echo '<tr> <td colspan="5"> Tidak ada data ! </td></tr>';         
            }else{  
                $no = 1;             
                while($data = mysqli_fetch_assoc($query)){                 
                    echo '<tr>                         
                            <td>'.$no.'</td>                         
                            <td>'.$data['nama_paket'].'</td>                         
                            <td>'.$data['lama'].'</td>                         
                            <td>'.$data['harga'].'</td>                                             
                            <td><a href="./formedit.php?id='.$data['id'].'">Edit </a>/                             
                                <a href="../proses/deletePeserta.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus </a>
                            </td>                       
                            </tr>                 
                        ';                 
                    $no++;             
                }         
            }?>
        </div>
    </body>
</html>