<?php

require "texto.php";

$tex = new Texto();


$busca = $tex->ConsultTex();

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

foreach($busca as $busc){
    
   $busc['nome'];
    
}


echo json_encode(array('resultado' => $busc['nome']));



?>