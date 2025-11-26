<?php
include "Service/Connection.php";

session_start();

if (isset($_GET['redirect'])) {
    $_SESSION['redirect'] = $_GET['redirect'];
}


$Username = $_POST['usn'];
$Password = $_POST['pass'];

$Query = mysqli_query(
    $Connection,
    "SELECT * FROM users WHERE username = '$Username' AND password = '$Password'"
);

if (mysqli_num_rows($Query) != 0) {

    $GetRow = mysqli_fetch_assoc($Query);

    $_SESSION['id'] =  $GetRow['id'];
    $_SESSION['role'] = $GetRow['role'];
    $_SESSION['login'] = $Username;

    if ($GetRow['role'] == 'admin') {
        echo '
        <script>
        alert("Selamat Datang Kembali! - Login Berhasil");
        location.href="Dashboard.php";
        </script>';
        exit();
    }

    if ($GetRow['role'] == 'user') {

        // Cek redirect tujuan
        if (isset($_SESSION['redirect']) && $_SESSION['redirect'] == "pasienbaru") {
            echo '
            <script>
            alert("Selamat Datang , Kami Akan Membantu Anda Dalam Proses Pendaftaran Pasien Baru - Login Berhasil");
            location.href="FormPasienBaru.php";
            </script>';
            exit();
        }

        if (isset($_SESSION['redirect']) && $_SESSION['redirect'] == "medicalcheckup") {
            echo '
            <script>
            alert("Selamat Datang , Kami Akan Membantu Anda Dalam Proses Pendaftaran Medical Check Up - Login Berhasil");
            location.href="FormMedicalCheckUp.php";
            </script>';
            exit();
        }

        if (isset($_SESSION['redirect']) && $_SESSION['redirect'] == "klinikumum") {

            $poli = isset($_SESSION['poli']) ? $_SESSION['poli'] : '';

            echo '
            <script>
            alert("Selamat Datang , Kami Akan Membantu Anda Dalam Proses Antrian Dengan Mudah - Login Berhasil");
            location.href="FormKlinikUmum.php?poli=' . urlencode($poli) . '";
            </script>';
            exit();
            // urlencode adalah fungsi untuk mengubah format teks menjadi format yang aman karena
            // url tidak boleh mengandung karakter , atau spasi
            // location.href itu nantinya akan membawa poli tujuan dari login ke form form yang akan dituju
        }

        if(isset($_SESSION['redirect']) && $_SESSION['redirect'] == "ibuanak"){

            $poli = isset($_SESSION['poli']) ? $_SESSION['poli'] : '';

            echo '
            <script>
            alert("Selamat Datang , Kami Akan Membantu Anda Dalam Proses Antrian Dengan Mudah - Login Berhasil");
            location.href="FormIbuAnak.php?poli=' . urldecode($poli) . '";
            </script>';
            exit();
        }

        if(isset($_SESSION['redirect']) && $_SESSION['redirect'] == "checkup"){

            $poli = isset($_SESSION['poli']) ? $_SESSION['poli'] : '';

            echo '
            <script>
            alert("Selamat Datang , Kami Akan Membantu Anda Dalam Proses Antrian Dengan Mudah - Login Berhasil");
            location.href="FormCheckUp.php?poli=' . urldecode($poli) . '";
            </script>';
            exit();
        }
    }
} else {
    echo '
    <script>
    alert("Pastikan Username & Password Benar - Login Gagal!");
    location.href="Login.php";
    </script>';
    exit();
}
