<?php
if ($class == 'Dashboard') {
    $dashboard = 'active';
    $eksekusi = '';
    $biaya_eksekusi = '';
} elseif ($class == "Eksekusi") {
    $dashboard = '';
    $eksekusi = 'active';
    $biaya_eksekusi = '';
} elseif ($class == "Biaya Eksekusi") {
    $dashboard = '';
    $eksekusi = '';
    $biaya_eksekusi = 'active';
}
?>


<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-header" style="color:yellow;"><strong>HOME</strong></li>
    <li class="nav-item">
        <a href="<?= site_url('Dashboard.html'); ?>" class="nav-link <?= $dashboard; ?>">
            <i class="fa fa-desktop" style="margin-left: 3px;"></i>
            <p class="ml-3">
                Dashboard
            </p>
        </a>
    </li>

    <li class="nav-header" style="color:yellow;"><strong>PERKARA</strong></li>

    <li class="nav-item">
        <a href="<?= site_url('Eksekusi.html'); ?>" class="nav-link <?= $eksekusi; ?>">
            <i class="nav-icon fas fa-gavel"></i>
            <p>
                Eksekusi
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="<?= site_url('Biaya-Eksekusi.html'); ?>" class="nav-link <?= $biaya_eksekusi; ?>">
            <i class="nav-icon fas fa-dollar-sign"></i>
            <p>
                Biaya Eksekusi
            </p>
        </a>
    </li>

    <li class="nav-header" style="color:yellow;"><strong>STATUS</strong></li>

    <li class="nav-item">
        <a href="<?= base_url('Registrasi/Profile/'); ?>" class="nav-link">
            <i class="nav-icon fa fa-user" style="margin-left: 3px;"></i>
            <p style="margin-left: 2px;">
                Profile
            </p>
        </a>
    </li>

    <li class="nav-item">
        <a href="<?= base_url('login_admin/Login/logout/'); ?>" class="nav-link">
            <i class="fas fa-power-off" style="margin-left: 8px;"></i>
            <p style="margin-left: 8px;">
                Log Out
            </p>
        </a>
    </li>
    <!-- <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="pages/search/simple.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Simple Search</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/search/enhanced.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Enhanced</p>
                </a>
            </li>
        </ul> -->
    </li>
</ul>