<?php
include'config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up - Voler Admin Dashboard</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
    <link rel="shortcut icon" href="assets/images/smk.jpg" type="image/gallery">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
    <div id="auth">
        
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img src="assets/images/smk.jpg" height="100" width="100" class='mb-4'>
                                <h3><b><u> Sign Up </u></b></h3>
                                <p><i>Silahkan Isi Data Register Terlebih Dahulu.</i></p>
                            </div>
                            <form action="" method="POST">
                                <div class="row">
                                   <div class="col-md-6 col-12">
                                    <div class="form-group position-relative has-icon-left">
                                        <label for="nik-column"><b>NIK</b></label>
                                        <div class="position-relative">
                                            <input type="text"  name="nik" class="form-control" placeholder="Enter..">
                                            <div class="form-control-icon">
                                                <i data-feather="book"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                   <div class="form-group position-relative has-icon-left">
                                    <label for="-name-column"><b>Nama Pengguna</b></label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control"  name="nama" placeholder="Enter..">
                                        <div class="form-control-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="username-column"><b>Jenis Kelamin</b></label><br><br>
                                    <input type="radio" name="jenkel" value="Laki-Laki" checked="Laki-Laki">Laki-Laki
                                    <input type="radio" name="jenkel" value="Perempuan">Perempuan
                                </div>
                            </div>


                            <div class="col-md-6 col-12">
                               <div class="form-group position-relative has-icon-left">
                                <label for="country-floating"><b>Tempat Lahir</b></label>
                                <div class="position-relative">
                                    <input type="text" class="form-control"  name="tempat_lahir" placeholder="Enter...">
                                    <div class="form-control-icon">
                                        <i data-feather="settings"></i>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="company-column"><b>Tanggal Lahir</b></label>
                                <input type="date" class="form-control" name="tgl_lahir">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="email-id-column"><b>Alamat</b></label>
                                <textarea class="form-control" name="alamat" placeholder="Enter..."></textarea>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-12">
                           <div class="form-group position-relative has-icon-left">
                            <label for="country-floating"><b>No_HP</b></label>
                            <div class="position-relative">
                                <input type="text" class="form-control"  name="no_hp" placeholder="Enter..">
                                <div class="form-control-icon">
                                    <i data-feather="phone"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-12">
                       <div class="form-group position-relative has-icon-left">
                        <label for="country-floating"><b>Username</b></label>
                        <div class="position-relative">
                            <input type="text" class="form-control"  name="username" placeholder="Enter..">
                            <div class="form-control-icon">
                                <i data-feather="user"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                   <div class="form-group position-relative has-icon-left">
                    <label for="country-floating"><b>Password</b></label>
                    <div class="position-relative">
                        <input type="text" class="form-control"  name="password" placeholder="Enter..">
                        <div class="form-control-icon">
                            <i data-feather="lock"></i>
                        </div>
                    </div>
                </div>
            </div>
            

            <a href="index.php">Have an account? Login</a>
            <div class="clearfix">
                <button class="btn btn-primary float-right" type="submit" value="submit" name="simpan">Simpan</button>
            </div>
        </form>
                  <!--   <div class="divider">
                        <div class="divider-text">OR</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button class="btn btn-block mb-2 btn-primary"><i data-feather="facebook"></i> Facebook</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="btn btn-block mb-2 btn-secondary"><i data-feather="github"></i> Github</button>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/feather-icons/feather.min.js"></script>
<script src="assets/js/app.js"></script>

<script src="assets/js/main.js"></script>
</body>

</html>
<?php
if(isset($_POST['simpan'])){
    $id_pengguna                = $_POST['id_pengguna'];
    $nik                        = $_POST['nik'];
    $nama                       = $_POST['nama'];
    $jenkel                     = $_POST['jenkel'];
    $tempat_lahir               = $_POST['tempat_lahir'];
    $tgl_lahir                  = $_POST['tgl_lahir'];
    $alamat                     = $_POST['alamat'];
    $no_hp                      = $_POST['no_hp'];
    $username                   = $_POST['username'];
    $password                   = $_POST['password'];
    
    $cek = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE nik='$nik'") or die(sql_error($koneksi,_LINE_));
    
    if(mysqli_num_rows($cek) == 0){
        $sql = mysqli_query($koneksi, "INSERT INTO pengguna(id_pengguna, nik, nama, jenkel, tempat_lahir, tgl_lahir, alamat, no_hp, username, password) VALUES('$id_pengguna', '$nik', '$nama', '$jenkel', '$tempat_lahir', '$tgl_lahir', '$alamat', '$no_hp', '$username', '$password')") or die(sql_error($koneksi,_LINE_));
        
        if($sql){
            echo '<script>alert("Berhasil menambahkan data."); document.location="index.php";</script>';
        }else{
            echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
        }
    }else{
        echo '<script>alert("Maaf NIK Sudah Terdaftar."); document.location="register.php";</script>';
        
    }
}
?>