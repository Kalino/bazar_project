<?php

/**
 * Add presenter.
 */
use Nette\Application\UI\Form;

class AddPresenter extends BasePresenter {

    private $carsRepository;
    private $addRepository;

    protected function createComponentTopCars() {
        return new Todo\TopCarsControl($this->carsRepository);
    }

    public function inject(Todo\AddRepository $addRepository, Todo\CarsRepository $carsRepository) {
        $this->carsRepository = $carsRepository;
        $this->addRepository = $addRepository;
    }

    public function actionDefault() {
        
    }

    public function renderDefault() {
        
    }

    protected function createComponentNewAddForm() {
        $brandsWithModels = $this->addRepository->getBrandsWithModels();
        #$pom_pole = array(array());
        foreach ($brandsWithModels as $prvok) {
            $znacka = $prvok['name'];
            $model = $prvok['model'];
            $id = $prvok['id'];
            $pom_pole[$znacka][$id] = $model;
        }
        $form = new Form();
        $form->addSelect('model', 'Značka a model auta', $pom_pole)
                ->setPrompt('Vyberte model auta')
                ->setRequired("Prosím, vyplňte všetky položky");

        $form->addText('name', 'Doplňujúci názov: ');
        $years = array();
        for ($i = 2014; $i >= 1970; $i--) {
            array_push($years, $i);
        }
        $form->addSelect('year', 'Rok výroby: ')
                ->setItems($years);
        $gas = array();
        $region = array();
        $gear = array();
        $table_strings = $this->addRepository->getStrings();
        foreach ($table_strings as $row){
            if($row->category == 0){
                $region[$row->id] = $row->name;
            }else if($row->category == 1){
                $gas[$row->id] = $row->name;
            }else if($row->category == 2){
                $gear[$row->id] = $row->name;
            }
        }
        $form->addSelect('gas', 'Palivo: ')
                ->setItems($gas)
                ->setPrompt('Vyberte palivo')
                ->setRequired();
        
        $form->addSelect('gear', 'Prevodovka: ')
                ->setItems($gear)
                ->setPrompt('Vyberte typ prevodovky')
                ->setRequired();
        
        $form->addSelect('region', 'Kraj: ')
                ->setItems($region)
                ->setPrompt('Vyberte kraj')
                ->setRequired();
        
        
        $form->addUpload('main_image', 'Hlavný obrázok')
                ->addRule(Form::IMAGE, 'Obrázok musí byť JPEG, PNG alebo GIF.')
                ->addRule(Form::MAX_FILE_SIZE, 'Maximálna veľkosť súboru je 10 MB.', 10 * 1024 * 1024 /* v bytech */);


        $form->addSubmit('add', 'Pridať inzerát');
        $form->onSuccess[] = $this->newAddFormSubmitted;

        return $form;
    }

    public function newAddFormSubmitted() {
        
    }

}
