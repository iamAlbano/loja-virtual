<?php


namespace App\Controllers;

class SignUp extends BaseController
{
	public function index()
	{

        $this->page('home', '10%', 'signup/user');
    
	}

	public function frontend($parameter){
		echo view('Basic/header');
        echo view('css/signup_css');
		echo view('SignUp/signup', ['p' => $parameter]);

        if($parameter['user'] == 'active'){
        echo view('js/passwordValidation');
        } else {
        echo view('js/formValidation');
        }

		echo view('Basic/footer');
	}

    public function user(){
        $this->page('user', '25%', 'userRegister');
    }


    public function userRegister(){

        $data = [
            'firstName' => $this->request->getPost('firstName'),
            'lastName' => $this->request->getPost('lastName'),
            'email' => $this->request->getPost('email'),
            'cpf' => $this->request->getPost('cpf'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        $this->sessionData($data);
       
		$this->page('business', '50%', 'businessRegister');
       
        
    }

    public function businessRegister(){

        $data = [
            'businessName' => $this->request->getPost('businessName'),
            'businessEmail' => $this->request->getPost('businessEmail'),
            'fantasyName' => $this->request->getPost('fantasyName'),
            'cnpj' => $this->request->getPost('cnpj'),
            'type' => $this->request->getPost('type'),
            'color' => $this->request->getPost('color'),
            'logo' => $this->request->getPost('logo')
        ];

        $this->sessionData($data);
        $this->page('contact', '75%', 'contactRegister');
           
    }

    public function contactRegister(){
        $data = ([
            'phone1' => $this->request->getPost('phone1'),
            'phone2' => $this->request->getPost('phone2'),
            'street' => $this->request->getPost('street'),
            'neighborhood' => $this->request->getPost('neighborhood'),
            'number' => $this->request->getPost('number'),
            'city' => $this->request->getPost('city'),
            'state' => $this->request->getPost('state'),
            'cep' => $this->request->getPost('cep')
        ]);  

        $this->sessionData($data);
        $this->page('contact', '75%', 'endRegister');
        
    }

    public function endRegister(){
        $this->page('end', '99%', 'endRegister');
    }

    public function page($active, $progress, $action){

        $p = [
            'home' => 'disabled',
            'user'=> 'disabled',
            'business' => 'disabled',
            'contact' => 'disabled',
            'end' => 'disabled',
            'progress' => $progress,
            'action' => $action
        ];

        $p[$active] = 'active';

        $this->frontend($p);
    }

    public function sessionData($data){
        session()->set($data);
    }

    private function show(){
        echo "<pre>";
        print_r(session()->get());
        echo "</pre>";
    }

    

   
}