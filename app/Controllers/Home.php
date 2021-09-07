<?php

namespace App\Controllers;

use Config\Database as DB;

class Home extends BaseController
{
	public function index()
	{
		
		echo view('Basic/header');
		echo view('css/home_css.php');
		$this->template_1();
		echo view('templates/carousel');
		echo view('templates/customCard');
		echo view('Basic/footer');
	}

	public function template_1(){

		$b = $this->businessInfo();
		echo view('templates/navbar/navbar_1', ['p' => $b]);
	}


	private function businessInfo(){
		$db = DB::connect();
		$business = $db->query("SELECT * FROM business JOIN style")->getResultObject();
		$db->close();
		return $business[0];
	}

	
}
