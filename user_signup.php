<?php
include './dashboard.php';
echo'
<title>Sign Up - PAW Laundry</title>

    <div class="background-login"></div>
        <div class="container" style="margin-top: 10%">
            <div class="form-row mt-5 justify-content-center">
                <div class="form-group col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form action="./proses_user/create_user.php" method="post">
                                <div class="form-group text-center mt-4 mb-5">
                                    <h3>Sign Up Pengguna</h3>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label for="telp">Nomor Telepon</label>
                                    <input type="text" class="form-control" name="telp" placeholder="Nomor Telepon">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="tanggalLahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal lahir">
                                </div>
                                <div class="form-group ml-2">
                                    <div class="form-row">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                    </div>
                                    <div class="form-row pt-1">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="0">
                                            <label class="form-check-label" for="laki">Laki-laki</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="1">
                                            <label class="form-check-label" for="perempuan">Perempuan</label>
                                        </div>
                                    </div>  
                                </div>   
                                <center><button name="store" type="submit" value="Sign Up" class="btn btn-primary">Sign Up</button></center>

                                <small id="signup" class="form-text text-muted text-center mt-5">Sudah punya akun? <a href="./index.php">Login</a></small>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </body>
</html>';
?>