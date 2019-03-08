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
                    Data Pelanggan
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Data Pelanggan</li>
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
                                        Tambah Pelanggan</a>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="tbl-pelanggan" class="table table-striped" style="font-size:13px;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Gender</th>
                                                <th>Agama Pelanggan</th>
                                                <th>Alamat Pelanggan</th>
                                                <th style="text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="showdatapelanggan"></tbody>
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
                    <h4 class="modal-title" id="myModalLabel">Tambah Pelanggan</h4>
                </div>
                <form class="form-horizontal" id="tambah">
                    <div class="modal-body">
                        <div id="info"></div>
                        <div class="form-group">
                            <label for="inputNamapelanggan" class="col-sm-4 control-label">Nama Pelanggan</label>
                            <div class="col-sm-7">
                                <input type="text" nama="namapelanggan" placeholder="Nama Pelanggan" class="form-control inputNamapelanggan"
                                    id="inputNamapelanggan" onkeyup="this.value=this.value.toUpperCase()" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputJeniskelaminpelanggan" class="col-sm-4 control-label">Jenis Kelamin</label>
                            <div class="col-sm-7">
                                <select class="form-control select2 inputJeniskelaminpelanggan" name="jeniskelaminpelanggan"
                                    required>
                                    <option value="">Pilih-</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAgamapelanggan" class="col-sm-4 control-label">Agama</label>
                            <div class="col-sm-7">
                                <select class="form-control select2 inputAgamapelanggan" name="agamapelanggan" required>
                                    <option value="">Pilih-</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Buddha">Buddha</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAlamatpelanggan" class="col-sm-4 control-label">Alamat</label>
                            <div class="col-sm-7">
                                <textarea name="alamatpelanggan" cols="20" rows="5" class="form-control inputAlamatpelanggan"
                                    placeholder="Alamat" required></textarea>
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
                <form class="form-horizontal">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="idpelanggan2" placeholder="ID Buku" class="form-control inputIDpelanggan2"
                                id="inputIDbarang2" required>
                        </div>
                        <div class="form-group">
                            <label for="inputNamapelanggan2" class="col-sm-4 control-label">Nama buku</label>
                            <div class="col-sm-7">
                                <input type="text" name="namapelanggan2" placeholder="Nama Pelanggan" class="form-control inputNamapelanggan2"
                                    id="inputNamabarang2" onkeyup="this.value=this.value.toUpperCase()" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputJeniskelaminpelanggan2" class="col-sm-4 control-label">Jenis Kelamin</label>
                            <div class="col-sm-7">
                                <select class="form-control select2 inputJeniskelaminpelanggan2" name="jeniskelaminpelanggan"
                                    required>
                                    <option value="">Pilih-</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAgamapelanggan2" class="col-sm-4 control-label">Agama</label>
                            <div class="col-sm-7">
                                <select class="form-control select2 inputAgamapelanggan2" name="agamapelanggan"
                                    required>
                                    <option value="">Pilih-</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Buddha">Buddha</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAlamatpelanggan2" class="col-sm-4 control-label">Alamat</label>
                            <div class="col-sm-7">
                                <textarea name="alamatpelanggan" cols="20" rows="5" class="form-control inputAlamatpelanggan2"
                                    placeholder="Alamat" required></textarea>
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
                    <h4 class="modal-title" id="myModalLabel">Hapus pelanggan</h4>
                </div>
                <form class="form-horizontal">
                    <div class="modal-body">
                        <input type="hidden" name="idpelanggan3" class="inputIDpelanggan3" />
                        <p>Apakah Anda yakin mau menghapus pelanggan ini?</p>
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

        tampil_data_pelanggan();

        $('#tbl-pelanggan').DataTable();

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

        function tampil_data_pelanggan() {
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/datapelanggan/data_pelanggan") ?>',
                dataType: 'json',
                async: false,
                beforeSend: function() {
                    $('#loader-wrapper').css('display', 'block');
                },
                success: function(data) {
                    var html = '';
                    var i;
                    var no = 1;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>';
                        html += '<td>' + no++ + '</td>';
                        html += '<td>' + data[i].nama_pelanggan + '</td>';
                        html += '<td>' + data[i].jenis_kelamin_pelanggan + '</td>';
                        html += '<td>' + data[i].agama_pelanggan + '</td>';
                        html += '<td>' + data[i].alamat_pelanggan + '</td>';
                        html +=
                            '<td><a class="btn item-ubah" data="' +
                            data[i].id_pelanggan +
                            '"><span class="fa fa-pencil"></span></a><a class="btn item-hapus" data="' +
                            data[i].id_pelanggan +
                            '"><span class="fa fa-trash"></span></a></td>';
                        html += '</tr>';
                    }
                    $('#showdatapelanggan').html(html);
                    $('#loader-wrapper').css('display', 'none');
                }
            });
        }

        // GET Update
        $('#showdatapelanggan').on('click', '.item-ubah', function() {
            var idpelanggan = $(this).attr('data');
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/datapelanggan/get_pelanggan") ?>',
                dataType: 'json',
                data: {
                    idpelanggan: idpelanggan
                },
                success: function(data) {
                    $.each(data, function(id_pelanggan, nama_pelanggan,
                        jenis_kelamin_pelanggan, agama_pelanggan,
                        alamat_pelanggan) {
                        $('#Modalubah').modal('show');
                        $('.inputIDpelanggan2').val(data.id_pelanggan);
                        $('.inputNamapelanggan2').val(data.nama_pelanggan);
                        $('.inputJeniskelaminpelanggan2').val(data.jenis_kelamin_pelanggan);
                        $('.inputAgamapelanggan2').val(data.agama_pelanggan);
                        $('.inputAlamatpelanggan2').val(data.alamat_pelanggan);
                    });
                }
            })
        });

        // GET Hapus
        $('#showdatapelanggan').on('click', '.item-hapus', function() {
            var idpelanggan = $(this).attr('data');
            $('#Modalhapus').modal('show');
            console.log(idpelanggan);
            $('.inputIDpelanggan3').val(idpelanggan);
        });

        // Tambah Pelanggan
        $('#btn-tambah').on('click', function() {
            var namapelanggan = $('.inputNamapelanggan').val();
            var jeniskelaminpelanggan = $('.inputJeniskelaminpelanggan').val();
            var agamapelanggan = $('.inputAgamapelanggan').val();
            var alamatpelanggan = $('.inputAlamatpelanggan').val();
            // var datatambah = $('#form-tambah').serialize();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/datapelanggan/tambah"); ?>',
                dataType: 'json',
                data: {
                    namapelanggan: namapelanggan,
                    jeniskelaminpelanggan: jeniskelaminpelanggan,
                    agamapelanggan: agamapelanggan,
                    alamatpelanggan: alamatpelanggan
                },
                // data: datatambah,
                beforeSend: function() {
                    $('#loader-wrapper').css('display', 'block');
                    $('.tambah').html('<i class="fa fa-spin fa-refresh"></i>');
                    $('.tambah').attr('disabled', true);
                },
                success: function(data) {
                    $('.inputNamapelanggan').val('');
                    $('.inputJeniskelaminpelanggan').val('');
                    $('.inputAgamapelanggan').val('');
                    $('.inputAlamatpelanggan').val('');
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
                    tampil_data_pelanggan();
                    // $('#databuku').DataTable().ajax.reload();
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

        // Ubah Buku
        $('#btn-ubah').on('click', function() {
            var idpelanggan = $('.inputIDpelanggan2').val();
            var namapelanggan = $('.inputNamapelanggan2').val();
            var jeniskelaminpelanggan = $('.inputJeniskelaminpelanggan2').val();
            var agamapelanggan = $('.inputAgamapelanggan2').val();
            var alamatpelanggan = $('.inputAlamatpelanggan2').val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/datapelanggan/ubah") ?>',
                dataType: 'json',
                data: {
                    idpelanggan: idpelanggan,
                    namapelanggan: namapelanggan,
                    jeniskelaminpelanggan: jeniskelaminpelanggan,
                    agamapelanggan: agamapelanggan,
                    alamatpelanggan: alamatpelanggan
                },
                beforeSend: function() {
                    $('#loader-wrapper').css('display', 'block');
                    $('.ubah').html('<i class="fa fa-spin fa-refresh"></i>');
                    $('.ubah').attr('disabled', true);
                },
                success: function(data) {
                    $('.inputIDpelanggan2').val('');
                    $('.inputNamapelanggan2').val('');
                    $('.inputJeniskelaminpelanggan2').val('');
                    $('.inputAgamapelanggan2').val('');
                    $('.inputAlamatpelanggan2').val('');
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
                    tampil_data_pelanggan();
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

        // Hapus Buku
        $('#btn-hapus').on('click', function() {
            var idpelanggan = $('.inputIDpelanggan3').val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/datapelanggan/hapus") ?>',
                dataType: 'json',
                data: {
                    idpelanggan3: idpelanggan
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
                    tampil_data_pelanggan();
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
    <!-- <?php if ($this->session->flashdata('msg') == 'error') : ?>
	<script type="text/javascript">
		$.toast({
			heading: 'Error',
			text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
			showHideTransition: 'slide',
			icon: 'error',
			hideAfter: false,
			position: 'bottom-right',
			bgColor: '#FF4859'
		});

	</script>

	<?php elseif ($this->session->flashdata('msg') == 'success') : ?>
	<script type="text/javascript">
		$.toast({
			heading: 'Success',
			text: "Berita Berhasil disimpan ke database.",
			showHideTransition: 'slide',
			icon: 'success',
			hideAfter: false,
			position: 'bottom-right',
			bgColor: '#7EC857'
		});

	</script>
	<?php elseif ($this->session->flashdata('msg') == 'info') : ?>
	<script type="text/javascript">
		$.toast({
			heading: 'Info',
			text: "Berita berhasil di update",
			showHideTransition: 'slide',
			icon: 'info',
			hideAfter: false,
			position: 'bottom-right',
			bgColor: '#00C9E6'
		});

	</script>
	<?php elseif ($this->session->flashdata('msg') == 'success-hapus') : ?>
	<script type="text/javascript">
		$.toast({
			heading: 'Success',
			text: "Berita Berhasil dihapus.",
			showHideTransition: 'slide',
			icon: 'success',
			hideAfter: false,
			position: 'bottom-right',
			bgColor: '#7EC857'
		});

	</script>
	<?php else : ?>

	<?php endif; ?> -->
</body>

</html>