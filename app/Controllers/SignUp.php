<?php

namespace App\Controllers;

class SignUp extends BaseController
{
	public function index()
	{
       

		$this->frontend('signup');
	}

	public function frontend($page){
		echo view('Basic/header');
        echo view('css/signup_css');
		echo view('SignUp/'.$page);
        echo view('js/formValidation');
		echo view('Basic/footer');
	}

    public function user(){
        $this->frontend('userRegister');
    }

    public function business(){

        

        session()->set([
            'name' => $this->request->getPost('firstName'),
            'lastName' => $this->request->getPost('lastName'),
            'email' => $this->request->getPost('email'),
            'cpf' => $this->request->getPost('cpf'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ]);

        $this->frontend('businessRegister');
        
        
    }

    public function contact(){
         
        session()->set([
            'businessName' => $this->request->getPost('businessName'),
            'businessEmail' => $this->request->getPost('businessEmail'),
            'fantasyName' => $this->request->getPost('fantasyName'),
            'cnpj' => $this->request->getPost('cnpj'),
            'type' => $this->request->getPost('type'),
            'color' => $this->request->getPost('color'),
            'logo' => $this->request->getPost('logo')
        ]);


        
        
    }

    public function config(){
        session()->set([
            'phone1' => $this->request->getPost('phone1'),
            'phone2' => $this->request->getPost('phone2'),
            'street' => $this->request->getPost('street'),
            'neighborhood' => $this->request->getPost('neighborhood'),
            'number' => $this->request->getPost('number'),
            'city' => $this->request->getPost('city'),
            'state' => $this->request->getPost('state'),
            'cep' => $this->request->getPost('cep')
        ]);
        echo "<pre>";
        session()->start();
        print_r($_SESSION);
        echo "</pre>";
    }


   
}