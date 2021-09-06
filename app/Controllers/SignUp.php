<?php

namespace App\Controllers;

use Config\Database as DB;

class SignUp extends BaseController
{
	public function index()
	{
        $this->alreadyRegistered();
        $this->page('home', '10%', 'signup/user');
    
	}

    public function autenticated(){

        $this->alreadyRegistered();
        $this->adminRegister();
        $this->businessRegister();
        $this->styleRegister();
        header('Location:  /lojaVirtual/public/login');
        die();

    }

    private function alreadyRegistered(){
        $db = DB::connect();
        $data = $db->query("SELECT firstName from admin")->getResult();
        $db->close();
       if(count($data) > 0){
        header('Location: /lojaVirtual/public/login');
        die();
        } 
    }


    public function adminRegister(){

        $db = DB::connect();

		$parameter = [
			'firstName' => session()->firstName, 
			'lastName' => session()->lastName,
			'email' => session()->email, 
			'cpf' => session()->cpf, 
			'password' => session()->password
		];

        $data = $db->query("INSERT INTO `admin`
		(`firstName`, `lastName`, `email`, `cpf`, `password`) 
		VALUES(
			:firstName:,
			:lastName:,
			:email:,
			:cpf:,
			:password:
		)", $parameter);

        $db->close();

    }

    public function businessRegister(){

        $db = DB::connect();

		$parameter = [
			'name' => session()->businessName, 
			'fantasyName' => session()->fantasyName,
            'email' => session()->businessEmail,
			'cnpj' => session()->cnpj, 
			'type' => session()->type, 
			'phone1' => session()->phone1,
            'phone2' => session()->phone2, 
			'street' => session()->street,
			'neighborhood' => session()->neighborhood, 
            'number' => session()->number, 
			'city' => session()->city, 
			'state' => session()->state,
            'cep' => session()->cep
		];

        $data = $db->query("INSERT INTO `business`
		(`name`, `fantasyName`, `email`, `cnpj`, `type`, `phone1`, `phone2`, `street`, `neighborhood`,
        `number`, `city`, `state`, `cep`) 
		VALUES(
			:name:,
			:fantasyName:,
			:email:,
			:cnpj:,
			:type:,
            :phone1:,
			:phone2:,
			:street:,
			:neighborhood:,
			:number:,
            :city:,
            :state:,
            :cep:
		)", $parameter);

        $db->close();
        
    }

    public function styleRegister(){

        $db = DB::connect();

		$parameter = [
			'name' => 'My style', 
			'color' => session()->color,
			'logo' => session()->logo
		];

        $data = $db->query("INSERT INTO `style`
		(`name`, `color`, `logo`) 
		VALUES(
			:name:,
			:color:,
			:logo:
		)", $parameter);

        $db->close();

    }




	public function frontend($parameter){
        $this->alreadyRegistered();
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
        $this->page('user', '25%', 'business');
    }


    public function business(){

        $data = [
            'firstName' => $this->request->getPost('firstName'),
            'lastName' => $this->request->getPost('lastName'),
            'email' => $this->request->getPost('email'),
            'cpf' => $this->request->getPost('cpf'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ];

        $this->sessionData($data);
       
		$this->page('business', '50%', 'contact');
       
        
    }

    public function contact(){

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
        $this->page('contact', '75%', 'autentication');
           
    }

    public function autentication(){
        $this->alreadyRegistered();
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
        $this->endRegister();
        
    }

    public function endRegister(){
        $this->page('end', '99%', 'endRegister');

        #$this->confirmEmail();
        
        header('Location: autenticated');
        die();
    }

    private function confirmEmail(){

        $email = \Config\Services::email();
        $email->setTo('<'.session()->email.'>');
        $email->setSubject('Confirmação de cadastro');
        $message = view('templates/email/confirmationEmail');
        $email->setMessage($message);
        if($email->send()){
            print 'ok';
        } else {
            $alert = [
                'type' => 'success',
                'message' => $email->printDebugger(),
            ];
            echo view('templates/alert', ['data' => $alert ]);
            $email->printDebugger();
            
        }

    }

    public function page($active, $progress, $action){
        $this->alreadyRegistered();
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
        $this->alreadyRegistered();
        session()->set($data);
    }

    private function show(){
        echo "<pre>";
        print_r(session()->get());
        echo "</pre>";
    }

    

   
}