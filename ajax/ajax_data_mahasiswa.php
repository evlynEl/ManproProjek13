<?php
include '../config.php';

$tanda = $_POST['tanda'];

if ($tanda == "cariMahasiswa"){

    $sql = "SELECT * FROM data_mahasiswa ";
    $keyword = isset($_POST['keyword']) && $_POST['keyword'] != '' ? $_POST['keyword'] : ''; 
    $periode = isset($_POST['periode']) && $_POST['periode'] != '' ? $_POST['periode'] : "Semua";

    $sql .= "WHERE mahasiswa LIKE '%$keyword%'";
    if ($periode != "Semua")
        $sql .= " AND SUBSTRING(SUBSTRING_INDEX(SUBSTRING_INDEX(tanggal_ruang, ':', 1), ' ', -1), 1, 4) = '$periode'";

    $sql .= " LIMIT 0, 10";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0){
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
        <?php }
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
                    <td colspan="5"><h5 style="color: red; text-align:center;">Tidak ada data.</h5></td>
                </tr>
            </tbody>
        </table>
        
        <?php
    } 
}
?>