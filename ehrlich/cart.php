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
                                <a href="#" id="btn-cart"><img src="/ehrlich/assets/icons/bx_bx-shopping-bag.svg" alt="shopping bag icon"></a>
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
                            <div class="item">
                                <div class="item-img">
                                    <img src="/ehrlich/assets/images/model-1.png" alt="item">
                                </div>
                                <div class="item-details">
                                    <p class="item-name">Gown</p>
                                    <p class="item-price">$ <span class="price">35</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="cart-modal-footer">
                            <div class="wrapper">
                                <a href="#">my bag</a>
                                <span class="total-price">6,333</span>
                            </div>
                            <a href="#" class="btn-checkout">Begin checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="section-cart">
        <div class="container-fluid">
            <div class="row">
                <div class="col heading-wrapper">
                    <div class="left-content">
                        <h3>shopping bag</h3>
                        <p><a href="#">Sign in</a> to sync your bag across your devices</p>
                    </div>
                    <div class="right-content">
                        <p>Need help? <a href="#">+1-234-5678</a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12 col-md-8 cart-items">
                    <div class="heading">
                        <p>item</p>
                        <p>price</p>
                    </div>
                    <?php
                        // Suppose we have a session array called 'cartItems'
                        if (isset($_SESSION['cartItems'])) { 
                            foreach ($_SESSION['cartItems'] as $product) {
                    ?>
                                <div class="item" id="<?php echo $product['itemId'] ?>">
                                    <div class="left-content">
                                        <img class="item-image" src="<?php echo $product['itemImageLink'] ?>" alt="item">
                                        <div class="item-details">
                                            <p class="item-name"><?php echo $product['itemName'] ?></p>
                                            <a href="#" data-id="<?php echo $product['itemId'] ?>" class="btn-remove-item">Remove</a>
                                        </div>
                                    </div>
                                    <div class="right-content">
                                        <p class="item-price">$ <span class="price"><?php echo $product['itemPrice'] ?></span></p>
                                    </div>
                                </div>
                    <?php
                            }
                        }
                    ?>
                </div>
                <div class="col col-xs-12 col-md-4">
                    <div class="summary-heading">
                        <p>order summary</p>
                    </div>
                    <div class="summary-wrapper">
                        <div class="subtotal">
                            <p>Subtotal</p>
                            <p class="value">$ <span>35</span></p>
                        </div>
                        <div class="total">
                            <p>Total</p>
                            <p class="value">$ <span>35</span></p>
                        </div>
                    </div>
                    <div class="checkout-btns">
                        <a href="" class="btn-guest">checkout as a guest</a>
                        <a href="" class="btn-signin">sign in for faster checkout</a>
                        <a href="" class="btn-paypal">paypal checkout</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col cart-footer">
                    <p>Free Shipping on orders of US $100 or more 30 day price match guarantee</p>
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
    </section>

    <footer>
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