<?php
require_once './app/models/product.model.php';
require_once './app/views/product.view.php';
require_once './app/helpers/auth.helper.php';
require_once './app/models/brand.model.php';

class ProductController {
    private $model; //base de datos
    private $view; // template
    private $modelBrands;
    

    public function __construct() {
        $this->model = new ProductModel();
        $this->view = new ProductView();
        $this->authHelper = new AuthHelper ();
        $this->modelBrands = new BrandModel();
        //barrera de seguridad
        
    
    }

    public function showProducts() { //muestra los productos a los usuarios comunes  OK
        session_start();
        $productos = $this->model->getAllProducts();
        $this->view->showProducts($productos);
    }



    /*function showAddProduct() { // muestra formulario para crear un producto
        $marcas = $this->modelBrands->getAllBrands();
        $productos = $this->model->getAllProducts(); 
        $this->view->showAddProduct($marcas, $productos);
    }*/

    function addProduct() { 
        // TODO: validar entrada de datos
       
        $this->authHelper->checkLoggedIn();
        
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $talle = $_POST['talle'];
        $id_marca = $_POST['id_marca']; 

        $id= $this->model->insertProduct($nombre, $precio, $talle, $id_marca);

        header("Location: " . BASE_URL); 
    }

    
   
    function deleteProduct($id) {
        $this->authHelper->checkLoggedIn();
        $this->model->deleteProductById($id);
        header("Location: " . BASE_URL);
    }

    function goEditProduct($id) {
        $this->authHelper->checkLoggedIn();
        $producto= $this->model->getProduct($id);// obtengo de la db solo ese producto
        $marcas= $this->modelBrands->getAllBrands();
        $this->view-> showFormEdit($id, $producto, $marcas);
   
    }

    function editProduct() {
        $productoE = new stdClass();
        $productoE->id = $_POST['id'];
        $productoE->nombreE = $_POST['nombreE'];
        $productoE->precioE = $_POST['precioE'];
        $productoE->talleE= $_POST['talleE'];
        $productoE->id_marcaE = $_POST['id_marcaE'];
        $this->model->updateP($productoE);
        header("Location: " . BASE_URL);

    }
       
}


