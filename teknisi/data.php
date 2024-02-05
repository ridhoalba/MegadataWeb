<?php include_once('../_header.php');  ?>

    <div class="box">
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="glyphicon glyphicon-th" ></i></a>
        <h1>Teknisi</h1>
        <h4>
            <small>Data Teknisi</small>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs" ><i class="glyphicon glyphicon-refresh "></i></a>
                <a href="add.php" class="btn btn-success btn-xs" ><i class="glyphicon glyphicon-plus">Tambah Teknisi</i></a>
            </div>
        </h4>
        <form action="" method="post" name="proses" >
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="teknisi" >
                <thead>
                    <tr>
                        <th>
                            <center>
                                <input type="checkbox" name="check" id="select_all" value="" >
                            </center>
                        </th>
                        <th>No.</th>
                        <th>Nama Teknisi</th>
                        <th>Alamat</th>
                        <th>No Telp</th>
                        <th><i class="glyphicon glyphicon-cog" ></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    $sql_teknisi = mysqli_query($conn, "SELECT * FROM tb_teknisi") or die (mysqli_error($conn)); 
                    while($data = mysqli_fetch_array($sql_teknisi)) { ?>
                        <tr>
                            <td align="center" > <input type="checkbox" name="checked[]" class="check" value="<?= $data['id_teknisi'] ?>" ></td>
                            <td><?= $no++ ?></td>
                            <td><?= $data['nama_teknisi'] ?></td>
                            <td><?= $data['alamat'] ?></td>
                            <td><?= $data['no_telp'] ?></td>
                            <td align="center" >
                                <a href="edit.php?id=<?= $data['id_teknisi'] ?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        </form>
        <div class="box pull-right" >
            <button  class="btn btn-danger btn-sm" onclick="hapus(); " ><i class="glyphicon glyphicon-trash" ></i>Hapus</button>
        </div>
    </div>
    <script>
    $(document).ready(function(){

        $('#teknisi').DataTable({
            columnDefs: [
                {
                    "searchable": false,
                    "orderable": false,
                    "targets": [0, 4]
                }
            ],
            "order": [1, "asc"]
        });

        $("#select_all").on('click', function(){
            if(this.checked) {
                $('.check').each(function(){
                    this.checked = true;
                })
            } else {
                $('.check').each(function(){
                    this.checked = false;
                })
            }
        });

        $('.check').on('click', function() {
            if($('.check:checked').length == $('.check').length) {
                $('#select_all').prop('checked', true)
            } else {
                $('#select_all').prop('checked', false)
            }
        });
    });

    function hapus(){
        var conf = confirm('Yakin akan menghapus data?');
        if(conf){
            document.proses.action = 'del.php';
            document.proses.submit();
        }
       
    }
    </script>

<?php include_once('../_footer.php'); ?>