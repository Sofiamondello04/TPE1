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
        $this->smarty->assign('titulo', 'Agregar marca');

        // mostrar el tpl
        $this->smarty->display('agregar_marca.tpl');
        $this->smarty->display('tabla_marcas.tpl');
    }

    function showFormEditBrand($id, $marca) {
        $this->smarty->assign('titulo', 'Editar marca');
        $this->smarty->assign('id', $id);
        $this->smarty->assign('marca', $marca);
        $this->smarty->display('editar_marca.tpl');
    }
}
