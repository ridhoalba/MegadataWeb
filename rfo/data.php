<?php include_once('../_header.php');  ?>

    <div class="box">
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="glyphicon glyphicon-th" ></i></a>
        <h1>Reason For Outage</h1>
        <h4>
            <small>Data Reason For Outage</small>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs" ><i class="glyphicon glyphicon-refresh "></i></a>
                <a href="add.php" class="btn btn-success btn-xs" ><i class="glyphicon glyphicon-plus">Tambah Rfo</i></a>
            </div>
        </h4>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="rfo" >
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal RFO</ath>
                        <th>Nama Client</th>
                        <th>Couse</th>
                        <th>Root Couse</th>
                        <th>Action</th>
                        <th>Barang Masuk</th>
                        <th>Barang Keluar</th>
                        <th>Barang Rusak</th>
                        <th>Teknisi</th>
                        <th>Status</th>
                        <th><i class="glyphicon glyphicon-cog" ></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    $query = "SELECT * FROM tb_rfo INNER JOIN tb_client ON tb_rfo.id_client = tb_client.id_client";
                    $sql_rfo = mysqli_query($conn, $query) or die(mysqli_error($conn)); 
                    while($data = mysqli_fetch_array($sql_rfo)){ ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= tgl_indo($data['tgl_rfo'])?></td>
                            <td><?= $data['nama_client'] ?></td>
                            <td><?= $data['couse'] ?></td>
                            <td><?= $data['root_couse'] ?></td>
                            <td><?= $data['action'] ?></td>
                            <td>
                            <?php 
                                $sql_barang_keluar = mysqli_query($conn,"SELECT * FROM tb_rfo_barang_keluar JOIN tb_barang ON tb_rfo_barang_keluar.id_barang_keluar = tb_barang.id_barang WHERE id_rfo = '$data[id_rfo]'") or die(mysqli_error($conn));
                                while($data_barang_keluar = mysqli_fetch_array($sql_barang_keluar)){
                                    echo $data_barang_keluar['tipe']."<br>";
                                }
                            ?> 
                            </td>
                            <td><?php 
                                $sql_barang_masuk = mysqli_query($conn,"SELECT * FROM tb_rfo_barang_masuk JOIN tb_barang ON tb_rfo_barang_masuk.id_barang_masuk = tb_barang.id_barang WHERE id_rfo = '$data[id_rfo]'") or die(mysqli_error($conn));
                                while($data_barang_masuk = mysqli_fetch_array($sql_barang_masuk)){
                                    echo $data_barang_masuk['tipe']."<br>";
                                }
                            ?></td> 
                            <td>
                            <?php 
                                $sql_barang_rusak = mysqli_query($conn,"SELECT * FROM tb_rfo_barang_rusak JOIN tb_barang ON tb_rfo_barang_rusak.id_barang_rusak = tb_barang.id_barang WHERE id_rfo = '$data[id_rfo]'") or die(mysqli_error($conn));
                                while($data_barang_rusak = mysqli_fetch_array($sql_barang_rusak)){
                                    echo $data_barang_rusak['tipe']."<br>";
                                }
                            ?>
                            </td> 
                            <td>
                            <?php 
                                $sql_teknisi = mysqli_query($conn,"SELECT * FROM tb_rfo_teknisi JOIN tb_teknisi ON tb_rfo_teknisi.id_teknisi = tb_teknisi.id_teknisi WHERE id_rfo = '$data[id_rfo]'") or die(mysqli_error($conn));
                                while($data_teknisi = mysqli_fetch_array($sql_teknisi)){
                                    echo $data_teknisi['nama_teknisi']."<br>";
                                }
                            ?>
                            </td>
                            <td><?= $data['status'] ?></td>
                            <td>
                            <a href="del.php?id=<?= $data['id_rfo'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin menghapus data?');" ><i class="glyphicon glyphicon-trash" ></i></a>
                            </td>


                        </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <script type="text/javascript" >
        $(document).ready(function(){
            $('#rfo').DataTable({
                columnDefs: [
                    {
                        "searchable": false,
                        "orderable": false,
                        "targets": 10
                    }
                ]
            });
        });
        </script>
    </div>

<?php include_once('../_footer.php'); ?>