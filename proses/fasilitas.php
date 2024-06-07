<?php
include "../koneksi.php";
$sql = "SELECT * FROM destinasi ORDER BY id_des";
$tampil = mysqli_query($con, $sql);
session_start();

if (!isset($_SESSION['username']) and !isset($_SESSION['username'])) {
    echo "AKSES DI TOLAK!";
    echo "<br><a href='../login.php'>LOGIN</a>";
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas</title>
    <style>
        .a {
            background-color:aquamarine ;
        }
        .b {
            width: 50px;
            height: 50px;
        }
        .g1 {
            height: 220px;
            width: 297px;
            margin: 0px;
            padding: 0px;
        }
        .c {
            text-align: right;
            margin-right: 120px;
            font-size: 25px;
        }
    </style>
</head>

<body class="a">

    <a href="home2.php" ><img src="../img/kembali.png" class="b"><br>Kembali</a>
    <center>
        <img src="../img/hutan1.jpeg" class="g1">
        <img src="../img/kolam.jpeg" class="g1">
        <img src="../img/teater.jpeg" class="g1">
        <img src="../img/hutan2.jpeg" class="g1">
        <hr size="4px" color="black">
        <h2>Fasilitas</h2>
    </center>
    
    <table border="1" width="80%" style="margin:0 auto; margin-top: 1em; ">
            <tr>
                <th>No</th>
                <th>Nama fasilitas/ hiburan </th>
                <th>Deskripsi</th>
                <?php if ($_SESSION['level'] == 'ADMIN') {
                    echo"<th>Aksi</th>";
                }else{

                }
                 ?>
            </tr>
        <?php if (mysqli_num_rows($tampil) > 0) : ?>
            <?php $no = 1; ?>
            <?php while ($r = mysqli_fetch_array($tampil)) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $r['namades'] ?></td>
                    <td><?= $r['Des'] ?></td>
                     <?php if ($_SESSION['level'] == 'ADMIN') { ?>
                        <th><a href='hapus_fas.php?id=<?= $r['id_des'] ?>'>Hapus</a></th>
                    <?php } ?>
                </tr>
            <?php endwhile; ?>
        <?php else : ?>
            <tr>
                <td colspan="4" align="center">Data tidak ada!</td>
            </tr>
        <?php endif; ?>
    </table>
     <br>
        <?php if ($_SESSION['level'] == 'ADMIN') { ?>
                        <th><a href="tambah_fas.php">Tambah Fasilitas </a></th>
                    <?php } ?>
        <div class="c">
            <a href="cetak_fas.php">Cetak</a>
            
        </div>
        
</body>

</html>