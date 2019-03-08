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
                    Stock
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Stock</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box">
                                <div class="box-header">
                                    <a class="btn btn-success btn-flat icon-tambah" data-toggle="modal" data-target="#Modaltambah"><span
                                            class="fa fa-plus"></span> Tambah Stock</a>
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

    <!--Modal Add Buku-->
    <div class="modal fade" id="Modalmasuk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span
                                class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Buku</h4>
                </div>
                <form class="form-horizontal" id="form-tambah">
                    <div class="modal-body">
                        <table id="databuku" class="table table-striped table-bordered table-condensed table-hover"
                            style="font-size:13px;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Barang</th>
                                    <th>Jenis Barang</th>
                                    <th>Harga Barang</th>
                                    <th>Tgl Masuk Barang</th>
                                    <th style="text-align: center;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="showdatabuku">

                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    $tanggal = date('Y-m-d H:i:s');
    ?>

    <!--Modal Add Buku-->
    <div class="modal fade" id="Modaltambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span
                                class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Stock</h4>
                </div>
                <form class="form-horizontal" id="form-tambah" autocomplete="off">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Tanggal Stock</label>
                            <div class="input-group col-sm-7">
                                <input type="text" class="form-control inputTanggalstock" name="tanggalstock" id="datetimepicker1"
                                    value="<?php echo $tanggal; ?>" readonly>
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Nama Buku</label>
                            <div class="input-group col-sm-7">
                                <input type="hidden" name="idbuku" class="inputIDbuku">
                                <input type="text" class="form-control inputNamabuku" name="namabuku">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary btn-flat" data-toggle="modal"
                                        data-target="#Modalmasuk"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Detail</label>
                            <div class="col-sm-7">
                                <select class="form-control select2 inputDetailstock" name="detailstock" style="width: 100%">
                                    <option selected="selected">-Pilih-</option>
                                    <option value="Penambahan Stok">Penambahan Stok</option>
                                    <option value="Lain">Lain</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Supplier</label>
                            <div class="col-sm-7">
                                <select class="form-control select2 inputIDsupplier" name="idsupplier" id="selectsupplier"
                                    style="width: 100%">
                                    <option selected="selected">-Pilih-</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Jumlah Stock</label>
                            <div class="col-sm-7">
                                <input type="number" name="jumlahstock" class="form-control inputJumlahstock">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat tambah" id="btn-tambah">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php $this->load->view('_partials/v_js'); ?>

    <!-- page script -->
    <script>
    $(document).ready(function() {
        window.setTimeout(() => {
            $('#loader-wrapper').css('display', 'none');
        }, 1000);

        tampil_data_stock();

        tampil_data_buku();

        tampil_data_supplier();

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

        $(document).on('show.bs.modal', '.modal', function(event) {
            var zIndex = 1040 + (10 * $('.modal:visible').length);
            $(this).css('z-index', zIndex);
            setTimeout(function() {
                $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass(
                    'modal-stack');
            }, 0);
        });

        // Tampil Data Buku
        function tampil_data_buku() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url("admin/stock/data_buku"); ?>',
                dataType: 'json',
                async: false,
                success: function(data) {
                    var html = '';
                    var no = 1;
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>';
                        html += '<td>' + no++ + '</td>';
                        html += '<td>' + data[i].nama_buku + '</td>';
                        html += '<td>' + data[i].jenis_buku + '</td>';
                        html += '<td>' + data[i].harga_buku + '</td>';
                        html += '<td>' + data[i].tgl_masuk_buku + '</td>';
                        html +=
                            '<td style="text-align:center;"><a class="btn btn-default btn-sm item-tambah" style="margin-right: 8px;" data="' +
                            data[i].id_buku + '"><span class="fa fa-plus"></span></a>';
                        html += '</tr>';
                    }
                    $('#showdatabuku').html(html);
                }
            });
        }

        // Tampil Data stock
        function tampil_data_stock() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url("admin/stock/data_stock"); ?>',
                dataType: 'json',
                async: false,
                success: function(data) {
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
                        html += '</tr>';
                    }
                    $('#showstock').html(html);
                }
            });
        }

        // Tampil Data supplier
        function tampil_data_supplier() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url("admin/stock/data_supplier"); ?>',
                dataType: 'json',
                async: false,
                success: function(data) {
                    var html = '';
                    var no = 1;
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option value="' + data[i].id_supplier + '">' + data[i].nama_supplier +
                            '</option>';
                    }
                    $('#selectsupplier').append(html);
                }
            });
        }

        // GET Tambah
        $('#showdatabuku').on('click', '.item-tambah', function() {
            var idbuku = $(this).attr('data');
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/stock/get_buku") ?>',
                dataType: 'json',
                data: {
                    idbuku: idbuku
                },
                success: function(data) {
                    $.each(data, function(id_buku, nama_buku) {
                        console.log(data);
                        $('#Modalmasuk').modal('hide');
                        $('.inputIDbuku').val(data.id_buku);
                        $('.inputNamabuku').val(data.nama_buku);
                    });
                }
            })
        });

        // Tambah stock
        $('#btn-tambah').on('click', function() {
            var tanggalstock = $('.inputTanggalstock').val();
            var idbuku = $('.inputIDbuku').val();
            var detailstock = $('.inputDetailstock').val();
            var idsupplier = $('.inputIDsupplier').val();
            var jumlahstock = $('.inputJumlahstock').val();
            console.log(tanggalstock, idbuku, detailstock, idsupplier, jumlahstock);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/stock/tambah"); ?>',
                dataType: 'json',
                data: {
                    tanggalstock: tanggalstock,
                    idbuku: idbuku,
                    detailstock: detailstock,
                    idsupplier: idsupplier,
                    jumlahstock: jumlahstock
                },
                beforeSend: function() {
                    $('#loader-wrapper').css('display', 'block');
                    $('.tambah').html('<i class="fa fa-spin fa-refresh"></i>');
                    $('.tambah').attr('disabled', true);
                },
                success: function(data) {
                    $('.inputTanggalstock').val('');
                    $('.inputIDbuku').val('');
                    $('.inputNamabuku').val('');
                    $('.inputDetailstock').attr('selected', 'selected');
                    $('.inputIDsupplier').attr('selected', 'selected');
                    $('.inputJumlahstock').val('');
                    $('#loader-wrapper').css('display', 'none');
                    $('.tambah').text('Tambah');
                    $('.tambah').attr('disabled', false);
                    $('#Modaltambah').modal('hide');
                    $.toast({
                        heading: 'Success',
                        text: "Data Berhasil disimpan ke database.",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#7EC857'
                    });
                    tampil_data_stock();
                },
                error: function() {
                    alert("Terjadi Kesalahan");
                    $('#loader-wrapper').css('display', 'none');
                    $('.tambah').text('Tambah');
                    $('.tambah').attr('disabled', false);
                }
            });
            return false;
        });

        $('#datetimepicker1').datetimepicker();

        $('.select2').select2();
    });
    </script>
</body>

</html>