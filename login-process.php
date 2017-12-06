<?php
include 'lib/koneksi.php';

$username = $_POST['email'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "SELECT * FROM
                      tbl_pelanggan WHERE email = '$username'
                      and password = '$password'");
$result = mysqli_num_rows($login);

if($result>0){
  $user = mysqli_fetch_array($login);
  session_start();
  $_SESSION['nama'] = $user['nama'];

  header("location:index.php");
}
else {
  header("location:login.php");
}
 ?>
