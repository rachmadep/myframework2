<?php
    include "../../lib/config_web.php";
    include "../../lib/koneksi.php";

    $idorder = $_GET['id'];
    $queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_order WHERE id='$idorder'");
    if ($queryHapus) {
        echo "<script> alert('Data order Berhasil Dihapus'); window.location = '$admin_url'+'order/main.php';</script>";
    } else {
        echo "<script> alert('Data order Gagal Dihapus'); window.location = '$admin_url'+'order/main.php';</script>";

    }
?>
