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
                    Satuan
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Satuan</li>
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
                                            class="fa fa-plus"></span> Tambah Satuan</a>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="satuan" class="table table-striped table-bordered table-condensed table-hover"
                                        style="font-size:13px;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th width="80%">Satuan</th>
                                                <th style="text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="showsatuan">

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
    <div class="modal fade" id="Modaltambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span
                                class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Satuan</h4>
                </div>
                <form class="form-horizontal" id="form-tambah">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Nama Satuan</label>
                            <div class="col-sm-7">
                                <input type="text" name="namasatuan" class="form-control inputNamasatuan" placeholder="Nama"
                                    onkeyup="this.value=this.value.toUpperCase()">
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

    <div class="modal fade" id="Modalubah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span
                                class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Ubah Satuan</h4>
                </div>
                <form class="form-horizontal">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="idsatuan" class="inputIDsatuan2">
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Nama Satuan</label>
                            <div class="col-sm-7">
                                <input type="text" name="namasatuan" class="form-control inputNamasatuan2" placeholder="Nama"
                                    onkeyup="this.value=this.value.toUpperCase()">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-flat ubah" id="btn-ubah">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Modal Hapus Buku-->
    <div class="modal fade" id="Modalhapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span
                                class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Hapus Satuan</h4>
                </div>
                <form class="form-horizontal">
                    <div class="modal-body">
                        <input type="hidden" name="idsatuan" class="inputIDsatuan3" />
                        <p>Apakah Anda yakin mau menghapus data ini?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-flat hapus" id="btn-hapus">Hapus</button>
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

        tampil_data_satuan();

        $('#satuan').DataTable();

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

        // Tampil Data satuan
        function tampil_data_satuan() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url("admin/satuan/data_satuan"); ?>',
                dataType: 'json',
                async: false,
                success: function(data) {
                    var html = '';
                    var no = 1;
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>';
                        html += '<td>' + no++ + '</td>';
                        html += '<td>' + data[i].nama_satuan + '</td>';
                        html +=
                            '<td style="text-align:center;"><a class="btn btn-default btn-sm item-ubah" style="margin-right: 8px;" data="' +
                            data[i].id_satuan +
                            '"><span class="fa fa-pencil"></span></a><a class="btn btn-default btn-sm item-hapus" data="' +
                            data[i].id_satuan + '"><span class="fa fa-trash"></span></a></td>';
                        html += '</tr>';
                    }
                    $('#showsatuan').html(html);
                }
            });
        }

        // GET Update
        $('#showsatuan').on('click', '.item-ubah', function() {
            var idsatuan = $(this).attr('data');
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/satuan/get_satuan") ?>',
                dataType: 'json',
                data: {
                    idsatuan: idsatuan
                },
                success: function(data) {
                    $.each(data, function(id_satuan, nama_satuan) {
                        console.log(data);
                        $('#Modalubah').modal('show');
                        $('[name="idsatuan"]').val(data.id_satuan);
                        $('[name="namasatuan"]').val(data.nama_satuan);
                    });
                }
            })
        });

        // GET Hapus
        $('#showsatuan').on('click', '.item-hapus', function() {
            var idsatuan = $(this).attr('data');
            $('#Modalhapus').modal('show');
            console.log(idsatuan);
            $('[name="idsatuan"]').val(idsatuan);
        });

        // Tambah satuan
        $('#btn-tambah').on('click', function() {
            var namasatuan = $('[name="namasatuan"]').val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/satuan/tambah"); ?>',
                dataType: 'json',
                data: {
                    namasatuan: namasatuan,
                },
                beforeSend: function() {
                    $('#loader-wrapper').css('display', 'block');
                    $('.tambah').html('<i class="fa fa-spin fa-refresh"></i>');
                    $('.tambah').attr('disabled', true);
                },
                success: function(data) {
                    $('[name="namasatuan"]').val('');
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
                    tampil_data_satuan();
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

        // Ubah satuan
        $('#btn-ubah').on('click', function() {
            var idsatuan = $('[name="idsatuan"]').val();
            var namasatuan = $('.inputNamasatuan2').val();
            console.log(idsatuan, namasatuan);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/satuan/ubah") ?>',
                dataType: 'json',
                data: {
                    idsatuan: idsatuan,
                    namasatuan: namasatuan,
                },
                beforeSend: function() {
                    $('#loader-wrapper').css('display', 'block');
                    $('.ubah').html('<i class="fa fa-spin fa-refresh"></i>');
                    $('.ubah').attr('disabled', true);
                },
                success: function(data) {
                    $('[name="idsatuan"]').val('');
                    $('.inputNamasatuan2').val('');
                    $('#loader-wrapper').css('display', 'none');
                    $('.ubah').text('Ubah');
                    $('.ubah').attr('disabled', false);
                    $('#Modalubah').modal('hide');
                    $.toast({
                        heading: 'Info',
                        text: "Data berhasil di update",
                        showHideTransition: 'slide',
                        icon: 'info',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#00C9E6'
                    });
                    tampil_data_satuan();
                },
                error: function() {
                    alert("Terjadi Kesalahan");
                    $('#loader-wrapper').css('display', 'none');
                    $('.ubah').text('Ubah');
                    $('.ubah').attr('disabled', false);
                }
            });
            return false;
        });

        // Hapus satuan
        $('#btn-hapus').on('click', function() {
            var idsatuan = $('[name="idsatuan"]').val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/satuan/hapus") ?>',
                dataType: 'json',
                data: {
                    idsatuan: idsatuan
                },
                beforeSend: function() {
                    $('#loader-wrapper').css('display', 'block');
                    $('.hapus').html('<i class="fa fa-spin fa-refresh"></i>');
                    $('.hapus').attr('disabled', true);
                },
                success: function(data) {
                    $('#loader-wrapper').css('display', 'none');
                    $('.hapus').text('Hapus');
                    $('.hapus').attr('disabled', false);
                    $('#Modalhapus').modal('hide');
                    $.toast({
                        heading: 'Success',
                        text: "Data Berhasil dihapus.",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#7EC857'
                    });
                    tampil_data_satuan();
                },
                error: function() {
                    alert("Terjadi Kesalahan");
                    $('#loader-wrapper').css('display', 'none');
                    $('.hapus').text('Hapus');
                    $('.hapus').attr('disabled', false);
                }
            })
        });
    });
    </script>
</body>

</html>