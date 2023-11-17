<?php
include 'config.php';

$fetch_kriteria = "SELECT * FROM kriteria_penilaian";
$result_kriteria = mysqli_query($conn, $fetch_kriteria);

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

$nama_dosen = $_SESSION['username'];
$sql = "SELECT * FROM vakasi WHERE dosen LIKE '%$nama_dosen%'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

// if (isset($_POST['cek'])){
//     if (isset($_POST['bab'])){
//         $id_bab = $_POST['bab'];
//         $sql = "SELECT * FROM kriteria_penilaian WHERE id_kriteria = '$id_bab'";
//         $stmt = mysqli_prepare($conn, $sql);
//         mysqli_stmt_execute($stmt);
//         $result = mysqli_stmt_get_result($stmt);
    
//         $row = mysqli_fetch_assoc($result);
//         echo $row['id_kriteria'];    
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="navbar.css">
    <title>Input Nilai</title>
</head>

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

    .listMhs{
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    background-color: #fff;
    }
</style>

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
                    <a class="text-decoration-none" href="addBeritaAcara.php">Add Berita Acara</a>
                </li>
                <li class="nav-link">
                    <a class="text-decoration-none" href="historySidang.php">Riwayat Sidang</a>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse justify-content-end" style="margin-right: 50px;">
            <ul class="navbar-nav mynav" style="margin-right: 10px;">
                <li class="nav-item dropdown">
                    <a class="nav-item dropdown-toggle text-decoration-none" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="Asset\image\user.png" alt="" id="profileUserImg">
                        <span style="font-size: large; font-weight:500;"><?php echo $_SESSION['username'];?></span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="logout.php">
                                <span style="font-size: large;">Logout</span>
                                <img src="Asset\image\logout.png" alt="" id="logoutImg" style="float: right;">
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div id="rectangle">
        <div class="container-lg">
            <div class="row mt-5 mb-4">
                <div class="col-sm-12" style="background-color: #0B6977; border:5px solid #427D9D;">
                    <h1 style="text-align: center; color: #fff" class="text-uppercase">input nilai</h1>
                </div>
            </div>
    
            <form action="" method="post">
                <div class="row">

                    <div class="col-lg-4 mb-2">
                        <label for="nama_mhs"><h5>Dosen</h5></label>
                            <?php
                                $sql_dosen = "SELECT * FROM data_dosen WHERE nama LIKE '%$nama_dosen%'";
                                $result_dosen = mysqli_query($conn, $sql_dosen);

                                if(mysqli_num_rows($result_dosen) > 0){
                                    $row = mysqli_fetch_assoc($result_dosen);
                                    $dosen_penilai = $row['nama'];
                                }
                                else{
                                    $dosen_penilai = "?";
                                }
                            ?>
                        <input type="text" name="dosen_penilai" id="dosen_penilai" value="<?php echo $dosen_penilai; ?>" style="background-color: white;" class="form-control" placeholder="Dosen Penilai" readonly>
                    </div>

                    <div class="col-lg-4 mb-2">
                        <label for="nama_mhs"><h5>Mahasiswa</h5></label>
                        <br>
                        <select class="selectpicker listMhs" data-width="350px" aria-label="Default select example" name="nama_mhs" id="nama_mhs" data-live-search="true">
                            <?php
                                $dosen_penilai = $nama_dosen;
                                $sql = "SELECT * FROM data_mahasiswa WHERE team_penguji LIKE '%$dosen_penilai%'";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0){
                                    while ($row = mysqli_fetch_assoc($result)){
                                        echo '<option value="' . $row['mahasiswa'] . '">' . $row['mahasiswa'] . '</option>';
                                    }
                                }
                                else{
                                    echo "<option>Pilih Mahasiswa</option>";
                                }
                            ?>
                        </select>
                    </div>

                    <div class="col-lg-4 mb-2">
                        <div id="result_status">
                            <label for=""><h5>Status</h5></label>
                            <input type="text" name="status_dosen" id="status_dosen" value="-" style="background-color: white; text-align: left;" class="form-control" placeholder="Dosen Penilai" readonly>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">

                    <div class="col-lg-4 mb-4" style="margin-top: 1px;">
                        <label for=""><h5>Penilaian Judul dan Abstrak Bab 1 & 2</h5></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" style="background-color: #0B6977; color: whitesmoke; font-weight: 700;" for="cp1">CP 9</label>
                            </div>
                            <input type="number" name="cp1" id="cp1" class="form-control" placeholder="Nilai" min="0">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <label for=""><h5>Penilaian Bab 1 & 2</h5></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" style="background-color: #0B6977; color: whitesmoke; font-weight: 700;" for="cp2">CP 9</label>
                            </div>
                            <input type="number" name="cp2" id="cp2" class="form-control" placeholder="Nilai" min="0">
                        </div>
                    </div>

                    <!-- <div class="col-lg-4 mb-4">
                        <label for=""><h5>Penilaian Bab 3 & 4 (Infor)</h5></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" style="background-color: #0B6977; color: whitesmoke; font-weight: 700;" for="cp3">CP 7</label>
                            </div>
                            <input type="number" name="cp3" id="cp3" class="form-control" placeholder="Nilai" min="0">
                        </div>
                    </div> -->

                </div>

                <div class="row mt-3">
                    <div class="col-lg-4 mb-4">
                        <label for=""><h5>Penilaian Bab 3 & 4</h5></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" style="background-color: #0B6977; color: whitesmoke; font-weight: 700;" for="cp3">CP 7</label>
                            </div>
                            <input type="number" name="cp3" id="cp3" class="form-control" placeholder="Nilai" min="0">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <label for=""><h5>Penilaian BUKU</h5></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" style="background-color: #0B6977; color: whitesmoke; font-weight: 700;" for="cp4">CP 9</label>
                            </div>
                            <input type="number" name="cp4" id="cp4" class="form-control" placeholder="Nilai" min="0">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <label for=""><h5>Penilaian Bab 5 dan KESIMPULAN</h5></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" style="background-color: #0B6977; color: whitesmoke; font-weight: 700;" for="cp5">CP 8</label>
                            </div>
                            <input type="number" name="cp5" id="cp5" class="form-control" placeholder="Nilai" min="0">
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-4">
                        <label for=""><h5>Penilaian PROGRAM</h5></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" style="background-color: #0B6977; color: whitesmoke; font-weight: 700;" for="cp6">CP 5</label>
                            </div>
                            <input type="number" name="cp6" id="cp6" class="form-control" placeholder="Nilai" min="0">
                        </div>
                    </div>

                    <div class="col-lg-3" style="margin-top: 32px; display: none;">
                        <div id="result1">
                            <h4 id="sum_result"></h4>
                        </div>
                    </div>

                    <!-- <div class="col-lg-4" style="margin-top: 32px; display: none;">
                        <div id="result2" >
                            <h4 id="sum_avg_result">Nilai Akhir (Averaged): </h4>
                        </div>
                    </div> -->
                </div>
                
                <div class="row mt-4">
                    <div class="col-lg-1">
                        <button type="button" class="btn btn-outline-ocean" name="hitung" id="hitung">Hitung</button>
                    </div>
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-outline-ocean" name="input" id="input">Input</button>
                    </div>
                </div>
            </form>


            <div class="row mt-4">
               <div class="col-sm-12" style="background-color: #0B6977; border:5px solid #427D9D;">
                    <h1 style="text-align: center; color: #fff" class="text-capitalize">kriteria penilaian</h1>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div id="searchResult">
                        <table class="mx-auto table table-striped">
                            <thead style="background-color:#0B6977; color: whitesmoke; text-align: center;">
                                <tr>
                                    <th style="width: 70px;">CPL</th>
                                    <th>IK</th>
                                    <th>Deskripsi IK</th>
                                    <th>Bab</th>
                                    <th>Penilaian</th>
                                    <th>Bobot</th>
                                </tr>
                            </thead>
                        
                            <tbody style="text-align: center;">
                                <?php if (mysqli_num_rows($result_kriteria) > 0): ?>
                                    <?php while($row = mysqli_fetch_assoc($result_kriteria)): ?>
                                    <tr>
                                        <td><?php echo $row['cpl'];?></td>
                                        <td><?php echo $row['ik'];?></td>
                                        <td><?php echo $row['deskripsi_ik'];?></td>
                                        <td><?php echo $row['bab'];?></td>
                                        <td><?php echo $row['penilaian'];?></td>
                                        <td><?php echo $row['bobot'];?></td>
                                    </tr>
                                    <?php endwhile ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="9"><h4 style="color: #0B6977;">Tidak ada data.</h4></td>
                                    </tr>
                                <?php endif ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
       $(document).ready(function () {
            $('#nama_mhs').on('change', function(){
                var nama_mhs = $(this).val();
                var nama_dosen = $('#dosen_penilai').val();
                console.log(nama_mhs);
                console.log(nama_dosen);
                $.ajax({
                    url: "ajax/ajax_input_nilai.php",
                    type: "POST",
                    data:{
                        tanda: "status_dosen",
                        nama_mhs: nama_mhs,
                        nama_dosen: nama_dosen              
                    },
                    success:function(respond){
                        var response = JSON.parse(respond);
                        console.log(response.status);
                        var status = response.status;
                        $("#status_dosen").val(status);
                        $("#result_status").parent().show();
                    },
                    error:function(){
                        alert("gagal");
                    }
                })
            })

            $('#hitung').on('click', function () {
                const cp1 = parseFloat($("#cp1").val()) || 0;
                const cp2 = parseFloat($("#cp2").val()) || 0;
                const cp3 = parseFloat($("#cp3").val()) || 0;
                const cp4 = parseFloat($("#cp4").val()) || 0;
                const cp5 = parseFloat($("#cp5").val()) || 0;
                const cp6 = parseFloat($("#cp6").val()) || 0;
                
                const totalSum = (cp1*0.05) + (cp2*0.1) + (cp3*0.25) + (cp4*0.1) + (cp5*0.25) + (cp6*0.25);

                var colorText = totalSum <= 50 ? 'red' : 'green';
                $("#sum_result").html("Nilai Akhir: <span style='color: " + colorText + "'>" + totalSum + "</span>");
                $("#result1").parent().show();

            })

            $('#input').on('click', function(){
                var nama_mhs = $('#nama_mhs').val();
                var nama_dosen = $('#dosen_penilai').val();
                const cp1 = parseFloat($("#cp1").val()) || 0;
                const cp2 = parseFloat($("#cp2").val()) || 0;
                const cp3 = parseFloat($("#cp3").val()) || 0;
                const cp4 = parseFloat($("#cp4").val()) || 0;
                const cp5 = parseFloat($("#cp5").val()) || 0;
                const cp6 = parseFloat($("#cp6").val()) || 0;

                event.preventDefault();

                $.ajax({
                    url: "ajax/ajax_input_nilai.php",
                    type: "POST",
                    data:{
                        tanda: "inputNilai",
                        nama_mhs:nama_mhs,
                        nama_dosen:nama_dosen,
                        cp1:cp1,
                        cp2:cp2,
                        cp3:cp3,
                        cp4:cp4,
                        cp5:cp5,
                        cp6:cp6
                    },
                    success:function(respond){
                        var response = JSON.parse(respond);
                        var totalSum = response.totalSum;
                        var pesan = response.pesan;
                
                        if (pesan == "success"){
                            Swal.fire({
                                title: "Berhasil Input!",
                                text: "Nilai sudah diinput!",
                                icon: "success"
                            });
                        }
                        else{
                            Swal.fire({
                                title: "Gagal!",
                                text: "Anda sudah menginput nilai untuk mahasiswa ini!",
                                icon: "error"
                            });
                        }
                    },
                    error:function(){
                        alert("gagal");
                    }
                })
            })

            // $('#nama_mhs').selectpicker();
        });

    </script>
</body>
</html>