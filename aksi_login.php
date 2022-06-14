<?php
include 'config/koneksi.php';

$user = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['user']));
$pass = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['pass']));

$sql  = mysqli_query($koneksi, " SELECT * FROM admin WHERE user = '$user' AND pass = '$pass' ");
$row      = mysqli_fetch_assoc($sql);
$cek    = mysqli_num_rows($sql);

if ($cek == 1) {

	session_start();
	$_SESSION['id_admin']	 = $row['id_admin'];
	$_SESSION['nama']		 = $row['nama'];
	$_SESSION['user']		 = $row['user'];
	$_SESSION['pass']		 = $row['pass'];

	echo "
	<script>
	window.location = 'media.php';
	</script>
	";
} else {
	echo "
	<script>
	alert('Maaf login anda salah');
	window.location = 'index.php';
	</script>
	";
	//Jika tidak ditemukan, maka tampil pesan dibawah ini
}
