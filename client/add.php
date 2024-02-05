<?php 

include_once("../_header.php");
// use Ramsey\Uuid\Uuid;

// $uuid4 = Uuid::uuid4();
// echo $uuid4->toString();
?>

    <div class="box">
        <h1>Client</h1>
        <h4>
            <small>Tambah Data Client</small>
            <div class="pull-right">
                <a href="data.php" class="btn btn-warning btn-xs" ><i class="glyphicon glyphicon-chevron-left">Kembali</i></a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form method="post" action="proses.php">
                    <div class="form-group">
                        <label for="nama">Nama Client</label>
                        <input type="text" name="nama" id="nama" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="number" name="nik" id="nik" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat"  class="form-control" required cols="15" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No. Telepon</label>
                        <input type="number" name="no_telp" id="no_telp" class="form-control" required>
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