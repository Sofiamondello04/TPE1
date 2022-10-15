<?php

class BrandModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_pototito;charset=utf8', 'root', 'root');
    }

    //Devuelve la tabla de marcas entera.
     
    public function getAllBrands() {
       
        $query = $this->db->prepare("SELECT * FROM marca");
        $query->execute();
        $marcas = $query->fetchAll(PDO::FETCH_OBJ); 
        return $marcas;
    }

    // Inserta un producto en la base de datos.
   
    public function insertBrand($nombre) {
        $query = $this->db->prepare("INSERT INTO marca (nombre_marca) VALUES (?)");
        $query->execute([$nombre]);

        return $this->db->lastInsertId();
    }


    // Elimina una marca de la tabla segun su id.
    
    function deleteBrandById($id) {
        $query = $this->db->prepare('DELETE FROM marca WHERE id_m = ?');
        $query->execute([$id]);
    }

    function getBrand($id) {
        $query= $this->db->prepare("SELECT * FROM marca WHERE id_m= ?");
        $query-> execute([$id]);
        $marca= $query->fetch(PDO::FETCH_OBJ);
        return $marca;
    }

    public function updateB($marcaE) { 
       
        $query = $this->db->prepare('UPDATE marca SET nombre_marca= ? WHERE id_m = ?'); 
        $query->execute([$marcaE->nombre_marcaE, $marcaE->id]);
 
    }
}
