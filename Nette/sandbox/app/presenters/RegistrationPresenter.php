<?php

use Nette\Application\UI\Form;
use Nette\Security,
	Nette\Utils\Strings;

/**
 * Registration presenter.
 */
class RegistrationPresenter extends BasePresenter {

    private $carsRepository;
    private $detailRepository;

    protected function createComponentTopCars() {
        return new Todo\TopCarsControl($this->carsRepository);
    }

    public function inject(Todo\CarsRepository $carsRepository, Todo\detailRepository $detailRepository) {
        $this->carsRepository = $carsRepository;
        $this->detailRepository = $detailRepository;
    }

    protected function createComponentRegistrationForm() {

        $form = new Form();

        $form->addText('nick', 'Prihlasovacie meno (nick):')
                ->setRequired("Všetky položky sú povinné!")
                ->addRule(Form::MIN_LENGTH, 'Minimálna dĺžka nicku je %d', 3);
        $form->addPassword('password', 'Vaše heslo: ')
                ->setRequired("Všetky položky sú povinné!")
                ->addRule(Form::MIN_LENGTH, 'Minimálna dĺžka hesla je %d', 6);
        $form->addPassword('passwordcheck', 'Znovu Vaše heslo pre kontrolu: ')
                ->setRequired("Všetky položky sú povinné!")
                ->addRule(Form::EQUAL, 'Vaše heslá sa musia zhodovať', $form['password']);
        $form->addText('mail', 'Váš e-mail: ')
                ->setRequired("Všetky položky sú povinné!")
                ->addRule(Form::EMAIL, 'Vyplňte správny formát mailovej adresy');

        $form->addSubmit('registrate', 'Registrovať');

        $form->onSuccess[] = $this->registrateFormSubmitted;

        return $form;
    }

    public function registrateFormSubmitted(Form $form) {
        $values = $form->getValues();
        if ($this->detailRepository->getExistingUser($values->nick)->rowCount() == 0) {
            if ($result = $this->detailRepository->getExistingMail($values->mail)->rowCount() == 0) {
                if ($values->password == $values->passwordcheck) {
                    $password = $this->calculateHash($values->password);
                    $this->detailRepository->insertUser($values->nick, $password, $values->mail);
                    $this->flashMessage('Boli ste úspešne zaregistrovaný');
                    $this->redirect('Homepage:default');
                }else{
                    $this->flashMessage('Vaše heslá sa nezhodujú');
                }
            }else{
                $this->flashMessage('Užívateľ s takýmto mailom už existuje');
            }
        }else{
            $this->flashMessage('Užívateľ s daným nickom už existuje');
        }
    }

    public function handleUser($name) {
        $result = $this->detailRepository->getExistingUser($name);
        if ($result->rowCount() == 0) {
            echo 'false';
        } else {
            echo 'true';
        }

        $this->terminate();
    }

    public function handleMail($email) {
        $result = $this->detailRepository->getExistingMail($email);
        if ($result->rowCount() == 0) {
            echo 'false';
        } else {
            echo 'true';
        }

        $this->terminate();
    }
    
    public static function calculateHash($password, $salt = NULL)
	{
		if ($password === Strings::upper($password)) { // perhaps caps lock is on
			$password = Strings::lower($password);
		}
		$password = substr($password, 0, 4096);
		return crypt($password, $salt ?: '$2a$07$' . Strings::random(22));
	}

}
