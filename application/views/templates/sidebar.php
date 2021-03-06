<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">BEAUTY SHOP <sup>official store</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                KATEGORI
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/by_LEA_GLORIA') ?>">
                    <i class="fas fa-fw fa-lea"></i>
                    <span>by LEA GLORIA</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/by_OH_MY_SKIN') ?>">
                    <i class="fas fa-fw fa-ohmy"></i>
                    <span>by OH MY SKIN</span></a>
            </li>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider d-none d-md-block"> -->

            <!-- Sidebar Toggler (Sidebar) -->
            <!-- <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div> -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>


                    </li>

                    <div class="navbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <?php
                                $cart = ' ' . $this->cart->total_items() . 'items'
                                ?>

                            <li><?php echo anchor('dashboard/detail_cart', '<img src="https://img.icons8.com/ios-glyphs/30/000000/shopping-cart--v1.png" />'); ?>
                                <?php echo  anchor('dashboard/detail_cart', $cart) ?>
                            </li>
                        </ul>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <ul class="na navbar-nav navbar-right">
                            <?php if ($this->session->userdata('username')) { ?>
                                <li>
                                    <div>Selamat Datang <?php echo $this->session->userdata('
                                username') ?></div>
                                </li>
                                <li class="ml-2"><?php echo anchor('auth/logout', 'logout')  ?></li>
                            <?php } else {
                            } ?>
                            <li class="nav-item dropdown no-arrow">
                              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <span class="mr-2 d-none d-lg-inline text-gray-300 small">Profile</span>
                                  <img class="img-profile rounded-circle"
                                      src="uploads/profil.png">
                              </a>
                              <!-- Dropdown - User Information -->
                              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                  aria-labelledby="userDropdown">
                                  <a class="dropdown-item" href="dashboard/detail_user">
                                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                      Profile
                                  </a>
                              </div>
                          </li>
                        </ul>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <ul class="na navbar-nav navbar-right">
                            <li><?php echo anchor('auth/logout', '<img src="https://img.icons8.com/ios-glyphs/30/000000/logout-rounded--v1.png">'); ?>
                            </li>
                        </ul>

                    </div>

                    </ul>

                </nav>
