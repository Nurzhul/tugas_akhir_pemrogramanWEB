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
<html>
<style>
    .log {
        border-style: solid;
        border-color: black;
        border-width: 1px;
    }
    .b1 {
        background-color:aquamarine;
    }
    .c1 {
        margin-top: 50px;
    }
    .img {
        margin-top: 50px;
        width: 200px;
        height: 150px;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
</head>

<body class="b1">
<center><img src="../img/Hz_logo.png" class="img"></center>
    <center class="c1">
    <form action="input_fas.php" method="post">
        <table class="log">
            <tr>
                <td colspan="2"> <center> <h2>Tambah Fasilitas</h2></center> </td>
            </tr>           
            <tr>
                <td>Nama Fasilitas</td>
                <td> : <input name='namades' type='text'></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td> : <textarea name='Des' cols="30" rows="6"></textarea></td>
            </tr>
            <tr>
                <td colspan=2><input type='submit' value='SIMPAN'></td>
            </tr>
        </table>
    </form>
    </center>
</body>

</html>