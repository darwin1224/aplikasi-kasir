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
                    Profile
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Settings</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Settings</h3>
                                </div>
                                <!-- /.box-header -->
                                <form>
                                    <div class="box-body">
                                        <div class="form-group">
                                            <input type="hidden" name="idsettings" class="inputIDsettings">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Nama Website</label>
                                            <div>
                                                <input type="text" name="namasettings" class="form-control inputNamasettings"
                                                    placeholder="Nama" onkeyup="this.value=this.value.toUpperCase()">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Alamat Website</label>
                                            <div>
                                                <textarea name="alamatsettings" class="form-control inputAlamatsettings"
                                                    cols="10" rows="2" placeholder="Alamat..."></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Telepon Website</label>
                                            <div>
                                                <input type="text" name="teleponsettings" class="form-control inputTeleponsettings"
                                                    placeholder="Telepon">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Email Website</label>
                                            <div>
                                                <input type="email" name="emailsettings" class="form-control inputEmailsettings"
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Keterangan Website</label>
                                            <div>
                                                <textarea name="keterangansettings" class="form-control inputKeterangansettings"
                                                    cols="10" rows="2" placeholder="Keterangan..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary btn-flat tambah" id="btn-tambah">Simpan</button>
                                </div>
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

        tampil_data_settings();

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

        // Tampil Data Settings
        function tampil_data_settings() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url("admin/settings/data_settings"); ?>',
                dataType: 'json',
                success: function(data) {
                    for (var i = 0; i < data.length; i++) {
                        console.log(data);
                        $('.inputIDsettings').val(data[i].id_settings);
                        $('.inputNamasettings').val(data[i].nama_settings);
                        $('.inputAlamatsettings').val(data[i].alamat_settings);
                        $('.inputTeleponsettings').val(data[i].telepon_settings);
                        $('.inputEmailsettings').val(data[i].email_settings);
                        $('.inputKeterangansettings').val(data[i].keterangan_settings);
                    }

                }
            });
        }

        // Ubah Settings
        $('#btn-tambah').on('click', function() {
            var idsettings = $('.inputIDsettings').val();
            var namasettings = $('.inputNamasettings').val();
            var alamatsettings = $('.inputAlamatsettings').val();
            var teleponsettings = $('.inputTeleponsettings').val();
            var emailsettings = $('.inputEmailsettings').val();
            var keterangansettings = $('.inputKeterangansettings').val();
            console.log(idsettings, namasettings, alamatsettings, teleponsettings, emailsettings,
                keterangansettings);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/settings/ubah") ?>',
                dataType: 'json',
                data: {
                    idsettings: idsettings,
                    namasettings: namasettings,
                    alamatsettings: alamatsettings,
                    teleponsettings: teleponsettings,
                    emailsettings: emailsettings,
                    keterangansettings: keterangansettings
                },
                beforeSend: function() {
                    $('#loader-wrapper').css('display', 'block');
                    $('.tambah').html('<i class="fa fa-spin fa-refresh"></i>');
                    $('.tambah').attr('disabled', true);
                },
                success: function(data) {
                    $('#loader-wrapper').css('display', 'none');
                    $('.tambah').text('Ubah');
                    $('.tambah').attr('disabled', false);
                    $.toast({
                        heading: 'Info',
                        text: "Data berhasil di update",
                        showHideTransition: 'slide',
                        icon: 'info',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#00C9E6'
                    });
                    tampil_data_settings();
                },
                error: function() {
                    alert("Terjadi Kesalahan");
                    $('#loader-wrapper').css('display', 'none');
                    $('.tambah').text('Simpan');
                    $('.tambah').attr('disabled', false);
                }
            });
            return false;
        });
    });
    </script>
</body>

</html>