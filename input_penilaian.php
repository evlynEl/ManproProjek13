<?php
include 'config.php';

$fetch_kriteria = "SELECT * FROM kriteria_penilaian";
$result_kriteria = mysqli_query($conn, $fetch_kriteria);

$fetch_penilaian = "SELECT * FROM penilaian";
$result_penilaian = mysqli_query($conn, $fetch_penilaian);

if (isset($_POST['cek'])){
    if (isset($_POST['bab'])){
        $id_bab = $_POST['bab'];
        $sql = "SELECT * FROM kriteria_penilaian WHERE id_kriteria = '$id_bab'";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    
        $row = mysqli_fetch_assoc($result);
        echo $row['id_kriteria'];    
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
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


</style>
<body style="background-color: #0B6977;">
    <div id="rectangle">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="text-align: center; color: #0B6977" class="text-uppercase">kriteria penilaian</h1>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div id="searchResult">
                        <table class="mx-auto table table-striped">
                            <thead style="background-color:#0B6977; color: whitesmoke; text-align: center;">
                                <tr>
                                    <th>CPL</th>
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
    
            <div class="row mt-4 mb-4">
                <div class="col-sm-12" style="background-color: #0B6977; border:5px solid #427D9D;">
                    <h1 style="text-align: center; color: #fff" class="text-uppercase">input nilai</h1>
                </div>
            </div>
    
            <form action="" method="post">
                <div class="row">
                    <div class="col-lg-3 mb-3">
                        <label for="nama_mhs"><h5>Mahasiswa</h5></label>
                        <select class="form-select" aria-label="Default select example" name="nama_mhs" id="nama_mhs">
                            <?php
                                $dosen_penilai = "SILVIA ROSTIANINGSIH, S.Kom., M.MT."; // ini nanti diganti pake $_SESSION tergantung dosen siapa yang login.
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

                    <div class="col-lg-3 mb-2">
                        <label for="nama_mhs"><h5>Dosen</h5></label>
                        <input type="text" name="dosen_penilai" id="dosen_penilai" value="SILVIA ROSTIANINGSIH, S.Kom., M.MT." style="background-color: white;" class="form-control" placeholder="Dosen Penilai" readonly>
                    </div>

                    <div class="col-lg-3 mb-2">
                        <div id="result_status">
                            <div id="result_status_dosen" style="display: none;">
                                <h5>Status </h5>
                                <input type="text" name="status_dosen" id="status_dosen" value="-" style="background-color: white; text-align: left;" class="form-control" placeholder="Dosen Penilai" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">

                    <div class="col-lg-4 mb-4">
                        <label for=""><h5>Penilaian Judul dan Abstrak Bab 1 dan 2</h5></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" style="background-color: #0B6977; color: whitesmoke; font-weight: 700;" for="cp1">CP 9</label>
                            </div>
                            <input type="number" name="cp1" id="cp1" class="form-control" placeholder="Nilai" min="0" max="100" required>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <label for=""><h5>Penilaian Bab 1 dan 2</h5></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" style="background-color: #0B6977; color: whitesmoke; font-weight: 700;" for="cp2">CP 9</label>
                            </div>
                            <input type="number" name="cp2" id="cp2" class="form-control" placeholder="Nilai" min="0"max="100" required >
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <label for=""><h5>Penilaian Bab 3 dan 4 (Infor)</h5></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" style="background-color: #0B6977; color: whitesmoke; font-weight: 700;" for="cp4">CP 4</label>
                            </div>
                            <input type="number" name="cp4" id="cp4" class="form-control" placeholder="Nilai" min="0" max="100" required>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-4 mb-4">
                        <label for=""><h5>Penilaian Bab 3 dan 4 (SIB)</h5></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" style="background-color: #0B6977; color: whitesmoke; font-weight: 700;" for="cp3">CP 7</label>
                            </div>
                            <input type="number" name="cp3" id="cp3" class="form-control" placeholder="Nilai" min="0" max="100" required>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <label for=""><h5>Penilaian cp5</h5></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" style="background-color: #0B6977; color: whitesmoke; font-weight: 700;" for="cp5">CP 9</label>
                            </div>
                            <input type="number" name="cp5" id="cp5" class="form-control" placeholder="Nilai" min="0" max="100" required>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <label for=""><h5>Penilaian 5 dan KESIMPULAN</h5></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" style="background-color: #0B6977; color: whitesmoke; font-weight: 700;" for="cp6">CP 8</label>
                            </div>
                            <input type="number" name="cp6" id="cp6" class="form-control" placeholder="Nilai" min="0" max="100" required>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-4">
                        <label for=""><h5>Penilaian cp7</h5></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label class="input-group-text" style="background-color: #0B6977; color: whitesmoke; font-weight: 700;" for="cp7">CP 5</label>
                            </div>
                            <input type="number" name="cp7" id="cp7" class="form-control" placeholder="Nilai" min="0" max="100" required>
                        </div>
                    </div>

                    <div class="col-lg-3" style="margin-top: 32px; display: none;">
                        <div id="result1">
                            <h3 id="sum_result">Nilai Akhir: </h3>
                        </div>
                    </div>

                    <!-- <div class="col-lg-4" style="margin-top: 32px; display: none;">
                        <div id="result2" >
                            <h3 id="sum_avg_result">Nilai Akhir (Averaged): </h3>
                        </div>
                    </div> -->
                </div>
                
                <div class="row mt-4">
                    <div class="col-lg-1">
                        <button type="button" class="btn btn-outline-ocean" name="hitung" id="hitung">Hitung</button>
                    </div>
                    <div class="col-lg-4">
                        <button type="button" class="btn btn-outline-ocean" name="input" id="input">Input</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
       $(document).ready(function () {
            $('#hitung').on('click', function () {
                const cp1 = parseFloat($("#cp1").val()) || 0;
                const cp2 = parseFloat($("#cp2").val()) || 0;
                const cp3Value = parseFloat($("#cp3").val()) || 0;
                const cp4Value = parseFloat($("#cp4").val()) || 0;
                const cp5Value = parseFloat($("#cp5").val()) || 0;
                const cp6Value = parseFloat($("#cp6").val()) || 0;
                const cp7Value = parseFloat($("#cp7").val()) || 0;

                const totalSum = (cp1*0.05) + (cp2*0.05) + (cp3Value*0.2) + (cp4Value*0.2) + (cp5Value*0.1) + (cp6Value*0.2) + (cp7Value*0.2);
                //const avgSum = parseFloat(totalSum / 7).toFixed(2);

                $("#sum_result").text("Nilai Akhir: " + totalSum);
                $("#result1").parent().show();

                //$("#sum_avg_result").text("Nilai Akhir(Averaged): " + avgSum);
                $("#result2").parent().show();
            })
            $('#input').on('click', function(){
                const nama_mhs =$("#nama_mhs").val();
                const cp1Value = parseFloat($("#cp1").val()) || 0;
                const cp2 = parseFloat($("#cp2").val()) || 0;
                const cp3Value = parseFloat($("#cp3").val()) || 0;
                const cp4Value = parseFloat($("#cp4").val()) || 0;
                const cp5Value = parseFloat($("#cp5").val()) || 0;
                const cp6Value = parseFloat($("#cp6").val()) || 0;
                const cp7Value = parseFloat($("#cp7").val()) || 0;
                const nama_dosen = $("#dosen_penilai").val();

                $.ajax({
                    url: "ajax/ajax_input_nilai.php",
                    type: "POST",
                    data:{
                        tanda: "inputNilai",
                        nama_mhs:nama_mhs,
                        cp1Value:cp1Value,
                        cp2: cp2,
                        cp3Value:cp3Value,
                        cp4Value:cp4Value,
                        cp5Value:cp5Value,
                        cp6Value:cp6Value,
                        cp7Value:cp7Value,
                        nama_dosen:nama_dosen
                    },
                    success:function(respond){
                        var response = JSON.parse(respond);
                        var avg = response['avg'];
                        var totalSum = response['totalSum'];
                        console.log(response);

                        $("#sum_result").text("Nilai Akhir: " + totalSum);
                        $("#result1").parent().show();

                        //$("#sum_avg_result").text("Nilai Akhir(Averaged): " + avg);
                       // $("#result2").parent().show();
                        
                        alert(response['errorlog']);
                    },
                    error:function(){
                        alert("gagal");
                    }
                })
            
            })

            $('#nama_mhs').on('change', function(){
                var nama_mhs = $(this).val();
                var nama_dosen = "SILVIA ROSTIANINGSIH, S.Kom., M.MT.";
                console.log(nama_mhs);
                console.log(nama_dosen);
                $.ajax({
                    url: "ajax/ajax_input_nilai.php",
                    type: "POST",
                    data:{
                        tanda: "status_dosen",
                        nama_mhs:nama_mhs,
                        nama_dosen: nama_dosen              
                    },
                    success:function(respond){
                        console.log(respond);
                        $("#status_dosen").val(respond);
                        $("#result_status_dosen").parent().show();
                        
                    },
                    error:function(){
                        alert("gagal");
                    }
                })
            })
        });

    </script>
</body>
</html>