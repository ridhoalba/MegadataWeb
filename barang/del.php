<?php 
require_once("../_config/config.php");

mysqli_query($conn, "DELETE FROM tb_barang WHERE id_barang = '$_GET[id]'") or die (mysqli_error($conn));
echo"
    <script>
        alert('Data berhasil dihapus');
        document.location.href = 'data.php';
    </script>
";
?>