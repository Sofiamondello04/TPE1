<?php
require_once './app/views/auth.view.php';
require_once './app/models/user.model.php';
require_once './app/models/product.model.php';
require_once './app/models/brand.model.php';

class AuthController {
    private $view;
    private $modelUser;
    private $model;
    private $modelBrands;
    private $products;
    private $brands;
    
    public function __construct() {
        $this->modelUser = new UserModel();
        $this->view = new AuthView();
        $this->model = new ProductModel();
        $this->modelBrands = new BrandModel();
        $this->products = $this->model->getAllProducts();
        $this->brands = $this->modelBrands->getAllBrands(); 
    }

    public function showFormLogin() {
        $this->view->assign($this->products, $this->brands);
        $this->view->showFormLogin();
    }

    public function validateUser() {
        // toma los datos del form
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        // busco el usuario por email
        $user = $this->modelUser->getUserByEmail($email);

        // verifico que el usuario existe y que las contraseñas son iguales
        if ($user && password_verify($pass, $user->password)) {

            // inicio una session para este usuario
            session_start();
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;

            header("Location: " . BASE_URL);
        } else {
            // si los datos son incorrectos muestro el form con un erro
           $this->view->showFormLogin("El usuario o la contraseña no existe.");
        } 
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}