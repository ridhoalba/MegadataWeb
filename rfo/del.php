<?php 
require_once("../_config/config.php");
mysqli_query($conn, "DELETE FROM tb_rfo_barang_keluar WHERE id_rfo = '$_GET[id]'") or die (mysqli_error($conn));
mysqli_query($conn, "DELETE FROM tb_rfo_barang_masuk WHERE id_rfo = '$_GET[id]'") or die (mysqli_error($conn));
mysqli_query($conn, "DELETE FROM tb_rfo_barang_rusak WHERE id_rfo = '$_GET[id]'") or die (mysqli_error($conn));
mysqli_query($conn, "DELETE FROM tb_rfo_teknisi WHERE id_rfo = '$_GET[id]'") or die (mysqli_error($conn));
mysqli_query($conn, "DELETE FROM tb_rfo WHERE id_rfo = '$_GET[id]'") or die (mysqli_error($conn));

echo"
    <script>
        alert('Data berhasil dihapus');
        document.location.href = 'data.php';
    </script>
";
?>