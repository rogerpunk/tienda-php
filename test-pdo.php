<?php
require_once './classes/model/Producto.php';
try{
    $id = 3;

    //conectarnos a la bd
    $pdo = new PDO('mysql:host=localhost;dbname=tienda', 'root', '');

    $sql = "SELECT * FROM productos where id= :id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    $lista = [];
    while($objeto = $stmt->fetchObject('Producto')){
        $lista[] = $objeto;
    }

    // en otro archivo ..
    foreach($lista as $objeto){
        echo $objeto->nombre . '<br/>';
        echo $objeto->precio  . '<br/>';
        echo $objeto->getPrecio() . '<br/>';
    }

    var_dump($lista);

} catch (Exception $e){
    echo "Error en PDO: " . $e->getMessage();
}