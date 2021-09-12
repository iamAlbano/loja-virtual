<?php

namespace App\Controllers;

use Config\Database as DB;
use App\Models\admin;
use App\Models\business;

class AdmArea extends BaseController
{
	public function index()
	{

		$this->verify();
    $this->frontend('home');
		
	}

  private function frontend($active){

    $admin = new admin();

    echo view('Basic/header');
    echo view('css/adm_css.php');
    echo view('admArea/sidebar', ['a' => $admin, 'active' => $active]);
    echo view('admArea/content', ['a' => $admin, 'active' => $active]);
    echo view('js/passwordValidation');
		echo view('Basic/footer');
  }



  public function updateAdmin(){

    $this->verify();

    $admin = new admin();

    $info = [
      'firstName' => $this->request->getPost('firstName'),
      'lastName' => $this->request->getPost('lastName'),
      'email' => $this->request->getPost('email'),
      'cpf' => $this->request->getPost('cpf'),
      'cpfAtual' => session()->cpf,
      'emailAtual' => session()->email];

      $admin->update($info);

      $admin->session();

      $alert = [
				'title' => 'Sucesso!',
				'message' => 'Dados atualizados com sucesso.',
			];

      echo view('templates/modal', ['data' => $alert]);
      $this->frontend('user'); 

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
