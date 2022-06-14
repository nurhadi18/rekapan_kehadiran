<?php
session_start();
include 'config/koneksi.php';
include 'header.php';
include 'menu.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input - Voler Admin Dashboard</title>

    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/smk.jpg" type="image/gallery">
</head>

<body>



    <div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>WELCOME</h3>
                    <p class="text-subtitle text-muted"></p>
                </div>
            </div>

        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <!-- <h3 class="card-title">Data Perjalanan</h3> -->
                    <big class="card-title"> Data Guru</big>
                </div>



                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="" method="POST">
                                <b>
                                    <?php
                                    $tgl = date('l, d-m-y');
                                    echo $tgl;
                                    ?>
                                </b>

                                <hr>

                                <!-- <b>
                                    <?php
                                    date_default_timezone_set('Asia/jakarta');
                                    echo "Waktu Sekarang menunjukkan Adalah"   . date("h:i:s");
                                    ?>
                                </b> -->

                                <div class="form-group">
                                    <label for="helperText">Kode Guru</label>
                                    <input type="text" name="kode_guru" class="form-control" placeholder="Enter Kode Guru..."></input>

                                </div>
                                <div class="form-group">
                                    <label for="helperText">Nama Guru</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Enter Nama Guru..."></input>

                                </div>
                                <div class="form-group">
                                    <label for="helperText">Alamat</label>
                                    <textarea type="text" name="alamat" class="form-control" placeholder="Enter Alamat"></textarea>

                                </div>
                                <div class="form-group">
                                    <label for="helperText">Telpon</label>
                                    <input type="text" name="no_hp" class="form-control" placeholder="Enter Telpon"></input>
                                </div>


                                <!-- <div class="form-group">
                                    <select name="suhu_tubuh" class="form-control form-control-rounded">
                                        <option selected="selected">==Pilih Suhu Tubuh==</option>
                                        <?php
                                        // $bulan = date('M');
                                        for ($a = 1; $a <= 40; $a += 1) {

                                            echo "<option value=$a> $a</option>";
                                        }
                                        ?>
                                    </select>

                                </div> -->

                                <button type="submit" value="submit" name="simpan" class="btn btn-primary btn-icon-split btn-sm">
                                    <span class="icon text-white-90">
                                        <i data-feather="save"></i>
                                    </span>
                                    <span class="text font-weight-bold">Simpan</span>
                                </button>

                                <a href="guru.php" class="btn btn-success btn-icon-split btn-sm">
                                    <span class="icon text-white-90">
                                        <i class="fas fa-angle-left"></i>
                                        <i data-feather="home"></i>
                                    </span>
                                    <span class="text font-weight-bold">Kembali</span>
                                </a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- Basic Inputs end -->

        <!-- Input Style start -->

        <!-- validations end -->


    </div>



    <?php
    include 'footer.php';
    ?>

    <?php
    if (isset($_POST['simpan'])) {
        // $id_guru = $_SESSION['id_guru'];
        $kode_guru = $_POST['kode_guru'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $no_hp = $_POST['no_hp'];

        $sql = mysqli_query($koneksi, " INSERT INTO guru VALUES('','$kode_guru', '$nama','$alamat','$no_hp')");

        if ($sql) {
    ?>
            <script type="text/javascript">
                alert("Data Berhasil Di Simpan");
                window.location.href = "guru.php";
            </script>
    <?php
        }
    }
    ?>


    </div>
    </div>
    <script src="assets/js/feather-icons/feather.min.js"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>