<?php
include 'config/koneksi.php';

$username = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['username']));
$password = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['password']));

$sql  = mysqli_query($koneksi," SELECT * FROM pengguna WHERE username = '$username' AND password = '$password' ");
$row      = mysqli_fetch_assoc($sql);
$cek    = mysqli_num_rows($sql);

if($cek == 1){

	session_start();
	$_SESSION['id_pengguna']	 = $row['id_pengguna'];
	$_SESSION['nik']		     = $row['nik'];
	$_SESSION['nama']		   	 = $row['nama'];
	$_SESSION['jengkel']		 = $row['jengkel'];
	$_SESSION['tempat_lahir']	 = $row['tempat_lahir'];
	$_SESSION['tgl_lahir']		 = $row['tgl_lahir'];
	$_SESSION['alamat']		     = $row['alamat'];
	$_SESSION['no_hp']		     = $row['no_hp'];
	$_SESSION['username']		 = $row['username'];
	$_SESSION['passsword']		 = $row['password'];

	echo"
	<script>
	window.location = 'media.php';
	</script>
	";
}else{
	echo"
	<script>
	alert('Maaf login anda salah');
	window.location = 'index.php';
	</script>
	";
		 //Jika tidak ditemukan, maka tampil pesan dibawah ini
}
?>





