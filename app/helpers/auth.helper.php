<?php

class AuthHelper {
    /*Verifica que el usuario este logueado y si no lo esta lo redirige al login.**/

    public function checkLoggedIn(){
        session_start();
        if (!isset($_SESSION['IS_LOGGED'])) {
            header("Location: " . BASE_URL . 'login');
            die();
        }
    }

}