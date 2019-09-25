<?php
if(isset($_POST['login'])){
    include('../db.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query = mysqli_query($con, "SELECT * FROM data_pengguna WHERE username='$username' Limit 1") or die(mysqli_error($con));
    if(mysqli_num_rows($query) == 0){
        echo '<script>alert("Username not found"); window.location = "../index.php"</script>';
    }else{
        $user = mysqli_fetch_assoc($query);
        if($user['status_aktif']=='1')
        {
            if(password_verify($password,$user['password'])){
            //if($password==$user['password']){
                session_start();
                $_SESSION['isLogin'] = true;
                $_SESSION['user'] = $user;
                echo '<script>alert("success"); window.location = "../us_dashboard"</script>';
            }else{
                echo '<script>alert("Username or password invalid '.$password.'"); window.location = "../index.php"</script>';
            }
        }else{
            echo '<script>window.location = "../verification_page.php?username='.$username.'"</script>';
        }
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>