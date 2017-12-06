<?php
    if(isset($_POST['number']) and $_POST['number'] != 'default') {
        $numb = $_POST['number'];
        echo '
            <div class="image-block">
                <div class="main-image">
                    <img src="images/product/product_images/men/'.$numb.'_1.jpg" alt="alt">
                </div>
                <div class="preview-image">
                    <img src="images/product/product_images/men/'.$numb.'_1.jpg" alt="alt" data-preview="images/product/product_images/men/'.$numb.'_1.jpg">
                    <img src="images/product/product_images/men/'.$numb.'_2.jpg" alt="alt" data-preview="images/product/product_images/men/'.$numb.'_2.jpg">
                    <img src="images/product/product_images/men/'.$numb.'_3.jpg" alt="alt" data-preview="images/product/product_images/men/'.$numb.'_3.jpg">
                    <img src="images/product/product_images/men/'.$numb.'_4.jpg" alt="alt" data-preview="images/product/product_images/men/'.$numb.'_4.jpg">
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
                        <div class="btn-less tt-btn disabled">
                            <span class="icon icon-chevron-left"></span>
                        </div>
                        <input type="text" name="qty" class="output" data-max="4" value="1" readonly>
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
            <div class="clearfix"></div>
        ';
    } else die ('Error');
?>