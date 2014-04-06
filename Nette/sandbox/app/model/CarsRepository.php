<?php

namespace Todo;

use Nette;

class CarsRepository extends Repository {

        public function getCarsShort($sql){
            return $this->connection->query($sql);
        }
        
        public function getBrands(){
            return $this->connection->query('SELECT ID,name FROM brands;');
        }
        
         public function getModels(){
            return $this->connection->query('SELECT id,model FROM models;');
        }
        
         public function getStrings(){
            return $this->connection->query('SELECT id,name FROM strings;');
        }
        
        public function getOwnedCars($id){
            return $this->connection->query("SELECT * FROM cars WHERE user=" . $id . ";");
        }
        
        public function getNewCars(){
            return $this->connection->query("SELECT * FROM cars ORDER BY insert_time DESC LIMIT 3;");
        }

}
