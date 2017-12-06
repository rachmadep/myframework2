<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['level'])) {
    echo "<center>Untuk mengakses halaman, Anda harus login <br>";
    echo "<a href=../index.php><b>LOGIN</b></a></center>";
} else {
include "../../lib/config_web.php";
include "../../lib/koneksi.php";

$id_order = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_order INNER JOIN tbl_pelanggan ON tbl_order.id_pelanggan = tbl_pelanggan.id INNER JOIN tbl_produk ON tbl_order.id_produk = tbl_produk.id_produk WHERE tbl_order.id='$id_order'");

$dataOrder = mysqli_fetch_array($query);

include "../templates/header.php"; ?>
      <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Manajemen <small>Data Pesanan</small></h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Edit <small>data pesanan</small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
	  <form method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="aksi_edit.php">
		<input type="hidden" name="id_order" value="<?php echo $dataOrder['id'];?>">
	  <div class="form-group">
  		<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Nama Pelanggan <span class="required">*</span>
  		</label>
  		<div class="col-md-10 col-sm-10 col-xs-12">
  		  <input disabled type="text" id="first-name" name="nama_kategori" value="<?php echo $dataOrder['nama_pelanggan'];?>" required="required" class="form-control col-md-7 col-xs-12">
  		</div>
      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Nama produk <span class="required">*</span>
  		</label>
  		<div class="col-md-10 col-sm-10 col-xs-12">
  		  <input disabled type="text" id="first-name" name="nama_kategori" value="<?php echo $dataOrder['nama_produk'];?>" required="required" class="form-control col-md-7 col-xs-12">
  		</div>
      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Harga <span class="required">*</span>
  		</label>
  		<div class="col-md-10 col-sm-10 col-xs-12">
  		  <input disabled type="text" id="first-name" name="nama_kategori" value="<?php echo $dataOrder['harga'];?>" required="required" class="form-control col-md-7 col-xs-12">
  		</div>
      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Jumlah Pesanan <span class="required">*</span>
  		</label>
  		<div class="col-md-10 col-sm-10 col-xs-12">
  		  <input type="text" id="first-name" name="jumlah" value="<?php echo $dataOrder['jumlah'];?>" required="required" class="form-control col-md-7 col-xs-12">
  		</div>
      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Total <span class="required">*</span>
  		</label>
  		<div class="col-md-10 col-sm-10 col-xs-12">
  		  <input disabled type="text" id="first-name" name="nama_kategori" value="<?php echo $dataOrder['harga']*$dataOrder['jumlah'];?>" required="required" class="form-control col-md-7 col-xs-12">
  		</div>
      <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Tanggal <span class="required">*</span>
  		</label>
  		<div class="col-md-10 col-sm-10 col-xs-12">
  		  <input type="text" id="first-name" name="tanggal" value="<?php echo $dataOrder['tanggal'];?>" required="required" class="form-control col-md-7 col-xs-12">
  		</div>
	  </div>

	  <div class="ln_solid"></div>
	  <div class="form-group">
		<div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-2">
		  <button type="submit" class="btn btn-primary">Batal</button>
		  <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>Simpan</button>
		</div>
	  </div>

	  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		<?php include "../templates/footer.php";
		}
		?>
