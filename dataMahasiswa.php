<?php
include 'config.php';

if (isset($_POST["import"])) {
    $file_name = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {
        $file = fopen($file_name, "r");
        fgetcsv($file, 10000, ";");
        
        while (($column = fgetcsv($file, 10000, ";")) !== FALSE) {
            $sql_checkID = "SELECT * FROM data_mahasiswa WHERE id = \"$column[0]\" OR tanggal_ruang = \"$column[1]\"";
            $result = mysqli_query($conn, $sql_checkID);

            if (is_numeric($column[0]) AND $column[0] != NULL){
                if(mysqli_num_rows($result) == 0){
                    $sql_insert = "INSERT into data_mahasiswa (id, tanggal_ruang, mahasiswa, team_penguji, judul_skripsi)
                        values ('" . $column[0] . "','" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "')";
                
                    $result = mysqli_query($conn, $sql_insert);

                    // update mahasiswa hilangkan breakline
                    $remove_newLine = "SELECT REPLACE(mahasiswa, '\n', ' ') as tes FROM data_mahasiswa;";
                    $result_newLine = mysqli_query($conn, $remove_newLine);

                    $temp = 1;
                    while ($row = mysqli_fetch_assoc($result_newLine)){
                        $tes = $row['tes'];
                        // echo $tes . "<br>";
                        $update_query = "UPDATE data_mahasiswa SET mahasiswa = '$tes' WHERE id = $temp";
                        $result_insert = mysqli_query($conn, $update_query);
                        $temp = $temp + 1;
                    }


                    // fetch ketua penguji query
                    $fetch_ketua_penguji = "SELECT TRIM(REPLACE(SUBSTRING_INDEX(SUBSTRING_INDEX(team_penguji, '\n', 2), 'Ketua', -1), '\n' , ' ')) as tes FROM data_mahasiswa;";
                    $result_ketua_penguji = mysqli_query($conn, $fetch_ketua_penguji);
                
                    // fetch anggota penguji query
                    $fetch_anggota_penguji = "SELECT TRIM(REPLACE(SUBSTRING_INDEX(LEFT(SUBSTRING_INDEX(SUBSTRING_INDEX(team_penguji, '\n', -4), '-', 1), 
                    CHAR_LENGTH(SUBSTRING_INDEX(SUBSTRING_INDEX(team_penguji, '\n', -4), '-', 1)) - 17), 'Anggota', -1), '\n' , ' '))
                    as tes FROM data_mahasiswa;";
                    $result_anggota_penguji = mysqli_query($conn, $fetch_anggota_penguji);
                
                    $fetch_pembimbing_1 = "SELECT 
                    CASE
                        WHEN REPLACE(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(team_penguji, '\n', -3), 'Pembimbing', -1), '-', 2), '-', -1), 
                        '\n' , ' ') LIKE '%0%' OR REPLACE(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(team_penguji, '\n', -3), 'Pembimbing', -1), '-', 2), '-', -1), 
                        '\n' , ' ') LIKE '%1%' OR REPLACE(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(team_penguji, '\n', -3), 'Pembimbing', -1), '-', 2), '-', -1), 
                        '\n' , ' ') LIKE '%2%' OR REPLACE(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(team_penguji, '\n', -3), 'Pembimbing', -1), '-', 2), '-', -1), 
                        '\n' , ' ') LIKE '%3%' OR REPLACE(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(team_penguji, '\n', -3), 'Pembimbing', -1), '-', 2), '-', -1), 
                        '\n' , ' ') LIKE '%4%' OR REPLACE(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(team_penguji, '\n', -3), 'Pembimbing', -1), '-', 2), '-', -1), 
                        '\n' , ' ') LIKE '%5%' OR REPLACE(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(team_penguji, '\n', -3), 'Pembimbing', -1), '-', 2), '-', -1), 
                        '\n' , ' ') LIKE '%6%' OR REPLACE(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(team_penguji, '\n', -3), 'Pembimbing', -1), '-', 2), '-', -1), 
                        '\n' , ' ') LIKE '%7%' OR REPLACE(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(team_penguji, '\n', -3), 'Pembimbing', -1), '-', 2), '-', -1), 
                        '\n' , ' ') LIKE '%8%' OR REPLACE(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(team_penguji, '\n', -3), 'Pembimbing', -1), '-', 2), '-', -1), 
                        '\n' , ' ') LIKE '%9%'
                        THEN REPLACE(LEFT(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(team_penguji, '\n', -3), 'Pembimbing', -1), '-', 2), '-', -1), CHAR_LENGTH(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(team_penguji, '\n', -3), 'Pembimbing', -1), '-', 2), '-', -1)) - 6), 
                        '\n' , ' ')
                        ELSE REPLACE(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(team_penguji, '\n', -3), 'Pembimbing', -1), '-', 2), '-', -1), 
                        '\n' , ' ')
                    END as tes
                    FROM data_mahasiswa;";
                    $result_pembimbing_1 = mysqli_query($conn, $fetch_pembimbing_1);

                    // fetch pembimbing 2 query
                    $fetch_pembimbing_2 = "SELECT TRIM(REPLACE(SUBSTRING_INDEX(SUBSTRING_INDEX(SUBSTRING_INDEX(team_penguji, '\n', -3), 'Pembimbing', -1), '-', -1), '\n' , ' ')) as tes FROM data_mahasiswa;";
                    $result_pembimbing_2 = mysqli_query($conn, $fetch_pembimbing_2);


                    // update jadi punya ketua penguji
                    $temp = 1;
                    while ($row = mysqli_fetch_assoc($result_ketua_penguji)){
                        $tes = $row['tes'];
                        // echo $tes . "<br>";
                        $update_query = "UPDATE data_mahasiswa SET ketua_penguji = '$tes' WHERE id = $temp";
                        $result_insert = mysqli_query($conn, $update_query);
                        $temp = $temp + 1;
                    }
                
                    // update jadi punya anggota penguji
                    $temp = 1;
                    while ($row = mysqli_fetch_assoc($result_anggota_penguji)){
                        $tes = $row['tes'];
                        // echo $tes . "<br>";
                        $update_query = "UPDATE data_mahasiswa SET anggota_penguji = '$tes' WHERE id = $temp";
                        $result_insert = mysqli_query($conn, $update_query);
                        $temp = $temp + 1;
                    }
                
                    // update jadi punya pembimbing 1
                    $temp = 1;
                    while ($row = mysqli_fetch_assoc($result_pembimbing_1)){
                        $tes = trim($row['tes']);
                        // echo $tes . "<br>";
                        $update_query = "UPDATE data_mahasiswa SET pembimbing_1 = '$tes' WHERE id = $temp";
                        $result_insert = mysqli_query($conn, $update_query);
                        $temp = $temp + 1;
                    }

                    // update jadi punya pembimbing 2
                    $temp = 1;
                    while ($row = mysqli_fetch_assoc($result_pembimbing_2)){
                        // $tes = '';
                        $check_nama_pembimbing_1 = "SELECT * FROM data_mahasiswa WHERE id = $temp";
                        $result = mysqli_query($conn, $check_nama_pembimbing_1);
                        $row2 = mysqli_fetch_assoc($result);
                        $nama_pembimbing_1 = $row2['pembimbing_1'];

                        if ($nama_pembimbing_1 != $row['tes']){
                            $nama_pembimbing_2 = $row['tes'];
                            $update_query = "UPDATE data_mahasiswa SET pembimbing_2 = '$nama_pembimbing_2' WHERE id = $temp";
                            $result_insert = mysqli_query($conn, $update_query);
                        }
                        $temp = $temp + 1;
                    }
                }
            }
        }   
    }
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
    <title>Data Mahasiswa</title>

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
                    <a class="text-decoration-none" href="beritaAcara.php">Berita Acara</a>
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
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <h1 style="text-align: center; color: #0B6977">DATA MAHASISWA</h1>
                    </div>
                </div>
            </div>
    
            <form action="" method="POST">
                <div class="row mt-4">
                    <div class="col-lg-3">
                        <div class="input-group mb-3" style="margin-top: 30px;">
                            <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Masukkan Nama atau NRP">
                        </div>
                    </div>
        
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-outline-ocean" id="refresh" style="margin-top: 30px;">Refresh</button>
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
                <?php
                    $rowsPerPage = 10;
                    $totalPages = ceil(mysqli_num_rows($result) / $rowsPerPage);
                    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $offset = ($current_page - 1) * $rowsPerPage;
                    $query = "SELECT * FROM data_mahasiswa LIMIT $offset, $rowsPerPage";
                    $result = mysqli_query($conn, $query);
                ?>

                    <div id="searchResult" class="table-responsive">
                        <table class="mx-auto table table-striped">
                            <thead style="background-color:#0B6977; color: whitesmoke; text-align: center;">
                                <tr>
                                    <th>ID</th>
                                    <th>Tanggal Ruang</th>
                                    <th>Mahasiswa</th>
                                    <th>Team Penguji</th>
                                    <th>Judul Skripsi</th>
                                    <!-- <th>Ketua Penguji</th>
                                    <th>Anggota Penguji</th>
                                    <th>Pembimbing 1</th>
                                    <th>Pembimbing 2</th> -->

                                </tr>
                            </thead>
                        
                            <tbody style="text-align: center;">
                                <?php if (mysqli_num_rows($result) > 0): ?>
                                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                                    <tr>
                                        <td><?php echo $row['id'];?></td>
                                        <td><?php echo $row['tanggal_ruang'];?></td>
                                        <td><?php echo $row['mahasiswa'];?></td>
                                        <td><?php echo $row['team_penguji'];?></td>
                                        <td><?php echo $row['judul_skripsi'];?></td>
                                        <!-- <td><?php echo $row['ketua_penguji'];?></td>
                                        <td><?php echo $row['anggota_penguji'];?></td>
                                        <td><?php echo $row['pembimbing_1'];?></td>
                                        <td><?php echo $row['pembimbing_2'];?></td> -->
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

                    <!-- Pagination -->
                    <ul class="pagination justify-content-center">
                        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                            <li class="page-item <?php echo ($current_page == $i ? 'active' : ''); ?>">
                                <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
    
            <div class="row mt-2">
                <div class="col-lg-12 d-flex justify-content-end">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-ocean" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Import
                    </button>
    
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Import CSV</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="modal-body ">
                                    <div class="custom-file">
                                        <label for="file"><h5>Pilih File CSV</h5></label>
                                        <br>
                                        <input type="file" class="custom-file-input" name="file" accept=".csv">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-ocean" data-bs-dismiss="modal">Back</button>
                                    <button type="submit" class="btn btn-outline-ocean" name="import">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
</body>
</html>

<script>
    $(document).ready(function(){

        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });

        // keyword (nama atau nrp)
        $('#keyword').on('keyup', function(){
            var keyword = $('#keyword').val();
            var periode = $('#periode').val();

            console.log(keyword);
            $.ajax({
                url: "ajax/ajax_data_mahasiswa.php",
                type: "POST",
                data: {
                    tanda: "cariMahasiswa",
                    keyword: keyword,
                    periode: periode
                },
                success: function(respond) {
                    // console.log(respond);
                    $("#searchResult").html(respond);
                },
                error: function() {
                    alert("gagal");
                }
            });
        });

        // periode
        $('#periode').on('change', function()
        {
            var periode = $('#periode').val();
            var keyword = $('#keyword').val();

            console.log(periode);
            $.ajax({
                url: "ajax/ajax_data_mahasiswa.php",
                type: "POST",
                data: {
                    tanda: "cariMahasiswa",
                    periode: periode,
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
        });
    })
</script>
