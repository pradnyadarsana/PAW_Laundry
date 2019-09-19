<?php
include('./dashboard.php');
include('./db.php');
$username = $_GET['username'];
$query = mysqli_query($con,"SELECT * FROM data_pengguna WHERE username='$username'")or die(mysqli_error($con));

if($data = mysqli_fetch_array($query)){

    $username = $data['username'];
    $email = $data['email'];
    $verif_code = $data['kode_verif'];

    $to 	= $email;
    $judul 	= 'Sign Up | Verifikasi';
    $dari	= 'From: pawlaundry@gmail.com' . "\r\n";

    $pesan	= '
    Terima kasih sudah ingin bergabung bersama kami!
    Akun anda telah dibuat, kamu bisa login setelah melakukan verifikasi dengan memberikan kode di bawah ini.
    
    ------------------------
    Username: '.$username.'
    Email: '.$email.'
    ------------------------
     
    Kode Verifikasi : '.$verif_code.'
     
    ';


    $kirim	= mail($to, $judul, $pesan, $dari);

    if($kirim){
    echo'
        <title>Sign Up - PAW Laundry</title>

            <div class="background-login"></div>
                <div class="container" style="margin-top: 10%">
                    <div class="form-row mt-5 justify-content-center">
                        <div class="form-group col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <form action="./proses_user/email_verification.php" method="post">
                                        <div class="form-group text-center mt-4 mb-5">
                                            <h3>Masukan Kode Verifikasi</h3>
                                            <h6>Email anda belum terverifikasi</h6>
                                            <p>Kami telah mengirimkan email verifikasi ke alamat email anda.</p>
                                        </div>
                                        <div class="form-group">
                                            <h6>'.$data['email'].'<h6>
                                            <p>'.$data['username'].'<p>
                                        </div>
                                        <div class="form-group">
                                                <label for="kode">Email</label>
                                                <input type="text" class="form-control" name="email" value="'.$data['email'].'">
                                        </div>
                                        <div class="form-group">
                                                <label for="kode">Username</label>
                                                <input type="text" class="form-control" name="username" value="'.$data['username'].'">
                                        </div>
                                        <div class="form-group">
                                                <label for="kode">Kode Verifikasi</label>
                                                <input type="text" class="form-control" name="kode" placeholder="Kode Verifikasi">
                                        </div>

                                        <center><button name="verification" type="submit" value="signup" class="btn btn-primary">Submit</button></center>

                                        <small id="signup" class="form-text text-muted text-center mt-5">Email salah? <a href="./user_signup.php">Daftar kembali</a></small>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </body>
        </html>';
    }
}
?>