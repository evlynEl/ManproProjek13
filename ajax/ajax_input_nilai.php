<?php
include '../config.php';

$tanda = $_POST['tanda'];

if ($tanda == 'status_dosen') {
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
        //echo $status;
    }
    else{
        $sql = "SELECT * FROM data_mahasiswa WHERE mahasiswa LIKE '%$nama_mhs%' AND anggota_penguji LIKE '%$nama_dosen%'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0){
            $status = "Anggota Penguji";
            //echo $status;
        }
        else{
            $sql = "SELECT * FROM data_mahasiswa WHERE mahasiswa LIKE '%$nama_mhs%' AND pembimbing_1 LIKE '%$nama_dosen%'";
            $result = mysqli_query($conn, $sql);
    
            if (mysqli_num_rows($result) > 0){
                $status = "Pembimbing 1";
                //echo $status;
            }
            else{
                $sql = "SELECT * FROM data_mahasiswa WHERE mahasiswa LIKE '%$nama_mhs%' AND pembimbing_2 LIKE '%$nama_dosen%'";
                $result = mysqli_query($conn, $sql);
        
                if (mysqli_num_rows($result) > 0){
                    $status = "Pembimbing 2";
                    //echo $status;
                }
            }
        }
    }

    $response = array(
        'status' => $status
    );

    // Send the response as JSON
    echo json_encode($response);
    exit;
}

elseif($tanda == 'inputNilai'){
    $nama_mhs = $_POST['nama_mhs'];
    $nama_dosen = $_POST['nama_dosen'];
    $cp1 = floatval($_POST['cp1']);
    $cp2 = floatval($_POST['cp2']);
    $cp3 = floatval($_POST['cp3']);
    $cp4 = floatval($_POST['cp4']);
    $cp5 = floatval($_POST['cp5']);
    $cp6 = floatval($_POST['cp6']);

    $totalSum = floatval(($cp1 * 0.05) + ($cp2 * 0.1) + ($cp3 * 0.25) + ($cp4 * 0.1) + ($cp5 * 0.25) + ($cp6 * 0.25));

    $sql_check = "SELECT * FROM penilaian WHERE mahasiswa LIKE '%$nama_mhs%' AND dosen LIKE '%$nama_dosen%'";
    $query = mysqli_query($conn, $sql_check);

    if (mysqli_num_rows($query) < 1){
        $sql = "INSERT INTO `penilaian` (`id_penilaian`, `mahasiswa`, `cp1`, `cp2`, `cp3`,`cp4`, `cp5`, `cp6`, `nilai_akhir`, `dosen`) VALUES (NULL, '$nama_mhs', '$cp1', '$cp2', '$cp4', '$cp3', '$cp5', '$cp6', '$totalSum', '$nama_dosen')";
        $query = mysqli_query($conn, $sql);
        $pesan = "success";
    }
    else{
        $pesan = "gagal";
    }

    $response = array(
        'totalSum' => $totalSum,
        'pesan' => $pesan
    );


    // Send the response as JSON
    echo json_encode($response);
    exit;
}

?>