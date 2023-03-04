<div class="modal fade" id="biayaEksekusi" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="myLargeModalLabel" aria-type="hidden">
    <div class="modal-dialog modal-lg">
        <div style="width:1200px; margin-left:-185px;">
            <div class="modal-content">
                <div class=" modal-header bg-info">
                    <h4 style="font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;" class="modal-title" id="exampleModalLabel">Biaya Eksekusi</h4>
                </div>
                <center>
                    <h5 style="margin-top: 20px;"><strong>PERKARA NOMOR : <span style="color:red;" id="nokar"></span></strong></h5>
                    <h5 style="margin-top: -8px;"><strong><span style="color:red;" id="satkir"></span></strong></h5>
                </center>
                <input type="hidden" id="idkar" />
                <input type="hidden" id="nokar" />
                <input type="hidden" id="satkir" />
                <div class=" modal-body">
                    <table id="detail-biaya" class="table table-bordered table-striped responsive" style="width:100%;">
                        <thead>
                            <tr class="text-center" style="font-size:14.5px;">
                                <th style="vertical-align:middle;" rowspan="2">Nomor Perkara</th>
                                <th style="vertical-align:middle;" rowspan="2">Tanggal Transaksi</th>
                                <th style="vertical-align:middle;" rowspan="2">Uraian</th>
                                <th rowspan="1" colspan="5">Nominal</th>
                            </tr>
                            <tr>
                                <th colspan="1" style="text-align: center;">Pemasukan</th>
                                <th colspan="1" style="text-align: center;">Pengeluaran</th>
                                <th colspan="1" style="text-align: center;">Sisa</th>
                            </tr>
                        </thead>
                        <tfoot align="right">
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="modal-footer bg-info">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                </div>
            </div>
        </div>
    </div>
</div>