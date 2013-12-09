<?php

use Nette\Application\UI\Form;
/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{

    
    protected function createComponentNewLoginForm()
	{
		$form = new Form();
		$form->addText('name', 'Meno:')
			->addRule(Form::FILLED, 'Musíte zadať svoje prihlasovacie meno')
                        ->setAttribute('placeholder', 'Zadajte meno');
                $form->addPassword('password', 'Heslo:') 
                        ->addRule(Form::FILLED, 'Musíte zadať svoje prihlasovacie heslo')
                        ->setAttribute('placeholder', 'Zadajte heslo');
		$form->addSubmit('login', 'Prihlásiť');
		$form->onSuccess[] = $this->newLoginFormSubmitted;
                
                return $form;
		
	}
     
     public function newLoginFormSubmitted(Form $form)
	{
		
	}
}
