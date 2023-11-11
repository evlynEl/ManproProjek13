<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Home Admin</title>
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

    #content {
        display: flex;
        background-color: white;
        border-radius: 50px;
        padding: 30px;
        margin: 20px;
        width: fit-content;
        height: fit-content;
    }

    #percent,
    #news {
        max-width: 250px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        padding: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .col-md-3 {
        background-color: #FFD600B2;
        border: 1px solid #ddd;
        border-radius: 15px;
        position: relative;
        font-size: 30px;
        font-weight: bold;
        color: white;
        text-align: center;
        text-shadow: 2px 2px grey;
        margin: auto;
    }

    .col-md-3:hover {
        background-color: white;
        color: #FFD600;
        text-shadow: 2px 2px black;
        border-color: #FFD600;
        border-width: 3px;
    }

    .row-sm-4 {
        display: inline-block;
        width: 100%;
        height: 45%;
        background-color: #FFD600B2;
        border: 1px solid #ddd;
        border-radius: 15px;
        position: relative;
        font-size: 30px;
        font-weight: bold;
        color: white;
        text-shadow: 2px 2px grey;
    }

    .row-sm-4:hover {
        background-color: white;
        color: #FFD600;
        text-shadow: 2px 2px black;
        border-color: #FFD600;
        border-width: 3px;
    }

    #vakasi,
    #datamhs {
        margin-bottom: 15px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #title_bobot,
    #title_berita {
        display: flex;
        padding-top: 5px;
    }
</style>

<body style="background-color:#0B6977">
    <div id="header1">
        <h1>WELCOME ADMIN!</h1>
    </div>
    <center>
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