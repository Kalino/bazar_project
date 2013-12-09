<?php

use Nette\Application\UI\Form;

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter {

    private $brandsRepository;
    
    protected function startup() {
        parent:: startup();
    }

    public function inject(Todo\BrandsRepository $brandsRepository) {
        $this->brandsRepository = $brandsRepository;
    }

    public function actionDefault() {
        
    }

    public function renderDefault() {
        $this->template->pole = $brands = $this->brandsRepository->getBrandsWithImages();
    }

    public function handleModel($value) {
        die('<option>' . $value . '</option>'); 
    }

    protected function createComponentTopCars() {
        return new Todo\TopCarsControl();
    }

    protected function createComponentNewSearchForm() {

        $gas = array('Benzín', 'Diesel');
        $years = array();
        for ($i = 2013; $i >= 1970; $i--) {
            array_push($years, $i);
        }

        $brands = $this->brandsRepository->getBrands();
        foreach ($brands as $brand) {
            $pole[$brand->ID] = $brand->name;
        }

        $form = new Form();
        $form->addSelect('brand', 'Značka:')
                ->setItems($pole, TRUE)
                ->setAttribute('class', 'ajax');
        $form->addSelect('model', 'Model:');

        $form->addSelect('yearfrom', 'Rok výroby:')
                ->setItems($years, FALSE)
                ->setPrompt('od');
        $form->addSelect('yearto', '')
                ->setItems($years, FALSE)
                ->setPrompt('do');
        $form->addSelect('gas', 'Palivo:')
                ->setItems($gas, FALSE)
                ->setPrompt('Vyberte palivo');
        $form->addSelect('gear', 'Prevodovka:');
        $form->addSelect('price', 'Cena:');


        $form->addSubmit('search', 'Hľadať');
        $form->onSuccess[] = $this->newSearchFormSubmitted;

        return $form;
    }

    public function newSearchFormSubmitted(Form $form) {
        $this->redirect('Cars:');
    }

}
