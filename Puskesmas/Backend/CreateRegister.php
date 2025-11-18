<?php
include("Service/Connection.php"); 

$username  = $_GET['username'];
$password  = $_GET['password'];
$ulangpass = $_GET['ulangpass'];

if ($password !== $ulangpass) {
    echo "<script>alert('Password tidak sama!'); window.history.back();</script>";
    exit();
}

$query = mysqli_query($Connection,
    "INSERT INTO users (username, password)
     VALUES ('$username', '$password')"
);

if ($query) {
    header("Location: LoginUser.php");
    exit();
} else {
    echo "Gagal register!";
}
?>
