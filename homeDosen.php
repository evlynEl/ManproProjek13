<?php
    include 'config.php';

    if(!isset($_SESSION['login'])){
        header("Location: login.php");
        exit;
    }

    if(isset($_SESSION['login'])){
        if ($_SESSION['usertype'] === 'admin'){
            header("Location: homeAdmin.php");
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
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

        h5 {
        color: #FFF;
        }

        #header1 {
        height: 15vh;
        display: flex;
        justify-content: center;
        align-items: center;
        }

        #content{
        display: flex;
        background-color: white;
        border-radius: 50px;
        padding: 30px;
        margin: 20px;
        width: fit-content;
        height: fit-content;
        }

        .col{
        background-color:#FFD600B2;
        border: 1px solid #ddd;
        border-radius: 15px;
        position: relative;
        font-size: 30px;
        font-weight: bold;
        color: white;
        text-align: center;
        text-shadow: 2px 2px grey ;
        margin: auto;
        }

        .col:hover{
        background-color:white;
        color: #FFD600;
        text-shadow: 2px 2px black ;
        border-color: #FFD600;
        border-width: 3px;
        }

        #file{
            margin: 10px 0;
        }
    </style>


    <body style="background-color:#0B6977">
        <div id="header1">
            <h1>WELCOME, <?php echo $_SESSION['username'];?>!</h1>
        </div>
        <!-- <center>
            <div class="col-md-4" id="judul">
                <label for="judul_skripsi"><h5>Judul Skripsi</h5></label>
                <select class="form-select" aria-label="Default select example" name="judul_skripsi">
                    <option selected>Select</option>
                    <option value="judul1">Judul 1</option>
                    <option value="judul2">Judul 2</option>
                </select>
            </div>
        </center> -->
        
        <center>
            <div class="container" id="content">
                <div class="col">
                    <center>
                        <div class="col-lg-3 md-6" id="riwayat_sidang" onclick="location.href='#'">
                            <div id="title_rsidang"><p>RIWAYAT SIDANG</p> 
                                <div class="row md-3" id="file"><img src="asset/image/file.png"></div>
                            </div>
                        </div>
                    </center>
                </div> 
            </div>

            <div class="container" id="content">
                <div class="col">
                    <center>
                        <div class="col-lg-3 md-6" id="addBeritaAcara" onclick="location.href='addberitaAcara.php'">
                            <div id="title_rsidang"><p>Tambah Berita Acara</p> 
                                <div class="row md-3" id="file"><img src="asset/image/file.png"></div>
                            </div>
                        </div>
                    </center>
                </div> 
            </div>
            
            
        </center>
        <div class="logout_btn">
            <form action="logout.php" method="post" style="float:right; margin-right:30%;">
                <input class="btn btn-warning btn-lg" type="submit" value="Log Out">
            </form>
        </div>
    </body>
</html>