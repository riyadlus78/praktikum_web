<?php
session_start();

$usernameBenar = "admin";
$passwordBenar = "123";

$username = $_POST['username'];
$password = $_POST['password'];

if($username == $usernameBenar && $password == $passwordBenar){

    $_SESSION['login'] = true;

    header("Location: form_text.php");

}else{

    echo "<h2>Login Gagal</h2>";
    echo "Username atau Password salah";

}
?>