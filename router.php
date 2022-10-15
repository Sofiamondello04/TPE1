<?php
require_once './app/controllers/product.controller.php';
require_once './app/controllers/auth.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');



if (!empty($_GET['action'])) { 
    $action = $_GET['action'];
}
else {
    $action = 'productos'; // acción por defecto 
}

$params = explode('/', $action); // parsea la accion 


// tabla de ruteo
switch ($params[0]) {

	case 'productos':
		$productController = new ProductController();
		$productController->showProducts();	
		break;

	case 'goAddProduct':
		$productController = new ProductController();
		$productController->goAddProduct();
		break;

	case 'addProduct':
		$productController = new ProductController();
		$productController->addProduct();
		break;

	case 'goViewProduct':
		$productController = new ProductController();
		$id = $params[1];
		$productController->goViewProduct($id);
		break;

	case 'deleteProduct':
		$productController = new ProductController();
		$id = $params[1];
		$productController->deleteProduct($id);
		break;
	case 'goEditProduct': 
		$productController = new ProductController();
		$id = $params[1];
		$productController->goEditProduct($id); //modifico un producto
		break;
	case 'editProduct':  
		$productController = new ProductController();
		$productController->editProduct(); //modifico un producto
		break; 

	case 'marca':
		$productController = new ProductController();
		$id_marca = $params[1];
		$productController->filterProducts($id_marca); //trae los productos de esa marca
		break;

	case 'marcas':
		$productController = new ProductController();
		$productController->showBrands();	
		break;

	case 'goAddBrand':
		$productController = new ProductController();
		$productController->goAddBrand();
		break;
		
	case 'addBrand':
		$productController = new ProductController();
		$productController->addBrand();
		break;

	case 'deleteBrand':
		$productController = new ProductController();
		$id = $params[1];
		$productController->deleteBrand($id);
		break;
	case 'goEditBrand': 
		$productController = new ProductController();
		$id = $params[1];
		$productController->goEditBrand($id); //modifico un producto
		break;
		
	case 'editBrand':  
		$productController = new ProductController();
		$productController->editBrand(); //modifico un producto
		break;



	case 'login':
		$authController = new AuthController();
		$authController->showFormLogin();
		break;

	case 'validate':
		$authController = new AuthController();
		$authController->validateUser();
		break;

	case 'logout':
		$authController = new AuthController();
		$authController->logout();
		break;
			
		
    default:
        echo('404 Page not found');
        break;

}
