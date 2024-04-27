<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THREADED</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/ehrlich/assets/css/style.css">
</head>
<body>

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col left-content">
                    <nav class="float-left">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="#">Women</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Plus</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Men</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Accessories</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col center-content">
                    <a href="/ehrlich"><img src="/ehrlich/assets/images/Logo.png" alt="Logo"></a>
                </div>
                <div class="col right-content">
                    <div class="float-right">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="#"><img src="/ehrlich/assets/icons/bx_bx-user.svg" alt="user icon"></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="/ehrlich/cart.php" id="btn-cart"><img src="/ehrlich/assets/icons/bx_bx-shopping-bag.svg" alt="shopping bag icon"></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><img src="/ehrlich/assets/icons/bx_bx-heart.svg" alt="heart icon"></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><img src="/ehrlich/assets/icons/bx_bx-support.svg" alt="call support icon"></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><img src="/ehrlich/assets/icons/bx_bx-search.svg" alt="search icon"></a>
                            </li>
                            <li class="list-inline-item">
                                <select class="form-select" aria-label="Country select">
                                    <option value="us"><img src="/ehrlich/assets/images/US-Flag.png" alt="search icon"> USD $</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                    <div id="cartModal">
                        <div class="cart-modal-body">
                        <?php
                            // Suppose we have a session array called 'cartItems'
                            if (isset($_SESSION['cartItems'])) { 
                                foreach ($_SESSION['cartItems'] as $product) {
                        ?>
                                    <div class="item">
                                            <div class="item-img">
                                                <img src="<?php echo $product['itemImageLink'] ?>" alt="item">
                                            </div>
                                            <div class="item-details">
                                                <p class="item-name"><?php echo $product['itemName'] ?></p>
                                                <p class="item-price">$ <span class="price"><?php echo $product['itemPrice'] ?></span></p>
                                            </div>
                                        </div>
                                    <?php
                                }
                            }
                        ?>
                        </div>
                        <div class="cart-modal-footer">
                            <div class="wrapper">
                                <a href="/ehrlich/cart.php">my bag</a>
                                <span class="total-price">6,333</span>
                            </div>
                            <a href="#" class="btn-checkout">Begin checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="section-announcement">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <img src="/ehrlich/assets/icons/bx_bx-crown.svg" alt="crown icon">
                    <p>Exclusive Deals for VIP 2 and up!</p>
                </div>
                <div class="col">
                    <img src="/ehrlich/assets/icons/bx_bx-star.svg" alt="star icon">
                    <p>Weekly New Arrivals</p>
                </div>
                <div class="col">
                    <img src="/ehrlich/assets/icons/mdi_truck-delivery-outline.svg" alt="truck delivery icon">
                    <p>Free Shipping On Orders Over $100</p>
                </div>
                <div class="col">
                    <img src="/ehrlich/assets/icons/bx_bx-map-pin.svg" alt="map pin icon">
                    <p>Track Your Order</p>
                </div>
                <div class="col">
                    <img src="/ehrlich/assets/icons/bx_bx-purchase-tag.svg" alt="purchase tag icon">
                    <p>10% Off On Your First Order!</p>
                </div>
            </div>
        </div>
    </section>

    <section id="section-banner-slider">
        <div id="banner-slider" class="owl-carousel">
            <div class="item">
                <div class="left-image-overlay"></div>
                <div class="left-color-overlay"></div>
                <div class="right-image-overlay"></div>
                <div class="right-color-overlay"></div>
                <div class="content">
                    <img src="/ehrlich/assets/images/banner-content-image.png" alt="Slide 1 content image">
                    <a href="#" class="btn">Shop Now</a>
                </div>
            </div>
            <div class="item">
                <div class="left-image-overlay"></div>
                <div class="left-color-overlay"></div>
                <div class="right-image-overlay"></div>
                <div class="right-color-overlay"></div>
                <div class="content">
                    <img src="/ehrlich/assets/images/banner-content-image.png" alt="Slide 1 content image">
                    <a href="#" class="btn">Shop Now</a>
                </div>
            </div>
            <div class="item">
                <div class="left-image-overlay"></div>
                <div class="left-color-overlay"></div>
                <div class="right-image-overlay"></div>
                <div class="right-color-overlay"></div>
                <div class="content">
                    <img src="/ehrlich/assets/images/banner-content-image.png" alt="Slide 1 content image">
                    <a href="#" class="btn">Shop Now</a>
                </div>
            </div>
        </div>
    </section>

    <section id="section-site-wide-deals">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-xs-6 col-md-2">
                    <div class="title">
                        <span class="price">$5</span>
                        <span>OFF</span>
                    </div>
                    <div class="description">On orders above $50</div>
                </div>
                <div class="col col-xs-6 col-md-2">
                    <div class="title">
                        <span class="price">$15</span>
                        <span>OFF</span>
                    </div>
                    <div class="description">On orders above $75</div>
                </div>
                <div class="col col-xs-6 col-md-2">
                    <div class="title">
                        <span class="price">$20</span>
                        <span>OFF</span>
                    </div>
                    <div class="description">On orders above $150</div>
                </div>
                <div class="col col-xs-6 col-md-2">
                    <div class="title">
                        <span class="price">$30</span>
                        <span>OFF</span>
                    </div>
                    <div class="description">On orders above $200</div>
                </div>
                <div class="col col-xs-12 col-md-4">
                    <a href="#" class="btn cta-button">check out all site-wide deals</a>
                </div>
            </div>
        </div>
    </section>

    <section id="section-vip-exclusive">
        <div class="image-overlay"></div>
        <div class="color-overlay"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col col-xs-12 col-md-4">
                    <div class="title">
                        <p>black friday exclusive</p>
                    </div>
                </div>
                <div class="col col-xs-12 col-md-4">
                    <div class="description">
                        <p>free shipping on all orders for VIP 2 and up!</p>
                    </div>
                </div>
                <div class="col col-xs-12 col-md-4">
                    <div class="cta-button">
                        <a href="#" class="btn">shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-trending">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12 col-md-12">
                    <h3 class="heading">now trending</h3>
                    <p class="subheading">See what everyone's wearing right now</p>
                </div>
            </div>
            <div class="row trending-grid">
                <div class="col col-xs-12 col-md-3">
                    <img src="/ehrlich/assets/images/winter-fashion-trending.png" alt="winter fashion image">
                    <p class="title">winter fashion</p>
                </div>
                <div class="col col-xs-12 col-md-3">
                    <img src="/ehrlich/assets/images/boots-trending.png" alt="boots image">
                    <p class="title">boots</p>
                </div>
                <div class="col col-xs-12 col-md-3">
                    <img src="/ehrlich/assets/images/nightout-trending.png" alt="night out image">
                    <p class="title">night out</p>
                </div>
                <div class="col col-xs-12 col-md-3">
                    <img src="/ehrlich/assets/images/holidays-trending.png" alt="holidays image">
                    <p class="title">holidays</p>
                </div>
                <div class="col col-xs-12 col-md-3">
                    <img src="/ehrlich/assets/images/outerwear-trending.png" alt="outerwear image">
                    <p class="title">outerwear</p>
                </div>
                <div class="col col-xs-12 col-md-3">
                    <img src="/ehrlich/assets/images/white-dress-trending.png" alt="white dresses image">
                    <p class="title">white dresses</p>
                </div>
                <div class="col col-xs-12 col-md-3">
                    <img src="/ehrlich/assets/images/sweaters-trending.png" alt="sweaters image">
                    <p class="title">sweaters</p>
                </div>
                <div class="col col-xs-12 col-md-3">
                    <img src="/ehrlich/assets/images/party-trending.png" alt="party image">
                    <p class="title">party</p>
                </div>
            </div>
            <div class="row hashtags">
                <div class="col">
                    <div class="wrapper">
                        <p>#Thanksgiving</p>
                    </div>
                    <div class="wrapper">
                        <p>#NewYears</p>
                    </div>
                    <div class="wrapper">
                        <p>#Knitted</p>
                    </div>
                    <div class="wrapper">
                        <p>#Pajamas</p>
                    </div>
                    <div class="wrapper">
                        <p>#WFH</p>
                    </div>
                    <div class="wrapper">
                        <p>#FallFashion</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-new-arrivals">
        <div class="wrapper">
            <div class="image-overlay"></div>
            <div class="color-overlay"></div>
            <div class="left-model-image"></div>
            <div class="right-model-image"></div>
            <div class="content">
                <h2>new arrivals</h2>
                <p>Get ready for the holidays with us!</p>
                <a href="#" class="btn">Shop Now</a>
            </div>
        </div>
    </section>

    <section id="section-recently-bought">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12 col-md-12">
                    <h3 class="heading">recently bought</h3>
                </div>
            </div>
            <div class="row recently-bought-grid">
                <div class="col">
                    <div class="wrapper">
                        <img src="/ehrlich/assets/images/recently-image-1.png" alt="recently bought image">
                        <div class="btn-buy-wrapper">
                            <a href="#"
                                data-id="1" 
                                data-name="Festive Looks Rust Red Ribbed Velvet Long Sleeve Bodysuit" 
                                data-image-link="/ehrlich/assets/images/recently-image-1.png"
                                data-price="38">
                                Buy
                            </a>
                        </div>
                    </div>
                    <p class="title">Festive Looks Rust Red Ribbed Velvet Long Sleeve Bodysuit</p>
                    <div class="price">
                        <span class="regular-price">$38</span>
                    </div>
                </div>
                <div class="col">
                    <div class="wrapper">
                        <img src="/ehrlich/assets/images/recently-image-2.png" alt="recently bought image">
                        <div class="btn-buy-wrapper">
                            <a href="#"
                                data-id="2" 
                                data-name="Chevron Flap Crossbody Bag" 
                                data-image-link="/ehrlich/assets/images/recently-image-2.png"
                                data-price="5.77">
                                Buy
                            </a>
                        </div>
                    </div>
                    <p class="title">Chevron Flap Crossbody Bag</p>
                    <div class="price">
                        <span class="sale-price">$5.77</span>
                        <span class="regular-price strike">$7.34</span>
                    </div>
                </div>
                <div class="col">
                    <div class="wrapper">
                        <img src="/ehrlich/assets/images/recently-image-3.png" alt="recently bought image">
                        <div class="btn-buy-wrapper">
                            <a href="#"
                                data-id="3" 
                                data-name="Manilla Tan Multi Plaid Oversized Fringe Scarf" 
                                data-image-link="/ehrlich/assets/images/recently-image-3.png"
                                data-price="29">
                                Buy
                            </a>
                        </div>
                    </div>
                    <p class="title">Manilla Tan Multi Plaid Oversized Fringe Scarf</p>
                    <div class="price">
                        <span class="sale-price">$29</span>
                        <span class="regular-price strike">$39</span>
                    </div>
                </div>
                <div class="col">
                    <div class="wrapper">
                        <img src="/ehrlich/assets/images/recently-image-4.png" alt="recently bought image">
                        <div class="btn-buy-wrapper">
                            <a href="#"
                                data-id="4" 
                                data-name="Diamante Puff Sleeve Dress - Black" 
                                data-image-link="/ehrlich/assets/images/recently-image-4.png"
                                data-price="45.99">
                                Buy
                            </a>
                        </div>
                    </div>
                    <p class="title">Diamante Puff Sleeve Dress - Black</p>
                    <div class="price">
                        <span class="regular-price">$45.99</span>
                    </div>
                </div>
                <div class="col">
                    <div class="wrapper">
                        <img src="/ehrlich/assets/images/recently-image-5.png" alt="recently bought image">
                        <div class="btn-buy-wrapper">
                            <a href="#"
                                data-id="5" 
                                data-name="Banneth Open Front Formal Dress in Black" 
                                data-image-link="/ehrlich/assets/images/recently-image-5.png"
                                data-price="69">
                                Buy
                            </a>
                        </div>
                    </div>
                    <p class="title">Banneth Open Front Formal Dress in Black</p>
                    <div class="price">
                        <span class="sale-price">$69</span>
                        <span class="regular-price strike">$99.95</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-insta">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-xs-12 col-md-12">
                    <h3 class="heading">your next inspo</h3>
                    <p class="subheading">Checkout who's wearing what by using #THREADEDInspo on Instagram</p>
                </div>
            </div>
            <div class="row insta-grid">
                <div class="col">
                    <img src="/ehrlich/assets/images/insta-1.png" alt="insta image">
                </div>
                <div class="col">
                    <img src="/ehrlich/assets/images/insta-2.png" alt="insta image">
                </div>
                <div class="col">
                    <img src="/ehrlich/assets/images/insta-3.png" alt="insta image">
                </div>
                <div class="col">
                    <img src="/ehrlich/assets/images/insta-4.png" alt="insta image">
                </div>
                <div class="col">
                    <img src="/ehrlich/assets/images/insta-5.png" alt="insta image">
                </div>
            </div>
            <div class="row">
                <div class="btn-all-posts-wrapper">
                    <a href="#" class="btn">view all posts</a>
                </div>
            </div>
        </div>
    </section>

    <section id="section-newsletter">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-xs-12 col-md-8 title-wrapper">
                    <div class="title">
                        <h3>sign up for exclusive deals and updates</h3>
                    </div>
                </div>
                <div class="col col-xs-12 col-md-4 form-wrapper">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Your Email Address" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-success border-rad" type="button" id="button-addon2">
                            <img src="/ehrlich/assets/icons/ant-design_right-black-outlined.svg" alt="arrow right icon">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <section id="footer-info">
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-xs-12 col-md-5">
                        <div class="footer-nav">
                            <div>
                                <p class="heading">company info</p>
                                <ul class="footer-links">
                                    <li><a href="#">about THREADED</a></li>
                                    <li><a href="#">affiliate</a></li>
                                    <li><a href="#">blog</a></li>
                                    <li><a href="#">careers</a></li>
                                </ul>
                            </div>
                            <div>
                                <p class="heading">help & support</p>
                                <ul class="footer-links">
                                    <li><a href="#">fAQ</a></li>
                                    <li><a href="#">shipping</a></li>
                                    <li><a href="#">returns</a></li>
                                    <li><a href="#">how to order</a></li>
                                    <li><a href="#">how to track</a></li>
                                </ul>
                            </div>
                            <div>
                                <p class="heading">customer care</p>
                                <ul class="footer-links">
                                    <li><a href="#">contact us</a></li>
                                    <li><a href="#">payment methods</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col col-xs-12 col-md-7">
                        <div class="footer-socials">
                            <p class="heading">follow us</p>
                            <ul class="footer-links">
                                <li><a href="#"><img src="/ehrlich/assets/icons/bx_bxl-facebook.svg" alt="facebook icon"></a></li>
                                <li><a href="#"><img src="/ehrlich/assets/icons/bx_bxl-instagram.svg" alt="instagram icon"></a></li>
                                <li><a href="#"><img src="/ehrlich/assets/icons/bx_bxl-twitter.svg" alt="twitter icon"></a></li>
                                <li><a href="#"><img src="/ehrlich/assets/icons/bx_bxl-youtube.svg" alt="youtube icon"></a></li>
                                <li><a href="#"><img src="/ehrlich/assets/icons/bx_bxl-pinterest-alt.svg" alt="pinterest icon"></a></li>
                                <li><a href="#"><img src="/ehrlich/assets/icons/bx_bxl-tiktok.svg" alt="tiktok icon"></a></li>
                            </ul>
                        </div>
                        <div class="footer-payments">
                            <p class="heading">we accept</p>
                            <ul class="footer-links">
                                <li><img src="/ehrlich/assets/images/visa.png" alt="visa logo"></li>
                                <li><img src="/ehrlich/assets/images/mastercard.png" alt="mastercard logo"></li>
                                <li><img src="/ehrlich/assets/images/maestro.png" alt="maestro logo"></li>
                                <li><img src="/ehrlich/assets/images/american-express.png" alt="american express logo"></li>
                                <li><img src="/ehrlich/assets/images/paypal.png" alt="paypal logo"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section id="footer-copyright">
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-xs-12 col-md-12">
                        <p>&copy; 2021 THREADED All Rights Reserved.</p>
                        <a href="/ehrlich"><img src="/ehrlich/assets/images/footer-logo.svg" alt="threaded logo"></a>
                    </div>
                </div>
            </div>
        </section>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/ehrlich/assets/js/main.js"></script>
</body>
</html>