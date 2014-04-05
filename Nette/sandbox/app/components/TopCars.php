<?php

namespace Todo;

use Nette;

class TopCarsControl extends Nette\Application\UI\Control {

    private $carsRepository;
    private $cars;

    public function __construct($carsRepository) {
        parent::__construct();
        $this->carsRepository = $carsRepository;
    }

    protected function startup() {
        parent:: startup();
    }

    public function action() {
        
    }

    public function render() {
        $cars = $this->carsRepository->getNewCars();
        $brands = $this->carsRepository->getBrands();
        $models = $this->carsRepository->getModels();
        $strings = $this->carsRepository->getStrings();

        foreach ($brands as $item) {
            $znacky[$item->ID] = $item->name;
        }

        foreach ($models as $item) {
            $modely[$item->id] = $item->model;
        }

        foreach ($strings as $item) {
            $stringy[$item->id] = $item->name;
        }

        $this->template->znacky = $znacky;
        $this->template->modely = $modely;
        $this->template->stringy = $stringy;
        $this->template->cars = $cars;
        $this->template->setFile(__DIR__ . '/TopCars.latte');
        $this->template->render();
    }

}
