<?php

namespace Todo;

use Nette;

class BrandsRepository extends Repository {

    public function getBrands() {
        //return $this->getTable()->select(array('ID', 'name'));
        return $this->connection->query('SELECT ID,name FROM brands ORDER BY name ASC;');
    }
    
    public function getBrandsWithImages() {
        //return $this->getTable()->select(array('ID', 'name'));
        return $this->connection->query('SELECT ID,name,src FROM brands ORDER BY name ASC;');
    }

}
