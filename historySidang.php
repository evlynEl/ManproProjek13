<?php
include 'config.php';

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}

$nama_dosen = $_SESSION['username'];
$sql = "SELECT * FROM vakasi WHERE dosen LIKE '%$nama_dosen%'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

$username = $_SESSION['username'];
    $sql_login = "SELECT * FROM data_dosen WHERE nip LIKE '%$username%'";
    $result_login = mysqli_query($conn, $sql_login);
    $row = mysqli_fetch_assoc($result_login);
    $getnama = $row['nama'];
    $username=$getnama;

$nama_dosenn = $username;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="navbar.css">
    <title>History Sidang</title>

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
        .btn {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        user-select: none;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
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
</head>
<body style="background-color: #0B6977; height: 100%;">

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
                    <a class="text-decoration-none" href="addBeritaAcara.php">Tambah Berita Acara</a>
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
                        <span style="font-size: large; font-weight:500;"><?php echo $nama_dosenn?></span>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <h1 style="text-align: center; color: #0B6977">RIWAYAT SIDANG</h1>
                    </div>
                </div>
            </div>
    
            <div class="row mt-5">
                <div class="col-lg-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Masukkan NRP atau nama" aria-label="Masukkan NRP atau nama" aria-describedby="basic-addon2">
                        <button class="btn btn-outline-ocean" type="button">Search</button>
                    </div>
                </div>
            </div>
    
            <div class="row mt-4">
                <div class="col-lg-12">
                    <table class="mx-auto table table-striped">
                        <thead style="text-align: center; background-color:#0B6977; color:whitesmoke">
                            <tr>
                                <th>Tanggal Sidang</th>
                                <th>Ruang Sidang</th>
                                <th>Nama Mahasiswa</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <?php if (mysqli_num_rows($result) > 0): ?>
                            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <tbody style="text-align: center;">
                                <tr>
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
                                    <td colspan="4"><h3 style="text-align: center; color:#0B6977;">Tidak ada data.</h3></td>
                                </tr>
                            </tbody>
                        <?php endif ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>