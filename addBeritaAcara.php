<?php
    include 'config.php';

    if(!isset($_SESSION['login'])){
        header("Location: login.php");
        exit;
    }
    $username = $_SESSION['username'];
    $sql_login = "SELECT * FROM data_dosen WHERE nip LIKE '%$username%'";
    $result_login = mysqli_query($conn, $sql_login);
    $row = mysqli_fetch_assoc($result_login);
    $getnama = $row['nama'];
    $username=$getnama;

    $nama_dosen = $username;
?>

<!DOCTYPE html
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="jquery-3.7.1.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="navbar.css">
    <title>Add Berita Acara</title>
    <style>
        .checkbox-lg .form-check-input{
        top: .8rem;
        scale: 1.4;
        margin-right: 0.7rem;
        }

        .checkbox-lg .form-check-label {
        padding-top: 13px;
        }

        .checkbox-xl .form-check-input {
        top: 1.2rem;
        scale: 1.7;
        margin-right: 0.8rem;
        }

        .checkbox-xl .form-check-label {
        padding-top: 19px;
        }

        #rectangle {
        width: 100%;
        height: 100%;
        flex-shrink: 0;
        border-radius: 6.25rem 6.25rem 0rem 0rem;
        background: white;
        margin-top:100px;
        margin-bottom: 0px;
        padding-left: 5rem;
        padding-right: 5rem;
        padding-top: 2rem;
        padding-bottom: 2rem;
        }

        
        .form-control[type="time"] {
        width: 100%; 
        padding: 10px; 
        font-size: 16px; 
        border: 1px solid #ccc; 
        border-radius: 5px; 
        background-color: #fff; 
        color: #333; 
        }

       
        .form-control[type="time"]:focus {
        border-color: #007bff; 
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.5); 
        }

        .btn.btn-outline-ocean {
        color: #fff; 
        background-color: #0B6977; 
        border: 3px solid #0B6977; 
        padding: 8px 16px; 
        font-weight: 500;
        border-radius: 5px; 
        text-decoration: none; 
        display: inline-block; 
        font-size: 16px; 
        text-align: center; 
        cursor: pointer; 
        transition: background-color 0.3s, color 0.3s, border-color 0.3s; 
        }
   
        .btn.btn-outline-ocean:hover {
            color: #0B6977; 
            background-color: #fff; 
            border-color: #0B6977; 
        }

        .btn.btn-outline-red {
        color: #fff; 
        background-color: #952323; 
        border: 3px solid #952323; 
        padding: 8px 16px; 
        font-weight: 500;
        border-radius: 5px; 
        text-decoration: none; 
        display: inline-block; 
        font-size: 16px; 
        text-align: center; 
        cursor: pointer; 
        transition: background-color 0.3s, color 0.3s, border-color 0.3s; 
        }
   
        .btn.btn-outline-red:hover {
            color: #952323; 
            background-color: #fff; 
            border-color: #952323; 
        }


        .input-selectTime {
        width: 100%;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-inout;
        }

        .input-selectTime:hover, .input-selectTime:focus {
        border-color: #007BFF;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        .error-message {
            color: red;
        }
        .is-invalid {
            border: 1px solid red !important;
        }
    </style>
</head>
<body style="background-color: #0B6977;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 10px;">
        <img class="logopcu" src="Asset\image\pcu logo.png" alt="" style="margin-right: 20px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mynav">
                <li class="nav-link">
                    <a class="text-decoration-none" aria-current="page" href="homeDosen.php">Home</a>
                </li>
                <li class="nav-link">
                    <a class="text-decoration-none" href="historySidang.php">Riwayat Sidang</a>
                </li>
                <li class="nav-link">
                    <a class="text-decoration-none" href="input_penilaian.php">Input Nilai</a>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse justify-content-end" style="margin-right: 50px;">
            <ul class="navbar-nav mynav" style="margin-right: 10px;">
                <li class="nav-item dropdown">
                    <a class="nav-item dropdown-toggle text-decoration-none" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="Asset\image\user.png" alt="" id="profileUserImg">
                        <span style="font-size: large; font-weight:500;"><?php echo $nama_dosen?></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="logout.php">
                                <span style="font-size: large; color:#0B6977">Logout</span>
                                <img src="Asset\image\logout.png" alt="" id="logoutImg" style="float: right;">
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div id="rectangle">
        <div class="container"> <!--<div class="container my-5">-->
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="text-align: center; color: #0B6977" class="text-uppercase">Tambah Berita Acara</h1>
                </div>
            </div>
    
            <form action="" method="POST" id="form-submit">   
                <div class="row mt-5">
                    <div class="col-lg-6">

                        <div class="form-group">

                            <div class="row">
                                <div class="col-lg-10">
                                    <label for="ketuaPenguji"><h5>Ketua Penguji</h5></label>
                                        <?php
                                            $sql_dosen = "SELECT * FROM data_dosen WHERE nama LIKE '%$nama_dosen%'";
                                            $result_dosen = mysqli_query($conn, $sql_dosen);

                                            if(mysqli_num_rows($result_dosen) > 0){
                                                $row = mysqli_fetch_assoc($result_dosen);
                                                $ketua_penguji = $row['nama'];
                                            }
                                            else{
                                                $ketua_penguji = "?";
                                            }
                                        ?>
                                    <input type="text" name="ketuaPenguji" id="ketuaPenguji" value="<?php echo $ketua_penguji; ?>" style="background-color: white;" class="form-control" placeholder="Dosen Penilai" readonly>
                                </div>
                
                                <div class="col-lg-2">
                                    <div class="form-check checkbox-lg" style="margin-top: 40px;">
                                        <input class="form-check-input" type="checkbox" value="" id="kehadiranKetuaPenguji" name="kehadiranKetuaPenguji">
                                        <label class="form-check-label" for="flexCheckDefault" style="margin-top: -40px;">Hadir</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row" style="margin-top: 24px;">
                                <div class="col-lg-10">
                                    <label  for="dosenPenguji"><h5>Dosen Penguji</h5></label>
                                    <input type="text" name="dosenPenguji" id="dosenPenguji" style="background-color: white;" class="form-control" placeholder="Dosen Penguji" readonly>
                                </div>
    
                                <div class="col-lg-2">
                                    <div class="form-check checkbox-lg" style="margin-top: 40px;">
                                        <input class="form-check-input" type="checkbox" value="" id="kehadiranDosenPenguji" name="kehadiranDosenPenguji">
                                        <label class="form-check-label" for="flexCheckDefault" style="margin-top: -40px;">Hadir</label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row" style="margin-top: 24px;">
                                <div class="col-lg-10">
                                    <label for="pembimbing1"><h5>Dosen Pembimbing 1</h5></label>
                                    <input type="text" name="pembimbing1" id="pembimbing1" class="form-control" style="background-color: white;" placeholder="Dosen Pembimbing 1" readonly>
                                </div>
    
                                <div class="col-lg-2">
                                    <div class="form-check checkbox-lg" style="margin-top: 40px;">
                                        <input class="form-check-input" type="checkbox" value="" id="kehadiranPembimbing1" name="kehadiranPembimbing1">
                                        <label class="form-check-label" for="flexCheckDefault" style="margin-top: -40px;">Hadir</label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row" style="margin-top: 24px;">
                                <div class="col-lg-10">
                                    <label for="pembimbing2"><h5>Dosen Pembimbing 2</h5></label>
                                    <input type="text" name="pembimbing2" id="pembimbing2" class="form-control" style="background-color: white;" placeholder="Dosen Pembimbing 2" readonly>
                                </div>

                                <div class="col-lg-2">
                                    <div class="form-check checkbox-lg" style="margin-top: 40px;">
                                        <input class="form-check-input" type="checkbox" value="" id="kehadiranPembimbing2" name="kehadiranPembimbing2">
                                        <label class="form-check-label" for="flexCheckDefault" style="margin-top: -40px;">Hadir</label>
                                    </div>
                                </div>
                            </div>

                            <br>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="tanggalSidang"><h5>Tanggal Sidang</h5></label>
                                    <input type="date" name="tanggalSidang" id="tanggalSidang" class="form-control">
                                </div>
                                <div class="col-lg-6">
                                    <label for="waktuSidang"><h5>Waktu Sidang</h5></label>
                                    <select class="input-selectTime" id="waktuSidang" name="waktuSidang">
                                        <option selected>Pilih Jam</option>
                                        <option value="07:30">07:30</option>
                                        <option value="08:00">08:00</option>
                                        <option value="08:30">08:30</option>
                                        <option value="09:00">09:00</option>
                                        <option value="09:30">09:30</option>
                                        <option value="10:00">10:00</option>
                                        <option value="10:30">10:30</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:30">11:30</option>
                                        <option value="12:00">12:00</option>
                                        <option value="12:30">12:30</option>
                                        <option value="13:00">13:00</option>
                                        <option value="13:30">13:30</option>
                                        <option value="14:00">14:00</option>
                                        <option value="14:30">14:30</option>
                                        <option value="15:00">15:00</option>
                                        <option value="15:30">15:30</option>
                                        <option value="16:00">16:00</option>
                                        <option value="16:30">16:30</option>
                                        <option value="17:00">17:00</option>
                                        <option value="17:30">17:30</option>
                                        <option value="18:00">18:00</option>
                                    </select>
                                    <div class="error-message" id="errorWaktu"></div>
                                </div>
                            </div>
        
                            <br>

                            <label for="ruangSidang"><h5>Ruang Sidang</h5></label>
                            <br>
                                <select class="form-select" aria-label="Default select example" name="ruangSidang" id="ruangSidang">
                                    <option selected>Select</option>
                                    <option value="1">P308</option>
                                    <option value="2">P309</option>
                                    <option value="3">P307</option>
                                    <option value="4">P318</option>
                                    <option value="5">Lab MM</option>
                                    <option value="6">Lab PG</option>
                                    <option value="7">Lab Studio</option>
                                </select> 
                                <div class="error-message" id="errorRuangSidang"></div>   
                        </div>
                    </div>
                    
                    <!-- table kanan -->
                    <div class="col-lg-6">

                        <div class="form-group">

                            <div class="row">
                                <label for="nama_mhs"><h5>Mahasiswa</h5></label>
                                <select class="form-select" aria-label="Default select example" name="nama_mhs" id="nama_mhs" type="nama_mhs">
                                    <option value="">Pilih Mahasiswa</option>
                                </select>
                                
                                <div class="error-message" id="errorNamaMhs"></div>
                            </div>
                
                                
                            <br>

                            <div class="row">
                                <label for="judul_skripsi"><h5>Judul Skripsi</h5></label>
                                <input type="text" name="judul_skripsi" id="judul_skripsi" style="background-color: white;" class="form-control" placeholder="Judul Skripsi" readonly>
                            </div>
            
                            <br>
                            
                            <div class="row">
                                <label for="konsentrasi"><h5>Konsenstrasi Skripsi</h5></label>
                                <select class="form-select" aria-label="Default select example" name="konsentrasi" id="konsentrasi">
                                    <option selected>Konsentrasi Skripsi</option>
                                    <option value="1">AI</option>
                                    <option value="2">Cyber Security</option>
                                    <option value="3">Game Development</option>
                                    <option value="4">Mobile Application Development</option>
                                    <option value="5">Enterprise Information System</option>
                                    <option value="6">Business Intelligence</option>
                                </select>
                                <div class="error-message" id="errorKonsentrasi"></div>
                            </div>

                            <br>

                            <div class="row">
                                <label for="" style="margin-top: -1px;"><h5>Tugas Tambahan</h5></label>
                            </div>
                            
                            <div style="margin-top: 5px;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="poster" value="option1">
                                    <label class="form-check-label" for="poster">Poster</label>
                                </div>
    
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="video" value="option2">
                                    <label class="form-check-label" for="video">Video</label>
                                </div>
    
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="penelitian" value="option3">
                                    <label class="form-check-label" for="penelitian">Laporan Penelitian</label>
                                </div>
                                
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="jurnal" value="option4">
                                    <label class="form-check-label" for="jurnal">Jurnal</label>
                                </div>
                            </div>

                            <br>

                            <label for="catatanSidang" style="margin-top: 5px;"><h5>Catatan Sidang</h5></label>
                            <textarea class="form-control" name="catatanSidang" id="catatanSidang" rows="3" placeholder="Catatan"></textarea>

                            <br>
                                    
                            <?php
                            echo "<input type='hidden' name='hidden_nama_mhs' id='hidden_nama_mhs' value=''></input>";
                            echo "<div name='showmhs' id='showmhs'></div>";
                            $nama_mhs = isset($_GET['hidden_nama_mhs']) ? $_GET['hidden_nama_mhs'] : '';

                                error_log('Nama_Mhs: ' . $nama_mhs);
                                echo $nama_mhs;

                                if (!empty($nama_mhs)) {
                                    $sql_nilai = "SELECT * FROM penilaian WHERE mahasiswa LIKE '%$nama_mhs%'";
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
                                    echo "<h5>Sum of nilai_akhir: " . $sum_nilai_akhir . "</h5><br>";
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
                                    echo "<h5>Hasil Sidang: ". $nilai_alphabet . "  (". $hasil_sidang .")</h5>";
                                    } else {
                                        echo "No records found for the specified student.";
                                    }
                                } 
                                else {
                                    // echo "Please select a valid student name.".$nama_mhs." ";
                                }
                            ?>

                            <div id="output-data-nilai"></div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12 d-flex flex-row justify-content-center mt-2">
                            <button class="btn btn-outline-red" style="margin-right: 7px;">Discard</button>
                            <button class="btn btn-outline-ocean" name="add" id="add">Add</button>
                        </div>
                    </div>    
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            // ketua penguji
            var ketuaPenguji = $('#ketuaPenguji').val();
            console.log(ketuaPenguji);

            if (ketuaPenguji == "?"){
                console.log("Bukan Ketua Penguji")
                Swal.fire({
                    title: "Anda bukan Ketua Penguji!",
                    text: "Tidak ada mahasiswa yang memiliki anda sebagai ketua penguji!",
                    icon: "error",
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "homeDosen.php";
                    }
                });
            }
            else {
                $.ajax({
                    url: "ajax/ajax_add_berita_acara.php",
                    type: "POST",
                    data: {
                        tanda: "Mahasiswa",
                        id: ketuaPenguji
                    },
                    success: function (respond) {
                        $("#nama_mhs").html(respond);

                        $('#nama_mhs').change(function () {
                            var nama_mhs = $(this).val();
                            var selectedNamaMhs = $(this).val();
                            console.log(selectedNamaMhs);
                            $('input[id="hidden_nama_mhs"]').val(selectedNamaMhs);
                        });
                    },
                    error: function () {
                        alert("gagal");
                    }
                });
            }
        $(document).on('change', '#nama_mhs', function () {
            var selectedNamaMhs = $(this).val();
            // $('input[id="hidden_nama_mhs"]').html(selectedNamaMhs);

            $.ajax({
                url: 'ajax/ajax_coba_berita_acara.php',
                type: "POST",
                data: {
                    nama_nrp: selectedNamaMhs,
                    tanda: "tampil_nilai"
                },
                success: function(output) {
                    $("#output-data-nilai").html(output)
                }
            })
        });
        //$(document).on('change', '#hidden_nama_mhs', function () {
        //    var selectedNamaMhs = $(this).val();
        //    $('input[id="hidden_nama_mhs"]').html(selectedNamaMhs);
        //    $("#showmhs").text('nama:'. selectedNamaMhs);
        //});

            // dosen penguji
            $('#nama_mhs').on('change', function(){
                var nama_mhs = $(this).val();
                console.log(nama_mhs);
                $.ajax({
                    url: "ajax/ajax_add_berita_acara.php",
                    type: "POST",
                    data:{
                        tanda: "Penguji",
                        id:nama_mhs               
                    },
                    success:function(respond){
                        console.log(respond);
                        var response = JSON.parse(respond)
                        var dosen_penguji = response.dosen_penguji
                        $("#dosenPenguji").val(dosen_penguji);
                    },
                    error:function(){
                        alert("gagal");
                    }
                })
            })
            
            // dosen pembimbing 1
            $('#nama_mhs').on('change', function(){
                var nama_mhs = $(this).val();
                $.ajax({
                    url: "ajax/ajax_add_berita_acara.php",
                    type: "POST",
                    data:{
                        tanda: "Pembimbing_1",
                        id:nama_mhs               
                    },
                    success:function(respond){
                        console.log(respond);
                        var response = JSON.parse(respond)
                        var dosen_pembimbing_1 = response.dosen_pembimbing_1
                        $("#pembimbing1").val(dosen_pembimbing_1);
                    },
                    error:function(){
                        alert("gagal");
                    }
                })
            })

            // dosen pembimbing 2
            $('#nama_mhs').on('change', function(){
                var nama_mhs = $(this).val();
                $.ajax({
                    url: "ajax/ajax_add_berita_acara.php",
                    type: "POST",
                    data:{
                        tanda: "Pembimbing_2",
                        id:nama_mhs
                    },
                    success:function(respond){
                        console.log(respond);
                        var response = JSON.parse(respond)
                        var dosen_pembimbing_2 = response.dosen_pembimbing_2
                        $("#pembimbing2").val(dosen_pembimbing_2);
                    },
                    error:function(){
                        alert("gagal");
                    }
                })
            })

            // judul skripsi
            $('#nama_mhs').on('change', function(){
                var nama_mhs = $(this).val();
                $.ajax({
                    url: "ajax/ajax_add_berita_acara.php",
                    type: "POST",
                    data:{
                        tanda: "Judul",
                        id:nama_mhs               
                    },
                    success:function(respond){
                        console.log(respond);
                        var response = JSON.parse(respond)
                        var judul_skripsi = response.judul
                        $("#judul_skripsi").val(judul_skripsi);
                    },
                    error:function(){
                        alert("gagal");
                    }
                })
            })

            // insert function
            var konsentrasiFilled = false;
            var ruangSidangFilled = false;
            var mahasiswaFilled = false;
            var waktuFilled = false;

            $("#konsentrasi").on("input", function() {
                if ($(this).val() !== "Konsentrasi Skripsi") {
                    $("#errorKonsentrasi").text('');
                    $(this).removeClass('is-invalid');
                   konsentrasiFilled = true;
                }
                else{
                    konsentrasiFilled = false;
                }
            });

            $("#ruangSidang").on("input", function() {
                if ($(this).val() !== "Select") {
                    $("#errorRuangSidang").text('');
                    $(this).removeClass('is-invalid');
                    ruangSidangFilled = true;
                }
                else{
                    ruangSidangFilled = false;
                }
            });

            $("#nama_mhs").on("input", function() {
                if ($(this).val() !== "Pilih Mahasiswa") {
                    $("#errorNamaMhs").text('');
                    $(this).removeClass('is-invalid');
                    mahasiswaFilled = true;
                }
                else{
                    mahasiswaFilled = false;
                }
            });

            $("#waktuSidang").on("input", function() {
                if ($(this).val() !== "Pilih Jam") {
                    $("#errorWaktu").text('');
                    $(this).removeClass('is-invalid');
                    waktuFilled = true;
                }
                else{
                    waktuFilled = false;
                }
            });

            $("#add").on("click", function(event) {
                var judulSkripsi = $("#judul_skripsi").val();
                var namaMhs = $("#nama_mhs").val();
                var ketuaPenguji = $("#ketuaPenguji").val();
                var dosenPenguji = $("#dosenPenguji").val();
                var pembimbing1 = $("#pembimbing1").val();
                var pembimbing2 = $("#pembimbing2").val();
                var tanggalSidang = $("#tanggalSidang").val();
                var waktuSidang = $("#waktuSidang").val(); 
                var ruangSidang = $("#ruangSidang").val();
                var konsentrasi = $("#konsentrasi").val();
                var catatanSidang = $("#catatanSidang").val();
                var nilai_akhir = $("#nilai_akhir").val();
                var nilai_alphabet = $("#nilai_alphabet").val();
                var hasil_sidang = $("#hasil_sidang").val();
                var status_ketua = "";
                var status_penguji = "";
                var status_pembimbing1 = "";
                var status_pembimbing2 = "";
                var checking_dosen=false;
                var pengisian_nilai = "";
                var pesan= "";
                
                $('.error-message').text('');
                $('.form-control').removeClass('is-invalid');

                event.preventDefault();

                $.ajax({
                    url: 'ajax/ajax_coba_berita_acara.php',
                    type: "POST",
                    data: {
                        tanda: 'add_click',
                        nama_nrp:namaMhs,
                        ketuaPenguji: ketuaPenguji,
                        dosenPenguji:dosenPenguji,
                        pembimbing1:pembimbing1,
                        pembimbing2:pembimbing2,
                    },
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        if(response.check){
                            checking_dosen=true;
                            pengisian_nilai='';                 
                        }
                        else{
                            checking_dosen=false;
                            pengisian_nilai=response.pengisian_nilai;
                        }
                        
                    if (!konsentrasiFilled || !ruangSidangFilled || !mahasiswaFilled || !waktuFilled || !checking_dosen){
                        if(pengisian_nilai=='perlu_isi'){
                            Swal.fire({
                                title: "Masih ada dosen yang belum menginput nilai!",
                                text: "Nilai Dosen Belum Lengkap!",
                                icon: "error"
                            });
                        }
                        if(pengisian_nilai=='lengkapi_isi'){
                            Swal.fire({
                                title: "Masih ada dosen yang belum menginput nilai!",
                                text: "Nilai Dosen Belum Lengkap!",
                                icon: "error"
                            });
                        }
                        if(konsentrasi == "Konsentrasi Skripsi"){
                            $("#add").text('Add');
                            $("#add").addClass('is-invalid');
                            Swal.fire({
                                title: "Masih ada dosen yang belum mengisi!",
                                text: "Silakan isi field yang kosong!",
                                icon: "error"
                            });
                        }
                        
                        if(konsentrasi == "Konsentrasi Skripsi"){
                            $("#errorKonsentrasi").text('Konsentrasi harus diisi.');
                            $("#konsentrasi").addClass('is-invalid');
        
                            Swal.fire({
                                title: "Masih ada field yang kosong!",
                                text: "Silakan isi field yang kosong!",
                                icon: "error"
                            });
                        }
        
                        if(ruangSidang == "Select"){
                            $("#errorRuangSidang").text('Ruang Sidang harus diisi.');
                            $("#ruangSidang").addClass('is-invalid');
        
                            Swal.fire({
                                title: "Masih ada field yang kosong!",
                                text: "Silakan isi field yang kosong!",
                                icon: "error"
                            });
                        }

                        if(namaMhs == "Pilih Mahasiswa"){
                            $("#errorNamaMhs").text('Mahasiswa harus dipilih.');
                            $("#nama_mhs").addClass('is-invalid');
        
                            Swal.fire({
                                title: "Masih ada field yang kosong!",
                                text: "Silakan isi field yang kosong!",
                                icon: "error"
                            });
                        }

                        if(waktuSidang == "Pilih Jam"){
                            $("#errorWaktu").text('Silakan pilih jam sidang.');
                            $("#waktuSidang").addClass('is-invalid');
        
                            Swal.fire({
                                title: "Masih ada field yang kosong!",
                                text: "Silakan isi field yang kosong!",
                                icon: "error"
                            });
                        }
                        
                    }

                else {
                    if ($('#kehadiranKetuaPenguji').is(':checked')) {
                        status_ketua = "Ketua Penguji";
                        //alert('Checkbox is checked');
                    }
                    if ($('#kehadiranDosenPenguji').is(':checked')) {
                        status_penguji = "Anggota Penguji";
                        //alert('Checkbox is checked');
                    }
                    if ($('#kehadiranPembimbing1').is(':checked')) {
                        status_pembimbing1 = "Pembimbing 1";
                        //alert('Checkbox is checked');
                    }
                    if ($('#kehadiranPembimbing2').is(':checked')) {
                        status_pembimbing2 = "Pembimbing 2";
                        //alert('Checkbox is checked');
                    }
                    
                    $.ajax({
                        url: "ajax/ajax_add_berita_acara.php",
                        method: "POST",
                        data: {
                            judulSkripsi: judulSkripsi,
                            namaMhs: namaMhs,
                            ketuaPenguji: ketuaPenguji,
                            dosenPenguji: dosenPenguji,
                            pembimbing1: pembimbing1,
                            pembimbing2: pembimbing2,
                            tanggalSidang: tanggalSidang,
                            waktuSidang: waktuSidang,
                            ruangSidang: ruangSidang,
                            status_ketua: status_ketua,
                            status_penguji: status_penguji,
                            status_pembimbing1: status_pembimbing1,
                            status_pembimbing2: status_pembimbing2,
                            konsentrasi: konsentrasi,
                            catatanSidang: catatanSidang,
                            nilai_akhir: nilai_akhir,
                            nilai_alphabet: nilai_alphabet,
                            hasil_sidang: hasil_sidang,
                            tanda: "Insert"
                        },
                        success: function(respond) {                           
                            // console.log(respond);
                            var trim_respond = respond.trim();

                            if (trim_respond == "Berhasil Add!") {
                                console.log(trim_respond);
                                Swal.fire({
                                    title: "Berhasil Add!",
                                    text: "Berita Acara sudah ditambahkan!",
                                    icon: "success"
                                });
                            } 
                            else if (trim_respond == "bentrok") {
                                Swal.fire({
                                    title: "Sudah terpakai!",
                                    text: "Tanggal dan ruang sidang bertabrakan dengan jadwal lain, Silakan pilih jadwal lain!",
                                    icon: "warning"
                                });
                            }
                            else {
                                alert("An unknown response was received: " + trim_respond);
                            }
                            location.reload(true);
                        },
                        error: function(respond) {
                            alert(respond);
                        }
                    });
                }
                    },
                    error:function(){
                        alert("gagal");
                    }
                });
            });
        });
    </script>
</body>
</html>