<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <?php $this->load->view('admin/perkara/eksekusi/m_amar_putusan'); ?>
            <?php $this->load->view('admin/perkara/eksekusi/m_tgl_pelaksanaan_eksekusi'); ?>

            <table id="table" class="table table-bordered table-striped responsive" style="text-align:justify;">
                <thead class="bg-info">
                    <tr class="text-center" style="font-size:14.5px;">
                        <th width="5%">No</th>
                        <th width="20%">Nomor Perkara</th>
                        <th width="20%">Tanggal Permohonan</th>
                        <th width="15%">Amar Putusan</th>
                        <th width="20%">Pelaksanaan Eksekusi</th>
                    </tr>
                </thead>
                <tbody>
                    <?= $eksekusi; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>