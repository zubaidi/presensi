<?php

    require_once('database.php');

    $query = 'SELECT * FROM tbsiswa';

    $sql = mysqli_query($db_connect, $query);

    if ($sql){
        $result = array();
        while($row = mysqli_fetch_array($sql)){
            array_push($result, array([
                "nis" => $row["nis"],
                "nama_siswa" => $row["nama_siswa"],
                "kelas" => $row["kelas"],
                "tanggal" => $row["tanggal_presensi"],
                "jam_masuk" => $row["jam_masuk"],
                "jam_pulang" => $row["jam_pulang"],
            ]));
        }
        
        echo json_encode (array('data' => $result));
    }

?>