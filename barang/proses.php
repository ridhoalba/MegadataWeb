<?php 
require_once"../_config/config.php";
require"../libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

if(isset($_POST['add'])){
    $uuid = Uuid::uuid4()->toString();
    $nama = trim(mysqli_real_escape_string($conn, $_POST['nama']));
    $merek = trim(mysqli_real_escape_string($conn, $_POST['merek']));
    $tipe = trim(mysqli_real_escape_string($conn, $_POST['tipe']));
    $jumlah = trim(mysqli_real_escape_string($conn, $_POST['jumlah']));
    mysqli_query($conn, "INSERT INTO tb_barang (id_barang, nama_barang, merek, tipe, jumlah) VALUES(
        '$uuid', '$nama', '$merek', '$tipe', $jumlah
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
    $merek = trim(mysqli_real_escape_string($conn, $_POST['merek']));
    $tipe = trim(mysqli_real_escape_string($conn, $_POST['tipe']));
    $jumlah = trim(mysqli_real_escape_string($conn, $_POST['jumlah']));
    mysqli_query($conn, "UPDATE tb_barang SET 
        nama_barang = '$nama', merek = '$merek', tipe = '$tipe', jumlah = $jumlah WHERE id_barang = '$id'
    ") or die(mysqli_error($conn));
    echo"
        <script>
            alert('Data berhasil diubah');
            window.location='data.php';
        </script>
    ";
}


?>