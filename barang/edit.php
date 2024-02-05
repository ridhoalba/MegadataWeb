<?php 

include_once("../_header.php");
// use Ramsey\Uuid\Uuid;

// $uuid4 = Uuid::uuid4();
// echo $uuid4->toString();
?>

    <div class="box">
        <h1>Barang</h1>
        <h4>
            <small>Edit Data Barang</small>
            <div class="pull-right">
                <a href="data.php" class="btn btn-warning btn-xs" ><i class="glyphicon glyphicon-chevron-left">Kembali</i></a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <?php 
                $id = @$_GET['id'];
                $sql_barang = mysqli_query($conn, "SELECT * FROM tb_barang WHERE id_barang = '$id' ") or die (mysqli_error($conn));
                $data = mysqli_fetch_array($sql_barang);
                ?>
                <form method="post" action="proses.php">
                    <input type="hidden" name="id" id="" value="<?= $data['id_barang'] ?>" >
                    <div class="form-group">
                        <label for="nama">Nama Barang</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama_barang'] ?>" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="merek">Merek</label>
                        <input type="text" name="merek" id="merek" class="form-control" value="<?= $data['merek'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="tipe">Tipe</label>
                        <input type="text" name="tipe" id="tipe" class="form-control" value="<?= $data['tipe'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">jumlah</label>
                        <input type="text" name="jumlah" id="jumlah" class="form-control" value="<?= $data['jumlah'] ?>" required>
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="edit" id="" value="Simpan" class="btn btn-success" >
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
include_once('../_footer.php');
?>