<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    '/'         => (new HomeController)->index(),
    'products'   => (new ProductAllController)->index(),
    'detail-product' => (new DetailProductController)->show()
};