$(document).ready(function() {
    $("#banner-slider").owlCarousel({
        items: 1, // Number of items per slide
        loop: true, // Enable looping
        autoplay: false, // Autoplay the carousel
        autoplayTimeout: 5000, // Autoplay interval (in milliseconds)
        nav: true, // Show navigation buttons (prev/next)
        dots: true, // Show pagination dots
        navText: [
            "<img src='/ehrlich/assets/icons/ant-design_left-outlined.svg'>",
            "<img src='/ehrlich/assets/icons/ant-design_right-outlined.svg'>"
        ]
    });

    setInterval(function() {
        var btnCart = $("#btn-cart");
        var cartModal = $("#cartModal");

        if (btnCart.is(":hover") || cartModal.is(":hover")) {
            $("#cartModal").show();
        } else {
            $("#cartModal").hide();
        }
    }, 200);

    $('.btn-buy-wrapper a').click(function(e) {
        e.preventDefault(); // prevent form from reloading page

        var itemId = $(this).attr("data-id");
        var itemName = $(this).attr("data-name");
        var itemImageLink = $(this).attr("data-image-link");
        var itemPrice = $(this).attr("data-price");

        $.ajax({
            url: "/ehrlich/functions.php",
            method: "POST",
            dataType: "json",
            data: {
                itemId: itemId,
                itemName: itemName,
                itemImageLink: itemImageLink,
                itemPrice: itemPrice,
                method: 'create',
            },
            success: function(data) {
                alert("Product has been added to cart");
            }
        });
    });

    $('.btn-remove-item').click(function(e) {
        e.preventDefault(); // prevent form from reloading page

        var itemId = $(this).attr("data-id");

        $.ajax({
            url: "/ehrlich/functions.php",
            method: "POST",
            dataType: 'json',
            async: false,
            data: {
                itemId: itemId,
                method: 'delete',
            },
            success: function(data) {
                alert("Product has been deleted to cart");
                console.log("dfgfdgfdg");
            }
        });
    });
});