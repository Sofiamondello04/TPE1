<?php

class UserModel {

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_pototito;charset=utf8', 'root', 'root');
    }

    public function getUserByEmail($email) {
        $query = $this->db->prepare("SELECT * FROM user WHERE email = ?");
        $query->execute([$email]);
        $usuario = $query->fetch(PDO::FETCH_OBJ);
        return $usuario;
        
    }
}