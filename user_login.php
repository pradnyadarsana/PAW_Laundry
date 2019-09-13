<?php
include './dashboard.php';
echo'
    <body style="background-color: whitesmoke">
        <div class="container" style="margin-top: 10%">
            <div class="form-row mt-5">
                <div class="form-group col-md-6 mt-5">
                    <h1 class="font-weight-bold">PAW Laundry</h1>
                    <p class="mt-4">marilah seluruh rakyat Indonesia k</p>
                </div>
                <div class="form-group col-md-6">
                    <div class="card">
                        <div class="card-body">
                        <form>
                                <div class="form-group text-center">
                                    <h3>Log In Pengguna</h3>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="Enter username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <center><button type="submit" class="btn btn-primary">Log In</button></center>

                                <small id="signup" class="form-text text-muted text-center mt-4">Belum punya akun? <a href="./user_signup.html">Sign Up</a></small>

                                <small id="pg-login" class="form-text text-muted text-center mt-4">Pegawai? <a href="./pg_login.html">Login disini</a></small>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </body>
</html>';
?>