<?php include_once('../_header.php');  ?>

    <div class="box">
    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="glyphicon glyphicon-th" ></i></a>
        <h1>Barang</h1>
        <h4>
            <small>Data Barang</small>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs" ><i class="glyphicon glyphicon-refresh "></i></a>
                <a href="add.php" class="btn btn-success btn-xs" ><i class="glyphicon glyphicon-plus">Tambah Barang</i></a>
            </div>
        </h4>

        <div style="margin-bottom: 20px;" >
            <form action="" method="post" class="form-inline">
                <div class="form-group">
                    <input type="text" name="pencarian" class="form-control" placeholder="Pencarian" id="">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true" ></span></button>
                </div>
            </form>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Barang</th>
                        <th>Merek</th>
                        <th>Tipe</th>
                        <th>Jumlah</th>
                        <th><i class="glyphicon glyphicon-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $batas = 10;
                    $hal = @$_GET['hal'];
                    if(empty($hal)){
                        $posisi = 0;
                        $hal = 1;
                    }else {
                        $posisi = ($hal - 1) * $batas;
                    }
                    $no = 1;
                    if($_SERVER['REQUEST_METHOD'] == "POST"){
                        $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                        if($pencarian != ''){
                            $sql = "SELECT * FROM tb_barang WHERE nama_barang LIKE '%$pencarian%'";
                            $query = $sql;
                            $queryJml = $sql;
                        } else {
                            $query = "SELECT * FROM tb_barang LIMIT $posisi, $batas";
                            $queryJml = "SELECT * FROM tb_barang";
                            $no = $posisi + 1;
                        }
                    } else {
                        $query = "SELECT * FROM tb_barang LIMIT $posisi, $batas";
                        $queryJml = "SELECT * FROM tb_barang";
                        $no = $posisi + 1;
                    }
                    
                    $sql_barang = mysqli_query($conn, $query) or die (mysqli_error($conn));
                    if(mysqli_num_rows($sql_barang) > 0) {
                        while($data = mysqli_fetch_array($sql_barang)) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?=$data['nama_barang'] ?></td>
                                <td><?= $data['merek'] ?></td>
                                <td><?= $data['tipe'] ?></td>
                                <td><?= $data['jumlah'] ?></td>
                                <td class="text-center">
                                    <a href="edit.php?id=<?= $data['id_barang'] ?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                                    <a href="del.php?id=<?= $data['id_barang'] ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>
                            </tr>
                        <?php 
                        }

                    } else {
                        echo"<tr><td colspan=\"6\" align=\"center\">Data tidak ditemukan</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <?php 
        if(!isset($_POST['pencarian']) || $_POST['pencarian'] == '') { ?>
            <div style="float: left;" >
                <?php 
                $jml = mysqli_num_rows(mysqli_query($conn, $queryJml));
                echo"Jumlah Data : <b>$jml</b>";
                ?>
            </div>
            <div style="float: right;" >
                <ul class="pagination pagination-sm" style="margin: 0;" >
                    <?php
                    $jml_hal = ceil($jml / $batas);
                    for($i=1; $i <= $jml_hal; $i++){
                        if($i != $hal){
                            echo"<li><a href=\"?hal=$i\">$i</a></li>";
                        } else {
                            echo"<li class=\"active\"><a>$i</a></li>";
                        }
                    } 
                    ?>
                </ul>
            </div>
            <?php
            
        } else {
            echo "<div style=\"float:left;\">";
            $jml = mysqli_num_rows(mysqli_query($conn, $queryJml));
            echo"Data Hasil Pencarian : <b>$jml</b>";
            echo"</div>";
        }
        ?>
    </div>

<?php include_once('../_footer.php'); ?>