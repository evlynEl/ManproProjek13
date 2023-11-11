<?php
include 'config.php';

if (isset($_POST['search']) && $_POST['keyword'] != ''){
    $nama = $_POST['keyword'];
    $fetch = "SELECT * FROM data_dosen WHERE nama LIKE '%$nama%' OR nip LIKE '%$nama%' OR jabatan LIKE '%$nama%' or jurusan LIKE '%$nama%'";
    $stmt = mysqli_prepare($conn, $fetch);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
}
else{
    $fetch = "SELECT * FROM data_dosen";
    $stmt = mysqli_prepare($conn, $fetch);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
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
    <title>Data Dosen</title>

    <style>
        #rectangle {
        position: fixed;
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

        /* Primary Button Styles */
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
<body style="background-color: #0B6977;">
    <div id="rectangle">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-5">
                    <h1 style="text-align: center; color: #0B6977" class="text-uppercase">data dosen</h1>
                </div>
            </div>
            <form action="" method="post">
                <div class="row mb-4">
                    <div class="col-lg-3">
                        <div class="input-group">
                            <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Masukkan NRP atau nama" aria-label="Masukkan NRP atau nama" aria-describedby="basic-addon2">
                            <button class="btn btn-outline-ocean" type="submit" name="search" id="cari">Search</button>
                        </div>
                    </div>
                </div>
            </form>
    
            <div class="row">
                <div class="col-lg-12">
                    <div id="wadah">
                        <?php if (mysqli_num_rows($result) > 0): ?>
                            <table class="table table-striped">
                                <thead style="background-color:#0B6977; color: whitesmoke;">
                                    <tr>
                                    <th scope="col">NIP</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jabatan</th>
                                    <th scope="col">Jurusan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                        <tr>
                                            <td><?=$row['nip']?></td>
                                            <td><?=$row['nama']?></td>
                                            <td><?=$row['jabatan']?></td>
                                            <td><?=$row['jurusan']?></td>
                                        </tr>
                                <?php endwhile ?>
                                </tbody>
                            </table>
                        <?php else: ?>
                            <h5>Tidak ada data</h5>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="script_live_search_dosen.js"></script>
</body>
</html>