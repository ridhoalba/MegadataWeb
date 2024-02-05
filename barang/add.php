<?php 

include_once("../_header.php");
// use Ramsey\Uuid\Uuid;

// $uuid4 = Uuid::uuid4();
// echo $uuid4->toString();
?>

    <div class="box">
        <h1>Barang</h1>
        <h4>
            <small>Tambah Data Barang</small>
            <div class="pull-right">
                <a href="data.php" class="btn btn-warning btn-xs" ><i class="glyphicon glyphicon-chevron-left">Kembali</i></a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form method="post" action="proses.php">
                    <div class="form-group">
                        <label for="nama">Nama Barang</label>
                        <input type="text" name="nama" id="nama" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="merek">Merek</label>
                        <input type="text" name="merek" id="merek" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="tipe">Tipe</label>
                        <input type="text" name="tipe" id="tipe" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" class="form-control" required>
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="add" id="" value="Simpan" class="btn btn-success" >
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
include_once('../_footer.php');
?>