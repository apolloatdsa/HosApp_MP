<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Author: Thomas Delaney
// Workshop: CodeIgniter MVC Webservice Assignment
// Student ID: D14126353
// Date:2015/06/09
// Ref: Examples from the following web pages were used in this assignment
// https://ellislab.com/codeigniter/user-guide/libraries/output.html
// https://ellislab.com/codeigniter/user-guide/database/queries.html
// https://ellislab.com/codeigniter/user-guide/database/active_record.html


class Online_training extends CI_Controller {
	 
	 public function __construct()
        {
                parent::__construct();
                $this->load->model('Products_Model'); // calls the model class name //
				$this->load->library(array('ion_auth','form_validation'));
				$this->load->helper(array('url','language'));

				$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

				$this->lang->load('auth');
				//$this->login_index();
				
				// add extra required user information to the current session	
	###############################################################################################################################################
		
		if ($this->ion_auth->logged_in()){ // if user is logged add the user level I.E. admin/ member / student / instructor .. ect to the session
			
			$id = $this->session->userdata('user_id');
			$current_user_name = $this->ion_auth->find_user_firstName($id); // get the user name
			
			foreach($current_user_name as $name){ // one record will be returned
				
				$this->session->set_userdata('user_first_name' , $name->first_name); // add first name to session
				$this->session->set_userdata('user_last_name' , $name->last_name); // add last name to session
				
				}
			
			$user_level = $this->ion_auth->user_level($id); // call function in the model
			
			foreach ($user_level as $desc){
				
				$this->session->set_userdata('Group_'.$desc->id, $desc->name); // adds user level information to session
				
				}
			
		}// if
	
		
				
        }
		

	 
	 public function index()
	{
   
	 // executes the code in here first
			$this->load->view('templates/header');
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('body');
			$this->load->view('templates/footer');
		
		}
	 
	 
		public function contact_page(){
		
			$this->load->view('templates/header');
			$this->ion_auth->navbar();// calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('contact');
			$this->load->view('templates/footer');
			
		}
		
		public function contact_us_view(){
			
			$this->load->view('templates/header');
			$this->ion_auth->navbar();// calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('contact_us_view');
			$this->load->view('templates/footer');
			
			
			}


//#################################################################################################




	 

}
