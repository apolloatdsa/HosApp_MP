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
			
			$data['completed_courses'] = $this->ion_auth->get_completed_courses($id); // employee is registered on these courses
			$data['number_of_results'] = $this->ion_auth->count_completed_courses($id); // used to match course names
			
			$data['course_list'] = $this->ion_auth->get_registered_courses_names($id); // get list of courses - This joins the employee_to_course and course tables so course ID and names are included
			
			$company = $this->session->userdata('company');
		$this->load->library('pagination');
		$this->load->library('table');
		$this->table->set_heading(array(' ID ' , ' Course ', ' Start Date ', ' End Date ', ));
		$tmpl = array (
                    'table_open'          => '<table  class="table table-striped ">',

                    'heading_row_start'   => '<tr>',
                    'heading_row_end'     => '</tr>',
                    'heading_cell_start'  => '<th>',
                    'heading_cell_end'    => '</th>',

                    'row_start'           => '<tr>',
                    'row_end'             => '</tr>',
                    'cell_start'          => '<td>',
                    'cell_end'            => '</td>',

                    'row_alt_start'       => '<tr>',
                    'row_alt_end'         => '</tr>',
                    'cell_alt_start'      => '<td>',
                    'cell_alt_end'        => '</td>',

                    'table_close'         => '</table>'
              );

		$this->table->set_template($tmpl);
		
		
		$config['base_url'] = base_url().'/student/student_dashboard';
		$config['total_rows'] = $this->db
								->join('courses', 'courses.course_id = employee_results.course_id')
								->join('users', 'users.id = employee_results.user_id')
								->where('completed', 1)
								->where('user_id', $id)
								->get('employee_results')
								->num_rows();
								
		$config['per_page'] = 10;
		$config['num_links'] = 20;
		$config['full_tag_open'] = '<div class="h4 " id="pagination">';
		$config['full_tag_close'] = '</div>';
		
		
		
		$this->pagination->initialize($config);
		
		$data['completed_courses'] =  $this->db
										->select('courses.course_id, course_name , start_date , end_date, ')
										->join('courses', 'courses.course_id = employee_results.course_id')
										->join('users', 'users.id = employee_results.user_id')
										->where('completed', 1)
										->where('user_id', $id)
										->get('employee_results' ,$config['per_page'], $this->uri->segment(3));
										
		
		
				 
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('student_dashboard', $data);
			$this->load->view('templates/footer');
		 }
	 public function student_courses($id = NULL){
		 
		 	if($id == NULL){ $id = $this->session->userdata('user_id');}
		 	$data['course_list'] = $this->ion_auth->get_registered_courses_names($id); // get list of courses - This joins the employee_to_course and course tables so course ID and names are included
		 	$data['course_num_rows'] = $this->ion_auth->count_registered_courses_names($id);
			
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

function 	print_certificate($id, $course_id){
		
			
			$data['print_course_certificate'] = $this->ion_auth->print_completed_course($id , $course_id); // employee is registered on these courses
			$data['number_of_results'] = $this->ion_auth->count_completed_courses($id); // used to match course names
			
		
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('student_print_certificate');
			$this->load->view('templates/short_footer');
		
		}		
			 
function 	get_employee_report_completed(){
		
			
			$data['completed_courses'] = $this->ion_auth->get_completed_courses($id); // employee is registered on these courses
			$data['number_of_results'] = $this->ion_auth->count_completed_courses($id); // used to match course names
			
		
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('manager_dashboard_all_employee_report_completed');
			$this->load->view('templates/footer');
		
		}		
		
	
			 	 	 	 
			 
//#################################################################################################


	 

}
