<?php
require_once './autoload.php';

$id = $_GET['id'];

$producto = ProductoRepository::obtener($id);

$filename = Constantes::RUTA_IMAGENES . $producto->imagen_nombre;

unlink($filename);

ProductoRepository::eliminar($id);

Flash::success('Registro eliminado satisfactoriamente');

if(empty(error_get_last()))
    header('location: productos-listar.php');