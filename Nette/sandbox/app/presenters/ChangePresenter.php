<?php

/**
 * Change presenter.
 */
use Nette\Application\UI\Form;

class ChangePresenter extends BasePresenter {

    private $carsRepository;
    private $addRepository;
    private $id;

    protected function createComponentTopCars() {
        return new Todo\TopCarsControl($this->carsRepository);
    }

    public function inject(Todo\AddRepository $addRepository, Todo\CarsRepository $carsRepository) {
        $this->carsRepository = $carsRepository;
        $this->addRepository = $addRepository;
    }

    public function actionDefault() {
        if (!$this->user->isLoggedIn()) {
            $this->setView('none');
        }
        $this->actionUpdate(1);
    }

    public function actionUpdate($id = 1) {
        $pocet = $this->carsRepository->getCountofCars($id, $this->user->getId());
        if (!$this->user->isLoggedIn() || !($this->user->identity->role == 'admin' || $pocet->rowCount() == 1)) {
            $this->setView('none');
        } else {
            $this->id = $id;
            $this->setView('default');
        }
    }

    public function renderDefault() {
        
    }

    protected function createComponentNewChangeForm() {
        $brandsWithModels = $this->addRepository->getBrandsWithModels();
        foreach ($brandsWithModels as $prvok) {
            $znacka = $prvok['name'];
            $model = $prvok['model'];
            $id = $prvok['id'];
            $pom_pole[$znacka][$id] = $model;
        }
        $form = new Form();
        $form->addGroup();
        $form->addSelect('model', 'Značka a model auta', $pom_pole)
                ->setPrompt('Vyberte model auta')
                ->setRequired("Prosím, vyplňte všetky položky");

        $form->addText('name', 'Doplňujúci názov: ')
                ->setAttribute('title', "Sem vkladajte iba doplňujúci názov vozidla. Značka a model budú automaticky doplnené. Napr. ak ste si vybrali model Bmw rad 3, vy doplňte 320d.");
        $years = array();
        for ($i = 2014; $i >= 1970; $i--) {
            array_push($years, $i);
        }
        $form->addSelect('year', 'Rok výroby: ')
                ->setItems($years, FALSE)
                ->setPrompt('Vyberte rok výroby')
                ->setRequired();
        $gas = array();
        $region = array();
        $gear = array();
        $table_strings = $this->addRepository->getStrings();
        foreach ($table_strings as $row) {
            if ($row->category == 0) {
                $region[$row->id] = $row->name;
            } else if ($row->category == 1) {
                $gas[$row->id] = $row->name;
            } else if ($row->category == 2) {
                $gear[$row->id] = $row->name;
            }
        }
        $form->addText('kilometres', 'Najazdené kilometre(km): ')
                ->addRule(Form::PATTERN, 'Musí obsahovať iba číslice', '[0-9]*')
                ->setRequired("Prosím, vyplňte všetky položky");

        $form->addText('capacity', 'Objem motora: ')
                ->setRequired("Prosím, vyplňte všetky položky");

        $form->addText('power', 'Výkon motora(kW): ')
                ->addRule(Form::PATTERN, 'Musí obsahovať iba číslice', '[0-9]*')
                ->setRequired("Prosím, vyplňte všetky položky");

        $form->addSelect('gas', 'Palivo: ')
                ->setItems($gas)
                ->setPrompt('Vyberte palivo')
                ->setRequired("Prosím, vyplňte všetky položky");

        $form->addSelect('gear', 'Prevodovka: ')
                ->setItems($gear)
                ->setPrompt('Vyberte typ prevodovky')
                ->setRequired("Prosím, vyplňte všetky položky");

        $form->addSelect('region', 'Kraj: ')
                ->setItems($region)
                ->setPrompt('Vyberte kraj')
                ->setRequired("Prosím, vyplňte všetky položky");

        /* $form->addUpload('main_image', 'Hlavný obrázok')
          ->addRule(Form::IMAGE, 'Obrázok musí byť JPEG, PNG alebo GIF.')
          ->setRequired("Prosím, vyplňte všetky položky");

          $form->addGroup('Ostatné obrázky');
          for ($i = 0; $i < 10; $i++) {
          if ($i != 0) {
          $form->addUpload('other_images' . $i)
          ->setAttribute('style', 'display:none')
          ->setAttribute('class', 'hidden');
          } else {
          $form->addUpload('other_images' . $i)
          ->setAttribute('class', 'hidden');
          ;
          }
          } */

        $form->addGroup();
        $form->addText('price', 'Cena(€): ')
                ->addRule(Form::PATTERN, 'Musí obsahovať iba číslice', '[0-9]*')
                ->setRequired("Prosím, vyplňte všetky položky");

        $form->addText('phone', 'Telefónne číslo: ')
                ->addRule(Form::PATTERN, 'Musí obsahovať iba číslice', '[0-9]*')
                ->setRequired("Prosím, vyplňte všetky položky");

        $properties = $this->addRepository->getProperties();

        $vlastnosti = $this->addRepository->getCarProperties($this->id);
        $vlastnosti_pole = [];
        foreach ($vlastnosti as $item) {
            $vlastnosti_pole[$item->id_prop] = true;
        }
        $form->addGroup('Bezpečnostné prkvy');
        foreach ($properties as $row) {
            if ($row->category == 0) {
                if (isset($vlastnosti_pole[$row->id])) {
                    $form->addCheckbox('check' . $row->id, $row->name)
                            ->setDefaultValue(true);
                } else {
                    $form->addCheckbox('check' . $row->id, $row->name);
                }
            }
        }

        $properties = $this->addRepository->getProperties();
        $form->addGroup('Výbava');
        foreach ($properties as $row) {
            if ($row->category == 1) {
                if (isset($vlastnosti_pole[$row->id])) {
                    $form->addCheckbox('check' . $row->id, $row->name)
                            ->setDefaultValue(true);
                } else {
                    $form->addCheckbox('check' . $row->id, $row->name);
                }
            }
        }
        $form->addGroup();
        $form->addTextArea('about', 'Ďalší popis auta');
        $form->addGroup();
        $values = $this->addRepository->getInzerat($this->id);
        $hodnota = $this->addRepository->getInzeratID($this->id);
        if ($hodnota->rowCount() == 1) {
            $form->setDefaults($values);
        }



        $form->addSubmit('add', 'Upraviť');
        $form->onSuccess[] = $this->newChangeFormSubmitted;

        return $form;
    }

    public function newChangeFormSubmitted(Form $form) {
        $files = $form->getValues();

        $brand = $this->addRepository->getBrandFromModel($files->model);
        $hodnoty = array('brand' => $brand->fetch()->brand, 'model' => $files->model, 'price' => $files->price, 'phone' => $files->phone,
            'user' => $this->getUser()->identity->id, 'create_date' => new Nette\DateTime,
            'about' => $files->about, 'name' => $files->name, 'region' => $files->region,
            'year' => $files->year, 'capacity' => $files->capacity, 'gas' => $files->gas,
            'kilometres' => $files->kilometres, 'gear' => $files->gear, 'power' => $files->power);

        $pole['id'] = $this->id;
        $this->addRepository->updateBasicValues($pole, $hodnoty);
        $this->addRepository->removeProperties($this->id);

        foreach ($files as $key => $value) {
            if (substr($key, 0, 5) == 'check') {
                if ($value) {
                    $this->addRepository->insertProperties(intval(substr($key, 5)), $this->id);
                }
            }
        }
        $this->redirect('Detail:show', $this->id);
    }

}
