<?php
session_start();

include "templates/header-main.php";
include "lib/koneksi.php";
include "lib/config_web.php";

if(isset($_SESSION['nama'])){
  $nama = $_SESSION['nama'];
  $users = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan WHERE nama_pelanggan='$nama'");
  $user = mysqli_fetch_array($users);
  $pelanggan_id = $user['id'];
};

$orders = mysqli_query($koneksi, "SELECT * FROM tbl_order INNER JOIN tbl_pelanggan ON tbl_order.id_pelanggan = tbl_pelanggan.id INNER JOIN tbl_produk ON tbl_order.id_produk = tbl_produk.id_produk WHERE id_pelanggan='$pelanggan_id'");
$total = 0;
foreach ($orders as $order) {
  $tmp = $order['harga']*$order['jumlah'];
  $total = $total + $tmp;
};

$tanggal = date('d/m/Y');
$batas_tanggal = date('d/m/Y', strtotime("+2 days"));
$status = 'Belum Dibayar';
$querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_invoice (id_pelanggan, total, tanggal, batas_tanggal, status) VALUES ('$pelanggan_id', '$total', '$tanggal', '$batas_tanggal', '$status')");

$invoices = mysqli_query($koneksi, "SELECT * FROM tbl_invoice WHERE id_pelanggan='$pelanggan_id' AND total='$total' AND tanggal='$tanggal'");
$invoice = mysqli_fetch_array($invoices);
$invoice_id = $invoice['id'];

foreach ($orders as $order) {
  $produk_id = $order['id_produk'];
  $jumlah_produk = $order['jumlah'];
  mysqli_query($koneksi, "INSERT INTO tbl_invoice_produk (invoice_id, produk_id, jumlah_produk) VALUES ('$invoice_id', '$produk_id', '$jumlah_produk')");
};

$deleteOrder = mysqli_query($koneksi, "DELETE FROM tbl_order WHERE id_pelanggan='$pelanggan_id'");
echo "<script> window.location = '$web_url'+'invoice.php?id='+'$invoice_id';</script>";
 ?>
