<?php

include "Service/Connection.php";

if(isset($_GET['id_checkup']))
{
    $ID = mysqli_real_escape_string($Connection , $_GET['id_checkup']);
    $Query = "DELETE FROM medical_checkup WHERE id_checkup='$ID'";

    if (mysqli_query($Connection , $Query)) {
        echo '
        
        <script>
        alert("Berhasil Menghapus Data");
        location.href="CrudCheckUp.php";
        </script>
        
        ';
    } else {
        echo "<script>alert('Gagal Menghapus Data: " . mysqli_error($Connection) . "');</script>";
    }
}

?>