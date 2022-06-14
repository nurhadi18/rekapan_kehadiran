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
    <title>Datatable - Voler Admin Dashboard</title>
    
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
                    <img src="assets/images/logo.svg" alt="" srcset="">
                </div>
                <?php
                include'menu.php';
                ?>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        
        <div class="main-content container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Data Pengguna</h3>
                        <!--  <p class="text-subtitle text-muted">We use 'simple-datatables' made by @fiduswriter. You can check the full documentation <a href="https://github.com/fiduswriter/Simple-DataTables/wiki">here</a>.</p> -->
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class='breadcrumb-header'>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Datatable</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Simple Datatable
                    </div>
                    <div class="card-body">
                        <table class='table table-striped' id="table1">
                            <thead>
                                <tr class="table-primary">
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama Pengguna</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Telpon</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql = mysqli_query($koneksi, "SELECT * FROM pengguna");
                                while ($row = mysqli_fetch_assoc($sql)) {    
                                  ?>
                                  <tr>
                                    <td><?php echo $no?></td>
                                    <td><?= $row['nik']?></td>
                                    <td><?= $row['nama']?></td>
                                    <td><?= $row['jenkel']?></td>
                                    <td><?= $row['alamat']?></td>
                                    <td><?= $row['no_hp']?></td>
                                    <td><?= $row['username']?></td>
                                    <td><?= $row['password']?></td>
               <!--  <td style="text-align: center;">
                  <a href="<?= 'edit_barang.php?id=' . $row['id_barang']?>" class="btn btn-success btn-icon-split btn-sm">
                    <span class="icon text-white-50">
                      <i class="fas fa-cog"></i>
                    </span>
                    <span class="text font-weight-bold">Edit</span>
                  </a>
                  <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?')" class="btn btn-danger btn-icon-split btn-sm " href="<?= 'hapus_barang.php?id=' . $row['id_barang']?>">
                    <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                    </span>
                    <span class="text font-weight-bold">Hapus</span>
                  </a>
              </td> -->
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
include'footer.php';
?>

<!-- <footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-left">
            <p>2020 &copy; Voler</p>
        </div>
        <div class="float-right">
            <p>Crafted with <span class='text-danger'><i data-feather="heart"></i></span> by <a href="http://ahmadsaugi.com">Ahmad Saugi</a></p>
        </div>
    </div>
</footer> -->
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
