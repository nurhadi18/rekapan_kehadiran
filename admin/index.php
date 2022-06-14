<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in -APK_Perjalanan Dashboard</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    
    <link rel="shortcut icon" href="assets/images/smk.jpg" type="image/gallery">
    <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
    <div id="auth">

        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 mx-auto">
                    <div class="card pt-4">
                        <div class="card-body">
                            <div class="text-center mb-5">
                                <img src="assets/images/smk.jpg" height="90" width="90" class='mb-4'>
                                <h3><u><b> Sign In </b></u></h3>
                                <p><i> Silahkan Masuk Login Terlebih Dahulu </i></p>
                            </div>
                            <form action="aksi_login.php" method="POST">
                                <div class="form-group position-relative has-icon-left">
                                    <label for="username">Username</label>
                                    <div class="position-relative">
                                        <input type="text" placeholder="Enter..."  name="username" class="form-control ">
                                        <div class="form-control-icon">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group position-relative has-icon-left">
                                    <div class="clearfix">
                                        <label for="password">Password</label>
                              <!--   <a href="auth-forgot-password.html" class='float-right'>
                                    <small>Forgot password?</small>
                                </a> -->
                            </div>
                            <div class="position-relative">
                                <input type="password" name="password" placeholder="Enter..." class="form-control">
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>

                        <div class='form-check clearfix my-4'>
                            <div class="checkbox float-left">
                                <input type="checkbox" id="checkbox1" class='form-check-input' >
                                <label for="checkbox1">Remember me</label>
                            </div>
                           <!--  <div class="float-right">
                                <a href="register.php">Don't have an account?</a>
                            </div> -->
                        </div>
                        <div class="clearfix">
                           <button class="btn btn-primary btn-user btn-block" type="submit" value="submit" name="simpan">Log In</button>
                       </div>
                   </form>
                   <!--  <div class="divider">
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

</div>
<script src="assets/js/feather-icons/feather.min.js"></script>
<script src="assets/js/app.js"></script>

<script src="assets/js/main.js"></script>
</body>

</html>
