<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('_partials/v_head'); ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
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
                    Laporan Stok Buku
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Laporan Stok</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Data Laporan</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="stock" class="table table-striped table-bordered table-condensed table-hover"
                                        style="font-size:13px;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal Stock</th>
                                                <th>Nama Buku</th>
                                                <th>Detail Stock</th>
                                                <th>Jumlah Stock</th>
                                                <th>Supplier</th>
                                            </tr>
                                        </thead>
                                        <tbody id="showstock">

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
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

        tampil_data_stock();

        // tampil_data_buku();

        // tampil_data_supplier();

        $('#databuku').DataTable();

        $('#stock').DataTable();

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


        // Tampil Data Buku
        // function tampil_data_buku() {
        //     $.ajax({
        //         type: 'ajax',
        //         url: '<?php echo base_url("stock/data_buku"); ?>',
        //         dataType: 'json',
        //         async: false,
        //         success: function(data) {
        //             var html = '';
        //             var no = 1;
        //             var i;
        //             for (i = 0; i < data.length; i++) {
        //                 html += '<tr>';
        //                 html += '<td>' + no++ + '</td>';
        //                 html += '<td>' + data[i].nama_buku + '</td>';
        //                 html += '<td>' + data[i].jenis_buku + '</td>';
        //                 html += '<td>' + data[i].harga_buku + '</td>';
        //                 html += '<td>' + data[i].tgl_masuk_buku + '</td>';
        //                 html +=
        //                     '<td style="text-align:center;"><a class="btn btn-default btn-sm item-tambah" style="margin-right: 8px;" data="' +
        //                     data[i].id_buku + '"><span class="fa fa-plus"></span></a>';
        //                 html += '</tr>';
        //             }
        //             $('#showdatabuku').html(html);
        //         }
        //     });
        // }

        // Tampil Data stock
        function tampil_data_stock() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url("admin/laporanstock/laporan_stock"); ?>',
                dataType: 'json',
                async: false,
                success: function(data) {
                    console.log(data);
                    var html = '';
                    var no = 1;
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>';
                        html += '<td>' + no++ + '</td>';
                        html += '<td>' + data[i].tanggal_stock + '</td>';
                        html += '<td>' + data[i].nama_buku + '</td>';
                        html += '<td>' + data[i].detail_stock + '</td>';
                        html += '<td>' + data[i].jumlah_stock + '</td>';
                        html += '<td>' + data[i].nama_supplier + '</td>';
                        html += '</tr>';
                    }
                    $('#showstock').html(html);
                }
            });
        }

        // Tampil Data supplier
        // function tampil_data_supplier() {
        //     $.ajax({
        //         type: 'ajax',
        //         url: '<?php echo base_url("stock/data_supplier"); ?>',
        //         dataType: 'json',
        //         async: false,
        //         success: function(data) {
        //             var html = '';
        //             var no = 1;
        //             var i;
        //             for (i = 0; i < data.length; i++) {
        //                 html += '<option value="' + data[i].id_supplier + '">' + data[i].nama_supplier +
        //                     '</option>';
        //             }
        //             $('#selectsupplier').append(html);
        //         }
        //     });
        // }

        $('#datetimepicker1').datetimepicker();

        $('.select2').select2();
    });
    </script>
</body>

</html>