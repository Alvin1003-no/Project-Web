<?php

include "Service/Connection.php";

if(isset($_GET['id_pasien']))
{
    $ID = mysqli_real_escape_string($Connection , $_GET['id_pasien']);
    $Query = "DELETE FROM pasien_baru WHERE id_pasien='$ID'";

    if (mysqli_query($Connection , $Query)) {
        echo '
        
        <script>
        alert("Berhasil Menghapus Data");
        location.href="CrudPasien.php";
        </script>
        
        ';
    } else {
        echo "<script>alert('Gagal Menghapus Data: " . mysqli_error($Connection) . "');</script>";
    }
}

?>