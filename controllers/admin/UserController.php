<?php
class UserController {
    private $userModel;
    private $roleModel;

    public function __construct() {
        $this->userModel = new User();
        $this->roleModel = new Role();
    }

    public function index() {
        $view = 'user/listUser';
        $title = '';
        $data = $this->userModel->getAll();
        require_once PATH_VIEW_ADMIN_MAIN;
    }

    public function delete() {
        $id = $_GET['id'];
        $this->userModel->delete($id);
        header("Location: index.php?mode=admin&action=list-user");
        exit;
    }

    public function add() {
        $view = 'user/addUser';
        $title = '';
        $roles = $this->roleModel->getAll();
        $data = ['role' => $roles];
        require_once PATH_VIEW_ADMIN_MAIN;
    }

    public function store() {
        try {
            $username = $_POST['username'];
            $email    = $_POST['email'];
            $password = $_POST['password'];
            $role_id  = $_POST['role_id'];

            $this->userModel->insert([
                'username' => $username,
                'email'    => $email,
                'password' => $password,
                'role_id'  => $role_id
            ]);

            header("Location: index.php?mode=admin&action=list-user");
            exit;
        } catch (Exception $ex) {
            die("Lỗi thêm tài khoản: " . $ex->getMessage());
        }
    }

    public function edit() {
        $id = $_GET['id'];
        $user = $this->userModel->find($id);
        $roles = $this->roleModel->getAll();

        $view = 'user/updateUser';
        $title = 'Cập nhật tài khoản';
        $data = ['user' => $user, 'roles' => $roles];
        require_once PATH_VIEW_ADMIN_MAIN;
    }

    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id   = $_POST['id'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $role_id = $_POST['role_id'];

            $this->userModel->update($id, $username, $password, $email, $role_id);

            header("Location: index.php?mode=admin&action=list-user");
            exit;
        }
    }
}
 ?>