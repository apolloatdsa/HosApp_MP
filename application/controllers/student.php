<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Author: Thomas Delaney
// Workshop: CodeIgniter MVC Webservice Assignment
// Student ID: D14126353
// Date:2015/06/09
// Ref: Examples from the following web pages were used in this assignment
// https://ellislab.com/codeigniter/user-guide/libraries/output.html
// https://ellislab.com/codeigniter/user-guide/database/queries.html
// https://ellislab.com/codeigniter/user-guide/database/active_record.html


class Student extends CI_Controller {
	 
	 public function __construct()
        {
                parent::__construct();
				//session_start();
				
				if (!$this->session->userdata('student') && !$this->session->userdata('admin') && !$this->session->userdata('instructor')){
					
	 					redirect('online_training/index');
					 
					 };
				
               
				$this->load->library(array('ion_auth','form_validation'));
				$this->load->helper(array('url','language'));

				$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

				$this->lang->load('auth');
				//$this->login_index();
				//$this->index();
        }
		

	 
	 public function index()
	{
  			
		
		}
	 
	 
	 public function student_dashboard(){
		 
			$this->load->view('templates/header');
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('student_dashboard');
			$this->load->view('templates/footer');
		 }
	 public function student_courses(){
		 
			$this->load->view('templates/header');
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('student_courses');
			$this->load->view('templates/footer');
		 }
	
	
		public function student_take_course(){
			 
				$this->load->view('templates/header');
				$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
				$this->load->view('student_take_course');
				$this->load->view('templates/footer');
			 }
	
	public function student_course_forums(){
			 
				$this->load->view('templates/header');
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
				$this->load->view('student_course_forums');
				$this->load->view('templates/footer');
			 }
	
	public function student_take_quiz(){
			 
				$this->load->view('templates/header');
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
				$this->load->view('student_take_quiz');
				$this->load->view('templates/footer');
			 }
			 
	
	public function student_messages(){
			 
				$this->load->view('templates/header');
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
				$this->load->view('student_messages');
				$this->load->view('templates/footer');
			 }
	public function student_private_profile(){
			 
				$this->load->view('templates/header');
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
				$this->load->view('student_private_profile');
				$this->load->view('templates/footer');
			 }
			 
			 
//#################################################################################################


	 

}
