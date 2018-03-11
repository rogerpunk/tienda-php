<?php
class ProductoRepository {
    
    public static function listar() {
        
        $pdo = Conexion::getConexion();
        
        $sql = "select p.id, p.categorias_id, c.nombre as categorias_nombre, p.nombre, precio, stock, imagen_nombre, creado, estado
                from productos p
                inner join categorias c on c.id=p.categorias_id
                order by creado desc";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        
        $lista = [];
        while($objeto = $stmt->fetchObject('Producto')){
            $lista[] = $objeto;
        }
        
        return $lista;
    }
    
    public static function registrar(Producto $producto) {
        
        $pdo = Conexion::getConexion();
        
        $sql = "insert into productos (categorias_id, nombre, descripcion, precio, stock, imagen_nombre, imagen_tipo, imagen_tamanio, creado, estado)
                values (:categorias_id, :nombre, :descripcion, :precio, :stock, :imagen_nombre, :imagen_tipo, :imagen_tamanio, :creado, :estado)";
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':categorias_id', $producto->categorias_id);
        $stmt->bindParam(':nombre', $producto->nombre);
        $stmt->bindParam(':descripcion', $producto->descripcion);
        $stmt->bindParam(':precio', $producto->precio);
        $stmt->bindParam(':stock', $producto->stock);
        $stmt->bindParam(':imagen_nombre', $producto->imagen_nombre);
        $stmt->bindParam(':imagen_tipo', $producto->imagen_tipo);
        $stmt->bindParam(':imagen_tamanio', $producto->imagen_tamanio);
        $stmt->bindParam(':creado', $producto->creado);
        $stmt->bindParam(':estado', $producto->estado);
        $stmt->execute();
        
    }
    
    public static function obtener($id) {
        
        $pdo = Conexion::getConexion();
        
        $sql = "select p.id, p.categorias_id, c.nombre as categorias_nombre, p.nombre, p.descripcion, p.precio, p.stock, p.imagen_nombre, p.imagen_tamanio, p.imagen_tipo, p.creado, p.estado
                from productos p
                inner join categorias c on c.id=p.categorias_id
                where p.id=:id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        
        if($objeto = $stmt->fetchObject('Producto')){
            return $objeto;
        }
        
        return NULL;
    }
    
    public static function eliminar($id) {
        
        $pdo = Conexion::getConexion();
        
        $sql = "delete from productos where id=:id";
        
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        
    }
    
}
