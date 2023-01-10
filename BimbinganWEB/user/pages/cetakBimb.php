<?php

$id = $_GET['nim'];

require('../../fpdf/fpdf.php');

    class PDF extends FPDF{
        function Header(){
            $this->Image('logo_unpam.png',10,6,30);
        }

        function Footer(){
            $this->SetY(-15);
            $this->SetFont('Arial','I',8);
            $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
        }
    }

$pdf = new FPDF();
$pdf->AddPage();
// $pdf->Image('../../assets/img/logo_unpam.png',10,6,30);
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,7,'Universitas Pamulang',0,1,'C');
$pdf->setFont('Arial', 'B',10);
$pdf->Cell(190,5,'Jl. Surya Kencana No.1, Pamulang Barat',0,1, 'C');
$pdf->setFont('Arial', 'B',10);
$pdf->Cell(190,5,'Kec. Pamulang, Kota Tangerang Selatan',0,1, 'C');
$pdf->setFont('Arial', 'B',10);
$pdf->Cell(190,5,'Banten 15417',0,1, 'C');
$pdf->Line(20, 32, 190, 32);
$pdf->Line(20, 33, 190, 33);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'Daftar Bimbingan Dengan Dosen Pembimbing',0,1,'C');
 
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,6,'NIM',1,0, 'C');
$pdf->Cell(50,6,'Nama Mahasiswa',1,0, 'C');
$pdf->Cell(35,6,'Tanggal Bimbingan',1,0, 'C');
$pdf->Cell(35,6,'Jam Bimbingan',1,0, 'C');
$pdf->Cell(35,6,'Hasil',1,0, 'C');
$pdf->Cell(45,6,'Nama Dosen',1,1, 'C');
 
$pdf->SetFont('Arial','',10);
 
include '../../koneksi/koneksi.php';
$nim = $_GET['nim'];
$bimbingan = mysqli_query($connect, "SELECT a.nim, a.nama_mhs, b.tgl, b.jam, c.nama_dosen FROM mhs a, bimbingan b, dosen c WHERE a.nim=b.nim AND b.nim='$id' AND a.nip=c.nip");
while ($row = mysqli_fetch_array($bimbingan)){
	$pdf->AliasNbPages();
    $pdf->Cell(25,6,$row['nim'],1,0, 'C');
    $pdf->Cell(50,6,$row['nama_mhs'],1,0, 'C');
    $pdf->Cell(35,6,$row['tgl'],1,0, 'C');
    $pdf->Cell(35,6,$row['jam'],1,0, 'C');
    $pdf->Cell(35,6,$row['hasil'],1,0, 'C');
    $pdf->Cell(45,6,$row['nama_dosen'],1,1, 'C'); 
}
 
$pdf->Output();
?>