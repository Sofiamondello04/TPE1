<?php

require_once './libs-smarty/libs/Smarty.class.php';

class AuthView {
    private $smarty;
    

    public function __construct(){
        $this->smarty = new Smarty();
    }

    function showFormLogin($error = null) {
        $this->smarty->assign("error", $error);
        $this->smarty->assign('email', 'Email');
        $this->smarty->assign('password', 'Password');
        $this->smarty->assign('entrar', 'Entrar');
        $this->smarty->display('formLogin.tpl');
    }

    function assign($productos, $marcas) {
        $this->smarty->assign('productos', $productos);
        $this->smarty->assign('marcas', $marcas); 
    }
}