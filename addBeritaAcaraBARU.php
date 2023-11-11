<?php
include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap CSS and JavaScript -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

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

        /* Style the time input field */
        .form-control[type="time"] {
        width: 100%; /* Set the width to 100% of its container (adjust as needed) */
        padding: 10px; /* Add padding to the input */
        font-size: 16px; /* Set the font size (adjust as needed) */
        border: 1px solid #ccc; /* Add a border */
        border-radius: 5px; /* Add rounded corners */
        background-color: #fff; /* Background color of the input */
        color: #333; /* Text color */
        /* Add more styles as needed */
        }

        /* Style the input when it's in focus (clicked or selected) */
        .form-control[type="time"]:focus {
        border-color: #007bff; /* Change the border color on focus */
        box-shadow: 0 0 10px rgba(0, 123, 255, 0.5); /* Add a shadow on focus */
        /* Add more focus styles as needed */
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

        /* Style the date input */
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

        /* Add hover and focus styles */
        .input-selectTime:hover, .input-selectTime:focus {
        border-color: #007BFF;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
    </style>
</head>
<body style="background-color: #0B6977;">
    <div id="rectangle">
        <div class="container"> <!--<div class="container my-5">-->
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="text-align: center; color: #0B6977" class="text-uppercase">Tambah Berita</h1>
                </div>
            </div>
    
            <form action="" method="POST" id="form-submit">   
                <div class="row mt-5">
                    <div class="col-lg-6">

                        <div class="form-group">

                            <div class="row">
                                <div class="col-lg-10">
                                    <label for="ketuaPenguji"><h5>Ketua Penguji</h5></label>
                                    <select class="form-select" aria-label="Default select example" name="ketuaPenguji" id="ketuaPenguji">
                                        <option selected>Select</option>
                                        <?php
                                            $sql_dosen = "SELECT * FROM data_dosen ORDER BY nip;";
                                            $result_dosen = mysqli_query($conn, $sql_dosen);
                                            while ($row = mysqli_fetch_assoc($result_dosen)){
                                        ?>
                                            <option value="<?php echo $row['nama']; ?>"><?php echo $row['nama']; ?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
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
                                        <option value="07:00">07:00</option>
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
                            
                            <br>
                            
                            <!-- <label><h5>Nilai Sidang</h5></label>
                            <div class="row">
                                <div class="col-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" style="background-color: #0B6977; color: whitesmoke; font-weight: 700;" for="cpmk1">CPMK 1</label>
                                        </div>
                                        <input type="number" name="cpmk1" id="cpmk1" class="form-control" placeholder="Nilai">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" style="background-color: #0B6977; color: whitesmoke; font-weight: 700;" for="cpmk2">CPMK 2</label>
                                        </div>
                                        <input type="number" name="cpmk2" id="cpmk2" class="form-control" placeholder="Nilai">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text" style="background-color: #0B6977; color: whitesmoke; font-weight: 700;" for="cpmk3">CPMK 3</label>
                                        </div>
                                        <input type="number" name="cpmk3" id="cpmk3" class="form-control" placeholder="Nilai">
                                    </div>
                                </div>
                            </div> -->
                            <label for="catatanSidang" style="margin-top: 5px;"><h5>Catatan Sidang</h5></label>
                            <textarea class="form-control" name="catatanSidang" id="catatanSidang" rows="3" placeholder="Catatan"></textarea>
                            
                        </div>
                    </div>
                    
                    <!-- table kanan -->
                    <div class="col-lg-6">

                        <div class="form-group">

                            <div class="row">
                                <label for="nama_mhs"><h5>Mahasiswa</h5></label>
                                <select class="form-select" aria-label="Default select example" name="nama_mhs" id="nama_mhs">
                                    <option value="Pilih Mahasiswa">Pilih Mahasiswa</option>
                                </select>
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
    
                            <label for="" style="margin-top: 7px;"><h5>Nilai CPL (Averaged)</h5></label>
                            <div class="col-sm-12">
                                <div class="table-responsive" id="tabel_cpl">
                                    <table class="table table-bordered">
                                        <thead style="width: 10px;">
                                            <tr>
                                                <th scope="col" style="width: 5px;">1</th>
                                                <th scope="col">2</th>
                                                <th scope="col">3</th>
                                                <th scope="col">4</th>
                                                <th scope="col">5</th>
                                                <th scope="col">6</th>
                                                <th scope="col">7</th>
                                                <th scope="col">8</th>
                                                <th scope="col">9</th>
                                                <th scope="col">10</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-outline w-25">
                                                        <input type="number" name="cpl1" id="cpl1">
                                                    </div>
                                                </td>
                                                <td><input type="number" name="cpl2" id="cpl2"></td>
                                                <td><input type="number" name="cpl3" id="cpl3"></td>
                                                <td><input type="number" name="cpl4" id="cpl4"></td>
                                                <td><input type="number" name="cpl5" id="cpl5"></td>
                                                <td><input type="number" name="cpl6" id="cpl6"></td>
                                                <td><input type="number" name="cpl7" id="cpl7"></td>
                                                <td><input type="number" name="cpl8" id="cpl8"></td>
                                                <td><input type="number" name="cpl9" id="cpl9"></td>
                                                <td><input type="number" name="cpl10" id="cpl10"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
    
                            <br>
    
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5>Nilai Akhir: A</h5>
                                </div>
                                <div class="col-lg-6">
                                    <h5 style="margin-left: 40px" >Hasil Sidang: Lulus</h5>
                                </div>
                            </div>

                            <br>

                            <div class="row" style="margin-top: 5px;">
                                <div class="col-lg-2">
                                    <button class="btn btn-outline-red" style="float: left;">Discard</button>
                                </div>
                                <div class="col-lg-6">
                                    <button class="btn btn-outline-ocean" name="add" id="add">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            
            <div class="modal fade" id="emptyField" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Masih ada field yang kosong!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="modal-body ">
                            <h5>Silakan isi field yang kosong!</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-red" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="modal fade" id="successModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Success!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="modal-body ">
                            <h5>Berhasil Add Data!</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-red" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function(){

            // ketua penguji
            $('#ketuaPenguji').on('change', function(){
                var ketuaPenguji = $(this).val();
                console.log(ketuaPenguji);
                $.ajax({
                    url: "ajax_berita_acara.php",
                    type: "POST",
                    data:{
                        tanda: "Mahasiswa",
                        id:ketuaPenguji
                    },
                    success:function(respond){
                        $("#nama_mhs").html(respond);
                    },
                    error:function(){
                        alert("gagal");
                    }
                })
            })
            
            // dosen penguji
            $('#nama_mhs').on('change', function(){
                var nama_mhs = $(this).val();
                console.log(nama_mhs);
                $.ajax({
                    url: "ajax_berita_acara.php",
                    type: "POST",
                    data:{
                        tanda: "Penguji",
                        id:nama_mhs               
                    },
                    success:function(respond){
                        console.log(respond);
                        $("#dosenPenguji").val(respond);
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
                    url: "ajax_berita_acara.php",
                    type: "POST",
                    data:{
                        tanda: "Pembimbing_1",
                        id:nama_mhs               
                    },
                    success:function(respond){
                        console.log(respond);
                        $("#pembimbing1").val(respond);
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
                    url: "ajax_berita_acara.php",
                    type: "POST",
                    data:{
                        tanda: "Pembimbing_2",
                        id:nama_mhs
                    },
                    success:function(respond){
                        console.log(respond);
                        $("#pembimbing2").val(respond);
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
                    url: "ajax_berita_acara.php",
                    type: "POST",
                    data:{
                        tanda: "Judul",
                        id:nama_mhs               
                    },
                    success:function(respond){
                        console.log(respond);
                        $("#judul_skripsi").val(respond);
                    },
                    error:function(){
                        alert("gagal");
                    }
                })
            })

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
                var status_ketua = "";
                var status_penguji = "";
                var status_pembimbing1 = "";
                var status_pembimbing2 = "";

                event.preventDefault();

                if (konsentrasi == "Konsentrasi Skripsi" || ruangSidang == "Select" || namaMhs == "Pilih Mahasiswa"){
                    $("#emptyField").modal('show');
                    return;
                    // alert("Mohon isi field yang kosong!");
                }
                else{
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
                        url: "ajax_berita_acara.php",
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
                            tanda: "Insert"
                        },
                        success: function(respond) {                           
                            // console.log(respond);
                            var trim_respond = respond.trim();

                            if (trim_respond == "Berhasil Add!") {
                                console.log(trim_respond);
                                $("#successModal").modal('show');
                                // alert(respond);
                            } 
                            else if (trim_respond == "bentrok") {
                                alert("Tanggal Sidang dan Ruang Sidang bertabrakan!.");
                            }
                            else {
                                alert("An unknown response was received: " + trim_respond);
                            }
                        },
                        error: function() {
                            alert("An error occurred during the insertion.");
                        }
                    });
                }
            });

        });
    </script>
</body>
</html>