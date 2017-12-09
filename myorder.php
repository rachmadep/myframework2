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
};
$invoices = mysqli_query($koneksi, "SELECT * FROM tbl_invoice WHERE id_pelanggan='$pelanggan_id'");
$invoice = mysqli_fetch_array($invoices);
$invoice_id = $invoice['id'];
$orders = mysqli_query($koneksi, "SELECT * FROM tbl_order INNER JOIN tbl_pelanggan ON tbl_order.id_pelanggan = tbl_pelanggan.id INNER JOIN tbl_produk ON tbl_order.id_produk = tbl_produk.id_produk WHERE id_pelanggan='$pelanggan_id'");
$order = mysqli_fetch_array($orders);


 ?>

        <main>
            <div class="breadcrumbs">
                <div class="container-fluid">
                    <div class="boxed">
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><a href="#">Pesanan Saya</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="head-text-type1 shopping-cart-head">
                <h1>Pesanan Saya</h1>
            </div>

            <div class="container-fluid">
                <div class="boxed">
                    <div class="shopping-cart">
                        <div class="row">
                            <div class="col-md-1 col-sm-1 hidden-xs">
                                <span class="col-name">Invoice ID</span>
                            </div>
                            <div class="col-md-4 col-sm-4 hidden-xs">
                                <span class="col-name">product</span>
                            </div>
                            <div class="col-md-1 col-sm-1 hidden-xs">
                                <span class="col-name">total</span>
                            </div>
                            <div class="col-md-2 col-sm-2 hidden-xs">
                                <span class="col-name">Batas Pembayaran</span>
                            </div>
                            <div class="col-md-2 col-sm-2 hidden-xs">
                                <span class="col-name">Status</span>
                            </div>
                        </div>

                <?php
                foreach ($invoices as $invoice) {
                  # code...
                ?>
                        <div class="row">
                            <div class="shopping-product">
                                <div class="col-md-1 col-sm-1 col-xs-12">
                                  <div class="block-1">
                                      <div class="row">
                                          <div class="col-md-7 col-sm-7 col-xs-7">
                                              <div class="info">
                                                  <a href="#" class="text-1"><?php echo $invoice['id']; ?></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="block-1">
                                        <div class="row">
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="info">
                                                  <ul>
                                                    <?php
                                                    $invoice_ids = $invoice['id'];
                                                    $products = mysqli_query($koneksi, "SELECT * FROM tbl_invoice_produk INNER JOIN tbl_invoice ON tbl_invoice_produk.invoice_id = tbl_invoice.id INNER JOIN tbl_produk ON tbl_invoice_produk.produk_id = tbl_produk.id_produk WHERE invoice_id='$invoice_ids'");
                                                    foreach ($products as $product) {
                                                     ?>
                                                    <li>
                                                      <a href="#" class="text-1"><?php echo $product['nama_produk']; ?></a>
                                                    </li>
                                                  <?php }; ?>
                                                  </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1 col-sm-1 col-xs-4">
                                    <div class="tt-price">
                                        <div class="full-price"><?php echo $invoice['total']; ?></div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-4">
                                    <div class="tt-price">
                                        <div class="full-price"><?php echo $invoice['batas_tanggal']; ?></div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-4">
                                    <div class="tt-price">
                                        <div class="full-price"><?php echo $invoice['status']; ?></div>
                                    </div>
                                </div>

                                <div class="col-md-2 col-sm-2 col-xs-12">

                                  <a href="<?php echo $web_url ?>invoice.php?id=<?php echo $invoice['id']; ?>">
                                  <button class="btn btn-default">
                                     Lihat Invoice
                                  </button>
                                  </a><br>
                                  <!-- Button trigger modal -->
                                  <button class="btn btn-default" data-toggle="modal" data-target="#myModalNorm<?php echo $invoice['id']; ?>">
                                      Upload Bukti Pembayaran
                                  </button>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="myModalNorm<?php echo $invoice['id']; ?>" tabindex="-1" role="dialog"
                             aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <button type="button" class="close"
                                           data-dismiss="modal">
                                               <span aria-hidden="true">&times;</span>
                                               <span class="sr-only">Close</span>
                                        </button>
                                        <h4 class="modal-title" id="myModalLabel">
                                            Modal title
                                        </h4>
                                    </div>

                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                      <div class="container">
                                        <form action="upload.php?id=<?php echo $invoice['id']; ?>" method="post" enctype="multipart/form-data">
                                            Select image to upload:
                                            <input type="file" name="fileToUpload" id="fileToUpload" class="btn btn-default" >
                                            <input type="submit" class="btn btn-default" value="Upload Image" name="submit">
                                        </form>
                                      </div>
                                    </div>

                                    <!-- Modal Footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                                data-dismiss="modal">
                                                    Close
                                        </button>
                                        <button type="button" class="btn btn-primary">
                                            Save changes
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                  <?php } ?>

                        <div class="row btns-row">
                            <div class="col-md-8 col-sm-8">
                              <ul>
                                <li><a href="<?php echo $web_url ?>" class="tt-btn-type1 tt-btn-cart-head">continus shopping</a></li>
                                <li><a href="<?php echo $web_url ?>update-cart.php?action=remove_all&id=<?php echo $order['id_produk'];?>" class="tt-btn-type1 tt-btn-cart-head">clear all</a></li>
                              </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </main>


        <!-- FOOTER -->
<?php
include "templates/footer-main.php" ?>
