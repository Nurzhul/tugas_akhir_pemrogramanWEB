<?php
include "../koneksi.php";
$namades = $_POST['namades'];
$Des = $_POST['Des'];

$sql = "INSERT INTO destinasi (namades, Des) VALUES ('$namades', '$Des')";
$query = mysqli_query($con, $sql);
mysqli_close($con);

header("Location: fasilitas.php");
