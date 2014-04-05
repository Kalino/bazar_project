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

}
