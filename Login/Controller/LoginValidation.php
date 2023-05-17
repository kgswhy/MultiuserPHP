<?php
session_start();

include '../config/config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' and password='$password'");
$check = mysqli_num_rows($data);

if($check > 0){
    $data = mysqli_fetch_assoc($data);

    if($data['level'] == "1"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "1";
        header("location:../page/admin/index.php");
    }else if($data['level'] == "0"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "0";
        header("location:../page/user/index.php");
    }else{
        header("location:../index.php?pesan=gagal");
    }
}else{
    header("location:../index.php?pesan=gagal");
}

?>