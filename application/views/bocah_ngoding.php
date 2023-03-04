<!DOCTYPE html>
<html>

<head>
    <script language='JavaScript'>
        var txt = "<?php echo $text; ?>";
        var speed = 300;
        var refresh = null;

        function action() {
            document.title = txt;
            txt = txt.substring(1, txt.length) + txt.charAt(0);
            refresh = setTimeout("action()", speed);
        }
        action();
    </script>
    <link rel="icon" href="<?= base_url('bocah_ngoding/vendors/images'); ?>/ptun.ico" type="image/icon">
</head>

<body style="background-color: #2b323c;">
    <center>
        <img src="<?= site_url('bocah_ngoding/vendors/images/404.png'); ?>" style="width:600px; height:auto;">
    </center>
</body>

</html>