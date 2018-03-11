<?php
require_once './autoload.php';

$id = $_GET['id'];
$producto = ProductoRepository::obtener($id);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <?php require_once './includes/resources.php';?>
        
    </head>
    <body>
        
        <?php // require_once './includes/header.php';?>

        <div class="container-fluid main">
            
            <div class="page-header">
                <h1><?=$producto->categorias_nombre?> <small><?=$producto->nombre?></small></h1>
            </div>
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Información del producto</h3>
                </div>
                <div class="panel-body">
                    
                    <div class="row">
                        <div class="col-md-4">
                            <img src="productos-imagen.php?id=<?=$producto->id?>" class="img-responsive"/>
                        </div>
                        <div class="col-md-8">
                            
                            <table class="table">
                                <tr>
                                    <th>Categoría</th>
                                    <td><?=$producto->categorias_nombre?></td>
                                </tr>
                                <tr>
                                    <th>Nombre</th>
                                    <td><?=$producto->nombre?></td>
                                </tr>
                                <tr>
                                    <th>Precio</th>
                                    <td><?=$producto->getPrecio()?></td>
                                </tr>
                                <tr>
                                    <th>Registrado</th>
                                    <td><?=$producto->creado?></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><?=$producto->descripcion?></td>
                                </tr>
                            </table>
                            
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
        <?php // require_once './includes/footer.php';?>
        
    </body>
</html>