<?php
include("Service/Connection.php"); 

$nama = $_POST['nama'];
$username  = $_POST['username'];
$password  = $_POST['password'];
$ulangpass = $_POST['ulangpass'];

if ($password !== $ulangpass) {
    echo "<script>alert('Password tidak sama!'); window.history.back();</script>";
    exit();
}

$query = mysqli_query($Connection,
    "INSERT INTO users (nama,username, password)
     VALUES ('$nama','$username', '$password')"
);

if ($query) {
    header("Location: Login.php");
    exit();
} else {
    echo "Gagal register!";
}
?>

