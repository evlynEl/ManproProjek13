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
    $cp1Value = floatval($_POST['cp1Value']);
    $cp2 = floatval($_POST['cp2']);
    $cp3 = floatval($_POST['cp3']);
    $cp4 = floatval($_POST['cp4']);
    $cp5 = floatval($_POST['cp5']);
    $cp6 = floatval($_POST['cp6']);
    $cp7 = floatval($_POST['cp7']);

    $totalSum = $cp1Value + $cp2 + $cp3 + $cp4 + $cp5 + $cp6
    + $cp7;

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
    $cp1Value = floatval($_POST['cp1Value']);
    $cp2 = floatval($_POST['cp2']);
    $cp3 = floatval($_POST['cp3']);
    $cp4 = floatval($_POST['cp4']);
    $cp5 = floatval($_POST['cp5']);
    $cp6 = floatval($_POST['cp6']);
    $cp7 = floatval($_POST['cp7']);
    $nama_dosen = $_POST['nama_dosen'];

    $totalSum = $cp1Value + $cp2 + $cp3 + $cp4 + $cp5 + $cp6
    + $cp7;

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
        $sql = "INSERT INTO `penilaian` (`id_penilaian`, `mahasiswa`, `cp1`, `cp2`, `cp3`,`cp4`, `cp5`, `cp6`, `cp7`, `nilai_akhir`, `avg_nilai_akhir`, `dosen`) VALUES (NULL, '$nama_mhs', '$cp1Value', '$cp2', '$cp4', '$cp3', '$cp5', '$cp6', '$cp7', '$totalSum', '$avg', '$nama_dosen')";
        $query = mysqli_query($conn, $sql);
    }

    echo json_encode($response);
    exit;
}
?>