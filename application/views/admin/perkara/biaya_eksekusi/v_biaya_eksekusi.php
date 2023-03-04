<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <?php $this->load->view('admin/perkara/biaya_eksekusi/m_biaya_eksekusi'); ?>
            <table id="my-tb-eksekusi" class="table table-bordered table-striped responsive" style="text-align:justify;">
                <thead class="bg-info">
                    <tr class="text-center" style="font-size:14.5px;">
                        <th width="8%">No</th>
                        <th>Nomor Perkara</th>
                        <th>Status Permohonan</th>
                        <th>Biaya Eksekusi</th>
                        <th width="21%">Keterangan</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#biayaEksekusi').on('show.bs.modal', function(event) {
            var btn = $(event.relatedTarget),
                ID = btn.data('id'),
                noPerkara = btn.data('noperkara'),
                statusAkhir = btn.data('statusakhir');
            console.log(noPerkara);
            // console.log(statusAkhir);

            document.getElementById("idkar").value = ID;
            document.getElementById("nokar").value = noPerkara;
            document.getElementById("satkir").value = statusAkhir;
            // $('#biayaEksekusi').find('#id').val(ID);
            // $('#biayaEksekusi').find('#noPerkara').val(noPerkara);
            // $('#biayaEksekusi').find('#statusAkhir').val(statusAkhir);

            var dt_detail = $('#detail-biaya').DataTable({
                "serverSide": true,
                "processing": true,
                "stateSave": false,
                "bAutoWidth": true,
                "bDestroy": true,
                "bJQueryUI": true,

                "oLanguage": {
                    "sSearch": "<i class='fa fa-search fa-fw'></i> Pencarian : ",
                    "sLengthMenu": "_MENU_ &nbsp;&nbsp;Data Per Halaman",
                    "sInfo": "Menampilkan _START_ s/d _END_ dari <b>_TOTAL_ data</b>",
                    "sInfoFiltered": "(difilter dari _MAX_ total data)",
                    "sZeroRecords": "Pencarian tidak ditemukan",
                    "sEmptyTable": "Data kosong",
                    "sLoadingRecords": "Harap Tunggu...",
                    "oPaginate": {
                        "sPrevious": "Prev",
                        "sNext": "Next"
                    }
                },

                "columns": [{
                        "data": "nomor",
                        "ordering": false,

                    },
                    {
                        "data": "tanggal"
                    },
                    {
                        "data": "uraian"
                    },
                    {
                        "data": "pemasukan"
                    },
                    {
                        "data": "pengeluaran"
                    },
                    {
                        "data": "saldo"
                    },
                ],


                "aaSorting": [
                    [1, "asc"]
                ],


                "columnDefs": [

                    {
                        "targets": [0, 1, 2],
                        "orderable": false,
                    },
                    {
                        "targets": [3, 4, 5],
                        "orderable": false,
                        "className": "dt-body-right",
                    },

                ],
                "sPaginationType": "simple_numbers",
                "iDisplayLength": 100,
                "aLengthMenu": [
                    [10, 20, 50, 100, 150],
                    [10, 20, 50, 100, 150]
                ],
                "footerCallback": function(row, data, start, end, display) {
                    var api = this.api(),
                        data;
                    // converting to interger to find total
                    var intVal = function(i) {
                        return typeof i === 'string' ?
                            i.replace(/[\.]/g, '').replace('Rp ', '') * 1 :
                            typeof i === 'number' ?
                            i : 0;
                    };

                    // computing column Total of the complete result 

                    var pemasukan = api
                        .column(3)
                        .data()
                        .reduce(function(a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    var pengeluaran = api
                        .column(4)
                        .data()
                        .reduce(function(a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    var sisa = pemasukan - pengeluaran;


                    // Update footer by showing the total with the reference of the column index 
                    $(api.column(0).footer()).html('Total');
                    $(api.column(3).footer()).html('Rp. ' + pemasukan.toLocaleString('id-ID'));
                    $(api.column(4).footer()).html('Rp. ' + pengeluaran.toLocaleString('id-ID'));
                    $(api.column(5).footer()).html('Rp. ' + sisa.toLocaleString('id-ID'));
                },
                "ajax": {
                    url: "<?php echo site_url('admin/perkara/Biaya_eksekusi/fetch_detail'); ?>",
                    data: {
                        getPerkara: noPerkara
                    },
                    type: "post",
                    error: function() {
                        $(".my-grid-error").html("");
                        $("#my-grid").append('<tbody class="my-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                        $("#my-grid_processing").css("display", "none");
                    }
                },

            });

        });

        var dataTable = $('#my-tb-eksekusi').DataTable({
            "serverSide": true,
            "stateSave": false,
            "bAutoWidth": true,
            "oLanguage": {
                "sSearch": "<i class='fa fa-search fa-fw'></i> Pencarian : ",
                "sLengthMenu": "_MENU_ &nbsp;&nbsp;Data Per Halaman",
                "sInfo": "Menampilkan _START_ s/d _END_ dari <b>_TOTAL_ data</b>",
                "sInfoFiltered": "(difilter dari _MAX_ total data)",
                "sZeroRecords": "Pencarian tidak ditemukan",
                "sEmptyTable": "Data kosong",
                "sLoadingRecords": "Harap Tunggu...",
                "oPaginate": {
                    "sPrevious": "Prev",
                    "sNext": "Next"
                }
            },
            "aaSorting": [
                [0, "asc"]
            ],
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }],
            "sPaginationType": "simple_numbers",
            "iDisplayLength": 10,
            "aLengthMenu": [
                [10, 20, 50, 100, 150],
                [10, 20, 50, 100, 150]
            ],
            "ajax": {
                url: "<?php echo site_url('admin/perkara/Biaya_eksekusi/dt_eksekusi'); ?>",
                type: "post",
                error: function() {
                    $(".my-grid-error").html("");
                    $("#my-grid").append('<tbody class="my-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                    $("#my-grid_processing").css("display", "none");
                }
            }
        });


    })
</script>