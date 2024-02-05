<?php 
require_once"../_config/config.php";
require"../libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

if(isset($_POST['add'])){
    $uuid = Uuid::uuid4()->toString();
    $nama = trim(mysqli_real_escape_string($conn, $_POST['nama']));
    $alamat = trim(mysqli_real_escape_string($conn, $_POST['alamat']));
    $telp = trim(mysqli_real_escape_string($conn, $_POST['no_telp']));
    mysqli_query($conn, "INSERT INTO tb_teknisi (id_teknisi, nama_teknisi, alamat, no_telp) VALUES(
        '$uuid', '$nama', '$alamat', '$telp'
    )") or die(mysqli_error($conn));
    echo"
        <script>
            alert('Data berhasil ditambahkan');
            window.location='data.php';
        </script>
    ";
} else if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = trim(mysqli_real_escape_string($conn, $_POST['nama']));
    $alamat = trim(mysqli_real_escape_string($conn, $_POST['alamat']));
    $telp = trim(mysqli_real_escape_string($conn, $_POST['no_telp']));
    mysqli_query($conn, "UPDATE tb_teknisi SET nama_teknisi = '$nama', alamat = '$alamat', no_telp = '$telp' WHERE id_teknisi = '$id'") or die(mysqli_error($conn));
    echo"
        <script>
            alert('Data berhasil diubah');
            window.location='data.php';
        </script>
    ";
}


?>