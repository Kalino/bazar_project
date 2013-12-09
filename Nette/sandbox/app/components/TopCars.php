<?php

namespace Todo;

use Nette;

class TopCarsControl extends Nette\Application\UI\Control {

    private $selected;

    public function __construct() {
        parent::__construct(); // vždy je potřeba volat rodičovský konstruktor
    }

    public function render() {
        $this->template->setFile(__DIR__ . '/TopCars.latte');
        $this->template->render();
    }

}
