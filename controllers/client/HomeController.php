<?php

class HomeController
{
    private $productModel;
    private $categoryModel;

    public function __construct() {
        $this->productModel = new Product();
        $this->categoryModel = new Category();
    }

    public function index() 
    {
        $view = 'home';
        $top4new = $this->productModel->top4new();
        $cate = $this->categoryModel->getAll();

        $data = [
            'top4new'    => $top4new,
            'category' => $cate
        ];
        // var_dump($top4new);
        require_once PATH_VIEW_CLIENT_MAIN;
    }
}