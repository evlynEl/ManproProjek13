<?php
include '../config.php';

$tanda = $_POST['tanda'];

if ($tanda == 'status_dosen'){
    $nama_mhs = $_POST['nama_mhs'];
    $nama_dosen = $_POST['nama_dosen'];
    $sql = "SELECT * FROM data_mahasiswa WHERE mahasiswa LIKE '%$nama_mhs%' AND ketua_penguji LIKE '%$nama_dosen%'";
    $result = mysqli_query($conn, $sql);
    $status = '';

    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0){
        $status = "Ketua Penguji";
        echo $status;
    }
    else{
        $sql = "SELECT * FROM data_mahasiswa WHERE mahasiswa LIKE '%$nama_mhs%' AND anggota_penguji LIKE '%$nama_dosen%'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0){
            $status = "Anggota Penguji";
            echo $status;
        }
        else{
            $sql = "SELECT * FROM data_mahasiswa WHERE mahasiswa LIKE '%$nama_mhs%' AND pembimbing_1 LIKE '%$nama_dosen%'";
            $result = mysqli_query($conn, $sql);
    
            if (mysqli_num_rows($result) > 0){
                $status = "Pembimbing 1";
                echo $status;
            }
            else{
                $sql = "SELECT * FROM data_mahasiswa WHERE mahasiswa LIKE '%$nama_mhs%' AND pembimbing_2 LIKE '%$nama_dosen%'";
                $result = mysqli_query($conn, $sql);
        
                if (mysqli_num_rows($result) > 0){
                    $status = "Pembimbing 2";
                    echo $status;
                }
            }
        }
    }
}

elseif($tanda == 'hitungNilai'){
    $judul_dan_abstrakValue = floatval($_POST['judul_dan_abstrakValue']);
    $bab_1_2 = floatval($_POST['bab_1_2']);
    $bab_3_4_sibValue = floatval($_POST['bab_3_4_sibValue']);
    $bab_3_4_inforValue = floatval($_POST['bab_3_4_inforValue']);
    $bukuValue = floatval($_POST['bukuValue']);
    $bab_5_kesimpulanValue = floatval($_POST['bab_5_kesimpulanValue']);
    $programValue = floatval($_POST['programValue']);

    $totalSum = $judul_dan_abstrakValue + $bab_1_2 + $bab_3_4_sibValue + $bab_3_4_inforValue + $bukuValue + $bab_5_kesimpulanValue
    + $programValue;

    $avg = number_format(floatval($totalSum / 7), 2);

    $response = array(
        'avg' => $avg,
        'totalSum' => $totalSum
    );

    // Send the response as JSON
    echo json_encode($response);
    exit;
}
elseif($tanda == 'inputNilai'){
    $nama_mhs = $_POST['nama_mhs'];
    $judul_dan_abstrakValue = floatval($_POST['judul_dan_abstrakValue']);
    $bab_1_2 = floatval($_POST['bab_1_2']);
    $bab_3_4_sibValue = floatval($_POST['bab_3_4_sibValue']);
    $bab_3_4_inforValue = floatval($_POST['bab_3_4_inforValue']);
    $bukuValue = floatval($_POST['bukuValue']);
    $bab_5_kesimpulanValue = floatval($_POST['bab_5_kesimpulanValue']);
    $programValue = floatval($_POST['programValue']);
    $nama_dosen = $_POST['nama_dosen'];

    $totalSum = $judul_dan_abstrakValue + $bab_1_2 + $bab_3_4_sibValue + $bab_3_4_inforValue + $bukuValue + $bab_5_kesimpulanValue
    + $programValue;

    $avg = number_format(floatval($totalSum / 7), 2);


    $sql ='SELECT * FROM `penilaian` WHERE mahasiswa = "'.$nama_mhs.' " ';
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    $response = array(
        'status' => 0,
        'errorlog' => 'Nilai telah sukses di input',
        'totalSum' => $totalSum,
        'avg' => $avg
        
    );
    
    
    if (mysqli_num_rows($query) > 0) {
        $response = array(
            'status' => 0,
            'errorlog' => 'Mahasiswa sudah memiliki nilai'
        );
    }
    else{
        $sql = "INSERT INTO `penilaian` (`id_penilaian`, `mahasiswa`, `cp_9_judul_abstrak`, `cp_9_bab_1_2`, `cp_4_bab_3_4_infor`,`cp_7_bab_3_4_sib`, `cp_9_buku`, `cp_8_bab_5_kesimpulan`, `cp_5_program`, `nilai_akhir`, `avg_nilai_akhir`, `dosen`) VALUES (NULL, '$nama_mhs', '$judul_dan_abstrakValue', '$bab_1_2', '$bab_3_4_inforValue', '$bab_3_4_sibValue', '$bukuValue', '$bab_5_kesimpulanValue', '$programValue', '$totalSum', '$avg', '$nama_dosen')";
        $query = mysqli_query($conn, $sql);
    }

    echo json_encode($response);
    exit;
}
?>