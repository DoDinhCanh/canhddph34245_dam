<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    // '/'         => (new HomeController)->index(),
    '/' =>(new ProductController)->index(),
    'list-product' => (new ProductController)->index(),
    'delete-product' => '',
    'show-product' => '',
    'add-product' => '',
    'store-product' => '', // Lưu thông tin vào csdl
    'edit-product' => '', //Hiển thị form sửa
    'update-product' => '',
};