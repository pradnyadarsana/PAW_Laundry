<?php
session_start();
if($_SESSION['isLogin']){
    include "../us_layout/us_dashboard.php";
    $user=$_SESSION['user'];

    function active_radio_button($value,$input){
        $result =  $value==$input?'checked':'';
        return $result;
    }

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
    </head>
    <body id="top" class="join-page">
        <title>Tambah Pesanan - PAW Laundry</title>

        <div class="jumbotron full-transparent mb-0">
            <div class="container">
                <div class="mt-5 text-center">
                    <h1 class="display-4">Ubah Pesanan</h1>
                </div>
                <hr class="my-5">
                <div>
                    <form class="container pt-2" data-spy="scroll" data-target="#navbar">
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-6">
                                <div class="form-row justify-content-center">
                                    <div class="form-group col-md-12">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" placeholder="Name" required="required">
                                    </div>
                                </div>
                                <div class="form-row justify-content-between">
                                    <div class="form-group col-md-6">
                                        <label for="berat">Berat (kg)</label>
                                        <input type="text" class="form-control" name="berat" placeholder="Berat" required="required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="paket">Paket</label>
                                        <select class="form-control" type="text" name="sesi"  required>
                                            <option value="1">1</option> 
                                            <option value="2">2</option> 
                                            <option value="3">3</option>
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
                                        <button type="submit" name="update" class="btn btn-secondary" style="margin-bottom: 40%">Konfirmasi</button>
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
</html>'
    }
?