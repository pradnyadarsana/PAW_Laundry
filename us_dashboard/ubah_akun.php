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
    <title>Edit Akun - PAW Laundry</title>
        <div class="jumbotron full-transparent mb-0">
            <div class="container">
                <div class="mt-5 text-left">
                    <h1 class="display-4">Ubah Data Akun</h1>
                </div>
                <hr class="my-5">
                <div>
                    <form class="container pt-2" data-spy="scroll" data-target="#navbar" action="../proses_user/update_user.php" method="post">
                        <div class="form-row justify-content-start">
                            <div class="form-group col-md-4">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Name" value="'.$user['nama'].'" required="required">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email" value="'.$user['email'].'" required="required" readonly>
                            </div>
                        </div>
                        <div class="form-row justify-content-start">
                            <div class="form-group col-md-4">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username" value="'.$user['username'].'" required="required">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                            </div>
                        </div>
                        <div class="form-row justify-content-start">
                            <div class="form-group col-md-4">
                                <label for="tanggalLahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggalLahir" placeholder="Tanggal Lahir" value="'.$user['tanggal_lahir'].'" required="required">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="telp">Nomor Telepon</label>
                                <input type="text" class="form-control" name="telp" placeholder="Nomor Telepon" value="'.$user['telepon'].'" required="required">
                            </div>
                        </div>
                        <div class="form-group col-md-5 pl-3">
                            <div class="form-row justify-content-start">
                                <label for="kelamin">Gender</label>
                            </div> 
                            <div class="form-row justify-content-start pt-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kelamin" id="laki" value="0" active_radio_button("0", '.$user['jenis_kelamin'].')>
                                    <label class="form-check-label" for="laki">Laki-Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="kelamin" id="perempuan" value="1" active_radio_button("1", '.$user['jenis_kelamin'].')>
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                </div>
                            </div> 
                        </div>
                        <div class="form-row justify-content-start">
                            <div class="form-group col-md-4 text-right">
                                <button type="submit" name="update" class="btn btn-secondary" style="margin-bottom: 40%">Konfirmasi</button>
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