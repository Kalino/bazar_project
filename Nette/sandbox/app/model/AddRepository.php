<?php

namespace Todo;

use Nette;

class AddRepository extends Repository {

    public function getBrandsWithModels() {
        return $this->connection->query("SELECT b.name, m.id, m.model
                                        FROM brands b
INNER JOIN models m ON(b.ID = m.brand) ORDER BY b.name, m.model;");
    }

    public function getStrings() {
        return $this->connection->query("SELECT * FROM strings;");
    }

    public function getProperties() {
        return $this->connection->query("SELECT * FROM properties;");
    }

    public function insertBasicValues($pole) {
        $this->connection->query("INSERT INTO cars", $pole);
        return $this->connection->query("SELECT max(id) as id FROM cars;");
    }

    public function getBrandFromModel($id) {
        return $this->connection->query("SELECT brand FROM models WHERE id=" . $id . ";");
    }

    public function updateMainImage($name, $car_id) {
        $this->connection->query("UPDATE cars SET main_image='" . $name . "' WHERE id=" . $car_id . ";");
    }

    public function insertOtherImages($name, $car_id) {
        $this->connection->query("INSERT INTO images (id_car, src) VALUES (" . $car_id . ",'" . $name . "');");
    }

    public function insertProperties($id, $car_id){
        $this->connection->query("INSERT INTO cars_properties (id_car, id_prop) VALUES(" . $car_id . "," . $id . ");");
    }
    
    public function getInzerat($id){
       return  $this->connection->query("SELECT * FROM cars WHERE id = " . $id . ";")->fetch();
    }
    
    public function getInzeratID($id){
       return  $this->connection->query("SELECT id FROM cars WHERE id = " . $id . ";");
    }
    
    public function getCarProperties($id){
        return $this->connection->query("SELECT id_prop FROM cars_properties WHERE id_car = " . $id . ";")->fetchAll();
    }
    
    public function updateBasicValues($id, $pole) {
        $this->connection->table('cars')->where($id)->update($pole);
    }
    
    public function removeProperties($id){
        $this->connection->query("DELETE FROM cars_properties WHERE id_car = " . $id . ";");
    }
}
