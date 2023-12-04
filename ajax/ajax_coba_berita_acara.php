<?php

include '../config.php';




// if ($_SERVER['REQUEST_METHOD'] == 'POST')
// {
    $namaMhs = $_POST['nama_nrp'];
    $tanda = $_POST['tanda'];
    if($tanda == 'tampil_nilai'){
        if (!empty($namaMhs)) {
            $sql_nilai = "SELECT * FROM penilaian WHERE mahasiswa LIKE '%$namaMhs%'";
            $result_nilai = mysqli_query($conn, $sql_nilai);

            if(mysqli_num_rows($result_nilai) > 0){
                $sum_nilai_akhir = 0;
                $count_nilai = 0;

                while($row = mysqli_fetch_assoc($result_nilai)) {
                    $nilai_akhir = $row['nilai_akhir'];
                    $sum_nilai_akhir += $nilai_akhir;
                    $count_nilai++;
                }
        
                $average_nilai_akhir = ($count_nilai > 0) ? $sum_nilai_akhir / $count_nilai : 0;

                if($average_nilai_akhir>=85.5){
                    $nilai_alphabet="A";
                    $hasil_sidang="Lulus";
                
                }
                elseif($average_nilai_akhir>= 75.5){
                    $nilai_alphabet="B+";
                    $hasil_sidang="Lulus";
                
                }
                elseif($average_nilai_akhir>= 68.5){
                    $nilai_alphabet="B";
                    $hasil_sidang="Lulus";
                
                }
                elseif($average_nilai_akhir>= 60.5){
                    $nilai_alphabet="C+";
                    $hasil_sidang="Lulus";
                    
                }
                elseif($average_nilai_akhir>= 55.5){
                    $nilai_alphabet="C";
                    $hasil_sidang="Lulus";
                
                }
                elseif($average_nilai_akhir>= 40.5){
                    $nilai_alphabet="D";
                    $hasil_sidang="Tidak Lulus";
                
                }
                else{
                    $nilai_alphabet="E";
                    $hasil_sidang="Tidak Lulus";
                }

                echo "<b>Nilai Akhir</b>: " . $average_nilai_akhir . "<br>";
                echo "<b>Hasil Sidang</b>: ". $nilai_alphabet . "  (". $hasil_sidang .").";
            } else {
                echo "No records found for the specified student.";
            }
        } else {
            echo "Please select a valid student name.".$nama_mhs." ";
        }
    }
    elseif($tanda == 'add_click'){
        $response=[];
        $ketuapenguji = $_POST['ketuaPenguji'];
        $dosenpenguji = $_POST['dosenPenguji'];
        $pembimbing1 = $_POST['pembimbing1'];
        $pembimbing2 = $_POST['pembimbing2'];

        $sql_check_dosen = "SELECT * FROM penilaian WHERE mahasiswa LIKE '%$namaMhs%'";
        $result_check_dosen = mysqli_query($conn, $sql_check_dosen);

        $count_true=0;
        $nilai_true=0;

        if (mysqli_num_rows($result_check_dosen) > 0) {
            while ($row = mysqli_fetch_assoc($result_check_dosen)) {
                $daftar_dosen = $row['dosen'];
                $nilai_akhir = $row['nilai_akhir'];
                if ($ketuapenguji == $daftar_dosen || $dosenpenguji == $daftar_dosen || $pembimbing1 == $daftar_dosen || $pembimbing2 == $daftar_dosen) {
                    $count_true++;
                }
                if (!empty($nilai_akhir) && ($ketuapenguji == $daftar_dosen || $dosenpenguji == $daftar_dosen || $pembimbing1 == $daftar_dosen || $pembimbing2 == $daftar_dosen_)) {
                    $nilai_true++;
                }
            }
            if ($nilai_true != $count_true) { //cek dosen yg blom input nilai
                $response['message'] = "Masih Ada Dosen Yang Belum Mengisi";
                $response['pengisian_nilai'] = 'lengkapi_isi';
                $response['check'] = false;
                echo json_encode($response);
            }

            if ($dosenpenguji == '-') {
                $count_true++;
            }
            if ($pembimbing1 == '-') {
                $count_true++;
            }
            if ($pembimbing2 == '-') {
                $count_true++;
            }
            if ($count_true < 4) {
                $response['message'] = "Semua Dosen Masih Belum Mengisi";
                $response['pengisian_nilai'] = 'perlu_isi';
                $response['check'] = false;
                echo json_encode($response);
            }
            else{
                $response['message'] = "Berhasil";
                $response['check'] = true;
                echo json_encode($response);
            }
        } else {
            $response['message'] = "Semua Dosen Masih Belum Mengisi";
            $response['pengisian_nilai'] = false;
            echo json_encode($response);
        }
        

    }
