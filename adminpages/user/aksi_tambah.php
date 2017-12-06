<?php
	// untuk memasukkan file config_web.php dan file koneksi.php
	include "../../lib/config_web.php";
	include "../../lib/koneksi.php";

	// untuk menangkap variabel 'nama_pelanggan' yang dikirim oleh form_tambah.php
	$nama_pelanggan = $_POST['nama_pelanggan'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	// query untuk menyimpan ke tabel tbl_pelanggan

	$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_pelanggan (nama_pelanggan, alamat, email, password)
	 VALUES ('$nama_pelanggan', '$alamat', '$email', '$password')");

	// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar pelanggan
	if ($querySimpan) {
		echo "<script> alert('Data pelanggan Berhasil Masuk'); window.location = '$admin_url'+'user/main.php';</script>";
		// jika query gagal, akan tampil alert dan halaman akan diarahkan ke form tambah pelanggan
	} else {
		echo "<script> alert('Data pelanggan Gagal Dimasukkan'); window.location = '$admin_url'+'user/form_tambah.php';</script>";
	}
?>
