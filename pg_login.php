<?php
include './dashboard.php';
echo'
<title>Log In - Pegawai</title>

    <div class="background-login"></div>
        <div class="container" style="margin-top: 10%">
            <div class="form-row mt-5 justify-content-between">
                <div class="form-group col-md-4 mt-5">
                    <h1 class="font-weight-bold">PAW Laundry</h1>
                    <p class="mt-4">Lakukan dengan sepenuh hati.</p>
                </div>
                <div class="form-group col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <form>
                                <div class="form-group text-center mt-4 mb-5">
                                    <h3>Log In Pegawai</h3>
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

                                <small id="signup" class="form-text text-muted text-center mt-5">Bukan pegawai? <a href="./user_login.php">Login disini</a></small>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </body>
</html>';
?>