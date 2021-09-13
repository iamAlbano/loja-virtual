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

  public function updateBusiness(){
    $data = [
            'businessName' => $this->request->getPost('businessName'),
            'fantasyName' => $this->request->getPost('fantasyName'),
            'cnpj' => $this->request->getPost('cnpj'),
            'type' => $this->request->getPost('type')];

    $b = new business();

    $b->updateBusiness($data);

    $alert = $this->alertModal('');

      echo view('templates/modal', ['data' => $alert]);
      $this->frontend('business'); 

  }


  public function updateContact(){
    $data = [
            'cnpj' => session()->get('cnpj'),
            'phone1' => $this->request->getPost('phone1'),
            'phone2' => $this->request->getPost('phone2'),
            'facebook' => $this->request->getPost('facebook'),
            'instagram' => $this->request->getPost('instagram'),
            'twitter' => $this->request->getPost('twitter')];

    $b = new business();

    $b->updateContact($data);

    $alert = $this->alertModal('');

      echo view('templates/modal', ['data' => $alert]);
      $this->frontend('contact'); 

  }

  public function updateAddress(){
    $data = [
            'cnpj' => session()->get('cnpj'),
            'street' => $this->request->getPost('street'),
            'neighborhood' => $this->request->getPost('neighborhood'),
            'number' => $this->request->getPost('number'),
            'city' => $this->request->getPost('city'),
            'state' => $this->request->getPost('state'),
            'cep' => $this->request->getPost('cep'),];

    $b = new business();

    $b->updateAddress($data);

    $alert = $this->alertModal('');

      echo view('templates/modal', ['data' => $alert]);
      $this->frontend('address'); 

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

      $result = $admin->update($info);

      $alert = $this->alertModal($result);

      echo view('templates/modal', ['data' => $alert]);
      $this->frontend('user'); 

  }

  public function updatePassword(){

    $this->verify();

    $admin = new admin();

    $info = [
      'cpf' => session()->get('cpf'),
      'actualPass' => $this->request->getPost('actual-password'),
      'newPass' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)];

      $result = $admin->updatePassword($info);

      $alert = $this->alertModal($result);

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

	
  private function alertModal($result){
    if($result == 'email'){
      $alert = [
        'title' => 'Ops..',
        'message' => 'Não foi possível atualizar seus dados, o e-mail inserido já está cadastrado no sistema.',
      ];

    } else if($result == 'cpf'){
      $alert = [
        'title' => 'Ops..',
        'message' => 'Não foi possível atualizar seus dados, o cpf inserido já está cadastrado no sistema.',
      ];
    } else if($result == 'wrongPass'){
      $alert = [
        'title' => 'Ops..',
        'message' => 'Não foi possível atualizar seus dados, a senha atual informada está incorreta.',
      ];
    
     } else {
      $alert = [
        'title' => 'Sucesso!',
        'message' => 'Dados atualizados com sucesso.',
      ];
    }

    return $alert;
  }


  public function logout()
  {
    session()->destroy();
    header("Location: /lojaVirtual/public/signup");
    die();
  }

 
  
}
