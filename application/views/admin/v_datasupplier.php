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
                    Data Supplier
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Data Supplier</li>
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
                                            class="fa fa-plus"></span> Tambah Supplier</a>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="datasupplier" class="table table-striped table-bordered table-condensed table-hover"
                                        style="font-size:13px;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Supplier</th>
                                                <th>Alamat Supplier</th>
                                                <th>Telepon Supplier</th>
                                                <th>Email Supplier</th>
                                                <th style="text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="showdatasupplier">

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
                    <h4 class="modal-title" id="myModalLabel">Tambah Supplier</h4>
                </div>
                <form class="form-horizontal" id="form-tambah">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Nama Supplier</label>
                            <div class="col-sm-7">
                                <input type="text" name="namasupplier" class="form-control inputNamasupplier"
                                    placeholder="Nama" onkeyup="this.value=this.value.toUpperCase()">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Alamat Supplier</label>
                            <div class="col-sm-7">
                                <textarea name="alamatsupplier" class="form-control inputAlamatsupplier" cols="10" rows="5"
                                    placeholder="Alamat..."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Telepon Supplier</label>
                            <div class="col-sm-7">
                                <input type="text" name="teleponsupplier" class="form-control inputTeleponsupplier"
                                    placeholder="Telepon">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Email Supplier</label>
                            <div class="col-sm-7">
                                <input type="email" name="emailsupplier" class="form-control inputEmailsupplier"
                                    placeholder="Email">
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
                    <h4 class="modal-title" id="myModalLabel">Ubah Supplier</h4>
                </div>
                <form class="form-horizontal">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="idsupplier" class="inputIDsupplier2">
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Nama Supplier</label>
                            <div class="col-sm-7">
                                <input type="text" name="namasupplier" class="form-control inputNamasupplier2"
                                    placeholder="Nama" onkeyup="this.value=this.value.toUpperCase()">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Alamat Supplier</label>
                            <div class="col-sm-7">
                                <textarea name="alamatsupplier" class="form-control inputAlamatsupplier2" cols="10"
                                    rows="5" placeholder="Alamat..."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Telepon Supplier</label>
                            <div class="col-sm-7">
                                <input type="text" name="teleponsupplier" class="form-control inputTeleponsupplier2"
                                    placeholder="Telepon">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Email Supplier</label>
                            <div class="col-sm-7">
                                <input type="email" name="emailsupplier" class="form-control inputEmailsupplier2"
                                    placeholder="Email">
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
                    <h4 class="modal-title" id="myModalLabel">Hapus Supplier</h4>
                </div>
                <form class="form-horizontal">
                    <div class="modal-body">
                        <input type="hidden" name="idsupplier" class="inputIDsupplier3" />
                        <p>Apakah Anda yakin mau menghapus Buku ini?</p>

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

        tampil_data_supplier();

        $('#datasupplier').DataTable();

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

        // Tampil Data Supplier
        function tampil_data_supplier() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url("admin/datasupplier/data_supplier"); ?>',
                dataType: 'json',
                async: false,
                success: function(data) {
                    var html = '';
                    var no = 1;
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>';
                        html += '<td>' + no++ + '</td>';
                        html += '<td>' + data[i].nama_supplier + '</td>';
                        html += '<td>' + data[i].alamat_supplier + '</td>';
                        html += '<td>' + data[i].telepon_supplier + '</td>';
                        html += '<td>' + data[i].email_supplier + '</td>';
                        html +=
                            '<td style="text-align:center;"><a class="btn btn-default btn-sm item-ubah" style="margin-right: 8px;" data="' +
                            data[i].id_supplier +
                            '"><span class="fa fa-pencil"></span></a><a class="btn btn-default btn-sm item-hapus" data="' +
                            data[i].id_supplier + '"><span class="fa fa-trash"></span></a></td>';
                        html += '</tr>';
                    }
                    $('#showdatasupplier').html(html);
                }
            });
        }

        // GET Update
        $('#showdatasupplier').on('click', '.item-ubah', function() {
            var idsupplier = $(this).attr('data');
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/datasupplier/get_supplier") ?>',
                dataType: 'json',
                data: {
                    idsupplier: idsupplier
                },
                success: function(data) {
                    $.each(data, function(id_supplier, nama_supplier, alamat_supplier,
                        telepon_supplier, email_supplier) {
                        console.log(data);
                        $('#Modalubah').modal('show');
                        $('.inputIDsupplier2').val(data.id_supplier);
                        $('.inputNamasupplier2').val(data.nama_supplier);
                        $('.inputAlamatsupplier2').val(data.alamat_supplier);
                        $('.inputTeleponsupplier2').val(data.telepon_supplier);
                        $('.inputEmailsupplier2').val(data.email_supplier);
                    });
                }
            })
        });

        // GET Hapus
        $('#showdatasupplier').on('click', '.item-hapus', function() {
            var idsupplier = $(this).attr('data');
            $('#Modalhapus').modal('show');
            console.log(idsupplier);
            $('.inputIDsupplier3').val(idsupplier);
        });

        // Tambah supplier
        $('#btn-tambah').on('click', function() {
            var namasupplier = $('.inputNamasupplier').val();
            var alamatsupplier = $('.inputAlamatsupplier').val();
            var teleponsupplier = $('.inputTeleponsupplier').val();
            var emailsupplier = $('.inputEmailsupplier').val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/datasupplier/tambah"); ?>',
                dataType: 'json',
                data: {
                    namasupplier: namasupplier,
                    alamatsupplier: alamatsupplier,
                    teleponsupplier: teleponsupplier,
                    emailsupplier: emailsupplier
                },
                beforeSend: function() {
                    $('#loader-wrapper').css('display', 'block');
                    $('.tambah').html('<i class="fa fa-spin fa-refresh"></i>');
                    $('.tambah').attr('disabled', true);
                },
                success: function(data) {
                    $('.inputNamasupplier').val('');
                    $('.inputAlamatsupplier').val('');
                    $('.inputTeleponsupplier').val('');
                    $('.inputEmailsupplier').val('');
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
                    tampil_data_supplier();
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

        // Ubah supplier
        $('#btn-ubah').on('click', function() {
            var idsupplier = $('.inputIDsupplier2').val();
            var namasupplier = $('.inputNamasupplier2').val();
            var alamatsupplier = $('.inputAlamatsupplier2').val();
            var teleponsupplier = $('.inputTeleponsupplier2').val();
            var emailsupplier = $('.inputEmailsupplier2').val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/datasupplier/ubah") ?>',
                dataType: 'json',
                data: {
                    idsupplier: idsupplier,
                    namasupplier: namasupplier,
                    alamatsupplier: alamatsupplier,
                    teleponsupplier: teleponsupplier,
                    emailsupplier: emailsupplier
                },
                beforeSend: function() {
                    $('#loader-wrapper').css('display', 'block');
                    $('.ubah').html('<i class="fa fa-spin fa-refresh"></i>');
                    $('.ubah').attr('disabled', true);
                },
                success: function(data) {
                    $('.inputIDsupplier2').val('');
                    $('.inputNamasupplier').val('');
                    $('.inputAlamatsupplier').val('');
                    $('.inputTeleponsupplier').val('');
                    $('.inputEmailsupplier').val('');
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
                    tampil_data_supplier();
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

        // Hapus supplier
        $('#btn-hapus').on('click', function() {
            var idsupplier = $('.inputIDsupplier3').val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/datasupplier/hapus") ?>',
                dataType: 'json',
                data: {
                    idsupplier: idsupplier
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
                    tampil_data_supplier();
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