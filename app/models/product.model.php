<?php

class ProductModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_pototito;charset=utf8', 'root', 'root');
    }

    //Devuelve la tabla de productos entera y la une a la de marcas.
     
    public function getAllProducts() {
       
        $query = $this->db->prepare("SELECT * FROM producto INNER JOIN marca ON producto.id_marca = marca.id_m");
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_OBJ); 
        return $productos;
    }

    // Inserta un producto en la base de datos.
   
    public function insertProduct($nombre, $precio, $talle, $id_marca) {
        $query = $this->db->prepare("INSERT INTO producto (nombre, precio, talle, id_marca) VALUES (?, ?, ?, ?)");
        $query->execute([$nombre, $precio, $talle, $id_marca]);

        return $this->db->lastInsertId();
    }


    // Elimina un producto de la tabla segun su id.
    
    function deleteProductById($id) {
        $query = $this->db->prepare('DELETE FROM producto WHERE id = ?');
        $query->execute([$id]);
    }

    function getProduct($id) {
        $query= $this->db->prepare("SELECT * FROM producto INNER JOIN marca ON producto.id_marca = marca.id_m WHERE id= ?");
        $query-> execute([$id]);
        $product= $query->fetch(PDO::FETCH_OBJ);
        return $product;
    }

    public function updateP($productoE) { 
        echo "entre a la db";
        $query = $this->db->prepare('UPDATE producto SET nombre= ?, talle= ?, precio= ?,  id_marca= ? WHERE id = ?'); 
        echo "modifica datos?";
        $query->execute([$productoE->nombreE, $productoE->talleE, $productoE->precioE,  $productoE->id_marcaE, $productoE->id]);
        echo "realiza el execute";
        
    }
}
