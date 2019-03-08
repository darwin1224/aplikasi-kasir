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
                    Data Pengguna
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Data Pengguna</li>
                </ol>
            </section>
            <div id="error"></div>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">

                            <div class="box">
                                <div class="box-header">
                                    <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#Modaltambah"><span
                                            class="fa fa-plus"></span>
                                        Tambah Pengguna</a>
                                    <span class="reload" style="margin-top: 100px; margin-left: 10px;"></span>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="tbl-pengguna" class="table table-striped table-bordered table-condensed table-hover"
                                        style="font-size:13px;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Gambar</th>
                                                <th>Nama Pengguna</th>
                                                <th>Email Pengguna</th>
                                                <th>Gender</th>
                                                <th>Alamat</th>
                                                <th style="text-align: center;" width="15%">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="showdatapengguna"></tbody>
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

    <div class="modal fade" id="Modaltambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span
                                class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Pengguna</h4>
                </div>
                <form class="form-horizontal" id="form-tambah" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div id="info"></div>
                        <div class="form-group">
                            <label for="inputNamapengguna" class="col-sm-4 control-label">Nama Pengguna</label>
                            <div class="col-sm-7">
                                <input type="text" name="namapengguna" placeholder="Nama Pengguna" class="form-control inputNamapengguna"
                                    id="inputNamapengguna" onkeyup="this.value=this.value.toUpperCase()" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmailpengguna" class="col-sm-4 control-label">Email Pengguna</label>
                            <div class="col-sm-7">
                                <input type="email" name="emailpengguna" placeholder="Email Pengguna" class="form-control inputEmailpengguna"
                                    id="inputEmailpengguna" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputJeniskelaminpengguna" class="col-sm-4 control-label">Jenis Kelamin</label>
                            <div class="col-sm-7">
                                <select class="form-control select2 inputJeniskelaminpengguna" name="jeniskelaminpengguna"
                                    required>
                                    <option value="">Pilih-</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAlamatpengguna" class="col-sm-4 control-label">Alamat</label>
                            <div class="col-sm-7">
                                <textarea name="alamatpengguna" cols="20" rows="5" class="form-control inputAlamatpengguna"
                                    placeholder="Alamat" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUsernamepengguna" class="col-sm-4 control-label">Username</label>
                            <div class="col-sm-7">
                                <input type="text" name="usernamepengguna" placeholder="Username" class="form-control inputUsernamepengguna"
                                    id="inputUsernamepengguna" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPasswordpengguna" class="col-sm-4 control-label">Password</label>
                            <div class="col-sm-7">
                                <input type="password" name="passwordpengguna" placeholder="Password" class="form-control inputPasswordpengguna"
                                    id="inputPasswordpengguna" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputGambarpengguna" class="col-sm-4 control-label">Gambar</label>
                            <div class="col-sm-7">
                                <input type="file" name="gambarpengguna" class="form-control inputGambarpengguna" id="inputGambarpengguna"
                                    required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-flat tambah" id="btn-tambah">Tambah</button>
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
                    <h4 class="modal-title" id="myModalLabel">Ubah Pelanggan</h4>
                </div>
                <form class="form-horizontal" id="form-ubah" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="idpengguna" class="inputIDpengguna2">
                        </div>
                        <div class="form-group">
                            <label for="inputNamapengguna2" class="col-sm-4 control-label">Nama Pengguna</label>
                            <div class="col-sm-7">
                                <input type="text" name="namapengguna" placeholder="Nama Pengguna" class="form-control inputNamapengguna2"
                                    id="inputNamapengguna2" onkeyup="this.value=this.value.toUpperCase()" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmailpengguna2" class="col-sm-4 control-label">Email Pengguna</label>
                            <div class="col-sm-7">
                                <input type="email" name="emailpengguna" placeholder="Email Pengguna" class="form-control inputEmailpengguna2"
                                    id="inputEmailpengguna2" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputJeniskelaminpengguna2" class="col-sm-4 control-label">Jenis Kelamin</label>
                            <div class="col-sm-7">
                                <select class="form-control select2 inputJeniskelaminpengguna2" name="jeniskelaminpengguna"
                                    required>
                                    <option value="">Pilih-</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAlamatpengguna2" class="col-sm-4 control-label">Alamat</label>
                            <div class="col-sm-7">
                                <textarea name="alamatpengguna" cols="20" rows="5" class="form-control inputAlamatpengguna2"
                                    placeholder="Alamat" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUsernamepengguna2" class="col-sm-4 control-label">Username</label>
                            <div class="col-sm-7">
                                <input type="text" name="usernamepengguna" placeholder="Username" class="form-control inputUsernamepengguna2"
                                    id="inputUsernamepengguna2" required disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPasswordpengguna2" class="col-sm-4 control-label">Password</label>
                            <div class="col-sm-7">
                                <input type="password" name="passwordpengguna" placeholder="Password" class="form-control inputPasswordpengguna2"
                                    id="inputPasswordpengguna2" required disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputGambarpengguna2" class="col-sm-4 control-label">Gambar</label>
                            <div class="col-sm-7">
                                <input type="file" name="gambarpengguna" class="form-control inputGambarpengguna2" id="inputGambarpengguna2"
                                    required>
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
    </div>

    <!--Modal Hapus pelanggan-->
    <div class="modal fade" id="Modalhapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span
                                class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Hapus Pengguna</h4>
                </div>
                <form class="form-horizontal">
                    <div class="modal-body">
                        <input type="hidden" name="idpengguna3" class="inputIDpengguna3" />
                        <p>Apakah Anda yakin mau menghapus pengguna ini?</p>
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
    <script type="text/javascript">
    $(document).ready(function() {
        window.setTimeout(() => {
            $('#loader-wrapper').css('display', 'none');
        }, 1000);

        tampil_data_pengguna();

        $('#tbl-pengguna').DataTable();

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

        function tampil_data_pengguna() {
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/datapengguna/data_pengguna") ?>',
                dataType: 'json',
                beforeSend: function() {
                    $('.reload').append('<i class="fa fa-spin fa-refresh fa-2x"></i>');
                },
                success: function(data) {
                    console.log(data);
                    var html = '';
                    var i;
                    var no = 1;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>';
                        html += '<td>' + no++ + '</td>';
                        html +=
                            '<td style="text-align: center;"><img width="40" height="40" class="img-circle" src="../assets/images/' +
                            data[i].gambar_pengguna + '"></td>';
                        html += '<td>' + data[i].nama_pengguna + '</td>';
                        html += '<td>' + data[i].email_pengguna + '</td>';
                        html += '<td>' + data[i].jenis_kelamin_pengguna + '</td>';
                        html += '<td>' + data[i].alamat_pengguna + '</td>';
                        html +=
                            '<td style="text-align: center;"><a style="margin-right: 8px" class="btn btn-default btn-sm item-ubah" data="' +
                            data[i].id_pengguna +
                            '"><span class="fa fa-pencil"></span></a><a class="btn btn-default btn-sm item-hapus" data="' +
                            data[i].id_pengguna +
                            '"><span class="fa fa-trash"></span></a></td>';
                        html += '</tr>';
                    }
                    $('.reload').html('');
                    $('#showdatapengguna').html(html);
                }
            });
        }

        // GET Update
        $('#showdatapengguna').on('click', '.item-ubah', function() {
            var idpengguna = $(this).attr('data');
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/datapengguna/get_pengguna") ?>',
                dataType: 'json',
                data: {
                    idpengguna: idpengguna
                },
                success: function(data) {
                    $.each(data, function(id_pengguna, nama_pengguna,
                        email_pengguna, jenis_kelamin_pengguna,
                        alamat_pengguna, gambar_pengguna) {
                        $('#Modalubah').modal('show');
                        $('.inputIDpengguna2').val(data.id_pengguna);
                        $('.inputNamapengguna2').val(data.nama_pengguna);
                        $('.inputEmailpengguna2').val(data.email_pengguna);
                        $('.inputUsernamepengguna2').val(data.username);
                        $('.inputPasswordpengguna2').val(data.password);
                        $('.inputJeniskelaminpengguna2').val(data.jenis_kelamin_pengguna);
                        $('.inputAlamatpengguna2').val(data.alamat_pengguna);
                        $('.inputGambarpengguna2').prop(data.gambar_pengguna);
                    });
                }
            })
        });

        // GET Hapus
        $('#showdatapengguna').on('click', '.item-hapus', function() {
            var idpengguna = $(this).attr('data');
            $('#Modalhapus').modal('show');
            console.log(idpengguna);
            $('.inputIDpengguna3').val(idpengguna);
        });

        // Tambah Pengguna
        $('#btn-tambah').on('click', function() {
            var data = new FormData($('#form-tambah')[0]);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/datapengguna/tambah"); ?>',
                dataType: 'json',
                processData: false,
                contentType: false,
                data: data,
                beforeSend: function() {
                    $('#loader-wrapper').css('display', 'block');
                    $('.tambah').html('<i class="fa fa-spin fa-refresh"></i>');
                    $('.tambah').attr('disabled', true);
                },
                success: function(data) {
                    $('.inputNamapengguna').val('');
                    $('.inputEmailpengguna').val('');
                    $('.inputUsernamepengguna').val();
                    $('.inputPasswordpengguna').val();
                    $('.inputJeniskelaminpengguna').val('');
                    $('.inputAlamatpengguna').val('');
                    $('.inputGambarpengguna').val('');
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
                    tampil_data_pengguna();
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

        // Ubah Pengguna
        $('#btn-ubah').on('click', function() {
            var data = new FormData($('#form-ubah')[0]);
            // var idpengguna = $('.inputIDpengguna2').val();
            // var namapengguna = $('.inputNamapengguna2').val();
            // var emailpengguna = $('.inputEmailpengguna2').val();
            // var usernamepengguna = $('.inputUsernamepengguna2').val();
            // var passwordpengguna = $('.inputPasswordpengguna2').val();
            // var jeniskelaminpengguna = $('.inputJeniskelaminpengguna2').val();
            // var alamatpengguna = $('.inputAlamatpengguna2').val();
            // console.log(namapengguna, emailpengguna, usernamepengguna, passwordpengguna,
            //     jeniskelaminpengguna, alamatpengguna);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/datapengguna/ubah") ?>',
                dataType: 'json',
                data: data,
                processData: false,
                contentType: false,
                // cache: false,
                // async: false,
                // data: {
                //     idpengguna: idpengguna,
                //     namapengguna: namapengguna,
                //     emailpengguna: emailpengguna,
                //     usernamepengguna: usernamepengguna,
                //     passwordpengguna: passwordpengguna,
                //     jeniskelaminpengguna: jeniskelaminpengguna,
                //     alamatpengguna: alamatpengguna
                // },
                beforeSend: function() {
                    $('#loader-wrapper').css('display', 'block');
                    $('.ubah').html('<i class="fa fa-spin fa-refresh"></i>');
                    $('.ubah').attr('disabled', true);
                },
                success: function(data) {
                    $('.inputIDpengguna2').val('');
                    $('.inputNamapengguna2').val('');
                    $('.inputEmailpengguna2').val('');
                    $('.inputUsernamepengguna2').val();
                    $('.inputPasswordpengguna2').val();
                    $('.inputJeniskelaminpengguna2').val('');
                    $('.inputAlamatpengguna2').val('');
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
                    tampil_data_pengguna();
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

        // Hapus Pengguna
        $('#btn-hapus').on('click', function() {
            var idpengguna = $('.inputIDpengguna3').val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/datapengguna/hapus") ?>',
                dataType: 'json',
                data: {
                    idpengguna3: idpengguna
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
                    tampil_data_pengguna();
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