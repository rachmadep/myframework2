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

$orders = mysqli_query($koneksi, "SELECT * FROM tbl_order INNER JOIN tbl_pelanggan ON tbl_order.id_pelanggan = tbl_pelanggan.id INNER JOIN tbl_produk ON tbl_order.id_produk = tbl_produk.id_produk WHERE id_pelanggan='$pelanggan_id'");
 ?>

        <main>
            <div class="breadcrumbs">
                <div class="container-fluid">
                    <div class="boxed">
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><a href="#">shopping cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="head-text-type1 shopping-cart-head">
                <h1>shopping cart</h1>
            </div>

            <div class="container-fluid">
                <div class="boxed">
                    <div class="shopping-cart">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 hidden-xs">
                                <span class="col-name">product</span>
                            </div>
                            <div class="col-md-3 col-sm-3 hidden-xs">
                                <span class="col-name">price</span>
                            </div>
                            <div class="col-md-1 col-sm-1 hidden-xs">
                                <span class="col-name">qty</span>
                            </div>
                            <div class="col-md-2 col-sm-2 hidden-xs">
                                <span class="col-name">total</span>
                            </div>
                        </div>

                <?php
                foreach ($orders as $order) {
                  # code...
                ?>
                        <div class="row">
                            <div class="shopping-product">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="block-1">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-5 col-xs-5">
                                                <a href="#" class="image">
                                                    <img src="<?php echo $web_url; ?>file/produk/<?php echo $order['gambar']; ?>" alt="photo"/>
                                                </a>
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="info">
                                                    <a href="#" class="text-1"><?php echo $order['nama_produk']; ?></a>
                                                    <div class="color">
                                                        <span style="background-color: #d9829a;"></span>
                                                    </div>
                                                    <div class="size">
                                                        <span>xs</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-4">
                                    <div class="tt-price">
                                        <div class="full-price"><?php echo $order['harga']; ?></div>
                                        <!-- <div hidden class="discount-price">
                                            <div class="first-price">$199.95</div>
                                            <div class="last-price">$185.22</div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-md-1 col-sm-1 col-xs-3">
                                    <div class="settings">
                                        <div class="count count-product only-output">
                                          <a href="<?php echo $web_url; ?>update-cart.php?action=remove1&id=<?php echo $order['id_produk'];?>" class="product-button-add icon-circle-minus" style="font-size:25px; margin:auto;">
                                          </a>
                                            <input disabled type="text" name="qty" class="output" data-max="4" value="<?php echo $order['jumlah']; ?>">
                                          <a href="<?php echo $web_url; ?>update-cart.php?action=add1&id=<?php echo $order['id_produk'];?>" class="product-button-add icon-circle-add" style="font-size:25px; margin:auto;">
                                          </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-3">
                                    <div class="tt-price">
                                        <div class="full-price"><?php echo $order['harga']*$order['jumlah']; ?></div>
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
                            <div class="col-md-4 col-sm-4">
                                <a href="<?php echo $web_url ?>checkout.php" class="tt-btn-type1 tt-btn-cart-head">proceed to checkout</a>
                            </div>
                        </div>
                        <!-- <div class="row">
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
                        </div> -->
                    </div>
                </div>
            </div>

        </main>


        <!-- FOOTER -->
<?php
include "templates/footer-main.php" ?>
