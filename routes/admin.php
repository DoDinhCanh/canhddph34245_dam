<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    // '/'         => (new HomeController)->index(),

    // Sản Phẩm
    '/' =>(new ProductController)->index(),
    'list-product' => (new ProductController)->index(),
    'delete-product' => '',
    'show-product' => '',
    'add-product' => '',
    'store-product' => '', // Lưu thông tin vào csdl
    'edit-product' => '', //Hiển thị form sửa
    'update-product' => '',

    // Danh Mục
    'list-category' => (new CategoryController)->index(),
    'delete-category' => '',
    'add-category' => '',
    'edit-category' => '', //Hiển thị form sửa
    'update-category' => '',
};