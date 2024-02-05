<?php 
require_once("../_config/config.php");

mysqli_query($conn, "DELETE FROM tb_instalasi_teknisi WHERE id_instalasi = '$_GET[id]'") or die (mysqli_error($conn)) ; 
mysqli_query($conn, "DELETE FROM tb_instalasi WHERE id_instalasi = '$_GET[id]'") or die (mysqli_error($conn));
echo"
    <script>
        alert('Data berhasil dihapus');
        document.location.href = 'data.php';
    </script>
";
?>