<?php 
require_once"../_config/config.php";
require"../libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

if(isset($_POST['add'])){
        $uuid = Uuid::uuid4()->toString();

        $client = trim(mysqli_real_escape_string($conn, $_POST['client']));
        $odp_port = trim(mysqli_real_escape_string($conn, $_POST['odp_port']));
        $ip = trim(mysqli_real_escape_string($conn, $_POST['ip']));
        $koordinat = trim(mysqli_real_escape_string($conn, $_POST['koordinat']));
        $pic = trim(mysqli_real_escape_string($conn, $_POST['pic']));
        $vlan = trim(mysqli_real_escape_string($conn, $_POST['vlan']));
        $noc = trim(mysqli_real_escape_string($conn, $_POST['noc']));
        $barang = trim(mysqli_real_escape_string($conn, $_POST['modem']));
        $sn = trim(mysqli_real_escape_string($conn, $_POST['sn']));
        $username = trim(mysqli_real_escape_string($conn, $_POST['username']));
        $password = trim(mysqli_real_escape_string($conn, $_POST['password']));
        $tgl = trim(mysqli_real_escape_string($conn, $_POST['tgl']));

        mysqli_query($conn, "UPDATE tb_barang SET jumlah = jumlah - 1 WHERE id_barang = '$barang'");
        mysqli_query($conn, "INSERT INTO tb_instalasi (id_instalasi, id_client, odp_port, ip, koordinat, pic, vlan, noc, id_barang, sn_modem, username, password, tgl_instalasi) VALUES ('$uuid', '$client', '$odp_port', '$ip', '$koordinat', '$pic', '$vlan', '$noc', '$barang', '$sn', '$username', '$password', '$tgl')") or die(mysqli_error($conn));
        $teknisi =  $_POST['teknisi'];
        foreach($teknisi as $teknis) {
            mysqli_query($conn, "INSERT INTO tb_instalasi_teknisi (id_instalasi, id_teknisi) VALUES ('$uuid', '$teknis')") or die (mysqli_error($conn));
        }

        echo"
        <script>
            alert('data berhasil ditambahkan');
            window.location='data.php';        
        </script>";
} 

?>