<?php

    require 'Conection.php';

    class Texto{
        private $nome;



       public function getNome(){
           return $this->nome;
       }

       public function setNome($nome){
            $this->nome = $nome;
       }

       public function TextCad(){
          $con = new Conection();
          $cx = "INSERT INTO nomes (nome) values ('$this->nome');";
          return $con->inserir($cx);
       }
       public function ConsultTex(){
           $con = new Conection();
           $cx = "SELECT * FROM nomes;";
           return $con->consultar($cx);
       }
    }

?>