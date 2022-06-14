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
$pdf->Cell(190,7,'LAPORAN BARANG KELUAR SARPRAS',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'SMK DARUL LUGHAH WAL KAROMAH',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'TAHUN AJARAN 2021/2022',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,5,'',0,1);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(60,5,'Nama Barang',1,0);
$pdf->Cell(30,5,'Tgl Masuk',1,0);
$pdf->Cell(25,5,'Jml Masuk',1,0);
$pdf->Cell(50,5,'Suplier',1,0);
$pdf->Ln();

$koneksi = mysqli_connect("localhost", "root", "", "db_aplikasi");

//$nipdos = $_GET['nipdos'];
$sql = mysqli_query($koneksi, "SELECT a.tgl_masuk, a.jml_masuk, a.id_barang_masuk, b.nama_barang, c.nama_suplier FROM barang_masuk AS a JOIN barang AS b ON a.id_barang=b.id_barang JOIN suplier AS c ON a.id_suplier=c.id_suplier");
while ($row = mysqli_fetch_assoc($sql)) {
	$pdf->SetFont('Arial','','10');		
	$pdf->Cell(60,5,$row['nama_barang'],1,0);
	$pdf->Cell(30,5,$row['tgl_masuk'],1,0);
	$pdf->Cell(25,5,$row['jml_masuk'],1,0);
	$pdf->Cell(50,5,$row['nama_suplier'],1,0);

		
$pdf->Ln(); 
// $i++;
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