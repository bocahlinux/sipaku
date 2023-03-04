<?= $header; ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('Dashboard.html'); ?>" class="nav-link"><i class=" fa fa-home" style="margin-left:3px;"> Home</a></i>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link" data-toggle="modal" data-target="#kontak"><i class=" fa fa-address-book" style="margin-left:3px;"> Contact</a></i>
                </li>
            </ul>
            <div style="color:rgb(128,128,130); font-family:'Times New Roman', Times, serif; font-size:15;"><i class="fas fa-calendar-alt"> Hari :</i></div>
            <div style="color:rgb(220, 20, 60); margin-left:5px; font-size:15px;"> <?php $this->load->view('admin/template/date'); ?></div>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="index3.html" class="brand-link">
                <img src="<?= base_url('bocah_ngoding/vendors/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light text-white" style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"><strong>SiPAKU <small>V.1.0.1</small></strong></span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <img class="img-circle elevation-2" src="<?= base_url('bocah_ngoding/vendors/profile/mareh.jpg'); ?>" style="width: 50px; height:10%; margin-left:-5px; margin-left:3px;">
                    <div class="info mt-1">
                        <a href="#" class="d-block">Administrator</a>
                        <div class="p-1 d-inline-block rounded-circle bg-success"></div>
                        <small class="active" style="color: white;"> Online</small>
                    </div>
                </div>
                <nav class="mt-2">
                    <?= $menu; ?>
                </nav>
            </div>
        </aside>
        <section class="content">
            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0"><?php echo $title; ?></h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#"><?php echo $small; ?></a></li>
                                    <li class="breadcrumb-item active"><?php echo $small_title; ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <?= $content; ?>
            </div>
        </section>
        <?= $footer; ?>