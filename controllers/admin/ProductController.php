<?php 
class ProductController {
    private $productModel;

    public function __construct() {
        $this->productModel = new Product();
    }

    public function index() {
        $view = 'product/listProduct';
        $title = '';
        $data = $this->productModel->getAll();
        // var_dump($data);
        // die;
        require_once PATH_VIEW_ADMIN_MAIN;
    }
}
?>