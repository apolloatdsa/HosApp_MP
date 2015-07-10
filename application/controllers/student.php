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
				
				if (!$this->session->userdata('student') && !$this->session->userdata('admin') && !$this->session->userdata('instructor') && !$this->session->userdata('manager')){
					
	 					redirect('online_training/index');
					 
					 };
				
               $this->load->model('Student_card_update_model'); // calls the model class name //
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
	 
	 
	 public function student_dashboard($id = NULL){
		 
		 	if($id == NULL){ $id = $this->session->userdata('user_id');}
			
			
			$data['course_list'] = $this->ion_auth->get_registered_courses_names($id); // get list of courses - This joins the employee_to_course and course tables so course ID and names are included
				 
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('student_dashboard', $data);
			$this->load->view('templates/footer');
		 }
	 public function student_courses(){
		 
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('student_courses');
			$this->load->view('templates/footer');
		 }
	
	
		public function student_take_course(){
			 
				$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
				$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
				$this->load->view('student_take_course');
				$this->load->view('templates/footer');
			 }
	
	public function student_course_forums(){
			 
				$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
				$this->load->view('student_course_forums');
				$this->load->view('templates/footer');
			 }
	
	public function student_take_quiz(){
			 
				$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
				$this->load->view('student_take_quiz');
				$this->load->view('templates/footer');
			 }
			 
	
	public function student_messages(){
			 
				$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
				$this->load->view('student_messages');
				$this->load->view('templates/footer');
			 }
	public function student_private_profile(){
		
			 
			   $error = array('error' => '');
			   
				$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
				$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
				$this->load->view('student_private_profile', $error);
				$this->load->view('templates/footer');
			 }
		public function student_test_profile(){
			 
				$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
				$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
				$this->load->view('student_test_profile', $error);
				$this->load->view('templates/footer');
			 }
		public function student_billing(){
		
			 $data['payment'] = $this->Student_card_update_model->getPayment();
			
				$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
				$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
				$this->load->view('student_billing', $data);
				$this->load->view('templates/footer');
			 }
		public function user_billing_update(){
			 
				$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
				$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
				echo "<h1>Form submitted </h1>";
				//$this->load->view('student_billing');
				$this->load->view('templates/footer');
			 }
			public function credit_card_update(){
			 
				$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
				$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
				echo "<h1>Student Credit card updated </h1>";
				//$this->load->view('student_billing');
				$this->load->view('templates/footer');
			 } 
			function update_success(){
	
			$data['payment'] = $this->Student_card_update_model->getPayment();
			
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar();// calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('student_billing_update_success', $data);
			$this->load->view('templates/footer');
	} 
			 
			 
			 
			 	 	 	 
			 
//#################################################################################################


	 

}
