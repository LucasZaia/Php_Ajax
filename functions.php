<?php
 
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: OPTIONS, GET, PUT, POST, DELETE, PATCH');

    require 'texto.php';

    $tex = new Texto();

    $obj = file_get_contents("php://input");
    $obj = json_decode($obj);

    $tex->setNome($obj->name);

    if($tex->TextCad()){
        
    }
        
   

    
?>