<?php

namespace App\Controllers;

use Config\Database as DB;

class Home extends BaseController
{
	public function index()
	{
		$this->template();
		
	}

	public function template(){

		$b = $this->businessInfo();

		echo view('Basic/header');
		echo view('css/home_css.php', ['p' => $b]);
		$this->navbar($b);
		echo view('templates/navbar/categories');
		echo view('login/signin');
		echo view('templates/carousel');
		echo view('templates/customCard');
		echo view('Basic/footer');
	}

	



	public function navbar($b){
		echo view('templates/navbar/navbar_1', ['p' => $b]);
	}


	private function businessInfo(){
		$db = DB::connect();
		$business = $db->query("SELECT * FROM business JOIN style")->getResultObject();
		$db->close();
		return $business[0];
	}

	
}
