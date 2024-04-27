<?php

session_start();

if (!isset($_SESSION['cartItems'])) {
    $_SESSION['cartItems'] = [];
}


if (!empty($_POST['itemId']) && !empty($_POST['itemName']) && !empty($_POST['itemImageLink']) && !empty($_POST['itemPrice']) && $_POST['method'] === 'create') {

    $product['itemId'] = $_POST['itemId'];
    $product['itemName'] = $_POST['itemName'];
    $product['itemImageLink'] = $_POST['itemImageLink'];
    $product['itemPrice'] = $_POST['itemPrice'];

    $_SESSION['cartItems'][] = $product;

}

if (!empty($_POST['itemId']) && $_POST['method'] === 'delete') {

    foreach ($_SESSION['cartItems'] as $key => $product) {
        if ($product['itemId'] == $_POST['itemId']) {
            unset($_SESSION['cartItems'][$key]);
        }
    }

}

print_r($_SESSION['cartItems']);