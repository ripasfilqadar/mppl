<script type="text/javascript">
        function changestatus(id)
        {   
            $.Dialog({
                shadow: true,
                overlay: true,
                draggable: true,
                icon: '<span class="icon-warning"></span>',
                title: 'Hapus barang',
                width: 550,
                padding: 10,
                content: '',
                onShow: function(_dialog){
                    var content = '<div align="center"><form method="POST" action="<?php  echo base_url(); ?>admin/editstatus"><h3>Pilih Status</h3><br/><input type="hidden" name="'+id+'"><select style="width:250px" class="input-control select name="status"><option value="1">Belum Bayar</option><option value="2">BarangBelum Dikirim</option><option value="3">Sudah DIkirim</option></select><div><input type="submit" class="default large" id="confirmButton" value="Ubah"></div></form></div>';
                    $.Dialog.title("Edit Status");
                    $.Dialog.content(content);
                    $.Metro.initInputs();
                }
            });
        }
        function abc()
        {
            alert("sdsad");
        }
    </script>

    <div>
    <div style="width:900px;margin:auto;">
        <h1 style="text-align: center;"> List Transaksi</h1>
            <table class="table striped hovered dataTable" id="dataTables-1" style="margin-top:30px">
                <thead>
                <tr>
                    <th class="text-left">ID Transaksi</th>
                    <th class="text-left">Nama Pembeli</th>
                    <th class="text-left">Total Harga</th>
                    <th class="text-left">Status</th>
                    <th class="text-left">Ubah Status</th>
                    <th class="text-left">Details</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr>
                    <th class="text-left">ID Transaksi</th>
                    <th class="text-left">Nama Pembeli</th>
                    <th class="text-left">Total Harga</th>
                    <th class="text-left">Status</th>
                    <th class="text-left">Ubah Status</th>
                    <th class="text-left">Details</th>
                </tr>
                </tfoot>
            </table>
            <script>
                $(function(){

                    $('#dataTables-1').dataTable( {
                        "bProcessing": true,
                        "sAjaxSource": "<?php echo base_url()?>admin_page/loadTransaksi",
                        "aoColumns": [
                            { "mData": "id" },
                            { "mData": "nama" },
                            { "mData": "total" },
                            { "mData": "status" },
                            { "mData": "ubahstatus" },
                            { "mData": "details" }
                        ]
                    } );
                });
            </script>
        </div>    
    </div>

    <script src="js/hitua.js"></script>
    