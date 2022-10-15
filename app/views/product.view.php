<?php
require_once './libs-smarty/libs/Smarty.class.php';

class ProductView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }

    function showProducts($productos) {
        $this->smarty->assign('nombre', 'Nombre');
        $this->smarty->assign('marca', 'Marca');
        $this->smarty->assign('precio', 'Precio');
        $this->smarty->assign('talle', 'Talle');
        $this->smarty->assign('verDetalle', 'Ver detalle');
        $this->smarty->assign('borrar', 'Borrar');
        $this->smarty->assign('editar', 'Editar');
        $this->smarty->assign('detalle', 'Ver');
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('tabla_productos.tpl');
       
    }
    function viewProduct($producto) {
        $this->smarty->assign('titulo', 'Detalle del producto');
        $this->smarty->assign('producto', $producto);
        $this->smarty->display('mensaje.tpl');
    }
    
    function showProductsOfBrand($productosMarca) {
        $this->smarty->assign('nombre', 'Nombre');
        $this->smarty->assign('marca', 'Marca');
        $this->smarty->assign('precio', 'Precio');
        $this->smarty->assign('talle', 'Talle');
        $this->smarty->assign('verDetalle', 'Ver detalle');
        $this->smarty->assign('borrar', 'Borrar');
        $this->smarty->assign('editar', 'Editar');
        $this->smarty->assign('detalle', 'Ver');
        $this->smarty->assign('productosMarca', $productosMarca);
        $this->smarty->display('productos_por_marcas.tpl');

    }

    function showFormAddProduct($marcas) {
        $this->smarty->assign('titulo', 'Agregar producto');
        $this->smarty->assign('nombre', 'Nombre');
        $this->smarty->assign('marca', 'Marca');
        $this->smarty->assign('precio', 'Precio');
        $this->smarty->assign('talle', 'Talle');
        $this->smarty->assign('guardar', 'Guardar');
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->display('agregar_producto.tpl');
    }
    

    function showFormEdit($id, $producto, $marcas) {
        $this->smarty->assign('titulo', 'Editar producto');
        $this->smarty->assign('nombre', 'Nombre');
        $this->smarty->assign('marca', 'Marca');
        $this->smarty->assign('precio', 'Precio');
        $this->smarty->assign('talle', 'Talle');
        $this->smarty->assign('editar', 'Editar');
        $this->smarty->assign('id', $id);
        $this->smarty->assign('producto', $producto);
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->display('editar_producto.tpl');
    }

    function assign($productos, $marcas) {
        $this->smarty->assign('productos', $productos);
        $this->smarty->assign('marcas', $marcas); 
    }


}
