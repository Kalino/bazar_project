<?php


/**
 * About presenter.
 */
class AboutPresenter extends BasePresenter {
    
        protected function createComponentTopCars() {
        return new Todo\TopCarsControl();
    }

}