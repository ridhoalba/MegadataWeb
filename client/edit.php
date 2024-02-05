<?php 

include_once("../_header.php");
// use Ramsey\Uuid\Uuid;

// $uuid4 = Uuid::uuid4();
// echo $uuid4->toString();
?>

    <div class="box">
        <h1>Client</h1>
        <h4>
            <small>Edit Data Client</small>
            <div class="pull-right">
                <a href="data.php" class="btn btn-warning btn-xs" ><i class="glyphicon glyphicon-chevron-left">Kembali</i></a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <?php 
                $id = $_GET['id'];
                $sql_client = mysqli_query($conn, "SELECT * FROM tb_client WHERE id_client = '$id'") or die (mysqli_error($conn));
                $data = mysqli_fetch_array($sql_client);
                ?>
                <form method="post" action="proses.php">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?= $data['id_client'] ?>" id="">
                        <label for="nama">Nama Client</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?= $data['nama_client'] ?>" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="number" name="nik" id="nik" class="form-control" value="<?= $data['nik'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat"  class="form-control" required cols="15" rows="5"><?= $data['alamat'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No. Telepon</label>
                        <input type="number" name="no_telp" id="no_telp" class="form-control" value="<?= $data['no_telp'] ?>" required>
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