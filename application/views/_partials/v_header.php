<header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">EB</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">eBook</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">Anda memiliki pesan</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                        </div>
                                    </a>
                                </li>
                                <!-- end message -->
                            </ul>
                        </li>
                        <li class="footer"><a href="#">Lihat Semua Pesan</a></li>
                    </ul>
                </li>

                <?php
                $id = $this->session->userdata('id');
                $this->db->where('id_pengguna', $id);
                $query = $this->db->get('tbl_pengguna');
                $data = $query->row_array();
                ?>

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url() . 'assets/images/' . $data['gambar_pengguna']; ?>" class="user-image">
                        <span class="hidden-xs">
                            <?php echo $this->session->userdata('nama'); ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?php echo base_url() . 'assets/images/' . $data['gambar_pengguna']; ?>" class="img-circle">
                            <p>
                                <?php echo $this->session->userdata('nama'); ?>
                                <small>Admin</small>
                            </p>
                        </li>
                        <!-- Menu Body -->

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="<?php echo base_url() . 'admin/login/logout' ?>" class="btn btn-default btn-flat">Sign
                                    out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="<?php echo base_url() . '' ?>" target="_blank" title="Lihat Website"><i class="fa fa-globe"></i></a>
                </li>
            </ul>
        </div>

    </nav>
</header>