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
  // if($users){
  //   while($user = $users->fetch_object()) {
  //     echo $user->id;
  //   }
  // };
};

 ?>

<main>
    <div class="breadcrumbs">
        <div class="container-fluid">
            <div class="boxed">
                <ul>
                    <li><a href="#">home</a></li>
                    <li><a href="#">checkout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="head-text-type1 checkout-head">
        <h1>checkout</h1>
    </div>

    <div class="container-fluid">
        <div class="boxed">
            <div class="checkout">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="tt-head-number invert">
                                    <span>1</span>
                                    <span>Shipping</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <span class="tt-head-number">
                                    <span>2</span>
                                    <span>Review & Payments</span>
                                </span>
                            </div>
                        </div>
                            <div class="block-1">
                                <span class="head-text-type2">Alamat Tujuan</span>
                                <input type="alamat" class="tt-input" name="alamat" placeholder="Alamat" required="required" value="<?php echo $user['alamat'] ?>">
                                <span class="head-text-type2">No. Telepon</span>
                                <input type="alamat" class="tt-input" name="alamat" placeholder="Alamat" required="required" value="<?php echo $user['telepon'] ?>">

                                <!-- <p>You can create an account after checkout.</p> -->
                            </div>
                            <!-- <div class="block-2">
                                <input type="text" class="tt-input" name="#" placeholder="First name *" required="required">
                                <input type="text" class="tt-input" name="#" placeholder="Last name *" required="required">
                                <input type="text" class="tt-input" name="#" placeholder="Company">
                                <input type="text" class="tt-input" name="#" placeholder="Street address *" required="required">
                                <input type="text" class="tt-input" name="#" placeholder="City *" required="required">
                                <select name="#" class="form-control">
                                    <option>State / Provice</option>
                                    <option>State / Provice</option>
                                    <option>State / Provice</option>
                                </select>
                                <input type="text" class="tt-input" name="#" placeholder="Zip/Postal Code *" required="required">
                                <select name="#" class="form-control">
                                    <option>United States</option>
                                    <option>United States</option>
                                    <option>United States</option>
                                </select>
                                <input type="text" class="tt-input" name="#" placeholder="Phone number *" required="required">
                            </div> -->
                            <div class="block-3">
                                <span class="h2">Shipping Methods</span>
                                <div class="row">
                                    <label>
                                        <span class="col-md-4 col-sm-4 col-xs-6">
                                            <input type="radio" class="tt-radio" name="radio1">
                                            <span class="radio"></span>
                                            <span>Rp 30000</span>
                                        </span>
                                        <span class="col-md-4 col-sm-4 col-xs-3">
                                            <span>JNE</span>
                                        </span>
                                        <span class="col-md-4 col-sm-4 col-xs-3">
                                            <span>YES</span>
                                        </span>
                                    </label>
                                    <label>
                                        <span class="col-md-4 col-sm-4 col-xs-6">
                                            <input type="radio" class="tt-radio" name="radio2">
                                            <span class="radio"></span>
                                            <span>Rp 15000</span>
                                        </span>
                                        <span class="col-md-4 col-sm-4 col-xs-3">
                                            <span>JNE</span>
                                        </span>
                                        <span class="col-md-4 col-sm-4 col-xs-3">
                                            <span>Reguler</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <div class="checkout-basket">
                            <div class="head">
                                <span class="head-text-type2">Order Summary</span>
                                <!-- <p>3 items in Cart</p> -->
                                <!-- <span class="icon icon-arrow-up"></span> -->
                            </div>
                            <div class="content">

                                  <?php
                                  $orders = mysqli_query($koneksi, "SELECT * FROM tbl_order INNER JOIN tbl_pelanggan ON tbl_order.id_pelanggan = tbl_pelanggan.id INNER JOIN tbl_produk ON tbl_order.id_produk = tbl_produk.id_produk WHERE id_pelanggan='$pelanggan_id'");
                                  foreach ($orders as $order) {
                                   ?>

                                  <div class="basket-product">
                                    <div class="row">
                                       <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
                                            <div class="bask-prod-images">
                                                <img src="<?php echo $web_url; ?>file/produk/<?php echo $order['gambar']; ?>" alt=""/>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                                            <div class="bask-prod-name">
                                                <p><?php echo $order['nama_produk']; ?></p>
                                            </div>
                                        </div>

                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                            <div class="bask-prod-quantity">
                                                <p>x<?php echo $order['jumlah']; ?></p>
                                            </div>
                                        </div>

                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <div class="bask-prod-price">
                                                <p>Rp <?php echo $order['harga']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              <?php } ?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>


        <!-- FOOTER -->
<?php include "templates/footer-main.php" ?>
