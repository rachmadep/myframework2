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
$kategori_id = $_GET['id'];
$kategoris = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
$kategori = mysqli_fetch_array($kategoris);
$products = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE id_kategori='$kategori_id'");
 ?>
<main>
    <div class="breadcrumbs">
        <div class="container-fluid">
            <div class="boxed">
                <ul>
                    <li><a href="#">home</a></li>
                    <li><a href="#">kategori</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid md-overflow-hidden">
        <div class="boxed">
            <div class="listing">
                <div class="head-baner">
                    <div class="image-block">
                        <img src="images/product/listing/photo-1.jpg" alt="alt">
                    </div>
                    <div class="text-block">
                        <span class="head"><?php echo $kategori['nama_kategori']; ?></span>
                        <p>Fashion for women who aren’t defined by trends, Buyshop offers a wardrobe brimming with party dresses, casual daywear and a killer collection of shoes and accessories to match. Dresses are our thing and we have an array tailored to all occasions including classic LBDs, party dresses to die for and those all-important work dresses.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="control">
                            <select name="#" class="form-control">
                                <option>Position</option>
                                <option>Position</option>
                                <option>Position</option>
                            </select>
                            <a href="#" class="tt-btn icon-arrow-up2"></a>
                            <div class="float-block">
                                <div class="btn-list-block">
                                    <a href="#" class="btn-list-view-1 list">
                                        <span class="icon icon-th-list"></span>
                                    </a>
                                    <a href="#" class="btn-list-view-2 grid active">
                                        <span class="icon icon-th"></span>
                                    </a>
                                </div>
                                <div class="select-quantity-block">
                                    <span>Show</span>
                                    <select name="#" class="form-control">
                                        <option>12</option>
                                        <option>16</option>
                                        <option>20</option>
                                    </select>
                                </div>
                            </div>
                            <span class="info-text"><span>903</span> items in Woman</span>
                        </div>
                        <div class="row products-wrapper product-grid product-lg-3 product-md-2 product-sm-2 product-xs-2 ">
                            <ul>
                              <?php
                              foreach ($products as $product) {
                                # code...

                               ?>
                                <li>
                                    <div class="product" data-product-id="<?php echo $product['id_produk']; ?>">
                                        <div class="substrate"></div>
                                        <div class="product-main-inside">
                                            <div class="product-image-block">
                                                <img src="file/produk/<?php echo $product['gambar']; ?>" alt="product-<?php echo $product['id_produk']; ?>"/>
                                                <div class="button-open">
                                                    <span class="icon-open icon"></span>
                                                </div>


                                                <!-- <div class="curtain-2 curtain">
                                                    <div class="fon"></div>

                                                </div> -->
                                                <p class="price">
                                                    <span class="single-price"><?php echo $product['harga']; ?></span>
                                                </p>
                                                <a href="" class="product-button-add icon-add"></a>
                                            </div>
                                            <div class="product-info-block">
                                                <div class="row">
                                                    <div class="col-left">
                                                        <div class="product-description">
                                                            <a href="produk.php?id=<?php echo $product['id_produk']; ?>"><?php echo $product['nama_produk']; ?></a>
                                                            <p><?php echo $product['deskripsi']; ?></p>
                                                        </div>


                                                        <a href="update-cart.php?action=add&id=<?php echo $product['id_produk']; ?>" class="product-button-add icon-add"></a>
                                                        <p class="price">
                                                            <span class="single-price"><?php echo $product['harga']; ?></span>
                                                        </p>
                                                    </div>
                                                    <div class="col-right">
                                                        <div class="clearfix"></div>
                                                        <a href="update-cart.php?action=add&id=<?php echo $product['id_produk']; ?>" class="add-to-cart tt-btn-type1">
                                                            <span class="icon-add icon"></span>
                                                            <span>add to cart</span>
                                                        </a>
                                                        <div class="btn-2-3-group">
                                                            <a href="#" class="tt-btn-2 active">
                                                                <span class="icon icon-heart"></span>
                                                            </a>
                                                            <a href="#" class="tt-btn-3">
                                                                <span class="icon icon-stack"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-hidden-bl-wrapp-1">
                                            <div class="product-hidden-block-1">
                                                <div class="hidden-body">
                                                    <div class="row">
                                                        <div class="col-left">
                                                            <a href="#" class="add-to-compare">
                                                                <span class="icon-stack icon"></span>
                                                                <span class="text">compare</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                              <?php } ?>
                  
                            </ul>
                        </div>
                        <a href="#" class="btn tt-btn-type1 btn-load-more">load more</a>
                    </div>
                    <!-- <div class="col-md-3 col-sm-4 col-xs-12">
                        <aside class="listing-sidebar">
                            <div class="select-categoty">
                                <a href="#">Women's Clothing</a>
                                <a href="#">Red</a>
                                <a href="#">Blue</a>
                                <a href="#">XS</a>
                                <a href="#">$0 – $2300</a>
                            </div>
                            <div class="head-block hd-category">
                                <span class="h2">category</span>
                                <a href="#" class="tt-btn-type1">clear all</a>
                            </div>
                            <div class="listing-accordion listing-category">
                                <ul>
                                    <li class="open">
                                        <a href="#">Women</a>
                                        <div class="content">
                                            <ul class="list-toggle">
                                                <li class="li-toggle open">
                                                    <a href="#">Women's Clothing (18)</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Sweaters (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Blazers (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Jackets & Outerwear (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Dresses & Jumpsuits (3)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Tops (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Tees (3)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Bottoms (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Denim (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Activewear (2)</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="li-toggle">
                                                    <a href="#">Women's Shoes  (25)</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Sweaters  (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Blazers (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Jackets & Outerwear (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Dresses & Jumpsuits (3)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Tops (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Tees (3)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Bottoms (2)</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Women's Accessories  (4)</a>
                                                </li>
                                                <li>
                                                    <a href="#">Women's Watches  (52)</a>
                                                </li>
                                                <li class="li-toggle">
                                                    <a href="#">Beauty  (11)</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Sweaters  (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Blazers (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Jackets & Outerwear (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Dresses & Jumpsuits (3)</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="li-toggle">
                                                    <a href="#">Women's Sports  (61)</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Sweaters  (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Blazers (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Jackets & Outerwear (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Dresses & Jumpsuits (3)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Tops (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Tees (3)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Bottoms (2)</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Women's Bags  (42)</a>
                                                </li>
                                                <li>
                                                    <a href="#">Women's Muslim Wear  (9)</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">Men</a>
                                        <div class="content">
                                            <ul class="list-toggle">
                                                <li class="li-toggle">
                                                    <a href="#">Women's Clothing  (18)</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Sweaters  (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Blazers (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Jackets & Outerwear (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Dresses & Jumpsuits (3)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Tops (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Tees (3)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Bottoms (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Denim (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Activewear (2)</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="li-toggle">
                                                    <a href="#">Women's Shoes  (25)</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Sweaters  (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Blazers (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Jackets & Outerwear (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Dresses & Jumpsuits (3)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Tops (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Tees (3)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Bottoms (2)</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Women's Accessories  (4)</a>
                                                </li>
                                                <li>
                                                    <a href="#">Women's Watches  (52)</a>
                                                </li>
                                                <li class="li-toggle">
                                                    <a href="#">Beauty  (11)</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Sweaters  (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Blazers (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Jackets & Outerwear (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Dresses & Jumpsuits (3)</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="li-toggle">
                                                    <a href="#">Women's Sports  (61)</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Sweaters  (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Blazers (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Jackets & Outerwear (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Dresses & Jumpsuits (3)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Tops (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Tees (3)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Bottoms (2)</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Women's Bags  (42)</a>
                                                </li>
                                                <li>
                                                    <a href="#">Women's Muslim Wear  (9)</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#">Others</a>
                                        <div class="content">
                                            <ul class="list-toggle">
                                                <li class="li-toggle">
                                                    <a href="#">Women's Clothing  (18)</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Sweaters  (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Blazers (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Jackets & Outerwear (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Dresses & Jumpsuits (3)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Tops (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Tees (3)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Bottoms (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Denim (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Activewear (2)</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="li-toggle">
                                                    <a href="#">Women's Shoes  (25)</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Sweaters  (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Blazers (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Jackets & Outerwear (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Dresses & Jumpsuits (3)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Tops (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Tees (3)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Bottoms (2)</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Women's Accessories  (4)</a>
                                                </li>
                                                <li>
                                                    <a href="#">Women's Watches  (52)</a>
                                                </li>
                                                <li class="li-toggle">
                                                    <a href="#">Beauty  (11)</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Sweaters  (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Blazers (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Jackets & Outerwear (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Dresses & Jumpsuits (3)</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="li-toggle">
                                                    <a href="#">Women's Sports  (61)</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Sweaters  (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Blazers (1)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Jackets & Outerwear (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Dresses & Jumpsuits (3)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Tops (2)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Tees (3)</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Bottoms (2)</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">Women's Bags  (42)</a>
                                                </li>
                                                <li>
                                                    <a href="#">Women's Muslim Wear  (9)</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="listing-accordion">
                                <ul>
                                    <li class="open">
                                        <a href="#">color</a>
                                        <div class="content">
                                            <ul class="color">
                                                <li>
                                                    <a href="#">
                                                        <img src="images/color/color-1.png" alt="alt"/>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="images/color/color-2.png" alt="alt"/>
                                                    </a>
                                                </li>
                                                <li class="active">
                                                    <a href="#">
                                                        <img src="images/color/color-3.png" alt="alt"/>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="images/color/color-4.png" alt="alt"/>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img src="images/color/color-5.png" alt="alt"/>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="open">
                                        <a href="#">size</a>
                                        <div class="content">
                                            <ul class="size">
                                                <li class="active">xs</li>
                                                <li>s</li>
                                                <li>m</li>
                                                <li>l</li>
                                                <li>xl</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="open">
                                        <a href="#">price</a>
                                        <div class="content">
                                            <div class="price-section">
                                                <input type="text" class="range" name="#" />
                                            </div>
                                        </div>
                                    </li>
                                    <li class="open">
                                        <a href="#">compare products</a>
                                        <div class="content">
                                            <div class="compare-section">
                                                <ul>
                                                    <li>
                                                        <a href="#" class="icon icon-cross2"></a>
                                                        <a href="#">
                                                            <img src="images/product/listing/compare/2_1.jpg" alt="alt" />
                                                        </a>
                                                        <a href="#">men`s shirt</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="icon icon-cross2"></a>
                                                        <a href="#">
                                                            <img src="images/product/listing/compare/3_1.jpg" alt="alt" />
                                                        </a>
                                                        <a href="#">ladies joggong top</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="icon icon-cross2"></a>
                                                        <a href="#">
                                                            <img src="images/product/listing/compare/4_1.jpg" alt="alt" />
                                                        </a>
                                                        <a href="#">men`s t-shirt</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="open">
                                        <a href="#">popular tags</a>
                                        <div class="content">
                                            <div class="tt-tags">
                                                <a href="#">fashion</a>
                                                <a href="#">style</a>
                                                <a href="#" class="active">stylish</a>
                                                <a href="#">photooftheday</a>
                                                <a href="#">hair</a>
                                                <a href="#">beauty</a>
                                                <a href="#">beautyfull</a>
                                                <a href="#">instagood</a>
                                                <a href="#">pretty</a>
                                                <a href="#">pink</a>
                                                <a href="#">girl</a>
                                                <a href="#">design</a>
                                                <a href="#">model</a>
                                                <a href="#">dress</a>
                                                <a href="#">shoes</a>
                                                <a href="#">shopping</a>
                                                <a href="#">glam</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="head-block hd-sale">
                                <span class="h2">sale products</span>
                            </div>
                            <div class="sale-block">
                                <div class="product-section clearfix">
                                    <div>
                                        <a href="#" class="image">
                                            <img src="images/product/listing/sale/10_1.jpg" alt="alt">
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">ladies jogging top</a>
                                        <ul class="stars">
                                            <li class="icon-star-empty active"></li>
                                            <li class="icon-star-empty active"></li>
                                            <li class="icon-star-empty active"></li>
                                            <li class="icon-star-empty active"></li>
                                            <li class="icon-star-empty"></li>
                                        </ul>
                                        <a href="#" class="product-button-add icon-add"></a>
                                        <p class="price">
                                            <span class="special-price">$185.22</span>
                                            <span class="old-price">$199.95</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="product-section clearfix">
                                    <div>
                                        <a href="#" class="image">
                                            <img src="images/product/listing/sale/11_1.jpg" alt="alt">
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#">men`s shirt</a>
                                        <ul class="stars">
                                            <li class="icon-star-empty active"></li>
                                            <li class="icon-star-empty active"></li>
                                            <li class="icon-star-empty active"></li>
                                            <li class="icon-star-empty active"></li>
                                            <li class="icon-star-empty"></li>
                                        </ul>
                                        <a href="#" class="product-button-add icon-add"></a>
                                        <p class="price">
                                            <span class="special-price">$185.22</span>
                                            <span class="old-price">$199.95</span>>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="footer-baner move-photo move-right">
                                <img src="images/product/listing/photo-2.jpg" alt="alt">
                                <span>the latest:<br/>fashion lookbookis & campaigns</span>
                            </a>
                        </aside>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</main>


<div class="modal fade quick-view-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <div class="modal-body">
                <!-- <div class="image-block">
                    <div class="main-image">
                        <img src="images/product/test-images/23.jpg" alt="alt">
                    </div>
                    <div class="preview-image">
                        <img src="images/product/test-images/23.jpg" alt="alt" data-preview="images/product/test-images/23.jpg">
                        <img src="images/product/test-images/23.jpg" alt="alt" data-preview="images/product/test-images/23.jpg">
                        <img src="images/product/test-images/23.jpg" alt="alt" data-preview="images/product/test-images/23.jpg">
                        <img src="images/product/test-images/23.jpg" alt="alt" data-preview="images/product/test-images/23.jpg">
                    </div>
                </div>
                <div class="info-block">
                    <span class="name">hooded waistcoat
                        <span class="label">In Stock</span>
                    </span>
                    <div class="clearfix"></div>
                    <ul class="stars">
                        <li class="icon-star-empty active"></li>
                        <li class="icon-star-empty active"></li>
                        <li class="icon-star-empty active"></li>
                        <li class="icon-star-empty active"></li>
                        <li class="icon-star-empty"></li>
                    </ul>
                    <div class="clearfix"></div>
                    <p class="price">
                        <span class="special-price">$185.22</span>
                        <span class="old-price">$199.95</span>
                    </p>
                    <div class="clearfix"></div>
                    <p class="description">Made with the perfect blend of cotton and cashmere, this v-neck sweater is sharp and stylish. Wear it on its own or as a warm layer over t-shirts and button-ups.</p>
                    <div class="settings">
                        <ul class="color">
                            <li>
                                <img src="images/color/color-1.png" alt="alt"/>
                            </li>
                            <li>
                                <img src="images/color/color-2.png" alt="alt"/>
                            </li>
                            <li class="active">
                                <img src="images/color/color-3.png" alt="alt"/>
                            </li>
                            <li>
                                <img src="images/color/color-4.png" alt="alt"/>
                            </li>
                            <li>
                                <img src="images/color/color-5.png" alt="alt"/>
                            </li>
                        </ul>
                        <ul class="size">
                            <li class="active">xs</li>
                            <li>s</li>
                            <li class="disabled">m</li>
                            <li class="disabled">l</li>
                            <li class="disabled">xl</li>
                        </ul>
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
                            <span>add to cart</span>
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
                <div class="clearfix"></div> -->
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->
<?php
include "templates/footer-main.php";
 ?>
