<footer class="main-footer">
    <strong> Hak Cipta &copy; <small style="color: red; font-weight:bold;"> Bocah Ngoding </small>PTUN Palangkaraya <?= date('@' . "" . 'Y'); ?></strong>
    <?php
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP')) {
        $ipaddress = getenv('HTTP_CLIENT_IP');
    } else if (getenv('HTTP_X_FORWARDED_FOR')) {
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    } else if (getenv('HTTP_X_FORWARDED')) {
        $ipaddress = getenv('HTTP_X_FORWARDED');
    } else if (getenv('HTTP_FORWARDED_FOR')) {
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    } else if (getenv('HTTP_FORWARDED')) {
        $ipaddress = getenv('HTTP_FORWARDED');
    } else if (getenv('REMOTE_ADDR')) {
        $ipaddress = getenv('REMOTE_ADDR');
    }
    echo '|| IP Address : ' . "<span style='font-weight:bold;'>$ipaddress</span>";
    ?>

    <div class="float-right mt-1 d-none d-sm-inline-block">
        <?php
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape')) {
            $browser = 'Netscape';
        } else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
            $browser = 'Firefox';
        } else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
            $browser = 'Chrome';
        } else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera')) {
            $browser = 'Opera';
        } else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')) {
            $browser = 'Internet Explorer';
        } else $browser = 'Other'; ?>
        <h6 align="left" style="font-size:14px; margin-left:14px; margin-bottom:-30px;">
            <?php echo "Browser Anda : " . "<span style='font-weight:bold;'>$browser</span>"; ?>
        </h6>
    </div>
</footer>

<script src="<?= base_url('bocah_ngoding/vendors/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<script src="<?= base_url('bocah_ngoding/vendors/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
<script src="<?= base_url('bocah_ngoding/vendors/dist/js/adminlte.js'); ?>"></script>
<script src="<?= base_url('bocah_ngoding/vendors/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('bocah_ngoding/vendors/plugins/dataTables/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('bocah_ngoding/vendors/plugins/dataTables/dataTables.responsive.min.js'); ?>"></script>
<script src="<?= base_url('bocah_ngoding/vendors/plugins/dataTables/responsive.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('bocah_ngoding/vendors/plugins/ckeditor_standar/ckeditor.js'); ?>"></script>
<script src="<?= base_url('bocah_ngoding/vendors/plugins/datepicker/js/bootstrap-datepicker.min.js'); ?>"></script>
<script src="<?= base_url('bocah_ngoding/vendors/plugins/datepicker/locales/datepicker.id.min.js'); ?>"></script>

<script>
    $(document).ready(function() {
        $("#table").DataTable();
        $(document).ready(function() {
            $('.datepicker').datepicker({
                language: 'id',
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
                endDate: '0d',
            });
        });
    });
</script>

</body>

</html>