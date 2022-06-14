<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'REKAPITULASI DATA DOSEN',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'SMK DARUL LUGHAH WAL KAROMAH',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'TAHUN AJARAN 2017/2018',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,5,'',0,1);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(25,5,'NIP',1,0);
$pdf->Cell(60,5,'NAMA DOSEN',1,0);
$pdf->Cell(50,5,'GOLONGAN',1,0);
$pdf->Cell(50,5,'JURUSAN',1,0);
$pdf->Ln();
mysql_connect("localhost","root","");
mysql_select_db("db_akademikkuliah");
$nipdos = $_GET['nipdos'];
$sql = mysql_query(" SELECT* from dosen");
while ($row = mysql_fetch_assoc($sql)) {
	$pdf->SetFont('Arial','','10');		
	$pdf->Cell(25,5,$row['nipdos'],1,0);
	$pdf->Cell(60,5,$row['namados'],1,0);
	$pdf->Cell(50,5,$row['gol'],1,0);
	$pdf->Cell(50,5,$row['jurusan'],1,0);

		
$pdf->Ln(); 
$i++;
}

$pdf->Ln();
$pdf->SetFont('Arial','','8');		
$pdf->Ln();

$tgl=date("d-F-Y");
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(25,8,'Probolinggo, ',0,0,'R');

$pdf->Cell(25,8,$tgl,0,0,'R');
$pdf->Ln();



$pdf->Cell(30.8,0.12,'Kepala Sekolah, ',0,0,'R');
$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(48,25.4,'_________________________',0,0,'R');

$pdf->Output();



?>