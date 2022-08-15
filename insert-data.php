<?php 

    require_once('database.php');

    try {
        $stmt = $db -> prepare('INSERT INTO tbsiswa(nis, nama_siswa, kelas, tanggal_presensi, jam_masuk, jam_pulang) 
                                    VALUES (:nis, :nama, :kelas, :tanggal, :masuk, :pulang)');
            $stmt -> execute([
                ':nis' => $body['nis'],
                ':nama' => $body['nama_siswa'],
                ':kelas' => $body['kelas'],
                ':tanggal' => $body['tanggal'],
                ':masuk' => $body['j_masuk'],
                ':pulang' => $body['j_pulang'],
            ]);
            http_response_code(201);
            $RESPON['status'] = 'success';
            $RESPON['data'] = [];

            echo json_encode (array('data' => $result));
    } catch (Throwable $error) {
        if ($error instanceof InvalidArgumentException){
            http_response_code(400);
        }else{
            http_response_code(500);
        }

        $RESPON['error'] = $error->getMessage();
    }

?>