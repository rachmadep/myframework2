<?php
session_start();

include "templates/header-main.php";
include "lib/koneksi.php";
include "lib/config_web.php";
 ?>

        <div class="top-spacer"></div>
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
                        <div class="row">
                            <div class="shopping-product">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="block-1">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-5 col-xs-5">
                                                <a href="#" class="image">
                                                    <img src="images/product/shopping_cart/11_1.jpg" alt="photo"/>
                                                </a>
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7">
                                                <div class="info">
                                                    <a href="#" class="text-1">ladies` trousers</a>
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
                                        <div class="full-price">$199.95</div>
                                        <div hidden class="discount-price">
                                            <div class="first-price">$199.95</div>
                                            <div class="last-price">$185.22</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1 col-sm-1 col-xs-3">
                                    <div class="settings">
                                        <div class="count count-product only-output">
                                            <input type="text" name="qty" class="output" data-max="4" value="1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-3">
                                    <div class="tt-price">
                                        <div class="full-price">$199.95</div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <a href="#" class="icon icon-cog"></a>
                                    <a href="#" class="icon icon-trash"></a>
                                </div>
                            </div>
                        </div>
                        <div class="row btns-row">
                            <div class="col-md-8 col-sm-8">
                                <a href="#" class="tt-btn-type1 tt-btn-cart-head">continus shopping</a>
                                <a href="#" class="tt-btn-type1 tt-btn-cart-head">clear all</a>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <a href="#" class="tt-btn-type1 tt-btn-cart-head">update cart</a>
                            </div>
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
        <footer>
            <div class="footer">
                <div class="popups-btn">
                    <div class="boxed">
                        <div class="btn-1 tt-btn">
                            <div class="curtain">
                                <span>castomer care</span>
                                <span class="icon"></span>
                            </div>
                            <div class="hidden-block block-1">
                                <div class="boxed">
                                    <div class="info-block">
                                        <span class="text-head">shipping & returns</span>
                                        <a href="#" class="text">My Order</a>
                                        <a href="#" class="text">Shipping</a>
                                        <a href="#" class="text">Returns</a>
                                    </div>
                                    <div class="info-block">
                                        <span class="text-head">customer care</span>
                                        <a href="#" class="text">Shopping Help</a>
                                        <a href="#" class="text">FAQ</a>
                                        <a href="#" class="text">Privacy Policy</a>
                                    </div>
                                    <div class="info-block">
                                        <span class="text-head">contacts</span>
                                        <span class="text">Phone1: 1 (800) 123-45-67</span>
                                        <span class="text">Phone2: 1 (800) 123-45-67</span>
                                        <span class="text">Mail: <a href="mailto:email@buyshop.com">email@buyshop.com</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-2 tt-btn">
                            <div class="curtain">
                                <span>world of buynow</span>
                                <span class="icon"></span>
                            </div>
                            <div class="hidden-block block-2">
                                <div class="wrapp-block">
                                    <span class="text-head">world of buynow</span>
                                    <div class="info-block">
                                        <a href="#" class="text">About Buyshop</a>
                                        <a href="#" class="text">Press</a>
                                        <a href="#" class="text">Sitemap</a>
                                    </div>
                                    <div class="info-block">
                                        <a href="#" class="text">Work with us</a>
                                        <a href="#" class="text">Consultant</a>
                                        <a href="#" class="text">Store Locations</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-3 tt-btn">
                            <div class="curtain">
                                <span>follow us</span>
                                <span class="icon"></span>
                            </div>
                            <div class="hidden-block block-3">
                                <span class="text-head">follow us</span>
                                <div class="social-wrapp">
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
                                        <span class="icon-instagram icon"></span>
                                    </a>
                                    <a href="#">
                                        <span class="icon-tumblr icon"></span>
                                    </a>
                                    <a href="#">
                                        <span class="icon-youtube-play icon"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="btn-4 tt-btn">
                            <div class="curtain">
                                <span>newsletter</span>
                                <span class="icon"></span>
                            </div>
                            <div class="hidden-block block-4">
                                <div class="boxed">
                                    <span class="text-head">newsletter sing up</span>
                                    <div class="form-wrapp">
                                        <span class="text">Sign up for exclusive updates, new arrivals<br/>and insider-only discounts</span>
                                        <form action="#">
                                            <div class="email-input">
                                                <label for="user_email">
                                                    <span class="icon icon-envelope"></span>
                                                </label>
                                                <input type="email" id="user_email" name="enter_email" placeholder="Enter your email">
                                            </div>
                                            <input type="submit" value="subscribe">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-block">
                    <div>
                        <a href="#">
                            <img src="images/product/home_page/footer/logo-1.jpg" alt="logo"/>
                        </a>
                        <a href="#">
                            <img src="images/product/home_page/footer/logo-2.jpg" alt="logo"/>
                        </a>
                        <a href="#">
                            <img src="images/product/home_page/footer/logo-3.jpg" alt="logo"/>
                        </a>
                        <a href="#">
                            <img src="images/product/home_page/footer/logo-4.jpg" alt="logo"/>
                        </a>
                        <a href="#">
                            <img src="images/product/home_page/footer/logo-5.jpg" alt="logo"/>
                        </a>
                    </div>
                    <div>
                        <span class="text-1">© 2017 BUYNOW. All Rights Reserved.</span>
                        <span class="text-2">With love  <span class="icon-heart icon"></span> from <a href="#">Etheme</a>.</span>
                    </div>
                </div>
                <div class="to-top">
                    <a href="#">
                        <span class="icon-arrow-up icon"></span>
                    </a>
                </div>
            </div>
        </footer>

        <!-- JAVA SCRIPT -->
        <script src="js/vendor/jquery/jquery.js"></script>
        <script src="js/vendor/jquery/jquery.mousewheel.pack.js"></script>
        <script src="js/vendor/bootstrap/bootstrap.min.js"></script>
        <script src="js/vendor/isotope/isotope.pkgd.min.js"></script>
        <script src="js/vendor/owl/owl.carousel.min.js"></script>
        <script src="js/vendor/zoomer/zoomer.js"></script>
        <script src="js/vendor/fancybox/jquery.fancybox.pack.js"></script>
        <script src="js/vendor/fancybox/helpers/jquery.fancybox-buttons.js"></script>
        <script src="js/vendor/fancybox/helpers/jquery.fancybox-media.js"></script>
        <script src="js/vendor/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
        <script src="js/vendor/ion.rangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
        <script src="js/app.js"></script>

  </body>
</html>
