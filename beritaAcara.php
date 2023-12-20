<?php
include 'config.php';

if (isset($_POST['keyword'])){
    $keyword = $_POST['keyword'];

    $sql = "SELECT * FROM berita_acara WHERE nama_nrp LIKE '%$keyword%'";
    $result = mysqli_query($conn, $sql);
}

$username = $_SESSION['username'];
    $sql_login = "SELECT * FROM data_dosen WHERE nip LIKE '%$username%'";
    $result_login = mysqli_query($conn, $sql_login);
    $row = mysqli_fetch_assoc($result_login);
    $getnama = $row['nama'];
    $username=$getnama;

$nama_dosen = $username;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="navbar.css">
    <title>Berita Acara</title>
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
    padding-bottom: 500px;
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

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 10px;">
        <img class="logopcu" src="Asset\image\pcu logo.png" alt="" style="margin-right: 20px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mynav">
                <li class="nav-link">
                    <a class="text-decoration-none" aria-current="page" href="homeAdmin.php">Home</a>
                </li>
                <li class="nav-link">
                    <a class="text-decoration-none" href="vakasi.php">Vakasi</a>
                </li>
                <li class="nav-link">
                    <a class="text-decoration-none" href="dataMahasiswa.php">Data Mahasiswa</a>
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
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="text-align: center; color: #0B6977" class="text-uppercase">berita acara</h1>
                </div>
            </div>
        </div>

        <form action="" method="POST">
            <div class="row mt-4">
                <div class="col-lg-3">
                    <div class="input-group mb-3" style="margin-top: 30px;">
                        <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Search">
                    </div>
                </div>
    
                <div class="col-lg-3">
                    <button type="submit" class="btn btn-outline-ocean" style="margin-top: 30px;">Search</button>
                </div>

                <div class="col-lg-6">
                    <div style="float: right;">
                    <select class="form-select" name="periode" id="periode" class="Default select example" style="margin-top: 30px;">
                        <option selected value="Semua">Semua</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                    </select>
                    </div>
                </div>
            </div>
        </form>

        <div class="row mt-4">
            <div class="col-lg-12">
                <div id="searchResult">
                    <table class="mx-auto table table-striped">
                        <thead style="background-color:#0B6977; color: whitesmoke; text-align: center;">
                            <tr>
                                <th>ID</th>
                                <th>Mahasiswa</th>
                                <th>Judul Skripsi</th>
                                <th>Konsentrasi</th>
                                <th>Tanggal Sidang</th>
                                <th>Ruang Sidang</th>
                                <th>Ketua Penguji</th>
                                <th>Anggota Penguji</th>
                                <th>Pembimbing 1</th>
                                <th>Pembimbing 2</th>
                                <th>Catatan</th>
                                <th>Nilai Akhir</th>
                                <th>Hasil Sidang</th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center;">
                            <?php if (mysqli_num_rows($result_berita_acara) > 0): ?>
                                <?php while($row = mysqli_fetch_assoc($result_berita_acara)): ?>
                                <tr>
                                    <td><?php echo $row['id'];?></td>
                                    <td><?php echo $row['nama_nrp'];?></td>
                                    <td><?php echo $row['judul_skripsi'];?></td>
                                    <td><?php echo $row['konsentrasi'];?></td>
                                    <td><?php echo date('Y-m-d H:i', strtotime($row['tanggal_sidang'])); ?></td>
                                    <td><?php echo $row['ruang_sidang'];?></td>
                                    <td><?php echo $row['ketua_penguji'];?></td>
                                    <td><?php echo $row['anggota_penguji'];?></td>
                                    <td><?php echo $row['pembimbing_1'];?></td>
                                    <td><?php echo $row['pembimbing_2'];?></td>
                                    <td><?php echo $row['catatan'];?></td>
                                    <td><?php echo $row['nilai_akhir'];?></td>
                                    <td><?php echo $row['hasil_sidang'];?></td>
                                </tr>
                                <?php endwhile ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="13"><h4 style="color: #0B6977;">Tidak ada data.</h4></td>
                                </tr>
                            <?php endif ?>
                        </tbody>

                        
                    </table>
                    <div class="row mt-3">
            <div class="col-lg-12 d-flex flex-row justify-content-center mt-2" onclick="window.location.href = 'addBeritaAcara.php' ">
                    <button class="btn btn-outline-ocean" name="add" id="add">Add</button>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function(){
        $('#keyword').on('keyup', function(){
            var keyword = $('#keyword').val();
            console.log(keyword);
            $.ajax({
                url: "ajax/ajax_berita_acara.php",
                type: "POST",
                data: {
                    keyword: keyword,
                },
                success: function(respond) {
                    // console.log(respond);
                    $("#searchResult").html(respond);
                },
                error: function() {
                    alert("gagal");
                }
            });
        })
    })
</script>
</html>