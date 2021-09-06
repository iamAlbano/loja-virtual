<?php

namespace App\Controllers;

use Config\Database as DB;

class Home extends BaseController
{
	public function index()
	{
		
		echo view('Basic/header');
		echo view('Basic/footer');
	}

	
}
