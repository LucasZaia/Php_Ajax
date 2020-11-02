<?php
 
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: OPTIONS, GET, PUT, POST, DELETE, PATCH');

    require 'texto.php';

    $tex = new Texto();
    

    $obj = file_get_contents("php://input");
    $obj = json_decode($obj);

    $tex->setNome($obj->name);

    if($tex->TextCad()){
        header('Content-Type: application/json; charset=utf-8');
        header('Access-Control-Allow-Origin: *');
        echo json_encode(array('msg' => "Sucesso ao Inserir"));
    }
    else{
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: text/html; charset=utf-8',true,600);
        die("Falha ao Inserir");
    }

   
        
   
   

    
?>