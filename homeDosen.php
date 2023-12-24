<?php
include 'config.php';

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

if (isset($_SESSION['login'])) {
    if ($_SESSION['usertype'] === 'admin') {
        header("Location: homeAdmin.php");
        exit();
    }
}

$username = $_SESSION['username'];
$sql_login = "SELECT * FROM data_dosen WHERE nip LIKE '%$username%'";
$result_login = mysqli_query($conn, $sql_login);
$row = mysqli_fetch_assoc($result_login);
$getnama = $row['nama'];
$username = $getnama;

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="navbar.css">
    <title>Home Dosen</title>
</head>

<style type="text/css">
    h1 {
        color: #FFF;
        text-align: center;
        font-size: 3rem;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    #header1 {
        color: #ffffff;
        text-align: center;
        line-height: normal;
        height: 17vh;
    }

    #content {
        display: flex;
        background-color: white;
        border-radius: 50px;
        padding: 30px;
        margin: 20px;
        max-width: 1050px;
        height: fit-content;
        justify-content: center;
    }

    .col-4 {
        background-color: #FFD600B2;
        border: 1px solid #ddd;
        border-radius: 15px;
        position: relative;
        max-height: 300px;
        width: 100%;
        max-width: 300px;
        font-size: 30px;
        font-weight: bold;
        color: white;
        text-align: center;
        text-shadow: 2px 2px grey;
        margin: 0 10px;
    }

    .col-4:hover {
        background-color: white;
        color: #FFD600;
        text-shadow: 2px 2px black;
        border-color: #FFD600;
        border-width: 3px;
    }

    #score {
        max-width: 200px;
        width: 100%;
    }

    #news {
        margin: 10px 0;
        max-width: 170px;
        width: 100%;
    }

    #file {
        margin: 10px 0;
        max-width: 190px;
        width: 100%;
        padding-top: 20px;
    }
</style>

<body style="background-color:#0B6977;">

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 10px;">
        <img class="logopcu" src="Asset\image\pcu logo.png" alt="" style="margin-right: 20px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" style="margin-right: 50px;">
            <ul class="navbar-nav mynav" style="margin-right: 10px;">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="Asset\image\user.png" alt="" id="profileUserImg">
                        <span style="font-size: large;">
                            <?php echo $username; ?>
                        </span>
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

    <div class="container" style="position: fixed; top: 50%; left: 50%;  transform: translate(-50%, -50%);">
        <div id="header1">
            <p>
            <h1>Welcome,</h1>
            </p>
            <p>
            <h3>
                <?php echo $username; ?>
            </h3>
            </p>
        </div>

        <center>
            <div class="container justify-content-center" id="content">
                <div class="col-4">
                    <center>
                        <div class="row-lg-3" id="input_nilai" onclick="window.location.href = 'input_penilaian.php';">
                            <p>INPUT NILAI</p>
                            <center>
                                <div class="row md-3" id="score"><img src="asset/image/score.png"></div>
                            </center>
                        </div>
                    </center>
                </div>
                <div class="col-4">
                    <center>
                        <div class="row-lg-3" id="riwayat_sidang"
                            onclick="window.location.href = 'addBeritaAcara.php';">
                            <p>TAMBAH BERITA ACARA</p>
                            <center>
                                <div class="row md-3" id="news"><img src="asset/image/news.png"></div>
                            </center>
                        </div>
                    </center>
                </div>
                <div class="col-4">
                    <center>
                        <div class="row-lg-3" id="riwayat_sidang" onclick="window.location.href = 'historySidang.php';">
                            <p>RIWAYAT SIDANG</p>
                            <center>
                                <div class="row md-3" id="file"><img src="asset/image/file.png"></div>
                            </center>
                        </div>
                    </center>
                </div>
            </div>
        </center>
    </div>


    <!-- <div class="logout_btn">
            <form action="logout.php" method="post" style="float:right; margin-right:20%;">
                <input class="btn btn-warning btn-lg" type="submit" value="Log Out">
            </form>
        </div> -->
</body>

</html>