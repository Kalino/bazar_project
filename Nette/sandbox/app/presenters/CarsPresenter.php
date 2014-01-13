<?php

/**
 * Cars presenter.
 */
class CarsPresenter extends BasePresenter {

    private $carsRepository;

    protected function startup() {
        parent:: startup();
    }

    public function inject(Todo\CarsRepository $carsRepository) {
        $this->carsRepository = $carsRepository;
    }

    public function actionDefault() {
        $this->actionShow();
    }

    public function actionShow($id = 1) {
        $values = $this->getSession('values');
        $sql = 'SELECT * FROM cars WHERE';
        if (isset($values->pole['brand']))
            if ($values->pole['brand'] != NULL)
                $sql = $sql . ' brand=' . htmlspecialchars(addslashes($values->pole['brand'])) . ' AND';
        if (isset($values->pole['model']))
            if ($values->pole['model'] != NULL)
                if (is_numeric($values->pole['model']))
                    $sql = $sql . ' model=' . htmlspecialchars(addslashes($values->pole['model'])) . ' AND';
        if (isset($values->pole['yearfrom']))
            if ($values->pole['yearfrom'] != NULL)
                $sql = $sql . ' year>=' . htmlspecialchars(addslashes($values->pole['yearfrom'])) . ' AND';
        if (isset($values->pole['yearto']))
            if ($values->pole['yearto'] != NULL)
                $sql = $sql . ' year<=' . htmlspecialchars(addslashes($values->pole['yearto'])) . ' AND';
        if (isset($values->pole['gas']))
            if ($values->pole['gas'] != NULL)
                $sql = $sql . ' gas=' . htmlspecialchars(addslashes($values->pole['gas'])) . ' AND';
        if (isset($values->pole['gear']))
            if ($values->pole['gear'] != NULL)
                $sql = $sql . ' gear=' . htmlspecialchars(addslashes($values->pole['gear'])) . ' AND';
        if (isset($values->pole['pricefrom']))
            if ($values->pole['pricefrom'] != NULL)
                $sql = $sql . ' price>=' . htmlspecialchars(addslashes($values->pole['pricefrom'])) . ' AND';
        if (isset($values->pole['priceto']))
            if ($values->pole['priceto'] != NULL)
                $sql = $sql . ' price<=' . htmlspecialchars(addslashes($values->pole['priceto'])) . ' AND';
        if (isset($values->pole['region']))
            if ($values->pole['region'] != NULL)
                $sql = $sql . ' region=' . htmlspecialchars(addslashes($values->pole['region']));
        if (substr($sql, -3) == 'AND') {
            $sql = substr($sql, 0, -3);
        }
        if (substr($sql, -5) == 'WHERE') {
            $sql = substr($sql, 0, -5);
        }
        $sql = $sql . ';';

        $cars = $this->carsRepository->getCarsShort($sql);
        if ($cars->getRowCount() == 0) {
            $this->setView('none');
        } else {
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
            $this->setView('default');
        }
    }

    public function renderDefault() {
        $this->template->anyVariable = 'any value';
    }

    protected function createComponentTopCars() {

        return new Todo\TopCarsControl();
    }

    public function renderShow() {
        
    }

}
