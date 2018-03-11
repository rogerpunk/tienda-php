<?php
class CategoriaRepository {
    
    public static function listar() {
        
        // Obtener la conexion
        $pdo = Conexion::getConexion();
        
        // Crear el Statement
        $sql = "select * from categorias order by nombre";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        
        $lista = [];
        while($objeto = $stmt->fetchObject('Categoria')){
            $lista[] = $objeto;
        }
        
        return $lista;
    }
    
}
