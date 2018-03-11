<?php
class Conexion {
    
    private static $instance = NULL;
    
    public static function getConexion() {
        if(self::$instance == NULL){
            self::$instance = new PDO('mysql:host='.Constantes::DB_HOST.';dbname='.Constantes::DB_SCHEMA, Constantes::DB_USERNAME, Constantes::DB_PASSWORD);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
    
    private function __construct() {
        
    }
        
}
