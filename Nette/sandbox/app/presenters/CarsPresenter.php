<?php



/**
 * Cars presenter.
 */
class CarsPresenter extends BasePresenter {
    
     protected function startup() {
        parent:: startup();
    }
    
    public function actionDefault(){
        
    }

    public function renderDefault() {
        $this->template->anyVariable = 'any value';
    }
    
    public function actionShow($value){
        
    }
    
    protected function createComponentTopCars() {

        return new Todo\TopCarsControl();
    }

    
    public function renderShow(){
    
    }
    

}
