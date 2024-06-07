<?php
session_start();
include "../koneksi.php";
$sql = "delete from destinasi where id_des = '$_GET[id]'";
mysqli_query($con, $sql);
mysqli_close($con);

header("Location: fasilitas.php");
