<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <?php
                $id = $this->session->userdata('id');
                $this->db->where('id_pengguna', $id);
                $query = $this->db->get('tbl_pengguna');
                $data = $query->row_array();
                ?>
                <img src="<?php echo base_url() . 'assets/images/' . $data['gambar_pengguna']; ?>" class="img-circle">
            </div>
            <div class="pull-left info">
                <p>
                    <?php echo $this->session->userdata('nama'); ?>
                </p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Menu Utama</li>
            <?php if ($this->session->userdata('level') == 'Admin') : ?>
            <li class="<?php echo $this->uri->segment(2) == 'dashboard' ? 'active' : '' ?>">
                <a href="<?php echo base_url() . 'admin/dashboard' ?>" id="btn-dashboard">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i>
                    <span>Master Data</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo $this->uri->segment(2) == 'databuku' ? 'active' : '' ?>">
                        <a href="<?php echo base_url() . 'admin/databuku' ?>" id="btn-data-buku">
                            <i class="fa fa-book"></i> <span>Data Buku</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                    <li class="<?php echo $this->uri->segment(2) == 'kategori' ? 'active' : '' ?>">
                        <a href="<?php echo base_url() . 'admin/kategori' ?>" id="btn-kategori">
                            <i class="fa fa-bookmark"></i> <span>Kategori</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                    <li class="<?php echo $this->uri->segment(2) == 'satuan' ? 'active' : '' ?>">
                        <a href="<?php echo base_url() . 'admin/satuan' ?>" id="btn-satuan">
                            <i class="fa fa-bookmark-o"></i> <span>Satuan</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                    <li class="<?php echo $this->uri->segment(2) == 'stock' ? 'active' : '' ?>">
                        <a href="<?php echo base_url() . 'admin/stock' ?>" id="btn-stock">
                            <i class="fa fa-cubes"></i> <span>Stock</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                    <li class="<?php echo $this->uri->segment(2) == 'datapelanggan' ? 'active' : '' ?>">
                        <a href="<?php echo base_url() . 'admin/datapelanggan' ?>" id="btn-data-pelanggan">
                            <i class="fa fa-users"></i> <span>Data Pelanggan</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                    <li class="<?php echo $this->uri->segment(2) == 'datasupplier' ? 'active' : '' ?>">
                        <a href="<?php echo base_url() . 'admin/datasupplier' ?>" id="btn-data-supplier">
                            <i class="fa fa-truck"></i> <span>Data Supplier</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                    <li class="<?php echo $this->uri->segment(2) == 'datapengguna' ? 'active' : '' ?>">
                        <a href="<?php echo base_url() . 'admin/datapengguna' ?>" id="btn-data-pengguna">
                            <i class="fa fa-user"></i> <span>Data Pengguna</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="<?php echo $this->uri->segment(2) == 'datatransaksi' ? 'active' : '' ?>">
                <a href="<?php echo base_url('admin/datatransaksi'); ?>" id="btn-data-transaksi">
                    <i class="fa fa-shopping-cart"></i> <span>Transaksi</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file"></i>
                    <span>Laporan</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo $this->uri->segment(2) == 'laporanstock' ? 'active' : '' ?>">
                        <a href="<?php echo base_url() . 'admin/laporanstock' ?>" id="btn-laporan-stock">
                            <i class="fa fa-calendar"></i> <span>Laporan Stock</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="<?php echo $this->uri->segment(2) == 'settings' ? 'active' : '' ?>">
                <a href="<?php echo base_url() . 'admin/settings' ?>" id="btn-settings">
                    <i class="fa fa-cogs"></i> <span>Settings</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() . 'admin/login/logout' ?>" id="btn-sign-out">
                    <i class="fa fa-sign-out"></i> <span>Sign Out</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>
            <?php else : ?>
            <li class="<?php echo $this->uri->segment(2) == 'datatransaksi' ? 'active' : '' ?>">
                <a href="<?php echo base_url('admin/datatransaksi'); ?>" id="btn-data-transaksi">
                    <i class="fa fa-shopping-cart"></i> <span>Transaksi</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i>
                    <span>Produk</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php echo $this->uri->segment(2) == 'databuku' ? 'active' : '' ?>">
                        <a href="<?php echo base_url() . 'admin/databuku' ?>" id="btn-data-buku">
                            <i class="fa fa-book"></i> <span>Data Buku</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                    <li class="<?php echo $this->uri->segment(2) == 'kategori' ? 'active' : '' ?>">
                        <a href="<?php echo base_url() . 'admin/kategori' ?>" id="btn-kategori">
                            <i class="fa fa-bookmark"></i> <span>Kategori</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                    <li class="<?php echo $this->uri->segment(2) == 'satuan' ? 'active' : '' ?>">
                        <a href="<?php echo base_url() . 'admin/satuan' ?>" id="btn-satuan">
                            <i class="fa fa-bookmark-o"></i> <span>Satuan</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                    <li class="<?php echo $this->uri->segment(2) == 'stock' ? 'active' : '' ?>">
                        <a href="<?php echo base_url() . 'admin/stock' ?>" id="btn-stock">
                            <i class="fa fa-cubes"></i> <span>Stock</span>
                            <span class="pull-right-container">
                                <small class="label pull-right"></small>
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url() . 'admin/login/logout' ?>" id="btn-sign-out">
                    <i class="fa fa-sign-out"></i> <span>Sign Out</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>
            <?php endif; ?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>