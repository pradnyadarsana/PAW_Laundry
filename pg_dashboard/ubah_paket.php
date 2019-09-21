<?php

if (isset($_GET['id'])) {
    include '../pg_layout/pg_dashboard.php';
    include('../db.php');
    $id = $_GET['id'];
}

$query = mysqli_query($con, "SELECT * FROM data_paketharga WHERE id='$id'") or die(mysqli_error($con));
$data = mysqli_fetch_assoc($query);
?>
        <title>Tambah Paket - PAW Laundry</title>

        <div class="jumbotron full-transparent mb-0">
            <div class="container">
                <div class="mt-5 text-center">
                    <h1 class="display-4">Edit Paket</h1>
                </div>
                <hr class="my-5">
                <div>
                <?php echo' <form action="../proses_pg/edit_paket.php" method="post" class="container pt-2" data-spy="scroll" data-target="#navbar">';?>
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-6">
                                <div class="form-row justify-content-center">
                                    <div class="form-group col-md-12">
                                        <label for="nama_paket">Nama Paket</label>
                                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                        <input type="text" class="form-control" name="nama" value="<?php echo $data['nama_paket']; ?>">
                                    </div>
                                </div>
                                <div class="form-row justify-content-between">
                                    <div class="form-group col-md-12">
                                        <label for="lama">Lama (Hari)</label>
                                        <input type="text" class="form-control" name="lama" value="<?php echo $data['lama']; ?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="harga">Harga per KG</label>
                                        <input type="text" class="form-control" name="harga" value="<?php echo $data['harga']; ?>">
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
</html>