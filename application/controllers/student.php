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
					
	 					redirect('online_training/body');
					 
					 };
				
               
				$this->load->library(array('ion_auth','form_validation'));
				$this->load->helper(array('url','language'));

				$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

				$this->lang->load('auth');
				//$this->login_index();
				$this->index();
        }
		

	 
	 public function index()
	{
  			$this->load->view('templates/header');
			
			if ($this->session->userdata('admin')){// if user is also admin load the admin navbar menu 
					$this->load->view('templates/admin_navbar');
				}
				
				elseif ($this->session->userdata('instructor')){// if user is also instructor load the admin navbar menu 
						$this->load->view('templates/instructor_navbar');
					}
				
					else{
						$this->load->view('templates/student_navbar'); // else load the student navbar menu
						}
			
			$this->load->view('templates/footer');
		
		}
	 
	 
	 public function student_dashboard(){
		 
			
			$this->load->view('student_dashboard');
			
		 }
	 public function student_courses(){
		 
			
			$this->load->view('student_courses');
			
		 }
	
	
		public function student_take_course(){
			 
				
				$this->load->view('student_take_course');
				
			 }
	
	public function student_course_forums(){
			 
				
				$this->load->view('student_course_forums');
				
			 }
	
	public function student_take_quiz(){
			 
				
				$this->load->view('student_take_quiz');
				
			 }
			 
	
	public function student_messages(){
			 
				
				$this->load->view('student_messages');
				
			 }
	public function student_private_profile(){
			 
				
				$this->load->view('student_private_profile');
				
			 }
			 
			 
//#################################################################################################


	 

}
