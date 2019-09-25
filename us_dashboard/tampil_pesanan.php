<?php
session_start();
if($_SESSION['isLogin']){
    include "../us_layout/us_dashboard.php";
    $user=$_SESSION['user'];

    function active_radio_button($value,$input){
        $result =  $value==$input?'checked':'';
        return $result;
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="img/icon/logo.jpg">
        
    </head>
    <body id="top" class="contact-page">
    <title>List Pesanan - PAW Laundry</title>
    <div class="container">
            <div class="form-row mt-5 justify-content-center">
                <div class="form-group col-md-10">
                    <h1 class="text-center">Pesanan Anda</h1> 
                </div>
            </div>
            
            <table class="table table-striped table-primary" > 
                <thead> 
                    <tr>
                    <th scope="col">ID PESANAN</th>
                    <th scope="col">USERNAME</th>
                    <th scope="col">TELEPON</th>
                    <th scope="col">ALAMAT</th> 
                    <th scope="col">PAKET</th> 
                    <th scope="col">BERAT (KG)</th> 
                    <th scope="col">HARGA</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">JAM/TANGGAL</th>
                    <th scope="col">PENGATURAN</th> 
                    </tr> 
                </thead> 
                <tbody> 
                    <?php
                    $query = mysqli_query($con,"SELECT * FROM data_pesanan") or die(mysqli_error($con)); 
                    if(mysqli_num_rows($query) == 0){             
                        echo '<tr> <td colspan="5"> Tidak ada data ! </td></tr>';         
                    }else{  
                        $no = 1;             
                        while($data = mysqli_fetch_assoc($query)){                 
                            echo '<tr>                         
                                    <td>'.$no.'</td>
                                    <td>'.$data['id'].'</td>                        
                                    <td>'.$data['username'].'</td>                         
                                    <td>'.$data['telepon'].'</td>                         
                                    <td>'.$data['alamat'].'</td>           
                                    <td>'.$data['paket'].'</td>                         
                                    <td>'.$data['berat'].'</td>                         
                                    <td>'.$data['harga'].'</td>                        
                                    <td>'.$data['status'].'</td>                         
                                    <td>'.$data['tanggal'].'</td>                                            
                                    <td><a href="../proses_user/edit_pesanan.php?id='.$data['id'].'">Edit </a>/                             
                                        <a href="../proses_user/hapus_pesanan.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus </a>
                                    </td>                       
                                    </tr>                 
                                ';                 
                            $no++;             
                        }         
                    }?>
                </tbody>
            </table> 
        </div>
        

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>