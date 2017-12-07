<?php
include "../../lib/koneksi.php";
include "../../lib/config_web.php";

    if(isset($_POST['number']) and $_POST['number'] != 'default') {

        $numb = $_POST['number'];
        $products = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE id_produk='$numb'");
        foreach ($products as $product) {
          # code...
        }
        echo '
            <div class="image-block">
                <div class="main-image">
                    <img src="file/produk/'.$product['gambar'].'" alt="alt">
                </div>

            </div>
            <div class="info-block">
                <span class="name">'.$product['nama_produk'].'
                    <span class="label">In Stock</span>
                </span>
                <div class="clearfix"></div>
                <p class="price">
                    <span class="special-price">Rp '.$product['harga'].'</span>
                </p>
                <div class="clearfix"></div>
                <p class="description">'.$product['deskripsi'].'</p>
                <div class="settings">
                    <div class="clearfix"></div>
                    <div class="count count-product">
                        <div class="btn-less tt-btn disabled">
                            <span class="icon icon-chevron-left"></span>
                        </div>
                        <input type="text" name="qty" class="output" data-max="4" value="1" readonly>
                        <div class="btn-more tt-btn">
                            <span class="icon icon-chevron-right"></span>
                        </div>
                    </div>
                    <a href="'.$web_url.'update-cart.php?action=add&id='.$product['id_produk'].'">
                      <div class="tt-btn-1">
                          <span>add to cart</span>
                      </div>
                    </a>
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
            <div class="clearfix"></div>
        ';
    } else die ('Error');
?>
