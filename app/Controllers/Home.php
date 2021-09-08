<?php

namespace App\Controllers;

use Config\Database as DB;

class Home extends BaseController
{
	public function index()
	{
		$this->alreadyRegistered();
		$this->template();
		
	}

	public function template(){

		$this->alreadyRegistered();
		$b = $this->businessInfo();
		echo view('Basic/header');
		echo view('css/home_css.php', ['p' => $b]);
		$this->navbar($b);
		echo view('templates/navbar/categories');
		echo view('login/signModal');
		echo view('templates/carousel');
		echo view('templates/customCard');
		echo view('Basic/homeFooter');
		echo view('Basic/footer');
	}

	private function alreadyRegistered(){
        $db = DB::connect();
        $data = $db->query("SELECT firstName from admin")->getResult();
        $db->close();
       if(count($data) == 0){
        header('Location: /lojaVirtual/public/signup');
        die();
        } 
    }


	private function navbar($b){

		echo view('templates/navbar/navbar_1', ['p' => $b]);
	}


	private function businessInfo(){
		$db = DB::connect();
		$business = $db->query("SELECT * FROM business JOIN style")->getResultObject();
		$db->close();
		return $business[0];
	}

	
}
