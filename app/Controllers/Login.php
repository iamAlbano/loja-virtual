<?php

namespace App\Controllers;

use Config\Database as DB;

class Login extends BaseController
{
	public function index($alert = '')
	{

		if($alert == ''){
		$alert = [
			'type' => 'visually-hidden',
			'message' => '',
		];
		}

		$this->frontend($alert);
	}

	public function frontend($alert){
		echo view('Basic/header');
        echo view('css/login_css');
		echo view('templates/alert', ['data' => $alert]);
		echo view('Login/login');
		echo view('Basic/footer');
	}

	public function autentication(){

		$login = [
		'email' => $this->request->getPost('email'),
		'password' => $this->request->getPost('password')];

		$db = DB::connect();
		$data = $db->query("SELECT * FROM admin WHERE email = :email: ", $login)->getResultObject();
		$db->close();

		if(empty($data)){

			$alert = [
				'type' => 'warning',
				'message' => 'E-mail não encontrado, verifique os dados e tente novamente',
			];
			
			$this->index($alert);

			} else {
				if(password_verify($login['password'], $data[0]->password)){

					$this->log();
					header('Location: /lojaVirtual/public/AdmArea');
					die();

				} else {
					$alert = [
						'type' => 'danger',
						'message' => 'Senha incorreta, verifique os dados e tente novamente',
					];
					
					$this->index($alert);
				}
			}
	}

	private function log(){
		$db = DB::connect();
		$data = $db->query("SELECT * FROM admin")->getResultObject();
		$business = $db->query("SELECT * FROM business")->getResultObject();
		$style = $db->query("SELECT * FROM style")->getResultObject();
		$db->close();

		$session = [
			'firstName' => $data[0]->firstName,
			'lastName' => $data[0]->lastName,
			'email' => $data[0]->email,
			'cpf' => $data[0]->cpf,
			'businessName' => $business[0]->name,
			'businessEmail' => $business[0]->email,
			'fantasyName' => $business[0]->fantasyName,
			'cnpj' => $business[0]->cnpj,
			'type' => $business[0]->type,
			'color' => $style[0]->color,
			'logo' => $style[0]->logo,
			'phone1' => $business[0]->phone1,
			'phone2' => $business[0]->phone2,
			'street' => $business[0]->street,
			'neighborhood' => $business[0]->neighborhood,
			'number' => $business[0]->number,
			'city' => $business[0]->city,
			'state' => $business[0]->state,
			'cep' => $business[0]->cep
		];

		session()->set($session);
	}

	public function show(){
		echo '<pre>';
		print_r(session()->get());
		echo '</pre>';
	}




}
