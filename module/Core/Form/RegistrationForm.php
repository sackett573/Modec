<?php

namespace Core\Form;

use Zend\Form\Form;

class RegistrationForm extends Form
{
	public function __construct($name = null)
	{
		parent::__construct('registration');

		// Set the form method
		$this->setAttribute('method', 'post');

		// Add the username field
		$this->add(array(
			'name' => 'username',
			'attributes' => array(
				'type' => 'text',
			),
			'options' => array(
				'label' => 'Username',
			),
		));
		
		// Add the email field
		$this->add(array(
			'name' => 'email',
			'attributes' => array(
				'type' => 'text',
			),
			'options' => array(
				'label' => 'Email',
			),
		));

		// Add the email confirmation field
		$this->add(array(
			'name' => 'email_confirm',
			'attributes' => array(
				'type' => 'text',
			),
			'options' => array(
				'label' => 'Confirm Email',
			),
		));
		
		// Add the password field
		$this->add(array(
			'name' => 'password',
			'attributes' => array(
				'type' => 'password',
			),
			'options' => array(
				'label' => 'Password',
			),
		));
		
		// Add the password confirmation field
		$this->add(array(
			'name' => 'password_confirm',
			'attributes' => array(
				'type' => 'password',
			),
			'options' => array(
				'label' => 'Confirm Password',
			),
		));	

		// Add the human verification
		$this->add(array(
			'type' => 'Zend\Form\Element\Captcha',
			'name' => 'captcha',
			'options' => array(
				'label' => 'Please verify you are human',
				'captcha' => new \Zend\Captcha\Figlet(),
			),
		));
		
		// Add the submit button
		$this->add(array(
			'name' => 'submit',
			'attributes' => array(
				'type'  => 'submit',
				'value' => 'Register',
			),
		)); 
	}
}