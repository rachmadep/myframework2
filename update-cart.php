<?php
session_start();

include "templates/header-main.php";
include "lib/koneksi.php";
include "lib/config_web.php";

if(isset($_SESSION['nama'])){
  $nama = $_SESSION['nama'];
  $users = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan WHERE nama_pelanggan='$nama'");
  foreach ($users as $user) {
    $pelanggan_id = $user['id'];
  }
}else {
  # code...
  echo "<script> alert('Anda belum Login');</script>";
  echo "<script> window.location = '$web_url'+'login.php';</script>";
};

$product_id = $_GET['id'];
$action = $_GET['action'];
// $products = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE id_produk='$product_id'");

$jumlah = 1;
$tanggal = date('d/m/Y');

switch($action) {

  case "add":
    $dataOrders = mysqli_query($koneksi, "SELECT * FROM tbl_order WHERE id_pelanggan='$pelanggan_id' AND id_produk='$product_id'");
    $result = mysqli_num_rows($dataOrders);
    if ($result > 0) {
      // echo "<script> alert('Data sudah ada');</script>";
      $dataOrder = mysqli_fetch_array($dataOrders);
      $jumlah = $dataOrder['jumlah'];
      $jumlah = $jumlah + 1;
      mysqli_query($koneksi, "UPDATE tbl_order SET jumlah='$jumlah' WHERE id_pelanggan='$pelanggan_id' AND id_produk='$product_id'");
    } else {
      // echo "<script> alert('Data belum ada');</script>";
      $querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_order (id_pelanggan, id_produk, jumlah, tanggal) VALUES ('$pelanggan_id', '$product_id', '$jumlah', '$tanggal')");
    };
    echo "<script> window.location = '$web_url'+'shopping_cart.php';</script>";
    // header("location:shopping_cart.php");
  break;

  case "add1":
    $dataOrders = mysqli_query($koneksi, "SELECT * FROM tbl_order WHERE id_pelanggan='$pelanggan_id' AND id_produk='$product_id'");
    if ($dataOrders) {
      // echo "<script> alert('Data sudah ada');</script>";
      $dataOrder = mysqli_fetch_array($dataOrders);
      $jumlah = $dataOrder['jumlah'];
      $jumlah = $jumlah + 1;
      mysqli_query($koneksi, "UPDATE tbl_order SET jumlah='$jumlah' WHERE id_pelanggan='$pelanggan_id' AND id_produk='$product_id'");
    } else {
      // echo "<script> alert('Data belum ada');</script>";
      $querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_order (id_pelanggan, id_produk, jumlah, tanggal) VALUES ('$pelanggan_id', '$product_id', '$jumlah', '$tanggal')");
    };
    echo "<script> window.location = '$web_url'+'shopping_cart.php';</script>";
    // header("location:shopping_cart.php");
  break;

  case "remove1":
    $dataOrders = mysqli_query($koneksi, "SELECT * FROM tbl_order WHERE id_pelanggan='$pelanggan_id' AND id_produk='$product_id'");
    if ($dataOrders) {
      // echo "<script> alert('Data sudah ada');</script>";
      $dataOrder = mysqli_fetch_array($dataOrders);
      $jumlah = $dataOrder['jumlah'];
      $jumlah = $jumlah - 1;
      mysqli_query($koneksi, "UPDATE tbl_order SET jumlah='$jumlah' WHERE id_pelanggan='$pelanggan_id' AND id_produk='$product_id'");
    } else {
      // echo "<script> alert('Data belum ada');</script>";
      $querySimpan = mysqli_query($koneksi, "INSERT INTO tbl_order (id_pelanggan, id_produk, jumlah, tanggal) VALUES ('$pelanggan_id', '$product_id', '$jumlah', '$tanggal')");
    };
    echo "<script> window.location = '$web_url'+'shopping_cart.php';</script>";
    // header("location:shopping_cart.php");
  break;

  case "remove":
    $deleteOrder = mysqli_query($koneksi, "DELETE FROM tbl_order WHERE id_pelanggan='$pelanggan_id' AND id_produk='$product_id'");
    echo "<script> window.location = '$web_url'+'shopping_cart.php';</script>";
  break;

  case "remove_all":
    $deleteOrder = mysqli_query($koneksi, "DELETE FROM tbl_order WHERE id_pelanggan='$pelanggan_id'");
    echo "<script> window.location = '$web_url'+'shopping_cart.php';</script>";
  break;
}


 ?>
