<?php include_once('../_header.php');  ?>

    <div class="box">
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="glyphicon glyphicon-th" ></i></a>
        <h1>Instalasi</h1>
        <h4>
            <small>Data Instalasi</small>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs" ><i class="glyphicon glyphicon-refresh "></i></a>
                <a href="add.php" class="btn btn-success btn-xs" ><i class="glyphicon glyphicon-plus">Tambah Instalasi</i></a>
            </div>
        </h4>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="instalasi" >
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal Instalasi</ath>
                        <th>Nama Client</th>
                        <th>Odp / Port</th>
                        <th>Ip</th>
                        <th>Koordinat</th>
                        <th>Pic</th>
                        <th>Vlan</th>
                        <th>Noc</th>
                        <th>Teknisi</th>
                        <th>Tipe Modem</th>
                        <th>Sn</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th><i class="glyphicon glyphicon-cog" ></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    $query = "SELECT * FROM tb_instalasi INNER JOIN tb_client ON tb_instalasi.id_client = tb_client.id_client INNER JOIN tb_barang ON tb_instalasi.id_barang = tb_barang.id_barang";
                    $sql_instalasi = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    while($data = mysqli_fetch_array($sql_instalasi)){ ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= tgl_indo($data['tgl_instalasi'])?></td>
                            <td><?= $data['nama_client'] ?></td>
                            <td><?= $data['odp_port'] ?></td>
                            <td><?= $data['ip'] ?></td>
                            <td><?= $data['koordinat'] ?></td>
                            <td><?= $data['pic'] ?></td> 
                            <td><?= $data['vlan'] ?></td> 
                            <td><?= $data['noc'] ?></td> 
                            <td>
                            <?php 
                                $sql_teknisi = mysqli_query($conn,"SELECT * FROM tb_instalasi_teknisi JOIN tb_teknisi ON tb_instalasi_teknisi.id_teknisi = tb_teknisi.id_teknisi WHERE id_instalasi = '$data[id_instalasi]'") or die(mysqli_error($conn));
                                while($data_teknisi = mysqli_fetch_array($sql_teknisi)){
                                    echo $data_teknisi['nama_teknisi']."<br>";
                                }
                            ?>
                            </td>
                            <td><?= $data['tipe'] ?></td> 
                            <td><?= $data['sn_modem'] ?></td>
                            <td><?= $data['username'] ?></td> 
                            <td><?= $data['password'] ?></td> 
                            <td>
                            <a href="del.php?id=<?= $data['id_instalasi'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin menghapus data?');" ><i class="glyphicon glyphicon-trash" ></i></a>
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
            $('#instalasi').DataTable({
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