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
// $invoice = mysqli_fetch_array($invoices);
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
                                                    <?php foreach ($producs as $produc) {
                                                     ?>
                                                    <li>
                                                      <a href="#" class="text-1"><?php echo $produc['nama_produk']; ?></a>
                                                    </li>
                                                    <?php } ?>
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
                                    <a href="#" class="icon icon-cog"></a>
                                    <a href="<?php echo $web_url ?>update-cart.php?action=remove&id=<?php echo $order['id_produk'];?>" class="icon icon-trash"></a>
                                </div>
                            </div>
                        </div>
                  <?php } ?>

                        <div class="row btns-row">
                            <div class="col-md-8 col-sm-8">
                                <a href="<?php echo $web_url ?>" class="tt-btn-type1 tt-btn-cart-head">continus shopping</a>
                                <a href="<?php echo $web_url ?>update-cart.php?action=remove_all&id=<?php echo $order['id_produk'];?>" class="tt-btn-type1 tt-btn-cart-head">clear all</a>
                            </div>
                            <!-- <div class="col-md-4 col-sm-4">
                                <a href="#" class="tt-btn-type1 tt-btn-cart-head">update cart</a>
                            </div> -->
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <span class="head-text-type2">estimate shipping and tax</span>
                                <select class="form-control">
                                    <option>United States</option>
                                    <option>United States</option>
                                    <option>United States</option>
                                    <option>United States</option>
                                    <option>United States</option>
                                </select>
                                <select class="form-control">
                                    <option>Please select region, state or province</option>
                                    <option>Please select region, state or province</option>
                                    <option>Please select region, state or province</option>
                                    <option>Please select region, state or province</option>
                                    <option>Please select region, state or province</option>
                                </select>
                                <input type="text" class="tt-input" placeholder="Zip / Postal code">
                                <a href="#" class="tt-btn-type1">get quote</a>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <span class="head-text-type2">discount codes</span>
                                <p>Enter your coupon code if you have one.</p>
                                <input type="text" class="tt-input">
                                <a href="#" class="tt-btn-type1">apply coupon</a>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="curtain">
                                    <div class="row">
                                        <div class="col-md-7 col-sm-4 col-sm-offset-1 col-md-offset-0 col-xs-6">
                                            <span class="h3">subtotal</span>
                                            <span class="h3">discount</span>
                                            <span class="h1">grand total</span>
                                        </div>
                                        <div class="col-md-5 col-sm-7 col-xs-6">
                                            <span class="h3">$199.95</span>
                                            <span class="h3">-$11.60</span>
                                            <span class="h1">$188.35</span>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <a href="#" class="tt-btn-type1">proceed to checkout</a>
                                            <a href="#">Checkout with Multiple Addresses</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>


        <!-- FOOTER -->
<?php
include "templates/footer-main.php" ?>
