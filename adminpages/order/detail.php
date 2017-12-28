<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['level'])) {
    echo "<center>Untuk mengakses halaman, Anda harus login <br>";
    echo "<a href=../index.php><b>LOGIN</b></a></center>";
} else {
include "../../lib/config_web.php";
include "../../lib/koneksi.php";

$id_order = $_GET['id'];
// $query = mysqli_query($koneksi, "SELECT * FROM tbl_order INNER JOIN tbl_pelanggan ON tbl_order.id_pelanggan = tbl_pelanggan.id INNER JOIN tbl_produk ON tbl_order.id_produk = tbl_produk.id_produk WHERE tbl_order.id='$id_order'");
$query = mysqli_query($koneksi,
"SELECT *, tbl_invoice.id as id_invoice
FROM tbl_invoice

INNER JOIN tbl_pelanggan
ON tbl_invoice.id_pelanggan = tbl_pelanggan.id

WHERE tbl_invoice.id='$id_order'");

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
            <h2>Detail <small>data pesanan</small></h2>
            <div class="clearfix"></div>
          </div>

          <div class="x_content"><br />
            <form method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="aksi_edit.php">
          	<input type="hidden" name="id_order" value="<?php echo $dataOrder['id_invoice'];?>">
            <div class="form-group">
          		<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Nama Pelanggan <span class="required">*</span>
          		</label>
          		<div class="col-md-10 col-sm-10 col-xs-12">
          		  <input disabled type="text" id="first-name" name="nama_kategori" value="<?php echo $dataOrder['nama_pelanggan'];?>" required="required" class="form-control col-md-7 col-xs-12">
          		</div>

              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Alamat Pelanggan <span class="required">*</span>
          		</label>
          		<div class="col-md-10 col-sm-10 col-xs-12">
          		  <input disabled type="text" id="first-name" name="nama_kategori" value="<?php echo $dataOrder['alamat'];?>" required="required" class="form-control col-md-7 col-xs-12">
          		</div>

              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">No. Telepon<span class="required">*</span>
          		</label>
          		<div class="col-md-10 col-sm-10 col-xs-12">
          		  <input disabled type="text" id="first-name" name="nama_kategori" value="<?php echo $dataOrder['telepon'];?>" required="required" class="form-control col-md-7 col-xs-12">
          		</div>

              <br>
              <table class="table table-striped col-md-10" style="float:right; width:80%; margin:20px;">
                <thead>
                  <tr>
                    <th>Nama Produk</th>
                    <th>Harga Produk</th>
                    <th>Jumlah Pesanan</th>
                    <th>Total Harga</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $invoice_ids = $dataOrder['id_invoice'];
                  $products = mysqli_query($koneksi, "SELECT * FROM tbl_invoice_produk INNER JOIN tbl_invoice ON tbl_invoice_produk.invoice_id = tbl_invoice.id INNER JOIN tbl_produk ON tbl_invoice_produk.produk_id = tbl_produk.id_produk WHERE invoice_id='$invoice_ids'");
                  foreach ($products as $product) {?>
                  <tr>
                    <td><?php echo $product['nama_produk']; ?></td>
                    <td><?php echo $product['harga']; ?></td>
                    <td><?php echo $product['jumlah_produk']; ?></td>
                    <td><?php echo $product['harga']*$product['jumlah_produk']; ?></td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table><br><br><br>

              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Jumlah Total<span class="required">*</span>
          		</label>
          		<div class="col-md-10 col-sm-10 col-xs-12">
          		  <input disabled type="text" id="first-name" name="nama_kategori" value="Rp. <?php echo $dataOrder['total'];?>" required="required" class="form-control col-md-7 col-xs-12">
          		</div>

              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Bukti Pembayaran<span class="required">*</span>
          		</label>
          		<div class="col-md-10 col-sm-10 col-xs-12">
                <img src="<?php echo $web_url ?>file/uploads/<?php echo $dataOrder['bukti_pembayaran'];?>" class="col-md-7 col-xs-12" alt="">
          		</div>

              <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">No. Resi <span class="required">*</span>
          		</label>
          		<div class="col-md-10 col-sm-10 col-xs-12">
          		  <input type="text" id="first-name" name="resi" value="<?php echo $dataOrder['pengiriman'];?>" required="required" class="form-control col-md-7 col-xs-12">
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
