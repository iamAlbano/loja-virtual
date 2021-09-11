<?php

namespace App\Controllers;

use Config\Database as DB;

class AdmArea extends BaseController
{
	public function index()
	{
		$this->verify();
    $this->frontend();
		
	}

  private function frontend(){

    $admin = $this->adminInfo();

    echo view('Basic/header');
    echo view('css/adm_css.php');
    echo view('admArea/sidebar', ['a' => $admin]);
    echo view('admArea/content', ['a' => $admin]);
    echo view('js/passwordValidation');
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

  private function adminInfo(){
    $db = DB::connect();
		$user = $db->query("SELECT * FROM admin")->getResultObject();
		$db->close();
		return $user[0];
  }

  private function businessInfo(){
		$db = DB::connect();
		$business = $db->query("SELECT * FROM business JOIN style")->getResultObject();
		$db->close();
		return $business[0];
	}



  public function updateAdmin(){
    $this->verify();

    $info = [
      'firstName' => $this->request->getPost('firstName'),
      'lastName' => $this->request->getPost('lastName'),
      'email' => $this->request->getPost('email'),
      'cpf' => $this->request->getPost('cpf'),
      'cpfAtual' => session()->cpf];

    $db = DB::connect();
    $cpf = $db->query("SELECT * FROM `admin` WHERE cpf = :cpf: AND email != :email:", $info)->getResult();
    $db->close();

    if(count($cpf) == 0){

    $db = DB::connect();
    $data = $db->query("UPDATE `admin` SET
		`firstName`= :firstName:, 
    `lastName`= :lastName:, 
    `email`= :email:,
    `cpf` = :cpf:
		WHERE `cpf` = :cpfAtual: ", $info);
    $db->close();

    session()->set([
      'firstName' => $this->request->getPost('firstName'),
      'lastName' => $this->request->getPost('lastName'),
      'email' => $this->request->getPost('email'),
      'cpf' => $this->request->getPost('cpf'),
    ]);

    header('location: /lojaVirtual/public/AdmArea');
    die();

    } 

  }
}
