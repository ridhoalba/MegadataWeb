<?php 
require_once"../_config/config.php";
require"../libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

if(isset($_POST['add'])){
        $uuid = Uuid::uuid4()->toString();

        $client = trim(mysqli_real_escape_string($conn, $_POST['client']));
        $couse = trim(mysqli_real_escape_string($conn, $_POST['couse']));
        $root_couse = trim(mysqli_real_escape_string($conn, $_POST['root_couse']));
        $action = trim(mysqli_real_escape_string($conn, $_POST['action']));
        $status = trim(mysqli_real_escape_string($conn, $_POST['status']));
        $tgl = trim(mysqli_real_escape_string($conn, $_POST['tgl']));

        $barang_keluar = isset($_POST['barang_keluar']) ? $_POST['barang_keluar'] : [];
        $barang_masuk = isset($_POST['barang_masuk']) ? $_POST['barang_masuk'] : [];
        $barang_rusak = isset($_POST['barang_rusak']) ? $_POST['barang_rusak'] : [];
        if(!empty($barang_keluar)){
            foreach($barang_keluar as $bk) {
                mysqli_query($conn, "UPDATE tb_barang SET jumlah = jumlah - 1 WHERE id_barang = '$bk'");
                mysqli_query($conn, "INSERT INTO tb_rfo_barang_keluar (id_rfo, id_barang_keluar) VALUES ('$uuid', '$bk')") or die (mysqli_error($conn));
            }
        };
        if(isset($barang_masuk)){
            foreach($barang_masuk as $bm) {
                mysqli_query($conn, "UPDATE tb_barang SET jumlah = jumlah + 1 WHERE id_barang = '$bm'");
                mysqli_query($conn, "INSERT INTO tb_rfo_barang_masuk (id_rfo, id_barang_masuk) VALUES ('$uuid', '$bm')") or die (mysqli_error($conn));
            }
        }
        if(isset($barang_rusak)){
            foreach($barang_rusak as $br) {
                mysqli_query($conn, "INSERT INTO tb_rfo_barang_rusak (id_rfo, id_barang_rusak) VALUES ('$uuid', '$br')") or die (mysqli_error($conn));
            }
        }
        
       

        mysqli_query($conn, "INSERT INTO tb_rfo (id_rfo, id_client, couse, root_couse, action,status, tgl_rfo) VALUES (
        '$uuid', '$client', '$couse', '$root_couse', '$action', '$status','$tgl')") or die(mysqli_error($conn));
        $teknisi =  $_POST['teknisi'];
        foreach($teknisi as $teknis) {
            mysqli_query($conn, "INSERT INTO tb_rfo_teknisi (id_rfo, id_teknisi) VALUES ('$uuid', '$teknis')") or die (mysqli_error($conn));
        }

        echo"
        <script>
            alert('data berhasil ditambahkan');
            window.location='data.php';        
        </script>";
} 

?>