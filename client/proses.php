<?php 
require_once"../_config/config.php";
require"../libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

if(isset($_POST['add'])){
    $uuid = Uuid::uuid4()->toString();
    $nama = trim(mysqli_real_escape_string($conn, $_POST['nama']));
    $nik = trim(mysqli_real_escape_string($conn, $_POST['nik']));
    $alamat = trim(mysqli_real_escape_string($conn, $_POST['alamat']));
    $telp = trim(mysqli_real_escape_string($conn, $_POST['no_telp']));
    mysqli_query($conn, "INSERT INTO tb_client (id_client, nama_client, nik, alamat, no_telp) VALUES(
        '$uuid', '$nama', '$nik', '$alamat', '$telp'
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
    $nik = trim(mysqli_real_escape_string($conn, $_POST['nik']));
    $alamat = trim(mysqli_real_escape_string($conn, $_POST['alamat']));
    $telp = trim(mysqli_real_escape_string($conn, $_POST['no_telp']));
    mysqli_query($conn, "UPDATE tb_client SET nama_client = '$nama', nik = '$nik', alamat = '$alamat', no_telp = '$telp' WHERE id_client = '$id'") or die(mysqli_error($conn));
    echo"
        <script>
            alert('Data berhasil diubah');
            window.location='data.php';
        </script>
    ";
}


?>