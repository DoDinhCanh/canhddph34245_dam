<?php 
class ProductController {
    private $productModel;
    private $categoryModel;

    public function __construct() {
        $this->productModel = new Product();
        $this->categoryModel = new Category();
    }
    

    public function index() {
        $view = 'product/listProduct';
        $title = '';
        $data = $this->productModel->getAll();
        // var_dump($data);
        // die;
        require_once PATH_VIEW_ADMIN_MAIN;
    }

    public function delete() {
        try {
            if(!isset($_GET["id"])) {
                throw new Exception("Khong co tham so id");
            }
            $id = $_GET["id"];
            $pro = $this->productModel->find($id);
            if($pro) {
                $this->productModel->delete($id);
                header("Location: index.php?mode=admin&action=list-product");
            exit;
            } else {
                throw new Exception("Khong co san pham $id");
            }
        } catch(Exception $ex) {
            throw new Exception('Xoa khong duoc !');
        }
    }

    public function add() {
        $view = 'product/addProduct';
        $title = '';
        $categories = $this->categoryModel->getAll();
        require_once PATH_VIEW_ADMIN_MAIN;
    }

    public function store() {
        try {
            $data = $_POST + $_FILES;
            if ($data["image"]["size"] > 0) {
                $data["image"] = upload_file('', $data["image"]);
                
            } else {
                $data["image"] = null;
            }
            $this->productModel->insert($data);
        } catch (Exception $ex) {
            throw new Exception("Khong thanh cong!");
        }
        header('Location:' .BASE_URL_ADMIN .'&action=list-product');
        exit();
    }
}


?>