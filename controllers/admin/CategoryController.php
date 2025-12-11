<?php
class CategoryController {
    private $categoryModel;

    public function __construct() {
        $this->categoryModel = new Category();
    }

    public function index() {
        $view = 'category/listCategory';
        $title = '';
        $data = $this->categoryModel->getAll();
        require_once PATH_VIEW_ADMIN_MAIN;
    }

    public function delete() {
        try {
            if(!isset($_GET["id"])) {
                throw new Exception("Khong co tham so id");
            }
            $id = $_GET["id"];
            $category = $this->categoryModel->find($id);
            if($category) {
                $this->categoryModel->delete($id);
                header("Location: index.php?mode=admin&action=list-category");
            exit;
            } else {
                throw new Exception("Khong co danh muc $id");
            }
        } catch(Exception $ex) {
            echo "Khong the xoa vi van co san pham trong danh muc";
    exit;
        }
    }

    public function add() {
        $view = 'category/addCategory';
        $title = '';
        // $categories = $this->categoryModel->getAll();
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
            $this->categoryModel->insert($data);
        } catch (Exception $ex) {
            throw new Exception("Khong thanh cong!");
        }
        header('Location:' .BASE_URL_ADMIN .'&action=list-category');
        exit();
    }
}
 ?>