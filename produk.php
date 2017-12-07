<?php
session_start();

include "templates/header-main.php";
include "lib/koneksi.php";
include "lib/config_web.php";

if(isset($_SESSION['nama'])){
  $nama = $_SESSION['nama'];
  $users = mysqli_query($koneksi, "SELECT * FROM tbl_pelanggan WHERE nama_pelanggan='$nama'");
  // if($users){
  //   while($user = $users->fetch_object()) {
  //     echo $user->id;
  //   }
  // };
};

$product_id = $_GET['id'];
$products = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE id_produk='$product_id'");


 ?>

        <main>
            <div class="breadcrumbs">
                <div class="container-fluid">
                    <div class="boxed">
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><a href="#">man</a></li>
                            <li><a href="#">T-shirt</a></li>
                        </ul>
                        <div class="navigation-btn">
                            <a href="#" class="prev">
                                <img src="images/product/product_page/breadcrumbs/9_1.jpg" alt="alt">
                                <span>prev product</span>
                            </a>
                            <a href="#" class="next">
                                <img src="images/product/product_page/breadcrumbs/11_1.jpg" alt="alt">
                                <span>next product</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <?php
            foreach ($products as $produk) {
             ?>

            <div class="boxed">
                <div class="product-block">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="image-block">
                                <div class="main-block owl-carousel">
                                    <a href="#" class="item">
                                        <img src="file/produk/<?php echo $produk['gambar'];?>" alt="img" data-fancybox="images/product/product_page/product/10_1.jpg" data-zoom-image="images/product/product_page/product/10_1.jpg"/>
                                    </a>
                                </div>
                                <div class="preview-block owl-carousel">
                                    <div class="item">
                                        <img src="file/produk/<?php echo $produk['gambar'];?>" alt="img"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-block">
                                <h1 class="description"><?php echo $produk['nama_produk'];?>
                                    <span class="label">In Stock</span>
                                </h1>
                                <div class="clearfix"></div>
                                <ul class="stars">
                                    <li class="icon-star-empty active"></li>
                                    <li class="icon-star-empty active"></li>
                                    <li class="icon-star-empty active"></li>
                                    <li class="icon-star-empty active"></li>
                                    <li class="icon-star-empty"></li>
                                </ul>
                                <span class="text-1">Be the first to review this product</span>
                                <p class="price">
                                    <span class="text">Selling price:</span>
                                    <span class="special-price">Rp <?php echo $produk['harga'];?></span>
                                    <!-- <span class="old-price">$199.95</span> -->
                                </p>
                                <div class="tabs">
                                    <div class="navigation">
                                        <ul>
                                            <li class="tab-btn active" data-tab="tab-1"><a href="#">description</a></li>
                                            <li class="tab-btn" data-tab="tab-2"><a href="#">shipment</a></li>
                                        </ul>
                                        <div class="border"></div>
                                    </div>
                                    <div class="content">
                                        <div class="tab tab-1">
                                            <p><?php echo $produk['deskripsi'];?></p>
                                        </div>
                                        <div class="tab tab-2">
                                            <p>We can ship to virtually any address in the world. Note that there are restric-<br/>tions on some products, and some products cannot be shipped to international destinations.</p>
                                            <p>When you place an order, we will estimate shipping and delivery dates for you based on the availability of your items and the shipping options you choose. Depending on the shipping provider you choose, shipping date estimates may appear on the shipping quotes page.</p>
                                            <p>Please also note that the shipping rates for many items we sell are <br/>weight-based. The weight of any such item can be found on its detail page. To reflect the policies of the shipping companies we use, all weights will be round-<br/>ed up to the next full pound.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="settings">
                                    <div class="clearfix"></div>
                                    <div class="count count-product">
                                        <div class="btn-less tt-btn">
                                            <span class="icon icon-chevron-left"></span>
                                        </div>
                                        <input type="text" name="qty" class="output" data-max="4" value="1">
                                        <div class="btn-more tt-btn">
                                            <span class="icon icon-chevron-right"></span>
                                        </div>
                                    </div>
                                    <div class="tt-btn-1">
                                      <a href="<?php echo $web_url; ?>update-cart.php?action=add&id=<?php echo $produk['id_produk'];?>"><span>add to cart</span></a>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="btn-2-3-group">
                                        <a href="#" class="tt-btn-2 active">
                                            <span class="icon icon-heart"></span>
                                        </a>
                                        <a href="#" class="tt-btn-3">
                                            <span class="icon icon-stack"></span>
                                        </a>
                                    </div>
                                    <div class="social">
                                        <a href="#">
                                            <span class="icon-facebook icon"></span>
                                        </a>
                                        <a href="#">
                                            <span class="icon-twitter icon"></span>
                                        </a>
                                        <a href="#">
                                            <span class="icon-google icon"></span>
                                        </a>
                                        <a href="#">
                                            <span class="icon-tumblr icon"></span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </main>

        <!-- FOOTER -->
<?php
include "templates/footer-main.php";
 ?>
