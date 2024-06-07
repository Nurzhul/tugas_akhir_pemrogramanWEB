<?php
include "../koneksi.php";
$result = "SELECT * FROM destinasi ";
session_start();

if (!isset($_SESSION['username']) and !isset($_SESSION['username'])) {
    echo "AKSES DI TOLAK!";
    echo "<br><a href='../login.php'>LOGIN</a>";
    die();
}
?>
<html>

<head>
    <title>Halaman Utama</title>
    <style>
        .a {
            background-color:aquamarine ;
        }
        .img {
            margin-top: 50px;
            width: 200px;
            height: 150px;
        }
        .b {
            width: 50px;
            height: 50px;
        }
       
    </style>
</head>

<body class="a">
    <div class="c">
        <a href="home2.php" ><img src="../img/kembali.png" class="b"><br>Kembali</a>
        <form action="" method="GET" style="margin-top: 1em">
            <input style="padding:1em 2em; width:80%;" type="text" name="cari_nama" placeholder="Cari Data Berdasarkan Nama">
        </form>
    </div>
    <?php if (isset($_GET['cari_nama'])) : ?>

        <?php
        $cari_nama = $_GET['cari_nama'];
        $result = mysqli_query($con, "SELECT * FROM destinasi WHERE namades LIKE '%$cari_nama%' LIMIT 1 ");
        ?>

        <?php if ($result->num_rows > 0) : ?>
            <table width='80%' border=1>
                <tr>
                    <th>No</th>
                    <th>Nama fasilitas/ hiburan </th>
                    <th>Deskripsi</th>
                    <?php if ($_SESSION['level'] == 'ADMIN') {
                        echo"<th>Aksi</th>";
                    }
                    ?>
                </tr>
              
            <?php $no = 1; ?>
            <?php while ($r = mysqli_fetch_array($result)) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $r['namades'] ?></td>
                    <td><?= $r['Des'] ?></td>
                     <?php if ($_SESSION['level'] == 'ADMIN') { ?>
                        <th><a href='hapus_fas.php?id=<?= $r['id_des'] ?>'>Hapus</a></th>
                    <?php } ?>
                </tr>
            <?php endwhile; ?>
            </table>
        <?php else : ?>
            <table width='80%' border=1>
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
                <tr>
                    <td colspan="6" align="center">Data tidak di temukan!</td>
                </tr>
            </table>
        <?php endif; ?>


    <?php endif; ?>
    <center><img src="../img/Hz_logo.png" class="img"></center>
</body>
</html>