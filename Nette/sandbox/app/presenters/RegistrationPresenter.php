<?php

use Nette\Application\UI\Form;

/**
 * Registration presenter.
 */
class RegistrationPresenter extends BasePresenter {
    
        protected function createComponentTopCars() {
        return new Todo\TopCarsControl();
    }

}