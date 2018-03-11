<?php
require_once './autoload.php';

$productos = ProductoRepository::listar();
//var_dump($productos);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <?php require_once './includes/resources.php';?>
        
        <script>
            $(function(){
                $('.colorbox').colorbox({
                    photo: true
                });
                
                $('.colorbox-mostrar').colorbox();
            });
            
            function eliminar(id){
                bootbox.confirm({
                    message: '¿Esta seguro que desea eliminar el producto?',
                    buttons: {
                        confirm: {
                            label: 'Eliminar',
                            className: 'btn-danger'
                        },
                        cancel: {
                            label: 'Cancelar',
                            className: 'btn-default'
                        }
                    },
                    callback: function (result) {
                        if(result){
                            window.location.href = 'productos-eliminar.php?id=' + id
                        }
                    }
                })
            }
        </script>   
        
    </head>
    <body>
        
        <?php require_once './includes/header.php';?>

        <div class="container-fluid main">
            
            <div class="page-header">
                <h1>Mantenimiento de Productos</h1>
            </div>
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Listado de Productos</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>CATEGORÍA</th>
                            <th>MODELO</th>
                            <th>PRECIO</th>
                            <th>IMAGEN</th>
                            <th>ESTADO</th>
                            <th width="50"></th>
                            <th width="50"></th>
                            <th width="50"></th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($productos as $producto){?>
                        <tr>
                            <td><?=$producto->id?></td>
                            <td><?=$producto->categorias_nombre?></td>
                            <td><?=$producto->nombre?></td>
                            <td><?=$producto->getPrecio()?></td>
                            <td><a href="productos-imagen.php?id=<?=$producto->id?>" class="colorbox" target="_blank"><img src="productos-imagen.php?id=<?=$producto->id?>" height="64"/></a></td>
                            <td><?=$producto->estado?></td>
                            <td><a href="productos-mostrar.php?id=<?=$producto->id?>" class="btn btn-info btn-sm colorbox-mostrar"><i class="glyphicon glyphicon-eye-open"></i> Mostrar</a></td>
                            <td><a href="#" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil"></i> Editar</a></td>
                            <td><a href="javascript:void(0)" onclick="eliminar(<?=$producto->id?>)" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Eliminar</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="panel-footer">
                    <a href="productos-nuevo.php" class="btn btn-success btn-sm"><i class="glyphicon glyphicon-plus"></i> Nuevo</a>
                </div>
            </div>
            
        </div>
        
        <?php require_once './includes/footer.php';?>
        
    </body>
</html>