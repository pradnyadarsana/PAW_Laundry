<?php
if(isset($_POST['login'])){
    include('../db.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($con, "SELECT * FROM data_pegawai WHERE username = '$username' Limit 1") or die(mysqli_error($con));
    if(mysqli_num_rows($query) == 0){
        echo '<script>alert("Username not found"); window.location = "../pg_login.php"</script>';
    }else{
        $pegawai = mysqli_fetch_assoc($query);
        if($password==$pegawai['password']){
            session_start();
            $_SESSION['isLoginPegawai'] = true;
            $_SESSION['pegawai'] = $pegawai;
            echo '<script>alert("success"); window.location = "../pg_dashboard"</script>';
        }else{
            echo '<script>alert("Username or password invalid"); window.location = "../pg_login.php"</script>';
        }
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>