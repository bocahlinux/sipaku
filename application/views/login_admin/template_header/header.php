<!DOCTYPE html>
<html>

<head>
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

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link rel="icon" href="<?= base_url('bocah_ngoding/vendors/login/images/ptn.ico'); ?>" type="image/icon">
    <link rel="stylesheet" type="text/css" href="<?= base_url('bocah_ngoding/vendors/login/css/style.css'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?= base_url('bocah_ngoding/vendors/alert/'); ?>/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('bocah_ngoding/vendors/alert/sweetalert2.min.css'); ?>">

</head>