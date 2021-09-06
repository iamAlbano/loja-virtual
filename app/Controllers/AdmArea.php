<?php

namespace App\Controllers;

use Config\Database as DB;

class AdmArea extends BaseController
{
	public function index()
	{
		$this->verify();
		echo view('Basic/header');
        echo view('css/adm_css.php');
        echo view('AdmArea/sidebar');
		echo view('Basic/footer');
	}

	private function verify(){
        $db = DB::connect();
        $data = $db->query("SELECT firstName from admin")->getResult();
        $db->close();
       if(count($data) > 0){

		if(!session()->has('firstName')){
        header('Location: /lojaVirtual/public/login');
        die();	}

        } else {
			header('Location: /lojaVirtual/public/signup');
        	die();
		}
    }

	public function logout()
  {
    session()->destroy();
    header("Location: /lojaVirtual/public/signup");
    die();
  }
}
