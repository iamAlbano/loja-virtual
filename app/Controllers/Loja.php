<?php

namespace App\Controllers;

class Loja extends BaseController
{
	public function index()
	{
		$this->frontend();
	}

	public function frontend(){
		echo view('Basic/header');
        echo view('css/login_css');
		echo view('Login/login');
		echo view('Basic/footer');
	}
}
