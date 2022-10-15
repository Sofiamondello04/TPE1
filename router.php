<?php
require_once './app/controllers/product.controller.php';
require_once './app/controllers/brand.controller.php';
require_once './app/controllers/auth.controller.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');



if (!empty($_GET['action'])) { // Si la URL no esta vacia, por defecto muestra home
    $action = $_GET['action'];
}
else {
    $action = 'productos'; // acción por defecto os
}

// parsea la accion 
$params = explode('/', $action);


// tabla de ruteo--> Determino que camino a seguir en cada accion
switch ($params[0]) {

	case 'productos':
		$productController = new ProductController();
		$productController->showProducts();	//OK
		break;

	case 'goAddProduct':
		$productController = new ProductController();
		$productController->goAddProduct();
		break;

	case 'addProduct':
		$productController = new ProductController();
		$productController->addProduct();
		break;

	case 'marcas':
		$brandController = new BrandController();
		$brandController->showBrands();	//OK
		break;


	case 'marca':
		$productController = new ProductController();
		$id_marca = $params[1];
		$productController->filterProducts($id_marca); //trae los productos de esa marca
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
		
    

    
    case 'deleteProduct':
		$productController = new ProductController();
        // obtengo el parametro de la acción
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



	case 'goAddBrand':
		$brandController = new BrandController();
		$brandController->goAddBrand();
		break;
		
	case 'addBrand':
		$brandController = new BrandController();
		$brandController->addBrand();
		break;

	case 'deleteBrand':
		$brandController = new BrandController();
		// obtengo el parametro de la acción
		$id = $params[1];
		$brandController->deleteBrand($id);
		break;
	case 'goEditBrand': 
		$brandController = new BrandController();
		$id = $params[1];
		$brandController->goEditBrand($id); //modifico un producto
		break;
	case 'editBrand':  
		$brandController = new BrandController();
		$brandController->editBrand(); //modifico un producto
		break;  
		
		
    default:
        echo('404 Page not found');
        break;

}
