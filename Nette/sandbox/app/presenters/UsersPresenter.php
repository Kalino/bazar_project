<?php

/**
 * Users presenter.
 */
class UsersPresenter extends BasePresenter {

    private $carsRepository;

    protected function createComponentTopCars() {
        return new Todo\TopCarsControl($this->carsRepository);
    }

    public function inject(Todo\CarsRepository $carsRepository) {
        $this->carsRepository = $carsRepository;
    }
    
    public function actionDefault(){
        if(!$this->user->isLoggedIn() || $this->user->identity->role != 'admin'){
            $this->setView('none');
        }else{
            $this->template->users = $this->carsRepository->getUsers()->fetchAll();
        }
    }

}
