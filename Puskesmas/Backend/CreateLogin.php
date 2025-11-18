<?php
session_start();
include("Service/Connection.php");

// Cek apakah form dikirim
if (!isset($_POST['username']) || !isset($_POST['password'])) {
    echo "Form tidak dikirim!";
    exit;
}

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($Connection,
    "SELECT * FROM users WHERE username='$username' AND password='$password'"
);

$data = mysqli_fetch_assoc($query);

if ($data) {

    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role'];

    // Karena AmbilAntrian.php ada di folder Backend (folder yang sama)
    header("Location: AmbilAntrian.php");
    exit();

} else {
    echo "<script>alert('Username atau password salah!'); window.history.back();</script>";
}
?>
