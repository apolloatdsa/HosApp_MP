<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Author: Thomas Delaney
// Workshop: CodeIgniter MVC Webservice Assignment
// Student ID: D14126353
// Date:2015/06/09
// Ref: Examples from the following web pages were used in this assignment
// https://ellislab.com/codeigniter/user-guide/libraries/output.html
// https://ellislab.com/codeigniter/user-guide/database/queries.html
// https://ellislab.com/codeigniter/user-guide/database/active_record.html


class Instructor extends CI_Controller {
	 
	 public function __construct()
        {
                parent::__construct();
				//session_start();
				
				if (!$this->session->userdata('instructor') && !$this->session->userdata('admin') ){
					
	 					redirect('auth/login');
					 
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
				
				if ($this->session->userdata('admin')){ // if the user is admin load the admin navbar menu
					$this->load->view('templates/admin_navbar');
				}else{
					$this->load->view('templates/instructor_navbar'); // else load the instructor menu
					}
				
				$this->load->view('templates/footer');
		}
	 
	 
	 public function instructor_dashboard(){
	
			$this->load->view('instructor_dashboard');
			
		 }
		 
		 
		 
	public function instructor_courses(){
		 
			$this->load->view('instructor_courses');
			
		 }
		 
	public function instructor_profile(){
		 
			$this->load->view('instructor_profile');
		 }
		 
	public function instructor_edit_courses(){
		 
	
			$this->load->view('instructor_edit_courses');
		
		 }


	 

}
