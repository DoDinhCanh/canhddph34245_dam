<?php
class CategoryController {
    private $categoryModel;

    public function __construct() {
        $this->categoryModel = new Category();
    }

    public function index() {
        $view = 'category/listCategory';
        $title = '';
        $cate = $this->categoryModel->getAll();
        require_once PATH_VIEW_ADMIN_MAIN;
    }
}
 ?>