<?php
    define('HOST', 'localhost');
    define('DBNAME', 'teste');
    define('USERNAME', 'root');
    define('PASSWORD', '');

    class Conection {
        public $lastInsertId;
        private function Conectar(){
            return new PDO('mysql:host='.HOST.';dbname='.DBNAME, USERNAME, PASSWORD);              
        }
        public function consultar($cmdSql) {
            $result = $this->Conectar()->prepare($cmdSql);
            $result->execute();        
            $countRows = $result->rowCount();            
            if ($countRows){ 
                return $result->fetchAll();         
            }
            return FALSE;          
        }   
        public function deletar($cmdSql) {
            return $this->Conectar()->exec($cmdSql);        
        } 
        public function alterar($cmdSql) {   
            return $this->Conectar()->exec($cmdSql);       
        }
        public function inserir($cmdSql) { 
            $cx = $this->Conectar();
            $result = $cx->prepare($cmdSql)->execute();
            if($result){
                $last_id = $cx->prepare('SELECT LAST_INSERT_ID() as id');
                $last_id->execute();
                $this->lastInsertId = $last_id->fetchAll()[0]['id'];
            }          
            return $result;
        }    
    }
?>