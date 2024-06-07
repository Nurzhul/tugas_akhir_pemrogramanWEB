<?php
include "../koneksi.php";
$sql = "SELECT * FROM user ORDER BY username";
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
    <title>User</title>
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
        <h2>Daftar Member</h2>
    </center>
    

    <table border="1" width="80%" style="margin:0 auto; margin-top: 1em; ">
        <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Level</th>
                <?php if ($_SESSION['level'] == 'ADMIN') {
                    echo"<th>Aksi</th>";
                }else{

                }

                 ?>
            </tr>
        </thead>
        <?php if (mysqli_num_rows($tampil) > 0) : ?>
            <?php $no = 1; ?>
            <?php while ($r = mysqli_fetch_array($tampil)) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $r['username'] ?></td>
                    <td><?= $r['level'] ?></td>
                     <?php if ($_SESSION['level'] == 'ADMIN') { ?>
                        <th><a href='proses/hapus_user.php?id=<?= $r['id'] ?>'>Hapus</a></th>
                    <?php } ?>
                </tr>
            <?php endwhile; ?>
        <?php else : ?>
            <tr>
                <td colspan="4" align="center">Data tidak ada!</td>
            </tr>
        <?php endif; ?>

        <tbody>

        </tbody>
    </table>
</body>

</html>