<?php
require_once './app/models/brand.model.php';
require_once './app/views/brand.view.php';

class BrandController {
    private $model; //base de datos
    private $view; // template

    public function __construct() {
        $this->model = new BrandModel();
        $this->view = new BrandView();
    }

    public function showBrandsAdm() {
        $marcas = $this->model->getAllBrands();
        $this->view->showBrandsAdm($marcas);
    }

    
    function addBrand() {
        // TODO: validar entrada de datos

        $nombre_marca = $_POST['nombre_marca'];
        $id = $this->model->insertBrand($nombre_marca);

        header("Location: " . BASE_URL); // VEEEER
    }
   
    function deleteBrand($id) {
        $this->model->deleteBrandById($id);
        header("Location: " . BASE_URL);
    }

    function goEditBrand($id) {
       
        $marca= $this->model->getBrand($id);// obtengo de la db solo esa marca
        $this->view-> showFormEditBrand($id, $marca);
   
    }

    function editBrand() {
        $marcaE = new stdClass();
        $marcaE->id = $_POST['id'];
        $marcaE->nombre_marcaE = $_POST['nombre_marcaE'];
        
        $this->model->updateB($marcaE);
        header("Location: " . BASE_URL);

    }
       
}



