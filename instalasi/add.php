<?php 

include_once("../_header.php");
// use Ramsey\Uuid\Uuid;

// $uuid4 = Uuid::uuid4();
// echo $uuid4->toString();
?>

    <div class="box">
        <h1>Instalasi</h1>
        <h4>
            <small>Tambah Data Instalasi</small>
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
                        <label for="odp_port">Odp / Port</label>
                       <input type="text" name="odp_port" id="odp_port" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="ip">Ip</label>
                       <input type="text" name="ip" id="ip" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="koordinat">Koordinat</label>
                       <input type="text" name="koordinat" id="koordinat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="pic">Pic</label>
                       <input type="text" name="pic" id="pic" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="vlan">Vlan</label>
                       <input type="text" name="vlan" id="vlan" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="noc">Noc</label>
                       <input type="text" name="noc" id="noc" class="form-control" >
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
                    <div class="form-group">
                        <label for="modem">Modem </label>
                        <select name="modem" id="modem" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php 
                            $sql_barang = mysqli_query($conn, "SELECT * FROM tb_barang") or die(mysqli_error($conn));
                            while($data_barang = mysqli_fetch_array($sql_barang)){
                                echo'
                                    <option value="'.$data_barang['id_barang'].'">'.$data_barang['tipe'].'</option>
                                ';
                            }
                            
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="sn">Sn Modem</label>
                       <input type="text" name="sn" id="sn" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                       <input type="text" name="username" id="username" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                       <input type="text" name="password" id="password" class="form-control" >
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