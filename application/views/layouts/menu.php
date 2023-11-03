<div class="layout-container">
    <!-- Menu -->

    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">

                <span class="app-brand-logo demo">
                    <img src="<?= base_url(); ?>/assets/img/logo/BAZNAS.png" alt="" width="70">
                </span>
                <span class="app-brand-text demo menu-text fw-bold ms-2 text-uppercase">SPKPZP</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item <?= ($this->uri->segment(1) == '') ? 'active' : '' ?>">
                <a href="<?= base_url(); ?>" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                    <div data-i18n="Dashboard">Dashboard</div>
                </a>
            </li>

            <!-- Layouts -->
            <li class="menu-item <?= ($this->uri->segment(1) == 'master') ? 'active' : '' ?>">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-key"></i>
                    <div data-i18n="Master">Master</div>
                </a>

                <ul class="menu-sub">
                    <li class="menu-item">
                        <a href="master/users.html" class="menu-link">
                            <div data-i18n="User">Data User</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="<?= base_url('wilayahcontroller/wilayah'); ?>" class="menu-link">
                            <div data-i18n="Kecamatan &amp; Desa ">Data Kecamatan &amp; Desa</div>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-header small text-uppercase">
                <span class="menu-header-text">Mustahik</span>
            </li>
            <li class="menu-item <?= ($this->uri->segment(1) == 'mustahikcontroller') ? 'active' : '' ?>">
                <a href="<?= base_url('mustahikcontroller'); ?>" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user-plus"></i>
                    <div data-i18n="Calon Mustahik">Calon Mustahik</div>
                </a>
            </li>
            <li class="menu-item <?= ($this->uri->segment(1) == 'mustahikcontroller/rekomendasi_mustahik') ? 'active' : '' ?>">
                <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-email.html" target="_blank" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user-check"></i>
                    <div data-i18n="Rekomendasi Mustahik">Rekomendasi Mustahik</div>
                </a>
            </li>
            <li class="menu-item <?= ($this->uri->segment(1) == 'mustahikcontroller/data_mustahik') ? 'active' : '' ?>">
                <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-email.html" target="_blank" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    <div data-i18n="Data Mustahik">Data Mustahik</div>
                </a>
            </li>
            <li class="menu-item <?= ($this->uri->segment(1) == 'mustahikcontroller/mustahik_ditolak') ? 'active' : '' ?>">
                <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-email.html" target="_blank" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-user-x"></i>
                    <div data-i18n="Calon Mustahi Ditolak">Calon Mustahik Ditolak</div>
                </a>
            </li>

            <li class="menu-item <?= ($this->uri->segment(1) == 'mustahikcontroller/laporan') ? 'active' : '' ?>">
                <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-email.html" target="_blank" class="menu-link">
                    <i class="menu-icon tf-icons bx bx-receipt"></i>
                    <div data-i18n="Email">Laporan</div>
                </a>
            </li>

            <li class="menu-item">
                <a href="" class="menu-link text-danger">
                    <i class="menu-icon tf-icons bx bx-log-out"></i>
                    <div data-i18n="Logout">Logout</div>
                </a>
            </li>
        </ul>
    </aside>
    <!-- / Menu -->

    <!-- Layout container -->
    <div class="layout-page">
        <!-- Navbar -->

        <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                    <i class="bx bx-menu bx-sm"></i>
                </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <!-- Place this tag where you want the button to render. -->
                    <li class="nav-item lh-1 me-3">
                        <a class="github-button" href="https://github.com/themeselection/sneat-html-admin-template-free" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star themeselection/sneat-html-admin-template-free on GitHub">Star</a>
                    </li>

                    <!-- User -->
                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                            <div class="avatar avatar-online">
                                <img src="<?= base_url(); ?>/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar avatar-online">
                                                <img src="<?= base_url(); ?>/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="fw-medium d-block">John Doe</span>
                                            <small class="text-muted">Admin</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bx bx-user me-2"></i>
                                    <span class="align-middle">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bx bx-cog me-2"></i>
                                    <span class="align-middle">Settings</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <span class="d-flex align-items-center align-middle">
                                        <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                        <span class="flex-grow-1 align-middle ms-1">Billing</span>
                                        <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);">
                                    <i class="bx bx-power-off me-2"></i>
                                    <span class="align-middle">Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--/ User -->
                </ul>
            </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">