<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DB', 'dbpresensi');

    $db_connect = mysqli_connect(HOST, USER, PASS, DB) or die('Koneksi ke database gagal');

    header('Content-Type: application/json');

?>