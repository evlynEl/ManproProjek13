<?php
include 'config.php';

$sql = "SELECT * FROM vakasi";
$result = mysqli_query($conn, $sql);

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
    <title>Vakasi Dosen</title>
</head>
<style>
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
                    <a class="text-decoration-none" href="beritaAcara.php">Berita Acara</a>
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
                    <h1 style="text-align: center; color: #0B6977" class="text-uppercase">vakasi dosen</h1>
                </div>
            </div>
        </div>

        <form action="" method="POST">
            <div class="row mt-4">
                <div class="col-lg-3">
                    <div class="input-group mb-3" style="margin-top: 30px;">
                        <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Masukkan Nama atau NIP dosen">
                    </div>
                </div>

                <div class="col-lg-3">
                    <button type="submit" class="btn btn-outline-ocean" style="margin-top: 30px;">Search</button>
                </div>
            </div>
        </form>
        
        <div class="row">
            <div class="col-lg-12 mt-4">
                <div id="searchResult">
                    <table class="mx-auto table table-striped">
                        <thead style="background-color:#0B6977; color: whitesmoke; text-align: center;">
                            <tr>
                                <th>Nomor Vakasi</th>
                                <th>NIP</th>
                                <th>Dosen</th>
                                <th>Tanggal Sidang</th>
                                <th>Ruang Sidang</th>
                                <th>Nama Mahasiswa</th>
                                <th>Team Penguji</th>
                            </tr>
                        </thead>
                        <?php if (mysqli_num_rows($result) > 0): ?>
                            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <tbody style="text-align: center;">
                                <tr>
                                    <td><?php echo $row['nomor_vakasi']; ?></td>
                                    <td><?php echo $row['nip']; ?></td>
                                    <td><?php echo $row['dosen']; ?></td>
                                    <td><?php echo date('Y-m-d H:i', strtotime($row['tanggal_sidang'])); ?></td>
                                    <td><?php echo $row['ruang_sidang']; ?></td>
                                    <td><?php echo $row['nama_mhs']; ?></td>
                                    <td><?php echo $row['anggota_penguji']; ?></td>
                                </tr>
                            </tbody>
                            <?php endwhile ?>
                        <?php else: ?>
                            <tbody style="text-align: center;">
                                <tr>
                                    <td colspan="7"><h3 style="text-align: center; color:#0B6977;">Tidak ada data.</h3></td>
                                </tr>
                            </tbody>
                        <?php endif ?>
                    </table>
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
                url: "ajax/ajax_vakasi.php",
                type: "POST",
                data: {
                    keyword: keyword,
                },
                success: function(respond) {
                    console.log(respond);
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