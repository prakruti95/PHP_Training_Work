<?php
// Always load the model using absolute path
require_once __DIR__ . '/../models/User.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function index() {
        $users = $this->userModel->getAll();
        if (!$users) $users = [];
        require __DIR__ . '/../views/users/index.php';
    }

    public function create() {
        require __DIR__ . '/../views/users/create.php';
    }

    public function store() {
        $this->userModel->create($_POST['name'], $_POST['email'], $_POST['phone']);
        header("Location: ../public/index.php");
    }

    public function edit($id) {
        $user = $this->userModel->getById($id);
        require __DIR__ . '/../views/users/edit.php';
    }

    public function update($id) {
        $this->userModel->update($id, $_POST['name'], $_POST['email'], $_POST['phone']);
        header("Location: ../public/index.php");
    }

    public function delete($id) {
        $this->userModel->delete($id);
        header("Location: ../public/index.php");
    }
}
?>
