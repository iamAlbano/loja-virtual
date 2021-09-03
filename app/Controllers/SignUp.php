<?php

namespace App\Controllers;

class SignUp extends BaseController
{
	public function index()
	{
		$this->frontend();
	}

	public function frontend(){
		echo view('Basic/header');
        echo view('css/signup_css');
		echo view('SignUp/signup');
        echo view('js/formValidation');
		echo view('Basic/footer');
	}
}