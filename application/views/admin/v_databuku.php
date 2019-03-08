<!DOCTYPE html>
<html>

<head>
    <!-- <title>eBook | Data Buku</title> -->
    <?php $this->load->view('_partials/v_head'); ?>
</head>

<body class="hold-transition skin-purple sidebar-mini">
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
                    Data Buku
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Data Buku</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box">
                                <div class="box-header">
                                    <a class="btn btn-success btn-flat icon-tambah" data-toggle="modal"
                                        data-target="#Modaltambah"><span class="fa fa-plus"></span> Tambah Buku</a>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="databuku"
                                        class="table table-striped table-bordered table-condensed table-hover"
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Buku</h4>
                </div>
                <form class="form-horizontal" id="form-tambah">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="inputNamabuku" class="col-sm-4 control-label">Nama Buku</label>
                            <div class="col-sm-7">
                                <input type="text" name="namabuku" class="form-control inputNamabuku" id="inputNamabuku"
                                    placeholder="Nama Buku" onkeyup="this.value=this.value.toUpperCase()">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputJenisbuku" class="col-sm-4 control-label">Jenis Buku</label>
                            <div class="col-sm-7">
                                <input type="text" name="jenisbuku" class="form-control inputJenisbuku"
                                    id="inputJenisbuku" placeholder="Jenis Buku">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputHargabuku" class="col-sm-4 control-label">Harga Buku</label>
                            <div class="col-sm-7">
                                <input type="text" name="hargabuku" class="form-control inputHargabuku"
                                    id="inputHargabuku" placeholder="Harga Buku">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Tgl Masuk Barang</label>
                            <div class="col-sm-7">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="tglmasukbarang"
                                        class="form-control pull-right inputTglmasukbuku" autocomplete="off"
                                        id="datepicker">
                                </div>
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Ubah Buku</h4>
                </div>
                <form class="form-horizontal">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="idbuku2" placeholder="ID Buku" class="form-control inputIDbuku2"
                                id="inputIDbarang2">
                        </div>
                        <div class="form-group">
                            <label for="inputNamabarang2" class="col-sm-4 control-label">Nama buku</label>
                            <div class="col-sm-7">
                                <input type="text" name="namabuku2" placeholder="Nama Buku"
                                    class="form-control inputNamabuku2" id="inputNamabarang2"
                                    onkeyup="this.value=this.value.toUpperCase()">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inpuJenisbarang2" class="col-sm-4 control-label">Jenis buku</label>
                            <div class="col-sm-7">
                                <input type="text" name="jenisbuku2" placeholder="Jenis Buku"
                                    class="form-control inputJenisbuku2" id="inputJenisbarang2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputHargabarang2" class="col-sm-4 control-label">Harga buku</label>
                            <div class="col-sm-7">
                                <input type="text" name="hargabuku2" placeholder="Harga Buku"
                                    class="form-control inputHargabuku2" id="inputHargabarang2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputTglmasuk2" class="col-sm-4 control-label">Tanggal Masuk</label>
                            <div class="col-sm-7">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="tglmasukbuku2"
                                        class="form-control pull-right inputTglmasukbuku2" id="datepicker2">
                                </div>
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Hapus Buku</h4>
                </div>
                <form class="form-horizontal">
                    <div class="modal-body">
                        <input type="hidden" name="idbuku3" class="inputIDbuku3" />
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

        tampil_data_buku();

        $('#databuku').DataTable();

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
        function tampil_data_buku() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url("admin/databuku/data_buku"); ?>',
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
                            '<td style="text-align:center;"><a class="btn btn-default btn-sm item-ubah" style="margin-right: 8px;" data="' +
                            data[i].id_buku +
                            '"><span class="fa fa-pencil"></span></a><a class="btn btn-default btn-sm item-hapus" data="' +
                            data[i].id_buku + '"><span class="fa fa-trash"></span></a></td>';
                        html += '</tr>';
                    }
                    $('#showdatabuku').html(html);
                }
            });
        }

        // GET Update
        $('#showdatabuku').on('click', '.item-ubah', function() {
            var idbuku = $(this).attr('data');
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/databuku/get_buku") ?>',
                dataType: 'json',
                data: {
                    idbuku: idbuku
                },
                success: function(data) {
                    $.each(data, function(id_buku, nama_buku, jenis_buku, harga_buku,
                        tgl_masuk_buku) {
                        $('#Modalubah').modal('show');
                        $('.inputIDbuku2').val(data.id_buku);
                        $('.inputNamabuku2').val(data.nama_buku);
                        $('.inputJenisbuku2').val(data.jenis_buku);
                        $('.inputHargabuku2').val(data.harga_buku);
                        $('.inputTglmasukbuku2').val(data.tgl_masuk_buku);
                    });
                }
            })
        });

        // GET Hapus
        $('#showdatabuku').on('click', '.item-hapus', function() {
            var idbuku = $(this).attr('data');
            $('#Modalhapus').modal('show');
            console.log(idbuku);
            $('.inputIDbuku3').val(idbuku);
        });

        // Tambah Buku
        $('#btn-tambah').on('click', function() {
            var namabuku = $('.inputNamabuku').val();
            var jenisbuku = $('.inputJenisbuku').val();
            var hargabuku = $('.inputHargabuku').val();
            var tglmasukbuku = $('.inputTglmasukbuku').val();
            // var datatambah = $('#form-tambah').serialize();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/databuku/tambah"); ?>',
                dataType: 'json',
                data: {
                    namabuku: namabuku,
                    jenisbuku: jenisbuku,
                    hargabuku: hargabuku,
                    tglmasukbuku: tglmasukbuku
                },
                // data: datatambah,
                beforeSend: function() {
                    $('#loader-wrapper').css('display', 'block');
                    $('.tambah').html('<i class="fa fa-spin fa-refresh"></i>');
                    $('.tambah').attr('disabled', true);
                },
                success: function(data) {
                    $('.inputNamabuku').val('');
                    $('.inputJenisbuku').val('');
                    $('.inputHargabuku').val('');
                    $('.inputTglmasukbuku').val('');
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
                    tampil_data_buku();
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
            var idbuku = $('.inputIDbuku2').val();
            var namabuku = $('.inputNamabuku2').val();
            var jenisbuku = $('.inputJenisbuku2').val();
            var hargabuku = $('.inputHargabuku2').val();
            var tglmasukbuku = $('.inputTglmasukbuku2').val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/databuku/ubah") ?>',
                dataType: 'json',
                data: {
                    idbuku: idbuku,
                    namabuku: namabuku,
                    jenisbuku: jenisbuku,
                    hargabuku: hargabuku,
                    tglmasukbuku: tglmasukbuku
                },
                beforeSend: function() {
                    $('#loader-wrapper').css('display', 'block');
                    $('.ubah').html('<i class="fa fa-spin fa-refresh"></i>');
                    $('.ubah').attr('disabled', true);
                },
                success: function(data) {
                    $('.inputIDbuku2').val('');
                    $('.inputNamabuku').val('');
                    $('.inputJenisbuku').val('');
                    $('.inputHargabuku').val('');
                    $('.inputTglmasukbuku').val('');
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
                    tampil_data_buku();
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
            var idbuku = $('.inputIDbuku3').val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/databuku/hapus") ?>',
                dataType: 'json',
                data: {
                    idbuku3: idbuku
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
                    tampil_data_buku();
                },
                error: function() {
                    alert("Terjadi Kesalahan");
                    $('#loader-wrapper').css('display', 'none');
                    $('.hapus').text('Hapus');
                    $('.hapus').attr('disabled', false);
                }
            })
        });

        // DatePicker Tambah
        $('#datepicker').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
        });

        // DatePicker Ubah
        $('#datepicker2').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
        });

        $('.inputHargabuku').on('keyup', function(event) {
            separator = ".";
            a = this.value;
            b = a.replace(/[^\d]/g, "");
            c = "";
            panjang = b.length;
            j = 0;
            for (i = panjang; i > 0; i--) {
                j = j + 1;
                if (((j % 3) == 1) && (j != 1)) {
                    c = b.substr(i - 1, 1) + separator + c;
                } else {
                    c = b.substr(i - 1, 1) + c;
                }
            }
            this.value = c;
        });

        $('.inputHargabuku2').on('keyup', function(event) {
            separator = ".";
            a = this.value;
            b = a.replace(/[^\d]/g, "");
            c = "";
            panjang = b.length;
            j = 0;
            for (i = panjang; i > 0; i--) {
                j = j + 1;
                if (((j % 3) == 1) && (j != 1)) {
                    c = b.substr(i - 1, 1) + separator + c;
                } else {
                    c = b.substr(i - 1, 1) + c;
                }
            }
            this.value = c;
        });

    });
    </script>
</body>

</html>