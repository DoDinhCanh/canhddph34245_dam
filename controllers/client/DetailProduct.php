<?php
    class DetailProductController {
        private $productModel;

        public function __construct() {
            $this->productModel = new Product();
        }

        public function show() {
            $view = 'detailProduct';
            $title = 'chi tiet sp';
            require_once PATH_VIEW_CLIENT_MAIN;
        }
    }
?>