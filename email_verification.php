<?php
$username = $_POST['username'];
$query = mysqli_query($con,"SELECT * FROM data_pengguna WHERE username='$username'")or die(mysqli_error($con));

if($data = mysqli_fetch_array($query)){
    echo'
<title>Sign Up - PAW Laundry</title>

    <div class="background-login"></div>
        <div class="container" style="margin-top: 10%">
            <div class="form-row mt-5 justify-content-center">
                <div class="form-group col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form method="post">
                                <div class="form-group text-center mt-4 mb-5">
                                    <h3>Masukan Kode Verifikasi</h3>
                                </div>
                                <div class="form-group">
                                    <h6>'$data['email']'<h6>
                                    <p>'$data['username']'<p>
                                </div>
                                <div class="form-group">
                                        <label for="kode">Nama</label>
                                        <input type="text" class="form-control" name="kode" placeholder="Kode Verifikasi">
                                </div>

                                <center><button type="submit" name="verification" class="btn btn-primary">Submit</button></center>

                                <small id="signup" class="form-text text-muted text-center mt-5">Email salah? <a href="./user_signup.php">Daftar kembali</a></small>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </body>
</html>';
?>