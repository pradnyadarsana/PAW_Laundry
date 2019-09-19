<?php
session_start();
if($_SESSION['isLoginPegawai']){
    include "../pg_layout/pg_dashboard.php";
    echo '
    <title>Tambah Paket - PAW Laundry</title>

        <div class="jumbotron full-transparent mb-0">
            <div class="container">
                <div class="mt-5 text-center">
                    <h1 class="display-4">Tambah Paket</h1>
                </div>
                <hr class="my-5">
                <div>
                    <form class="container pt-2" data-spy="scroll" data-target="#navbar" action="../proses_pg/create_paket.php" method="post">
                        <div class="form-row justify-content-center">
                            <div class="form-group col-md-6">
                                <div class="form-row justify-content-center">
                                    <div class="form-group col-md-12">
                                        <label for="nama_paket">Nama Paket</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Nama Paket" required="required">
                                    </div>
                                </div>
                                <div class="form-row justify-content-between">
                                    <div class="form-group col-md-12">
                                        <label for="lama">Lama</label>
                                        <input type="text" class="form-control" name="lama" placeholder="lama" required="required">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="harga">Harga</label>
                                        <input type="text" class="form-control" name="harga" placeholder="Harga" required="required">
                                    </div>
                                <div class="form-row justify-content-center mt-5">
                                    <div class="form-group col-md-4 text-center">
                                        <button type="submit" name="create" class="btn btn-secondary" style="margin-bottom: 40%">Konfirmasi</button>
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