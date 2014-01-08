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
        
        $models = $this->brandsRepository->getModel($value);
        $modely = '<option>Vyberte model</option>';
        
        foreach ($models as $model) {
            $modely = $modely . '<option value="' . $model->id . '">' . $model->model . '</option>';
        }
        
        die($modely);
    }

    protected function createComponentTopCars() {
        return new Todo\TopCarsControl();
    }

    protected function createComponentNewSearchForm() {

        $strings = $this->brandsRepository->getStrings();
        
        foreach ($strings as $item){
            if($item->category == 0){
                $region[$item->id] = $item->name;
            }
            else if($item->category == 1){
                $gas[$item->id] = $item->name;
            }
            else{
                $gear[$item->id] = $item->name;
            }
        }
        
        $years = array();
        for ($i = 2013; $i >= 1970; $i--) {
            array_push($years, $i);
        }
        $price = array(500,1000,2000,3000,4000,5000,6000,7000,8000,9000,10000,12000,14000,16000,18000,20000,25000,30000,35000,40000,45000,50000,750000,100000,125000,150000,175000,200000);
        $brands = $this->brandsRepository->getBrands();
        foreach ($brands as $brand) {
            $pole[$brand->ID] = $brand->name;
        }
        
        $form = new Form();
        $form->setMethod('GET');

        $form->addSelect('brand', 'Značka:')
                ->setItems($pole, TRUE)
                ->setAttribute('class', 'ajax')
                ->setPrompt('Vyberte značku auta');
        $form->addSelect('model', 'Model:')
                ->setDisabled();
        $form->addSelect('yearfrom', 'Rok výroby:')
                ->setItems($years, FALSE)
                ->setPrompt('od');
        $form->addSelect('yearto', '')
                ->setItems($years, FALSE)
                ->setPrompt('do');
        $form->addSelect('gas', 'Palivo:')
                ->setItems($gas, TRUE)
                ->setPrompt('Vyberte palivo');
        $form->addSelect('gear', 'Prevodovka:')
                ->setItems($gear, TRUE)
                ->setPrompt('Vyberte typ prevodovky');
        $form->addSelect('pricefrom', 'Cena:')
                ->setPrompt('od')
                ->setItems($price);
        $form->addSelect('priceto', '')
                ->setPrompt('do')
                ->setItems($price);
        $form->addSelect('region', 'Kraj:')
                ->setPrompt('Vyberte kraj')
                ->setItems($region, TRUE);


        $form->addSubmit('search', 'Hľadať');
        $form->onSuccess[] = $this->newSearchFormSubmitted;

        return $form;
    }

    public function newSearchFormSubmitted(Form $form) {
        $value = $this->getSession('values');
        $value->pole = $form->getHttpData();
        $this->redirect('Cars:Show', 1);
    }

}
