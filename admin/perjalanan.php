<?php
session_start();
$id_pengguna    = $_SESSION['id_pengguna'];
$nama           =$_SESSION['nama'];
include'config/koneksi.php';
include'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi catatan Perjalanan</title>

  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

  <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <link rel="shortcut icon" href="assets/images/smk.jpg" type="image/gallery">
</head>
<body>
  <div id="app">
    <div id="sidebar" class='active'>
      <div class="sidebar-wrapper active">
        <div class="sidebar-header">
          <img src="assets/images/smk.jpg" alt="" srcset="">
        </div>
        <?php
        include'menu.php';
        ?>
        <button class="sidebar-toggler btn btn-primary"><i data-feather="home"></i></button>
      </div>
    </div>

    <div class="main-content container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Data Perjalanan</h3>
          </div>
          <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class='breadcrumb-header'>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Datatable</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>

      <section class="section">
        <div class="card">
          <div class="card-header">
            <a href="tambah_perjalanan.php" class="btn btn-primary btn-icon-split btn-sm">
              <span class="icon text-white-90">
                <i data-feather="plus"></i>
              </span>
              <span class="text font-weight-bold">Tambah Data</span>
            </a> 
          </div>


          <div class="card-body">
            <table class='table table-striped' id="table1">
              <thead>
                <tr class="table-primary">
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Jam </th>
                  <th>Lokasi</th>
                  <th>Suhu Tubuh</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
               <?php
               $no = 1;
               $sql = mysqli_query($koneksi, "SELECT * FROM perjalanan WHERE id_pengguna='$id_pengguna'");
               while ($row = mysqli_fetch_assoc($sql)) {    
                ?>
                <tr>
                  <td><?php echo $no?></td>
                  <td><?= $row['tgl']?></td>
                  <td><?= $row['jam']?></td>
                  <td><?= $row['lokasi']?></td>
                  <td><?= $row['suhu_tubuh']?></td>


                  <td >
                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?')" class="btn btn-danger btn-icon-split btn-sm" href="<?= 'hapus_perjalanan.php?id=' . $row['id_perjalanan']?>">
                      <span class="icon text-white-90">


                      </span>
                      <span class="text font-weight-bold">Hapus</span>
                    </a>
                  </td>

                </tr>
                <?php
                $no++;
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>

    </section>
  </div>


  <?php 
  include 'footer.php';
  ?>

</div>
</div>
<script src="assets/js/feather-icons/feather.min.js"></script>
<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/app.js"></script>

<script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
<script src="assets/js/vendors.js"></script>

<script src="assets/js/main.js"></script>
</body>
</html>
