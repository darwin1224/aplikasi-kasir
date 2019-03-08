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
                                <div class="box-header with-border">
                                    <h3 class="box-title">Input Data</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <input type="hidden" name="idbuku" class="inputIDbuku">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputNamabuku" class="control-label col-sm-2">Nama Buku</label>
                                            <div class="input-group col-sm-4 margin">
                                                <input type="text" class="form-control inputNamabuku"
                                                    placeholder="Nama Buku" name="namabuku">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-primary btn-flat" type="button"
                                                        data-toggle="modal" data-target="#Modaltambah"><i
                                                            class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputHargabuku" class="col-sm-2 control-label">Harga
                                                Buku</label>
                                            <div class="input-group col-sm-4">
                                                <input type="text" name="hargabuku" class="form-control inputHargabuku"
                                                    id="hargabuku" placeholder="Harga Buku">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputJumlahbuku" class="col-sm-2 control-label">Qty</label>
                                            <div class="input-group col-sm-2">
                                                <input type="number" class="form-control inputJumlahbuku"
                                                    name="jumlahbuku">
                                            </div>
                                        </div>
                                        <div class="group-btn col-sm-3" style="margin: 25px 0 25px 13px">
                                            <button type="button" class="btn btn-primary btn-flat pull-left masuk"
                                                id="btn-masuk" style="margin-right: 10px;">Tambah</button>
                                            <button type="button" class="btn btn-default btn-flat pull-left"
                                                id="btn-bayar">Bayar</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="box-footer">
                                    <table id="datatransaksi"
                                        class="table table-striped table-bordered table-condensed table-hover"
                                        style="font-size:13px;">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Buku</th>
                                                <th>Harga Buku</th>
                                                <th>Qty</th>
                                                <th>Total Harga</th>
                                                <th style="text-align: center;">Aksi</th>
                                            </tr>

                                        </thead>
                                        <tbody id="showdatatransaksi">

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
                            <input type="hidden" name="idtransaksi" class="form-control inputIDtransaksi2">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="idbuku" class="form-control inputIDbuku2" id="inputIDbarang2">
                        </div>
                        <div class="form-group">
                            <label for="inputNamabarang2" class="col-sm-4 control-label">Nama buku</label>
                            <div class="col-sm-7">
                                <input type="text" name="namabuku" placeholder="Nama Buku"
                                    class="form-control inputNamabuku2" id="inputNamabarang2" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputHargabarang2" class="col-sm-4 control-label">Harga buku</label>
                            <div class="col-sm-7">
                                <input type="text" name="hargabuku" placeholder="Harga Buku"
                                    class="form-control inputHargabuku2" id="inputHargabarang2" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputJumlahbuku2" class="col-sm-4 control-label">Qty</label>
                            <div class="col-sm-7">
                                <input type="number" name="jumlahbuku" class="form-control inputJumlahbuku2"
                                    placeholder="1" id="inputJumlahbuku2">
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
                        <input type="hidden" name="idtransaksi3" class="inputIDtransaksi3" />
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

    <!-- Modal Bayar -->
    <div class="modal fade" id="ModalBayar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><span class="fa fa-close"></span></span></button>
                    <h4 class="modal-title" id="myModalLabel">Transaksi</h4>
                </div>
                <form class="form-horizontal" action="<?php echo base_url() ?>datatransaksi/bayar">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Tanggal</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="tanggalbayar" class="form-control inputTanggalbayar"
                                            readonly>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Jumlah Bayar</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="jumlahbayar" class="form-control inputJumlahbayar">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Pelanggan</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="nota" class="form-control inputNota" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Kembalian</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="kembalian" class="form-control inputKembalian"
                                            readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Grand Total</label>
                                    <div class="col-sm-7">
                                        <input type="text" name="tanggalbayar" class="form-control inputTanggalbayar"
                                            readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat hapus" id="btn-bayar">Bayar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php $this->load->view('_partials/v_js'); ?>

    <script>
    $(document).ready(function() {
        window.setTimeout(() => {
            $('#loader-wrapper').css('display', 'none');
        }, 1000);

        tampil_data_buku();

        // tampil_data_transaksi();

        $('#databuku').DataTable();

        $('#datatransaksi').DataTable();

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
                url: '<?php echo base_url("admin/datatransaksi/data_buku"); ?>',
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

        // GET Tambah
        $('#showdatabuku').on('click', '.item-tambah', function() {
            var idbuku = $(this).attr('data');
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url("admin/datatransaksi/get_buku") ?>',
                dataType: 'json',
                data: {
                    idbuku: idbuku
                },
                success: function(data) {
                    $.each(data, function(id_buku, nama_buku, jenis_buku, harga_buku,
                        tgl_masuk_buku) {
                        var hargabuku = data.harga_buku;
                        var harga = hargabuku.replace(".", "");
                        $('#Modaltambah').modal('hide');
                        $('.inputIDbuku').val(data.id_buku);
                        $('.inputNamabuku').val(data.nama_buku);
                        $('.inputHargabuku').val(harga);
                    });
                }
            })
        });

        // Tambah Transaksi
        $('#btn-masuk').click(function() {
            var idbuku = $('.inputIDbuku').val();
            var namabuku = $('.inputNamabuku').val();
            var hargabuku = $('.inputHargabuku').val();
            var jumlahbuku = $('.inputJumlahbuku').val();
            console.log(idbuku, namabuku, hargabuku, jumlahbuku);
            $.ajax({
                url: "<?php echo base_url(); ?>admin/datatransaksi/tambah",
                method: "POST",
                data: {
                    idbuku: idbuku,
                    namabuku: namabuku,
                    hargabuku: hargabuku,
                    jumlahbuku: jumlahbuku
                },
                beforeSend: function() {
                    $('#loader-wrapper').css('display', 'block');
                    $('.masuk').html('<i class="fa fa-spin fa-refresh"></i>');
                    $('.masuk').attr('disabled', true);
                },
                success: function(data) {
                    $('.inputIDbuku').val('');
                    $('.inputNamabuku').val('');
                    $('.inputHargabuku').val('');
                    $('.inputJumlahbuku').val('');
                    $('#loader-wrapper').css('display', 'none');
                    $('.masuk').text('Tambah');
                    $('.masuk').attr('disabled', false);
                    $.toast({
                        heading: 'Success',
                        text: "Data Berhasil disimpan.",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#7EC857'
                    });
                    $('#showdatatransaksi').html(data);
                },
                error: function() {
                    alert("Terjadi Kesalahan");
                    $('#loader-wrapper').css('display', 'none');
                    $('.masuk').text('Tambah');
                    $('.masuk').attr('disabled', false);
                }
            });
        });

        $('#showdatatransaksi').load("<?php echo base_url(); ?>admin/datatransaksi/load_cart");

        $(document).on('click', '.hapus_cart', function() {
            var row_id = $(this).attr("id"); //mengambil row_id dari artibut id
            $.ajax({
                url: "<?php echo base_url(); ?>admin/datatransaksi/hapus",
                method: "POST",
                data: {
                    row_id: row_id
                },
                success: function(data) {
                    $('#showdatatransaksi').html(data);
                },
                error: function() {
                    alert("Terjadi Kesalahan");
                }
            });
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

        // $('.inputTotalhargabuku').val(function(event) {

        // });

        // function formatRupiah() {
        //     separator = ".";
        //     a = this.value;
        //     b = a.replace(/[^\d]/g, "");
        //     c = "";
        //     panjang = b.length;
        //     j = 0;
        //     for (i = panjang; i > 0; i--) {
        //         j = j + 1;
        //         if (((j % 3) == 1) && (j != 1)) {
        //             c = b.substr(i - 1, 1) + separator + c;
        //         } else {
        //             c = b.substr(i - 1, 1) + c;
        //         }
        //     }
        //     this.value = c;
        // }

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