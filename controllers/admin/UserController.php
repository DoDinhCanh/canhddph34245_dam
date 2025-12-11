<?php
class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function index() {
        $view = 'user/listUser';
        $title = '';
        $data = $this->userModel->getAll();
        require_once PATH_VIEW_ADMIN_MAIN;
    }
}
 ?>