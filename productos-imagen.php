<?php
require_once './autoload.php';

$id = $_GET['id'];

$producto = ProductoRepository::obtener($id);

$filename = Constantes::RUTA_IMAGENES . $producto->imagen_nombre;

header("Content-type: ".$producto->imagen_tipo); // o usar $producto->imagen_tipo
header("Content-Length: ".$producto->imagen_tamanio); // o usar $producto->imagen_tamanio
header("Content-Disposition: inline; filename=".$producto->imagen_nombre); 

echo file_get_contents($filename);