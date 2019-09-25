<?php
session_start();
if ($_SESSION['isLoginPegawai'] && isset($_GET['id'])) {
    include '../pg_layout/pg_dashboard.php';
    $user = $_SESSION['pegawai'];
    $id = $_GET['id'];


    $query = mysqli_query($con, "SELECT * FROM data_pesanan WHERE id='$id'") or die(mysqli_error($con));
    $data = mysqli_fetch_assoc($query);
    //$paket = mysqli_query($con, "SELECT * FROM data_paketharga") or die(mysqli_error($con));
    $status = ["Belum diproses", "Sedang diproses", "Pesanan selesai"];

    echo'
    <div class="jumbotron full-transparent mb-0">
        <div class="container">
            <div class="mt-5 text-center">
                <h1 class="display-4">Konfirmasi Pesanan</h1>
            </div>
            <hr class="my-5">
            <div>
                <form class="container pt-2" data-spy="scroll" data-target="#navbar" action="../proses_pg/ubah_pesanan.php" method="post">
                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-6">
                            <div class="form-row justify-content-center">
                                <h3>'.$id.'</h3>
                            </div>
                            <div class="form-row justify-content-center">
                                <h6>'.$data['tanggal'].'</h6>
                            </div>
                            <div class="form-row justify-content-center">
                                <h4>'.$data['username'].'</h4>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" name="id" value="'.$id.'" hidden="hidden">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="'.$data['alamat'].'" required="required" disabled>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-6">
                                    <label for="berat">Berat (kg)</label>
                                    <input type="text" class="form-control" name="berat" placeholder="Berat" value="'.$data['berat'].'" required="required" disabled>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="paket">Paket</label>
                                    <input class="form-control" type="text" name="paket" value="'.$data['paket'].'" required disabled> 
                                    </select>
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="totalharga" value="'.$data['harga'].'" placeholder="Total Harga" disabled>
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="form-group col-md-6">
                                    <select class="form-control" type="text" name="status">';
                                    foreach ($status as $stat){
                                        if($stat==$data['status']){
                                            echo'<option selected="selected">'.$stat.'<option>';
                                        }else
                                        {
                                            echo'<option>'.$stat.'<option>';
                                        }
                                    } echo'</select>
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
        </body>
    </html>';
    }
?>