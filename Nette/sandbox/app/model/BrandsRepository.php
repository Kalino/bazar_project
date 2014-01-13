<?php

namespace Todo;

use Nette;

class BrandsRepository extends Repository {

    public function getBrands() {
        //return $this->getTable()->select(array('ID', 'name'));
        return $this->connection->query('SELECT ID,name FROM brands ORDER BY name ASC;');
    }
    
    public function getModels(){
        return $this->connection->query('SELECT id,model FROM models');
    }

    public function getBrandsWithImages() {
        //return $this->getTable()->order('name');
        return $this->connection->query('SELECT ID,name,src FROM brands ORDER BY name ASC;');
    }
    
    public function getBrand($id){
        $this->connection->query('SELECT brand FROM models WHERE id=' . $id);
    }

    public function getModel($value) {
        return $this->connection->query('SELECT id,model FROM models WHERE brand=' . $value . ';');
    }
    
    public function getStrings(){
        return $this->connection->query('SELECT id,name,category FROM strings ORDER BY name;');
    }

    public function getGasStrings() {
        return $this->connection->query('SELECT id,name FROM strings WHERE category=1;');
    }

    public function getGearStrings() {
        return $this->connection->query('SELECT id,name FROM strings WHERE category=2;');
    }
    
    public function getRegionStrings(){
        return $this->connection->query('SELECT id,name FROM strings WHERE category=0;');
    }

}
