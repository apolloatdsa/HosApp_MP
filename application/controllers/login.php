<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	 
	 public function __construct()
        {
                parent::__construct();
                $this->load->model('Hair_Model'); // calls the model class name //
        }
		
		
		
		
	 
	 public function index()
	{
      
		
		
		$this->login_page();
		
		}
	 
	 
		 public function home_page(){
			 
			  	$this->load->view('templates/header');
				$this->load->view('templates/navbar');
				$this->load->view('body');
				$this->load->view('templates/footer' );
			 
			 
			 }
		 
		 
		 
		 
		 public function login_page(){
			 
			  	$this->load->view('templates/header');
				$this->load->view('templates/navbar');
				$this->load->view('login');
				$this->load->view('templates/footer' );
			 
			 
			 }
	 

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */