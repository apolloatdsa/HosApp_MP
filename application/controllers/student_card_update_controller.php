<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Date:2015/07/24
// Author: Thomas Delaney
// Student ID: D14126353
// Author: Sarah Barrow
// Student	ID:	D13126793
// Major Project: CodeIgniter MVC framework for Folio LMS website. 
// The project utilizes a bootstrap template - http://themeforest.net/item/learning-app-learning-management-system-template/10759166 
// Ion Auth authentication library http://benedmunds.com/ion_auth/ was added to Codeigniter   

// Ref: Examples from the following web pages were used in this assignment
// https://ellislab.com/codeigniter/user-guide/libraries/output.html
// https://ellislab.com/codeigniter/user-guide/database/queries.html
// https://ellislab.com/codeigniter/user-guide/database/active_record.html
// http://code.tutsplus.com/articles/30-awesome-codeigniter-tutorials-for-all-skill-levels--net-16915
// https://github.com/edomaru/codeigniter-listview was added for table list views 
// Formigniter was used to generate forms used in the project. http://formigniter.org/app/

class Student_card_update_controller extends CI_Controller {
     // used by the student dasgboard to edit student data          
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('Student_card_update_model'); // calls the model class name //
		
		if (!$this->session->userdata('manager') && !$this->session->userdata('admin') ){
					
	 					redirect('auth/logout');
					 
					 };
		
	}	
	function index()
	{			
		
		$this->form_validation->set_rules('student_card_number', 'Credit card number', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('month', 'Month', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('year', 'Year', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('student_ccv_number', 'CCV', 'required|trim|xss_clean|max_length[3]');			
		
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar();// calls a function in the ion auth model to return the user level navbar to use
			//echo 'Failed to validate ';//$this->load->view('student_card_update_view');
			$this->load->view('student_billing_validate_failed');
			$this->load->view('templates/footer');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'student_card_number' => set_value('student_card_number'),
					       	'month' => set_value('month'),
					       	'year' => set_value('year'),
					       	'student_ccv_number' => set_value('student_ccv_number'),
							'active' => TRUE
					       	//'user_id' => $this->session->userdata('user_id')
						);
						
			
			 
			 //$name = $name['first_name'];
			 
			// run insert model to write data to db
		
			if ($this->Student_card_update_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				
				redirect('student/update_success');   // or whatever logic needs to occur
			}
			else
			{
			
			// here id the db update failed
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar();// calls a function in the ion auth model to return the user level navbar to use
			
			$this->load->view('student_billing_update_failed');
			$this->load->view('templates/footer');
			// Or whatever error handling is necessary
			}
		}
	}
	
}
?>