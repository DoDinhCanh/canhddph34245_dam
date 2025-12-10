<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    // '/'         => (new HomeController)->index(),

    // Sản Phẩm
    '/' =>(new ProductController)->index(),
    'list-product' => (new ProductController)->index(),
    'delete-product' => (new ProductController)->delete(),
    'show-product' => '',
    'add-product' => (new ProductController)->add(),
    'store-product' => (new ProductController)->store(), // Lưu thông tin vào csdl
    'edit-product' => '', //Hiển thị form sửa
    'update-product' => '',

    // Danh Mục
    'list-category' => (new CategoryController)->index(),
    'delete-category' => '',
    'add-category' => '',
    'edit-category' => '', //Hiển thị form sửa
    'update-category' => '',

    // Người dùng
    'list-user' => (new UserController)->index(),
    'delete-user' => '',
    'add-user' => '',
    'edit-user' => '', //Hiển thị form sửa
    'update-user' => '',
};