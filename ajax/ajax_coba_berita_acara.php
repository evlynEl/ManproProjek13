<?php

include '../config.php';




// if ($_SERVER['REQUEST_METHOD'] == 'POST')
// {
    $namaMhs = $_POST['nama_nrp'];

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
// }