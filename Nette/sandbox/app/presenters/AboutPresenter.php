<?php

/**
 * About presenter.
 */
class AboutPresenter extends BasePresenter {

    private $carsRepository;

    protected function createComponentTopCars() {
        return new Todo\TopCarsControl($this->carsRepository);
    }

    public function inject(Todo\CarsRepository $carsRepository) {
        $this->carsRepository = $carsRepository;
    }

}
