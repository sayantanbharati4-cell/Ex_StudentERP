<?php
require_once __DIR__ . '/../model/UserModel.php';

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    $auth = new AuthController();
    $auth->logout();
}

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function login($email, $password) {
        // To be implemented later
        // For now, just redirect to dashboard after any login
        $_SESSION['user_id'] = 1;
        $_SESSION['user_name'] = 'Admin';
        $_SESSION['user_role'] = 'admin';
        header('Location: ' . BASE_URL . '/index.php?page=dashboard');
        exit;
    }

    public function logout() {
        session_destroy();
        header('Location: ' . BASE_URL);
        exit;
    }
}
?>