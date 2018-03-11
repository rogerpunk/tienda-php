<?php

spl_autoload_register(function ($class) {
    
    $dirs = array(
        'model',     // Objetos de transferencia de datos
        'repository',     // Objetos de acceso a datos
        'util',  // Clases utiles
    );
    
    foreach($dirs as $dir) {
        $filename = "classes/$dir/$class.php";
        if (file_exists($filename)) {
            require_once($filename);
            return;
        }
    }

});