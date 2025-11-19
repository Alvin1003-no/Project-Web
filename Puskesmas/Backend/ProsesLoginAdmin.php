<?php

include "Service/Connection.php";

$Username = $_POST['usn'];
$Password = $_POST['pass'];

$Query = mysqli_query($Connection, "SELECT * FROM users WHERE username = '$Username' AND password = '$Password'");

if (mysqli_num_rows($Query) != 0) {
    $GetRow = mysqli_fetch_assoc($Query);

    session_start();
    $_SESSION['id'] =  $GetRow['id'];
    $_SESSION['role'] = $GetRow['role'];
    $_SESSION['login'] = $Username;
    if ($GetRow['role'] == 'admin') {
        echo '
    
        <script>
        alert("Selamat Datang Kembali! - Login Berhasil");
        location.href="Dashboard.php";
        </script>
    ';
    exit();
    } else if ($GetRow['role'] == 'user') {
        echo '
        <script>
        alert("404 Not Found Username Tidak Ditemukkan - Login Gagal");
        location.href="LoginAdmin.php";
        </script>
    ';
    exit();
    } else {
        echo '
        <script>
        alert("Pastikan Username & Password Benar - Login Gagal!");
        location.href="LoginAdmin.php"
        </script>
    ';
    exit();

    }
}