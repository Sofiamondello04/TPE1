<?php
require_once './libs-smarty/libs/Smarty.class.php';

class ProductView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showProducts($productos) {
        $this->smarty->assign('count', count($productos)); //VER SI LA USO
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('tabla_productos.tpl');
       
    }

   

   /* function showAddProduct($marcas, $productos) {
        $this->smarty->assign('titulo', 'Agregar producto');
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('agregar_producto.tpl');
    }*/

    function showFormEdit($id, $producto, $marcas) {
        $this->smarty->assign('titulo', 'Editar producto');
        $this->smarty->assign('id', $id);
        $this->smarty->assign('producto', $producto);
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->display('editar_producto.tpl');
    }
}
