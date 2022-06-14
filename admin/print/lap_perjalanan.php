<?php
session_start();
$id_pengguna   =    $_SESSION['id_pengguna'];
$nama          =    $_SESSION['nama'];
$koneksi = mysqli_connect("localhost", "root", "", "db_perjalanan");
?>
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
$pdf->Cell(190,7,'LAPORAN ',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'CATATAN PERJALANAN MASA PANDEMI COVID -19',0,1,'C');
$pdf->SetFont('Arial','B',12);
// $pdf->Cell(190,7,'TAHUN AJARAN 2021/2022',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,5,'',0,1);

$pdf->SetFont('Arial','B',11);
$pdf->Cell(60,5,'tgl',1,0);
$pdf->Cell(50,5,'lokasi',1,0);
$pdf->Cell(50,5,'suhu_tubuh',1,0);
$pdf->Ln();

// $id_perjalanan = $_GET['id_perjalanan'];
$sql = mysqli_query($koneksi, "SELECT * FROM perjalanan WHERE id_pengguna='$id_pengguna'");
while ($row = mysqli_fetch_assoc($sql)) {
	$pdf->SetFont('Arial','','10');		
	$pdf->Cell(60,5,$row['tgl'],1,0);
	$pdf->Cell(50,5,$row['lokasi'],1,0);
	$pdf->Cell(50,5,$row['suhu_tubuh'],1,0);

		
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