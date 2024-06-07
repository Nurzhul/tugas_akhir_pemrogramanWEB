<?php
include "../koneksi.php";
session_start();

if (!isset($_SESSION['username']) and !isset($_SESSION['username'])) {
    echo "AKSES DI TOLAK!";
    echo "<br><a href='../login.php'>LOGIN</a>";
    die();
}

?>
<html>
<style>
    .a {
        background-color:aquamarine;
    }
    .g1 {
        height: 220px;
        width: 297px;
        margin: 0px;
        padding: 0px;
    }
    .long {
       display:inline-block;
    }
    .f {
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: blue;
    }
    .link {
       text-align: center;
    }
    .link ul{
        display:flex;
        list-style: none;
        justify-content: center;
        align-items: center; 
        
    }
    .link li{
        margin-right: 10px;
        margin-left: 10px;
    }
</style>
<head>
    <title>Halaman Utama</title>
</head>
<body class="a" >
    
    <img src="../img/hutan1.jpeg" class="g1">
    <img src="../img/kolam.jpeg" class="g1">
    <img src="../img/teater.jpeg" class="g1">
    <img src="../img/hutan2.jpeg" class="g1">
    <br>
    <center>
        <img src="../img/musium.jpeg" class="g1">
        <img src="../img/teater.jpeg" class="g1">
        <img src="../img/komedi.jpeg" class="g1">
    </center>
    <br>
    <center>
        <hr size="4px" color="black">
        <br>
        <div class="link">
            <ul>
                <li><a href="fasilitas.php">Info Fasilitas</a></li>
                <li><a href="cari.php">Cari Fasilitas</a></li>
                <li><?php if ($_SESSION['level'] == 'ADMIN') {
                    echo"<a href=daftar_member.php>Daftar Member</a>";
                }else{

                }
                 ?></li>
                <li> <a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <br>
        <hr size="4px" color="black">
        <br>
        <h2 class="f">Tentang Kamin</h2><br>
        <p class="c"><font color = "blue">Hz Destinasi </font> merupakan tempat destinasi wisata taman hiburan 
        yang menawarkan banyak sekali hiburan<br> serta pengalaman.<font color = "blue">Hz Destinasi </font>
    telah berdiri sejak tahun 2000 an , mulai dari tahun itu kami terus <br>mengembangkan diri untuk selalu
memberikan pelayanan terbaik. Di <font color = "blue">Hz Destinasi </font> ini kami meyediakan<br> 
banyak sekali wahana dan fasilitas lain nya untuk menghibur setiap orang yang datang serta juga di temani <br>
pemandangan yang sangat indah, muali dari komedi putar,halilintar,teater,musium,waterboom,restoran,hotel<br> 
serta di temani dengan pemandangan hutan yang luas.   </p>
    </center>
    <br><br><br><br><br><br><br><br>

 
</body>

</html>