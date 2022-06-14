<?php
include 'config/koneksi.php';
$id = $_GET['id'];

$sql = mysqli_query($koneksi, "DELETE FROM perjalanan WHERE id_perjalanan = '$id' ");

if ($sql) {
  ?>
  
  <script type="text/javascript">
    alert ("Apakah Anda Yakin Ingin Menghapus Data Ini");
    window.location.href="perjalanan.php";
  </script>
  <?php
}else {
  echo "error hapus";
}

?>