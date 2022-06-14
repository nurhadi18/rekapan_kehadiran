<?php
include 'config/koneksi.php';
$id_guru = $_GET['id_guru'];

$sql = mysqli_query($koneksi, "DELETE FROM guru WHERE id_guru = '$id_guru' ");

if ($sql) {
?>

    <script type="text/javascript">
        alert("Apakah Anda Yakin Ingin Menghapus Data Ini");
        window.location.href = "guru.php";
    </script>
<?php
} else {
    echo "error hapus";
}

?>