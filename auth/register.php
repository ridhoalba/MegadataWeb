<?php
require_once "../_config/config.php";
require"../libs/vendor/autoload.php";
use Ramsey\Uuid\Uuid;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Daftar - MegadataWeb</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="icon" href="<?=base_url('assets/img/megadata.png')?>" type="image/x-icon">
</head>
<body>
    <div id="wrapper">
        <div class="container">
            <div align="center" style="margin-top: 210px;" >
                <?php 
                if(isset($_POST['daftar'])) {
                    $uuid = Uuid::uuid4()->toString();
                    $nama_user = trim(mysqli_real_escape_string($conn, $_POST['nama_user']));
                    $username = trim(mysqli_real_escape_string($conn, $_POST['username']));
                    $password = sha1(trim(mysqli_real_escape_string($conn, $_POST['password'])));
                    $sql_daftar = mysqli_query($conn, "INSERT INTO tb_user (id_user, nama_user, username, password) VALUES(
                        '$uuid', '$nama_user', '$username', '$password'
                    )") or die (mysqli_error($conn));
                    echo"
                        <script>
                            alert('Daftar Berhasil');
                            window.location = 'login.php';
                        </script>
                    ";
                }
                
                
                ?>
                <form action="" method="post" class="navbar-form" >
                    <div class="input-group" >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user" ></i></span>
                        <input type="text" name="nama_user" id="nama_user" class="form-control" placeholder="nama user" autofocus  required autocomplete="off">

                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" name="username" id="username" class="form-control" placeholder="username" required  autocomplete="off" >
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" name="password" id="password" class="form-control" placeholder="password" required autocomplete='off'>
                    </div>
                    <div class="input-group">
                        <input type="submit" name="daftar" class="btn btn-primary" value="Daftar">
                    </div>
                    <p><a href="login.php">Kembali</a></p>
                </form>
            </div>
        </div>
    </div>
    <script src="<?= base_url('js/jquery.js'); ?>" ></script>
    <script src="<?= base_url('js/bootstrap.min.js'); ?>" ></script>
</body>

</html>