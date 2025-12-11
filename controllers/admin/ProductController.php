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
    
    public function edit() {
        if (!isset($_GET['id'])) {
            header("Location: index.php?mode=admin&action=list-product&error=Thiếu ID");
            exit;
        }

        $id        = $_GET['id'];
        $product   = $this->productModel->find($id);
        $categories = $this->categoryModel->getAll();

        if (!$product) {
            header("Location: index.php?mode=admin&action=list-product&error=Không tìm thấy sản phẩm");
            exit;
        }

        $view  = 'product/updateProduct';
        $title = 'Sửa sản phẩm';
        $data  = ['product' => $product, 'category' => $categories];
        require_once PATH_VIEW_ADMIN_MAIN;
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id          = $_POST['id'];
            $name        = $_POST['name'];
            $price       = $_POST['price'];
            $description = $_POST['description'];
            $category_id = $_POST['category_id'];

            $image = null;
            if (!empty($_FILES['image']['name'])) {
                $fileName   = time() . '_' . $_FILES['image']['name'];
                $targetPath = PATH_ASSETS_UPLOADS . $fileName;
                move_uploaded_file($_FILES['image']['tmp_name'], $targetPath);
                $image = $fileName;
            }

            $this->productModel->update($id, $name, $price, $description, $image, $category_id);

            header("Location: index.php?mode=admin&action=list-product&success=Cập nhật thành công");
            exit;
        }
    }

}

?>