<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Author: Thomas Delaney
// Workshop: CodeIgniter MVC Webservice Assignment
// Student ID: D14126353
// Date:2015/06/09
// Ref: Examples from the following web pages were used in this assignment
// https://ellislab.com/codeigniter/user-guide/libraries/output.html
// https://ellislab.com/codeigniter/user-guide/database/queries.html
// https://ellislab.com/codeigniter/user-guide/database/active_record.html


class Cdn extends CI_Controller {
	 
	 public function __construct()
        {
                parent::__construct();
				//session_start();
				
				if (!$this->session->userdata('admin') ){
					
	 					redirect('auth/logout');
					 
					 };
				
					
				
				if (!$this->ion_auth->logged_in()){
					
					
					
	 					//redirect them to the login page
					$data['title'] = 'Set page title here';
					$this->load->view('templates/header', $data );
					$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
					redirect('auth/login', 'refresh'); // go back to login page if not logged on or unsuccessful log in
					//$this->load->view('templates/footer');
					 
					 };
					 
					 
					 
				
              
				$this->load->library(array('ion_auth','form_validation'));
				$this->load->helper(array('url','language'));
				$this->lang->load('auth');
				//$this->login_index();
				//$this->index();
        }
		

	 
	 public function index()
	{
  			
		
		}
	 
	public function cdn_dashboard(){
			
			//$data['selected_course'] = $this->ion_auth->get_display_course($course_id);
			//print_r($data['course_list']->result());
			//$data['course_id'] = $course_id;
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('cdn_dashboard_view');
			$this->load->view('templates/footer');
		
		
		}
	
	public function cdn_do_something(){
			
			//$data['selected_course'] = $this->ion_auth->get_display_course($course_id);
			//print_r($data['course_list']->result());
			//$data['course_id'] = $course_id;
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('cdn_do_something_view');
			$this->load->view('templates/footer');
		
		
		}
			 
			 
			 
			 	 	 	 
			 
//#################################################################################################


	 

}
