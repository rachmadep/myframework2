<?php
session_start();

include "templates/header-main.php";
include "lib/koneksi.php";
include "lib/config_web.php";
 ?>
        <main>
            <div class="breadcrumbs">
                <div class="container-fluid">
                    <div class="boxed">
                        <ul>
                            <li><a href="#">home</a></li>
                            <li><a href="#">Create New Customer Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="head-text-type1 new-account-head">
                <H1>Create New Customer Account</H1>
            </div>

            <div class="container-fluid">
                <div class="boxed">
                    <div class="new-account">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-12">
                                    <H4 class="label-text">Personal Information</H4>
                                </div>
                                <div class="col-md-5 col-sm-6">
                                    <input class="tt-input" type="text" placeholder="First name">
                                    <input class="tt-input" type="email" placeholder="E-mail Address">
                                </div>
                                <div class="col-md-5 col-sm-6">
                                    <input class="tt-input" type="text"  placeholder="Last name">
                                    <input class="tt-input" type="text"  placeholder="Phone number">
                                </div>
                                <div class="col-md-12">
                                    <label class="tt-checkbox">
                                        <input type="checkbox">
                                        <span class="box"></span>
                                        <span>Sign Up for Newsletter</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12 border-top"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <H4 class="label-text">Sing-in Information</H4>
                                </div>
                                <div class="col-md-5 col-sm-6">
                                    <input class="tt-input" type="password" placeholder="Password">
                                </div>
                                <div class="col-md-5 col-sm-6">
                                    <input class="tt-input" type="password"  placeholder="Confirm password">
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn tt-btn-type1" value="register now">
                                </div>
                            </div>
                        </form>
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
