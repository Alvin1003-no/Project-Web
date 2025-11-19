<?php

session_start();
session_destroy();

echo'
    <script>
    alert("Berhasil Logout!")
    location.href="LoginAdmin.php"
    </script>


';
?>