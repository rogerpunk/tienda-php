<?php
require_once './autoload.php';

$pdo1 = Conexion::getConexion();
var_dump($pdo1);

/// ...

$pdo2 = Conexion::getConexion();
var_dump($pdo2);

/// ...

$pdo3 = Conexion::getConexion();
var_dump($pdo3);

/// ...

$pdo4 = Conexion::getConexion();
var_dump($pdo4);