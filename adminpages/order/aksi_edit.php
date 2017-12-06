<?php
	// untuk memasukkan file config_web.php dan file koneksi.php
	include "../../lib/config_web.php";
	include "../../lib/koneksi.php";

	// untuk menangkap variabel 'nama_order' dan 'id_order' yang dikirim oleh form_edit.php
	$id_order = $_POST['id_order'];
  $jumlah_order = $_POST['jumlah'];
	$tanggal_order = $_POST['tanggal'];
	// query untuk mengubah ke tabel tbl_order

	$querySimpan = mysqli_query($koneksi, "UPDATE tbl_order SET jumlah='$jumlah_order', tanggal='$tanggal_order' WHERE id='$id_order'");

	// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar order
	if ($querySimpan) {
		echo "<script> alert('Data order Berhasil Diubah'); window.location = '$admin_url'+'order/main.php';</script>";
		// jika query gagal, akan tampil alert dan halaman akan diarahkan ke form edit order
	} else {
		echo "<script> alert('Data order Gagal Dimasukkan'); window.location = '$admin_url'+'order/form_edit.php?id_order=$id_order';</script>";
	}
?>
