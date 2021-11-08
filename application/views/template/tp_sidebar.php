    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fab fa-accusoft"></i>
            </div>
            <div class="sidebar-brand-text mx-3">TKP | Admin</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-2 mx-auto">

        <!-- Query Menu -->
        <?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu ="SELECT user_menu.id, menu
                    FROM user_menu
                        JOIN user_akses_menu
                            ON user_menu.id = user_akses_menu.menu_id
                        WHERE user_akses_menu.role_id = $role_id
                    ORDER BY user_akses_menu.menu_id ASC
                ";
    $menu =$this->db->query($queryMenu)->result_array();
    ?>

        <!-- LOOPING Menu -->
        <?php foreach ($menu as $m): ?>
        <div class="sidebar-heading">
            <?= $m ['menu'];?>
        </div>

        <!-- Sub_menu -->
        <?php
        $menuId = $m['id'];
        $querySubMenu = "SELECT *
                            FROM user_sub_menu
                                JOIN user_menu
                                    ON user_sub_menu.menu_id = user_menu.id
                                WHERE user_sub_menu.menu_id = $menuId
                            AND user_sub_menu.ini_aktif = 1
                        ";
        $subMenu = $this->db->query($querySubMenu)->result_array();
    
    ?>
        <?php foreach ($subMenu as $sm):?>
        <?php if($title == $sm['judul']):?>
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <?php else :?>
        <li class="nav-item">
            <?php endif; ?>
            <a class="nav-link" href="<?= base_url($sm['url']);?>">
                <i class="<?= $sm['icon'];?>"></i>
                <span><?= $sm['judul'];?></span></a>
        </li>
        <?php endforeach;?>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <?php endforeach;?>



        <!-- Heading -->
        <div class="sidebar-heading">Interface</div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-calendar-week"></i>
                <span>Data Barang</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Data:</h6>
                    <a class="collapse-item" href="<?= base_url('data_barang/index');?>">Barang Masuk</a>
                    <a class="collapse-item" href="cards.html">Barang Keluar</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li> -->

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Data Input
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages"><i class="fas fa-folder-plus"></i><span>Input
                    Barang</span>
            </a>
            <div id="collapsePages" class="collapse " aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Data Input Barang:</h6>
                    <a class="collapse-item" href="#">Input Barang Masuk</a>
                    <a class="collapse-item" href="#">Input Barang Kerluar</a>
                    <a class="collapse-item" href="forgot-password.html">Stok Barang</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Charts -->
        <!-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li> -->

        <!-- Nav Item - Tables -->
        <!-- <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li> -->

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->