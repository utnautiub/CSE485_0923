<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    class QueryMySQL{
        private $pdo = null;
        public function Select(string $sql = null){
           if(!$sql) {
                return false;
           }
            $pdo = new PDO("mysql:host=localhost; port=3306; dbname=cse", "root", "buituantu");
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $numberRow = $stmt->rowCount();
           if($numberRow > 0){
            return $stmt->fetchAll();
           }
           return false;
        }   
        
        public function Delete(string $sql = null){
            if(!$sql) {
                 return false;
            }
             $pdo = new PDO("mysql:host=localhost; port=3306; dbname=cse", "root", "buituantu");
             $stmt = $pdo->prepare($sql);
             $stmt->execute();
             $numberRow = $stmt->rowCount();
            if($numberRow > 0){
             return $stmt->fetchAll();
            }
            return false;
         }   
    } 

?>