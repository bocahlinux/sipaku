<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <script language='JavaScript'>
        var txt = "SiPAKU | PTUN Palangka Raya ";
        var speed = 300;
        var refresh = null;

        function action() {
            document.title = txt;
            txt = txt.substring(1, txt.length) + txt.charAt(0);
            refresh = setTimeout("action()", speed);
        }
        action();
    </script>

    <link rel="icon" href="<?= base_url('bocah_ngoding/vendors/login/images/ptn.ico'); ?>" type="image/icon">
    <script src="<?= base_url('bocah_ngoding/vendors/plugins/jquery/jquery.min.js'); ?>"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?= base_url('bocah_ngoding/vendors/plugins/fontawesome-free/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('bocah_ngoding/vendors/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('bocah_ngoding/vendors/dist/css/adminlte.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('bocah_ngoding/vendors/plugins/dataTables/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('bocah_ngoding/vendors/plugins/datatables/responsive.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('bocah_ngoding/vendors/plugins/datepicker/css/bootstrap-datepicker.min.css'); ?>">
</head>