<?php
session_start();
if($_SESSION['isLogin']){
    include "../us_layout/us_dashboard.php";
    $user=$_SESSION['user'];

    function active_radio_button($value,$input){
        $result =  $value==$input?'checked':'';
        return $result;
    }
    $paket = mysqli_query($con, "SELECT * FROM data_paketharga") or die(mysqli_error($con));


echo'
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
    <body id="top" class="join-page">
        <title>Tambah Pesanan - PAW Laundry</title>

        <div class="jumbotron full-transparent mb-0">
            <div class="container">
                <div class="mt-5 text-center">
                    <h1 class="display-4">Tambah Pesanan</h1>
                </div>
                <hr class="my-5">
                <div>
                    <form class="container pt-2" data-spy="scroll" data-target="#navbar" action="../proses_user/tambah_pesanan.php" method="post">
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-6">
                                <div class="form-row justify-content-center">
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" name="username" value="'.$user['username'].'" hidden="true">
                                        <input type="text" class="form-control" name="telepon" value="'.$user['telepon'].'" hidden="true">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" required="required">
                                    </div>
                                </div>
                                <div class="form-row justify-content-between">
                                    <div class="form-group col-md-6">
                                        <label for="berat">Berat (kg)</label>
                                        <input type="text" class="form-control" name="berat" placeholder="Berat" required="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="paket">Paket</label>
                                        <select class="form-control" type="text" name="paket" required>
                                        ';if(mysqli_num_rows($paket) != 0){
                                            while($row = mysqli_fetch_array($paket))
                                            {
                                                echo '<option>'.$row['nama_paket'].'<option>';  
                                            }
                                        } echo'
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row justify-content-center mt-4">
                                    <div class="form-group col-md-4 text-center">
                                        <button type="submit" name="cekTotal" class="btn btn-secondary">Cek Total</button>
                                    </div>
                                </div>
                                <div class="form-row justify-content-center">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" name="totalharga" placeholder="Total Harga">
                                    </div>
                                </div>
                                <div class="form-row justify-content-center mt-5">
                                    <div class="form-group col-md-4 text-center">
                                        <button type="submit" name="store" class="btn btn-secondary" style="margin-bottom: 40%">Konfirmasi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>';
}
?>