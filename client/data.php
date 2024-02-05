<?php include_once('../_header.php');  ?>

    <div class="box">
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="glyphicon glyphicon-th" ></i></a>
        <h1>Client</h1>
        <h4>
            <small>Data Client</small>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs" ><i class="glyphicon glyphicon-refresh "></i></a>
                <a href="add.php" class="btn btn-success btn-xs" ><i class="glyphicon glyphicon-plus">Tambah Client</i></a>
            </div>
        </h4>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="client" >
                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama Client</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th><i class="glyphicon glyphicon-cog" ></i></th>
                    </tr>
                </thead>
            </table>
            <script>
            new DataTable('#client' , {
                ajax: 'client_data.php',
                processing: true,
                serverSide: true,
                scrollY : '250px',
                dom : 'Bfrtip',
                button : [
                    {
                        extend : 'pdf',
                        orientation : 'potrait',
                        pageSize : 'Legal',
                        title : 'Data Client',
                        download : 'open'
                    },
                    'csv', 'excel', 'print', 'copy'
                ],
                columnDefs : [
                    {
                    "searchable" : false,
                    "orderable" : false,
                    "targets" : 4,
                    "render" : function(data, type, row) {
                        var btn = "<center><a href=\'edit.php?id="+data+"\' class=\'btn btn-warning btn-xs\'><i class=\'glyphicon glyphicon-edit\'></i></a> <a href=\'del.php?id="+data+"\' onclick=\"return confirm('Yakin akan menghapus data?')\" class=\'btn btn-danger btn-xs\'><i class=\'glyphicon glyphicon-trash\'></i></a></center>";
                        return btn;
                    }
                }
            ]});
            </script>
        </div>

<?php include_once('../_footer.php'); ?>