<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "zerohunger";

    $conn = mysqli_connect($host, $user, $password, $dbname);

    if ($conn->connect_error) {
        die("Koneksi ke database gagal: " . $conn->connect_error);
    }

?>