<?php foreach ($m_eksekusi as $qx) { ?>
    <div class="modal fade" id="tanggal<?php echo $qx->id; ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog box-shadow" role="document">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h5 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;" class="modal-title" id="exampleModalLabel">Keterangan & Pelaksanaan Eksekusi</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Keterangan</label>
                        <div class="input-group mb-3">
                            <textarea type=" Text" class="form-control" style="height:150px;" autocomplete="off" placeholder="Keterangan Eksekusi" required name=""></textarea>
                        </div>
                        <div class="" style="margin-top: -15px;">
                            <small>
                                <ul style="margin-left: -23px;">
                                    <li style="color:blue;">
                                        <strong style="color:blue; margin-left:-8px;">
                                            Note*:
                                        </strong>
                                        <span style="color:red;"><i>Masukkan Keterangan Eksekusi Jika Ada</i></span>
                                    </li>
                                </ul>
                            </small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pelaksanaan Eksekusi</label>
                        <div class="input-group row mb-3 col-md-8">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                            </div>
                            <input type="Text" class="form-control datepicker" autocomplete="off" placeholder="yyyy/mm/dd" id="tgl_srt" required name="" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-info">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                </div>
            </div>
        </div>
    </div>
<?php } ?>