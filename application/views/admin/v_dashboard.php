<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('_partials/v_head'); ?>
    <?php
    foreach ($data as $data) {
        $namabuku[] = $data->nama_buku;
        $jumlahstock[] = (float)$data->stock;
        // echo json_encode($namabuku);
        // echo json_encode($jumlahstock);
    }
    ?>
</head>

<body class="hold-transition skin-purple fixed sidebar-mini">
    <div class="wrapper">
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section"></div>
        </div>
        <?php $this->load->view('_partials/v_header'); ?>
        <?php $this->load->view('_partials/v_sidebar'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="callout callout-success">
                            <p>Selamat datang di control panel admin aplikasi eBook!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-xs-3">
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h4>Data Buku</h4>
                                <small>Berbagai data buku telah didata disini!</small>
                            </div>
                            <div class="icon">
                                <i class="ion ion-cube"></i>
                            </div>
                            <a href="<?php echo base_url() . 'admin/databuku' ?>" class="small-box-footer">More info <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-3">
                        <div class="small-box bg-maroon">
                            <div class="inner">
                                <h4>Data Supplier</h4>
                                <small>Data Supplier yang mengirimkan barang</small>
                            </div>
                            <div class="icon">
                                <i class="ion ion-folder"></i>
                            </div>
                            <a href="<?php echo base_url() . 'admin/datasupplier' ?>" class="small-box-footer">More
                                info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-3">
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h4>Data Pelanggan</h4>
                                <small>Data Pelanggan yang membeli buku disini</small>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person"></i>
                            </div>
                            <a href="<?php echo base_url() . 'admin/datapelanggan' ?>" class="small-box-footer">More
                                info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-3">
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h4>Transaksi</h4>
                                <small>Pemberlakuan transaksi ada disini</small>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-cart"></i>
                            </div>
                            <a href="<?php echo base_url() . 'admin/datatransaksi' ?>" class="small-box-footer">More
                                info <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Statistik Stock Buku</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <div class="col-xs-12">
                                            <canvas id="canvas" width="700" height="400"></canvas>
                                        </div>
                                        <!-- /.chart-responsive -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./box-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php $this->load->view('_partials/v_footer'); ?>
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('_partials/v_js'); ?>

    <!-- page script -->
    <script>
    $(document).ready(function() {
        window.setTimeout(() => {
            $('#loader-wrapper').css('display', 'none');
        }, 1000);

        $('#btn-sign-out').on('click', function() {
            $('#loader-wrapper').css('display', 'block');
        });

        $('#btn-data-buku').on('click', function() {
            $('#loader-wrapper').css('display', 'block');
        });

        $('#btn-data-pelanggan').on('click', function() {
            $('#loader-wrapper').css('display', 'block');
        });

        $('#btn-data-transaksi').on('click', function() {
            $('#loader-wrapper').css('display', 'block');
        });

        $('#btn-data-pengguna').on('click', function() {
            $('#loader-wrapper').css('display', 'block');
        });

        $('#btn-settings').on('click', function() {
            $('#loader-wrapper').css('display', 'block');
        });

        $('#btn-data-supplier').on('click', function() {
            $('#loader-wrapper').css('display', 'block');
        });

        $('#btn-kategori').on('click', function() {
            $('#loader-wrapper').css('display', 'block');
        });

        $('#btn-satuan').on('click', function() {
            $('#loader-wrapper').css('display', 'block');
        });

        $('#btn-stock').on('click', function() {
            $('#loader-wrapper').css('display', 'block');
        });

        var lineChartData = {
            labels: <?php echo json_encode($namabuku); ?>,
            datasets: [{
                fillColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                strokeColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                pointColor: "#3b8bba",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(152,235,239,1)",
                data: <?php echo json_encode($jumlahstock); ?>,
            }]
        }

        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Bar(lineChartData);
    });
    </script>
</body>

</html>