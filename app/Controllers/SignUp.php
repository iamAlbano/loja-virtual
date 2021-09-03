<?php

namespace App\Controllers;

class SignUp extends BaseController
{
	public function index()
	{
        $parameter = [
			'home' => 'active', 
			'user' => 'disabled',
			'business' => 'disabled', 
			'contact' => 'disabled',
            'progress' => '10%' 
			
		];

		$this->frontend($parameter);
	}

	public function frontend($parameter){
		echo view('Basic/header');
        echo view('css/signup_css');
		echo view('SignUp/signup', ['parameter' => $parameter]);
        echo view('js/formValidation');
		echo view('Basic/footer');
	}

   
}