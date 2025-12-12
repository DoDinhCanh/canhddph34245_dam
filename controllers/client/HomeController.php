<?php

class HomeController
{
    private $productModel;

    public function __construct() {
        $this->productModel = new Product();
    }

    public function index() 
    {
        $view = 'home';
        $top4new = $this->productModel->top4new();
        // var_dump($top4new);
        require_once PATH_VIEW_CLIENT_MAIN;
    }
}