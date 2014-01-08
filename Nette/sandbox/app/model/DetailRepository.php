<?php

namespace Todo;

use Nette;

class DetailRepository extends Repository {

    public function getData($id) {
        return $this->connection->query('SELECT * FROM cars WHERE id=' . $id . ' LIMIT 1;');
    }

    public function getBrandName($id) {
        return $this->connection->query('SELECT name FROM brands WHERE ID=' . $id);
    }

    public function getModelName($id) {
        return $this->connection->query('SELECT model FROM models WHERE id=' . $id);
    }

    public function getStringName($id) {
        return $this->connection->query('SELECT name FROM strings WHERE id=' . $id);
    }

    public function getImagesSrc($id) {
        return $this->connection->query('SELECT src FROM images WHERE id_car=' . $id);
    }

    public function getSecData($id) {
        return $this->connection->query('SELECT properties.name, properties.category FROM properties
                                         JOIN cars_properties ON properties.id=cars_properties.id_prop
                                          WHERE cars_properties.id_car=' . $id . ' AND properties.category=0;');
    }
    
    public function getOtherData($id) {
        return $this->connection->query('SELECT properties.name, properties.category FROM properties
                                         JOIN cars_properties ON properties.id=cars_properties.id_prop
                                          WHERE cars_properties.id_car=' . $id . ' AND properties.category=1;');
    }

}
