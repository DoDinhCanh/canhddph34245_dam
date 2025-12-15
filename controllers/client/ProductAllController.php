<?php 
class ProductAllController {
    private $productModel;
    private $categoryModel;

    public function __construct() {
        $this->productModel  = new Product();
        $this->categoryModel = new Category();
        
    }

    public function index() {
        $view = 'allProduct';
        $title = '';

        $categoryId = $_GET['category'] ?? null;
        if ($categoryId) {
            $products = $this->productModel->getByCategory($categoryId);
        } else {
            $products = $this->productModel->getAllWithCategory();
        }
        $cate = $this->categoryModel->getAll();

        $data = [
            'product'   => $products,
            'category' => $cate,
            'selected'   => $categoryId
        ];

        require_once PATH_VIEW_CLIENT_MAIN;
    }
}

?>