<?php
session_start();
if($_SESSION['isLoginPegawai']){
    include "../pg_layout/pg_dashboard.php";
    $pesanan = mysqli_query($con, "SELECT * FROM data_pesanan") or die(mysqli_error($con));
    

    echo'
    <div style="margin-top:7%">
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
                        <th scope="col">TANGGAL</th>
                        <th scope="col">USERNAME</th> 
                        <th scope="col">NO TELP</th> 
                        <th scope="col">ALAMAT</th> 
                        <th scope="col">PAKET</th>
                        <th scope="col">BERAT</th>  
                        <th scope="col">TOTAL HARGA</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">AKSI</th>  
                        </tr> 
                    </thead> 
                    <tbody> 
                    ';if(mysqli_num_rows($pesanan) == 0){
                        echo '<tr class="table-success">
                            <td colspan="9">Tidak Ada data</td>';
                    }else{
                        while($row = mysqli_fetch_array($pesanan))
                        {
                        echo '<tr class="table-success"> 
                                <td name="id">'.$row['id'].'</td> 
                                <td>'.$row['tanggal'].'</td> 
                                <td>'.$row['username'].'</td> 
                                <td>'.$row['telepon'].'</td> 
                                <td>'.$row['alamat'].'</td>
                                <td>'.$row['paket'].'</td>
                                <td>'.$row['berat'].'</td>
                                <td>'.$row['harga'].'</td>
                                <td>'.$row['status'].'</td>
                                <td><a class="btn btn-primary" href="../pg_dashboard/edit_pesanan.php?id='.$row['id'].'" role="button">Edit Pesanan</a>
                                </td>
                            </tr>';}
                    }echo'
                            
                    </tbody> 
                </table> 
            </div>
            </div>
        </body>
        <script>
        function updatePesanan(var ids){
            var sel = document.getElementByName("status");
            var opt = sel.options[sel.selectedIndex].text;
            
            location.href = "../proses_pg/ubah_pesanan.php?id=ids&status=opt";
        }
        </script>
    </html>';
}
?>
