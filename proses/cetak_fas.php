<?php
session_start();

if (!isset($_SESSION['username']) and !isset($_SESSION['username'])) {
    echo "AKSES DI TOLAK!";
    echo "<br><a href='../login.php'>LOGIN</a>";
    die();
}
// memanggil library FPDF
require('fpdf/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l', 'mm', 'A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial', 'B', 16);
// mencetak string
$pdf->Cell(190, 7, 'HZ DESTINASI', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 7, 'DAFTAR FASILITAS YANG ADA DI HZ DESTINASI', 0, 1, 'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10, 7, '', 0, 1);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 6, 'NAMA', 1, 0);
$pdf->Cell(120, 6, 'DESKRIPSI', 1, 1);
$pdf->SetFont('Arial', '', 10);
include '../koneksi.php';
$desti = mysqli_query($con, "select * from destinasi");
while ($row = mysqli_fetch_array($desti)) {
    $pdf->Cell(30, 6, $row['namades'], 1, 0);
     $pdf->MultiCell(120, 6, $row['Des'], 1,1);
}
$pdf->Output();
