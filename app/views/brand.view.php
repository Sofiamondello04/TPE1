<?php
require_once './libs-smarty/libs/Smarty.class.php';

class BrandView {
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function showBrandsAdm($marcas) {
        // asigno variables al tpl smarty
        $this->smarty->assign('count', count($marcas)); //VER SI LA USO
        $this->smarty->assign('marcas', $marcas);
        

        // mostrar el tpl
        $this->smarty->display('agregar_marca.tpl');
        $this->smarty->display('tabla_marcas.tpl');
    }

    function showFormAddBrand() {
        $this->smarty->assign('titulo', 'Agregar marca');
        $this->smarty->display('agregar_marca.tpl');
    }

    function showFormEditBrand($id, $marca) {
        $this->smarty->assign('titulo', 'Editar marca');
        $this->smarty->assign('id', $id);
        $this->smarty->assign('marca', $marca);
        $this->smarty->display('editar_marca.tpl');
    }
}
