<?php
include '../config.php';

$tanda = $_POST['tanda'];

if ($tanda == "cariMahasiswa"){
    $sql = "SELECT * FROM data_mahasiswa";

    if (isset($_POST['keyword']) && trim($_POST['keyword']) != ' '){
        $keyword = $_POST['keyword']; 
        $sql .= " WHERE mahasiswa LIKE '%$keyword%'";
        // if search by name and periode
        if (isset($_POST['periode']) && $_POST['periode'] !== "Semua"){
            $periode = $_POST['periode'];
            $sql .= " AND SUBSTRING(SUBSTRING_INDEX(SUBSTRING_INDEX(tanggal_ruang, ':', 1), ' ', -1), 1, 4) = '$periode'";
            $result = mysqli_query($conn, $sql);
        }
        // if search only by name
        else{
            $result = mysqli_query($conn, $sql);
        }
        var_dump($sql);
    }

    elseif (isset($_POST['periode']) && trim($_POST['periode']) !== "Semua"){
        $periode = $_POST['periode'];
        $sql .= " WHERE SUBSTRING(SUBSTRING_INDEX(SUBSTRING_INDEX(tanggal_ruang, ':', 1), ' ', -1), 1, 4) = '$periode'";
        // if search by periode and name
        if (isset($_POST['keyword'])){
            $keyword = $_POST['keyword']; 
            $sql .= " AND mahasiswa LIKE '%$keyword%'";
            $result = mysqli_query($conn, $sql);
        }
        // if search only by periode
        else{
            $result = mysqli_query($conn, $sql);
        }
        var_dump($sql);
    }
    elseif (isset($_POST['keyword']) && trim($_POST['keyword']) == ' '){
        $sql .= " LIMIT 0, 10";
        $result = mysqli_query($conn, $sql);
        var_dump($sql);
    }
    
    if(mysqli_num_rows($result) > 0){
        ?>
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
        <?php   
        while ($row = mysqli_fetch_array($result)){
            ?>
            <tbody style="text-align: center;">
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
            </tbody>
            <?php } ?>
        </table>
        <?php 
    }
    else{
    ?>
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
            <tbody>
                <tr>
                    <td colspan="5"><h3 style="color: red; text-align:center;">Tidak ada data</h3></td>
                </tr>
            </tbody>
         </table>
    <?php
    }
}
?>