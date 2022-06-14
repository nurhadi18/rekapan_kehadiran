<?php 
session_start();
$id_pengguna   =    $_SESSION['id_pengguna'];
$nama          =    $_SESSION['nama'];
include 'header.php';
include 'menu.php';
include 'config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Pengaduan">
    <meta name="keywords" content="Pengaduan, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="../flatable/logo.png">
    <title>aplikasi pengaduan masyarakat</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/nowfont.css" type="text/css">
    <link rel="stylesheet" href="css/rockville.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
   <div class="content-wrapper">
  <div class="container-fluid">

    
    <br>
      <br>
        <br>
          <br>
               <div class="form-group">
                                <form action="" method="post">
            <center>
              <div class="col-sm-6">
                <div class="form-group">
                  <select class="form-control" name="tgl">
                    <option value="">-- Pilih Tanggal --</option>
                    <?php
                    $qr = mysqli_query($koneksi, "SELECT tgl FROM perjalanan WHERE id_pengguna='$id_pengguna' GROUP BY tgl");
                    while ($r = mysqli_fetch_assoc($qr)) {
                    ?>
                      <option value="<?= $r['tgl'] ?>"><?= $r['tgl'] ?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <button type="submit" name="cek" class="btn btn-primary">Lihat Data</button>
                </div>
              </div>
            </center>
          </form>
       
      </div>
      <?php
      if (isset($_POST['cek'])) {
        $tgl = $_POST['tgl'];
      ?>
       <div class="table-responsive">
              <table class="table table-striped-sm" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr class="table-light">
                  <th>Tanggal Perjalanan</th>
                  <th>Jam</th>
                  <th>Lokasi</th>
                  <th>Suhu Tubuh</th>
                </tr>
              </thead>
              <tbody>
               
                <?php
                // include '../config/koneksi.php';
                $data = mysqli_query($koneksi, "SELECT * FROM perjalanan WHERE tgl='$tgl' AND id_pengguna='$id_pengguna'");
                while ($row = mysqli_fetch_assoc($data)) {
                ?>
                  <td><?= $row['tgl'] ?></td>
                  <td><?= $row['jam'] ?></td>
                  <td><?= $row['lokasi'] ?></td>
                  <td><?= $row['suhu_tubuh'] ?></td>
                  <td>
                     
                  </td>
              </tbody>
            <?php
                }
            ?>
            </table>
          </div>
        </div>
      <?php
      }
      ?>
 </div>
    <!-- Hero Section End -->

    <!-- Event Section Begin -->
  
    <!-- Countdown Section End -->

    <!-- Footer Section Begin -->
  <!--  <footer class="footer spad set-bg" data-setbg="user/img/footer-bg.png">
        <div class="container">
            <div class="row">
             
                
                <div class="col-lg-3 offset-lg-1 col-md-6">
                
                </div>
            </div>
         Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. 
            <div class="footer__copyright__text">
                <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            </div>
             Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
        </div>
    </footer>-->
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Music Plugin -->
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/jplayerInit.js"></script>
</body>

</html>