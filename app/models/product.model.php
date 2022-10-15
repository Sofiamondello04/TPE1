<?php

class ProductModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_pototito;charset=utf8', 'root', 'root');
    }

    public function getAllProducts() {
        $query = $this->db->prepare("SELECT * FROM producto INNER JOIN marca ON producto.id_marca = marca.id_m");
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_OBJ); 
        return $productos;
    }

    public function insertProduct($nombre, $precio, $talle, $id_marca) {
        $query = $this->db->prepare("INSERT INTO producto (nombre, precio, talle, id_marca) VALUES (?, ?, ?, ?)");
        $query->execute([$nombre, $precio, $talle, $id_marca]);

        return $this->db->lastInsertId();
    }

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

    function getProductsOfBrand($id_marca) {
        $query= $this->db->prepare("SELECT * FROM producto INNER JOIN marca ON producto.id_marca = marca.id_m WHERE id_marca= ?");
        $query-> execute([$id_marca]);
        $products= $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    public function updateP($productoE) { 
        $query = $this->db->prepare('UPDATE producto SET nombre= ?, talle= ?, precio= ?,  id_marca= ? WHERE id = ?');  
        $query->execute([$productoE->nombreE, $productoE->talleE, $productoE->precioE,  $productoE->id_marcaE, $productoE->id]);      
    }
}
