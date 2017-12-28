<?php
    include "../../lib/config_web.php";
    include "../../lib/koneksi.php";

    $id = $_GET['id'];
    $queryHapus = mysqli_query($koneksi, "DELETE FROM tbl_invoice WHERE id='$id'");
    if ($queryHapus) {
        echo "<script> alert('Data Produk Berhasil Dihapus'); window.location = '$admin_url'+'produk/main.php';</script>";
    } else {
        echo "<script> alert('Data Produk Gagal Dihapus'); window.location = '$admin_url'+'produk/main.php';</script>";

    }
?>
