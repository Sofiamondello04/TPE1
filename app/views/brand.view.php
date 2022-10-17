<?php
require_once './libs-smarty/libs/Smarty.class.php';

class BrandView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }

    function showBrands($marcas) {
        $this->smarty->assign('nombre', 'Nombre');
        $this->smarty->assign('editar', 'Editar');
        $this->smarty->assign('borrar', 'Borrar');
        $this->smarty->assign('marcas', $marcas);
        $this->smarty->display('tabla_marcas.tpl');      
    }

    function showFormAddBrand() {
        $this->smarty->assign('titulo', 'Agregar marca');
        $this->smarty->assign('nombre', 'Nombre');
        $this->smarty->assign('guardar', 'Guardar');
        $this->smarty->display('agregar_marca.tpl');
    }

    function showFormEditBrand($id, $marca) {
        $this->smarty->assign('titulo', 'Editar marca');
        $this->smarty->assign('id', $id);
        $this->smarty->assign('nombre', 'Nombre');
        $this->smarty->assign('marca', $marca);
        $this->smarty->assign('editar', 'Editar');
        $this->smarty->display('editar_marca.tpl');
    }

    function assign($productos, $marcas) {
        $this->smarty->assign('productos', $productos);
        $this->smarty->assign('marcas', $marcas); 
    }
    
    function error () {
        $this->smarty->display('error.tpl');
    }
}
