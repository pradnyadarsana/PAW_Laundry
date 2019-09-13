<?php
include './dashboard.php';
echo'
<title>Log In - PAW Laundry</title>

    <div class="background-login"></div>
        <div class="container" style="margin-top: 10%">
            <div class="form-row mt-5 justify-content-between">
                <div class="form-group col-md-4 mt-5">
                    <h1 class="font-weight-bold">PAW Laundry</h1>
                    <p class="mt-4">Bila anda ngantuk, atau anda sibuk, tak sempat cuci, laundry saja di kami.</p>
                </div>
                <div class="form-group col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form method="post">
                                <div class="form-group text-center mt-4 mb-5">
                                    <h3>Log In Pengguna</h3>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <center><button type="submit" class="btn btn-primary">Log In</button></center>

                                <small id="signup" class="form-text text-muted text-center mt-5">Belum punya akun? <a href="./user_signup.php">Sign Up</a></small>

                                <small id="pg-login" class="form-text text-muted text-center mt-4 mb-4">Pegawai? <a href="./pg_login.php">Login disini</a></small>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </body>
</html>';
?>