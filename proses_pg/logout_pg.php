<?php
    ob_start();
    session_start();
    session_destroy();

    header("location: ../pg_login.php");
?>