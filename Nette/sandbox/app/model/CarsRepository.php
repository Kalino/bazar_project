<?php

namespace Todo;

use Nette;

class CarsRepository extends Repository {

    public function getCarsShort($sql) {
        return $this->connection->query($sql);
    }

    public function getBrands() {
        return $this->connection->query('SELECT ID,name FROM brands;');
    }

    public function getModels() {
        return $this->connection->query('SELECT id,model FROM models;');
    }

    public function getStrings() {
        return $this->connection->query('SELECT id,name FROM strings;');
    }

    public function getOwnedCars($id) {
        return $this->connection->query("SELECT * FROM cars WHERE user=" . $id . ";");
    }

    public function getNewCars() {
        return $this->connection->query("SELECT * FROM cars ORDER BY insert_time DESC LIMIT 3;");
    }

    public function getImages($id) {
        return $this->connection->query("SELECT src FROM images WHERE id_car = " . $id . ";");
    }

    public function getCountofCars($idInzeratu, $idUzivatela) {
        return $this->connection->query("SELECT id FROM cars WHERE id = " . $idInzeratu . " AND user = " . $idUzivatela . ";");
    }

    public function deleteCar($id) {
        $this->connection->query("DELETE FROM cars WHERE id = " . $id . ";");
        $this->connection->query("DELETE FROM cars_properties WHERE id_car = " . $id . ";");
        $this->connection->query("DELETE FROM images WHERE id_car = " . $id . ";");
    }

    public function getUsers() {
        return $this->connection->query("SELECT u.username name, count(c.user) pocet, u.id id FROM users u
LEFT JOIN cars c ON c.user = u.id
GROUP BY u.id ORDER BY u.username;
");
    }

}
