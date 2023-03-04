<body>
    <div id="password" data-password="<?= $this->session->flashdata('password'); ?>"></div>
    <div id="username" data-username="<?= $this->session->flashdata('username'); ?>"></div>
    <div id="failed" data-failed="<?= $this->session->flashdata('failed'); ?>"></div>
    <div id="login" data-login="<?= $this->session->flashdata('login'); ?>"></div>
    <div id="logout" data-logout="<?= $this->session->flashdata('logout'); ?>"></div>

    <img class="wave" src="<?= base_url('bocah_ngoding/vendors/login/img/wave.png'); ?>">
    <div class="container">
        <div class="img">
            <img src="<?= base_url('bocah_ngoding/vendors/login/img/bg.svg'); ?>">
        </div>

        <div class="login-content">
            <form method="post" action="<?= base_url('Login-Admin.html'); ?>">
                <img src="<?= base_url('bocah_ngoding/vendors/login/images/logo.png'); ?>" style="width:auto; height:145px;">
                <div class="title" style="font-family:arial; font-weight:bold; font-size:50px;">SiPAKU</div>
                <br>
                <h5 style="margin-top:-15px; color:rgb(120, 120, 120);"> Informasi Penelusuran Pengawasan Eksekusi</h5>
                <hr>
                <h5 style="color:rgb(120, 120, 120);">Pengadilan Tata Usaha Negara Palangka Raya</h5>
                <br>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" name="username" value="<?php echo set_value('username'); ?>" autocomplete="off" class="input">
                    </div>
                </div>
                <?= form_error('username', '<small style="color:red;">', '</small>'); ?>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="password" value="<?php echo set_value('password'); ?>" autocomplete="off" class="input">
                    </div>
                </div>
                <?= form_error('password', '<small style="color:red;">', '</small>'); ?>
                <button type="submit" class="btn"><span class="fa fa-sign-in-alt"></span> Sign In</button>
            </form>
        </div>
    </div>