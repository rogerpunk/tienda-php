<?php
require_once './autoload.php';

// validaciones
if(!isset($_POST['categorias_id']) || '' === $_POST['categorias_id'])
    die('Categoría inválida');

if(!isset($_POST['nombre']) || strlen($_POST['nombre']) <= 3)
    die('Modelo debe ser mayor a 3 caracteres');

if($_FILES['imagen']['error']==0 && $_FILES['imagen']['size'] > 1048576)
        die('Archivo demasiado grande ( > 1MiB)');

$categorias_id = $_POST['categorias_id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$descripcion = $_POST['descripcion'];
$estado = $_POST['estado'];

$producto = new Producto();
$producto->categorias_id = $categorias_id;
$producto->nombre = $nombre;
$producto->precio = $precio;
$producto->stock = $stock;
$producto->descripcion = $descripcion;
$producto->creado = date('Y-m-d H:i:s'); // http://php.net/manual/es/function.date.php
$producto->estado = $estado;

if($_FILES['imagen']['error']==0){
    
    $producto->imagen_nombre = $_FILES['imagen']['name'];
    $producto->imagen_tipo  = $_FILES['imagen']['type'];
    $producto->imagen_tamanio = $_FILES['imagen']['size'];
    
    if(!file_exists(Constantes::RUTA_IMAGENES) ){
        mkdir(Constantes::RUTA_IMAGENES, '0777', true);
    }
    
    $destino = Constantes::RUTA_IMAGENES . $_FILES['imagen']['name'];
    
    move_uploaded_file($_FILES['imagen']['tmp_name'], $destino);
    
}

ProductoRepository::registrar($producto);

Flash::success('Registro guardado satisfactoriamente');

if(empty(error_get_last() ))
    header('location: productos-listar.php');