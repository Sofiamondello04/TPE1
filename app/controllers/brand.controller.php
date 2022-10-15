<?php
require_once './app/models/brand.model.php';
require_once './app/views/brand.view.php';

class BrandController {
    private $model; //base de datos
    private $view; // template
    private $authHelper;

    public function __construct() {
        $this->model = new BrandModel();
        $this->view = new BrandView();
        $this->authHelper = new AuthHelper;
    }

    public function showBrands() {
        session_start();
        $marcas = $this->model->getAllBrands();
        $this->view->showBrands($marcas);
    }

    
    function goAddBrand() {
        
        $this->authHelper->checkLoggedIn();
        $this->view->showFormAddBrand();
    }
   
    function addBrand() {
        $this->authHelper->checkLoggedIn();

        $nombre_marca = $_POST['nombre_marca'];
        $this->model->insertBrand($nombre_marca);
        
        header("Location: " . BASE_URL); // VEEEER
    }
   
    function deleteBrand($id) {
        $this->authHelper->checkLoggedIn();
        $this->model->deleteBrandById($id);
        header("Location: " . BASE_URL);
    }

    function goEditBrand($id) {
        $this->authHelper->checkLoggedIn();
        $marca= $this->model->getBrand($id);// obtengo de la db solo esa marca
        $this->view-> showFormEditBrand($id, $marca);
   
    }

    function editBrand() {
        $this->authHelper->checkLoggedIn();
        $marcaE = new stdClass();
        $marcaE->id = $_POST['id'];
        $marcaE->nombre_marcaE = $_POST['nombre_marcaE'];
        
        $this->model->updateB($marcaE);
        header("Location: " . BASE_URL);

    }
       
}



