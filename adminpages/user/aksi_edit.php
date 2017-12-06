<?php
	// untuk memasukkan file config_web.php dan file koneksi.php
	include "../../lib/config_web.php";
	include "../../lib/koneksi.php";

	// untuk menangkap variabel 'nama_pelanggan' dan 'id_pelanggan' yang dikirim oleh form_edit.php
	$id_pelanggan = $_POST['id_pelanggan'];
	$nama_pelanggan = $_POST['nama_pelanggan'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	// query untuk mengubah ke tabel tbl_pelanggan

	$querySimpan = mysqli_query($koneksi, "UPDATE tbl_pelanggan SET nama_pelanggan='$nama_pelanggan', alamat='$alamat', email='$email', password='$password' WHERE id='$id_pelanggan'");

	// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar pelanggan
	if ($querySimpan) {
		echo "<script> alert('Data pelanggan Berhasil Diubah'); window.location = '$admin_url'+'user/main.php';</script>";
		// jika query gagal, akan tampil alert dan halaman akan diarahkan ke form edit pelanggan
	} else {
		echo "<script> alert('Data pelanggan Gagal Dimasukkan'); window.location = '$admin_url'+'user/form_edit.php?id_pelanggan=$id_pelanggan';</script>";
	}
?>
