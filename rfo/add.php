<?php 

include_once("../_header.php");
// use Ramsey\Uuid\Uuid;

// $uuid4 = Uuid::uuid4();
// echo $uuid4->toString();
?>

    <div class="box">
        <h1>Reason For Outage</h1>
        <h4>
            <small>Tambah Data Rfo</small>
            <div class="pull-right">
                <a href="data.php" class="btn btn-warning btn-xs" ><i class="glyphicon glyphicon-chevron-left">Kembali</i></a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form method="post" action="proses.php">
                    <div class="form-group">
                        <label for="client">Client</label>
                        <select name="client" id="client" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php 
                            $sql_client = mysqli_query($conn, "SELECT * FROM tb_client") or die(mysqli_error($conn));
                            while($data_client = mysqli_fetch_array($sql_client)){
                                echo'
                                    <option value="'.$data_client['id_client'].'">'.$data_client['nama_client'].'</option>
                                ';
                            }
                            
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="couse">Couse</label>
                       <input type="text" name="couse" id="couse" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="root_couse">Root Couse</label>
                       <input type="text" name="root_couse" id="root_couse" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="action">Action</label>
                       <input type="text" name="action" id="action" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="barang_keluar">Barang Keluar</label>
                        <select multiple name="barang_keluar[]" id="barang_keluar" class="form-control" size="7">
                            <option value="">- Pilih -</option>
                            <?php 
                            $sql_barang_keluar = mysqli_query($conn, "SELECT * FROM tb_barang") or die(mysqli_error($conn));
                            while($data_barang_keluar = mysqli_fetch_array($sql_barang_keluar)){
                                echo'
                                    <option value="'.$data_barang_keluar['id_barang'].'">'.$data_barang_keluar['tipe'].'</option>
                                ';
                            }
                            
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="barang_masuk">Barang Masuk</label>
                        <select multiple name="barang_masuk[]" id="barang_masuk" class="form-control" size="7">
                            <option value="">- Pilih -</option>
                            <?php 
                            $sql_barang_masuk = mysqli_query($conn, "SELECT * FROM tb_barang") or die(mysqli_error($conn));
                            while($data_barang_masuk = mysqli_fetch_array($sql_barang_masuk)){
                                echo'
                                    <option value="'.$data_barang_masuk['id_barang'].'">'.$data_barang_masuk['tipe'].'</option>
                                ';
                            }
                            
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="barang_rusak">Barang Rusak</label>
                        <select multiple name="barang_rusak[]" id="barang_rusak" class="form-control" size="7">
                            <option value="">- Pilih -</option>
                            <?php 
                            $sql_barang_rusak = mysqli_query($conn, "SELECT * FROM tb_barang") or die(mysqli_error($conn));
                            while($data_barang_rusak = mysqli_fetch_array($sql_barang_rusak)){
                                echo'
                                    <option value="'.$data_barang_rusak['id_barang'].'">'.$data_barang_rusak['tipe'].'</option>
                                ';
                            }
                            
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="teknisi">Teknisi</label>
                        <select multiple name="teknisi[]" id="teknisi" class="form-control" size="7" required>
                            <option value="">- Pilih -</option>
                            <?php 
                            $sql_teknisi = mysqli_query($conn, "SELECT * FROM tb_teknisi") or die(mysqli_error($conn));
                            while($data_teknisi = mysqli_fetch_array($sql_teknisi)){
                                echo'
                                    <option value="'.$data_teknisi['id_teknisi'].'">'.$data_teknisi['nama_teknisi'].'</option>
                                ';
                            }
                            
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" id="status" class="form-control" >
                            <option value="">- Pilih -</option>
                            <option value="solved">Solved</option>
                            <option value="delay">Delayed</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tgl">Tanggal Instalasi</label>
                        <input type="date" name="tgl" id="tgl" class="form-control" value="<?= date('Y-m-d') ?>" required>
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="add" value="Simpan" class="btn btn-success" >
                        <input type="reset" name="reset" value="Reset" class="btn btn-default" >
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
include_once('../_footer.php');
?>