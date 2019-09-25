<?php
session_start();

if($_GET['status']!="Belum diproses"){
    echo '<script>alert("Anda tidak dapat mengubah pesanan yang telah diproses"); window.location ="../us_dashboard/tampil_pesanan.php"</script>';
}else{
    if ($_SESSION['isLogin'] && isset($_GET['id'])) {
    include '../us_layout/us_dashboard.php';
    $user = $_SESSION['user'];
    $id = $_GET['id'];


    $query = mysqli_query($con, "SELECT * FROM data_pesanan WHERE id='$id'") or die(mysqli_error($con));
    $data = mysqli_fetch_assoc($query);
    $paket = mysqli_query($con, "SELECT * FROM data_paketharga") or die(mysqli_error($con));

    echo'
    <div class="jumbotron full-transparent mb-0">
        <div class="container">
            <div class="mt-5 text-center">
                <h1 class="display-4">Ubah Pesanan</h1>
            </div>
            <hr class="my-5">
            <div>
                <form class="container pt-2" data-spy="scroll" data-target="#navbar" action="../proses_user/edit_pesanan.php" method="post">
                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-6">
                            <div class="form-row justify-content-center">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" name="id" value="'.$id.'" hidden="hidden">
                                    <input type="text" class="form-control" name="status" value="'.$data['status'].'" hidden="hidden">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="'.$data['alamat'].'" required="required">
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="form-group col-md-6">
                                    <label for="berat">Berat (kg)</label>
                                    <input type="text" class="form-control" name="berat" placeholder="Berat" value="'.$data['berat'].'" required="required">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="paket">Paket</label>
                                    <select class="form-control" type="text" name="paket" required>
                                    ';if(mysqli_num_rows($paket) != 0){
                                        while($row = mysqli_fetch_array($paket))
                                        {
                                            if($row['nama_paket']==$data['paket'])
                                            {
                                                echo '<option  selected="selected">'.$row['nama_paket'].'<option>';  
                                            
                                            }else{
                                                echo '<option>'.$row['nama_paket'].'<option>';  
                                            }
                                            
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
                                    <input type="text" class="form-control" name="totalharga" value="'.$data['harga'].'" placeholder="Total Harga">
                                </div>
                            </div>
                            <div class="form-row justify-content-center mt-5">
                                <div class="form-group col-md-4 text-center">
                                    <button type="submit" name="update" class="btn btn-secondary" style="margin-bottom: 40%">Ubah</button>
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
}

?>