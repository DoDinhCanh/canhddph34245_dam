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
    'edit-product' => (new ProductController)->edit(), //Hiển thị form sửa
    'update-product' => (new ProductController)->update(),

    // Danh Mục
    'list-category' => (new CategoryController)->index(),
    'delete-category' => (new CategoryController)->delete(),
    'add-category' => (new CategoryController)->add(),
    'store-category' => (new CategoryController)->store(),
    'edit-category' => (new CategoryController)->edit(), //Hiển thị form sửa
    'update-category' => (new CategoryController)->update(),

    // Người dùng
    'list-user' => (new UserController)->index(),
    'delete-user' => (new UserController)->delete(),
    'add-user' => (new UserController)->add(),
    'store-user' => (new UserController)->store(),
    'edit-user' => '', //Hiển thị form sửa
    'update-user' => '',
};