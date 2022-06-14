<?php
session_start();

include 'config/koneksi.php';
include 'header.php';
include 'menu.php';

?>

<div class="main-content container-fluid">
    <h2>
        <font color="light_blue">SELAMAT DATANG <b><?php echo $_SESSION['nama']; ?></b></font>
    </h2>
    <div class="page-title">
        <h3>Darul Lughah Wal Karomah</h3>
        <p class="text-subtitle text-muted">A good dashboard to display your statistics</p>
    </div>
    <section class="section">
        <div class="row mb-2">
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>SMP DWK</h3>
                                <div class="card-right d-flex align-items-center">
                                    <!-- <?php
                                            require 'config/koneksi.php';

                                            $query = "SELECT id_perjalanan FROM perjalanan ORDER BY id_perjalanan";

                                            $query_run = mysqli_query($koneksi, $query);

                                            $row = mysqli_num_rows($query_run);
                                            echo '<h1>' . $row . '</h1>';
                                            ?> -->
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas1" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>MTS DWK</h3>
                                <div class="card-right d-flex align-items-center">
                                    <!-- <?php
                                            require 'config/koneksi.php';

                                            $query = "SELECT id_perjalanan FROM perjalanan ORDER BY id_perjalanan";

                                            $query_run = mysqli_query($koneksi, $query);

                                            $row = mysqli_num_rows($query_run);
                                            echo '<h1>' . $row . '</h1>';
                                            ?> -->
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas2" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>MA DWK</h3>
                                <div class="card-right d-flex align-items-center">
                                    <!-- <?php
                                            require 'config/koneksi.php';

                                            $query = "SELECT id_perjalanan FROM perjalanan ORDER BY id_perjalanan";

                                            $query_run = mysqli_query($koneksi, $query);

                                            $row = mysqli_num_rows($query_run);
                                            echo '<h1>' . $row . '</h1>';
                                            ?> -->
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas2" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>SMK DWK</h3>
                                <div class="card-right d-flex align-items-center">
                                    <!-- <?php
                                            require 'config/koneksi.php';

                                            $query = "SELECT id_perjalanan FROM perjalanan ORDER BY id_perjalanan";

                                            $query_run = mysqli_query($koneksi, $query);

                                            $row = mysqli_num_rows($query_run);
                                            echo '<h1>' . $row . '</h1>';
                                            ?> -->
                                </div>
                            </div>
                            <div class="chart-wrapper">
                                <canvas id="canvas2" style="height:100px !important"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
</div>
</div>
</section>
</div>

<?php

include 'footer.php';
?>