<?php
    include 'config.php';
    
    if(!isset($_SESSION['login'])){
        header("Location: login.php");
        exit;
    }

    if(isset($_SESSION['login'])){
        if ($_SESSION['usertype'] === 'dosen'){
            header("Location: homeDosen.php");
            exit();
        }
        elseif ($_SESSION['usertype'] === 'ketua'){
            header("Location: homeKetuaPenguji.php");
            exit();
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <title>Home Admin</title>
    </head>
    <body style="background-color:#0B6977">
        <div class="head">
            <h1>WELCOME ADMIN!</h1>
        </div>
        
        <div class="container" id="content">
            <div class="row">
                <div class="col-md-4">
                    <div class="row-sm-4" id="vakasi" onclick="window.location.href = 'vakasi.html';">
                        <p>VAKASI</p>
                    </div>
                    <div class="row-sm-4" id="datamhs" onclick="location.href='dataMahasiswa.php'">
                        <p>DATA MAHASISWA</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <center>
                        <div class="row sm-1" id="title_bobot" onclick="window.location.href = 'bobotNilai.html';">
                            <p>ATUR BOBOT NILAI</p>
                            <center>
                                <div class="row md-3" id="percent"><img style="padding-top: 10px;" src="asset/image/percent.png"></div>
                            </center>
                        </div>
                    </center>
                </div>
                <div class="col-md-3">
                    <center>
                        <div class="row sm-1" id="title_berita" onclick="window.location.href = 'BeritaAcara.html';">
                            <p>BERITA ACARA</p>
                            <center>
                                <div class="row md-3" id="news"><img style="padding-top: 10px;" src="asset/image/news.png"></div>
                            </center>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </center>

    <div class="logout_btn" style="padding: 20px 0;">
        <form action="logout.php" method="post" style="float:right; margin-right:15%;">
            <input class="btn btn-warning btn-lg" type="submit" value="Log Out">
        </form>
    </div>
</body>

</html>