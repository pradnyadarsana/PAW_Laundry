<?php
include('../db.php');
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];


$to 	= 'pawlaundry1@gmail.com';
$judul 	= 'Feedback User';
$dari	= $email . "\r\n";

$pesan	= $message;


$kirim	= mail($to, $judul, $pesan, $dari);
if($kirim)
{
    echo '<script>alert("success"); window.location = "../us_dashboard/index.php"</script>';
}