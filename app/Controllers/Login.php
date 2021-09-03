<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		echo view('Basic/header');
        echo view('css/login_css');
		echo view('Login/login');
		echo view('Basic/footer');
	}
}
