<?php foreach ($m_eksekusi as $qx) { ?>
    <div class="modal fade" id="eksekusi<?php echo $qx->id; ?>" data-backdrop="static" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog modal-lg box-shadow">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;" class="modal-title" id="exampleModalLabel">Eksekusi Amar Putusan</h5>
                </div>
                <input type="hidden" id="id">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Amar Putusan</label>
                        <textarea class="ckeditor" id="ckditor" readonly><?php echo $qx->eksekusi_amar_putusan; ?></textarea>
                    </div>
                    <div class="" style="margin-top: -15px;">
                        <small>
                            <ul style="margin-left: -23px;">
                                <li style="color:blue;">
                                    <strong style="color:blue; margin-left:-8px;">
                                        Note*:
                                    </strong>
                                    <span style="color:red;"><i>Anda Tidak Diwajibkan Untuk Mengedit Eksekusi Amar Putusan</i></span>
                                </li>
                            </ul>
                        </small>
                    </div>
                </div>
                <div class="modal-footer bg-info">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>