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

class Edit_user_controller extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('sign_up_model');
		
		if (!$this->session->userdata('manager') && !$this->session->userdata('admin') ){
					
	 					redirect('auth/logout');
					 
					 };
		
	}
		
	function index()
	{			
		$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('company', 'Company', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('position', 'Position', 'required|trim|xss_clean|max_length[30]');
		$this->form_validation->set_rules('department', 'Department', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|max_length[30]');
		$this->form_validation->set_rules('phone_number', 'Phone Number', 'required|trim|xss_clean|max_length[30]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
				$data['sign_up_error'] = '';
				$data['error'] = '';
				$data['employee'] = $this->ion_auth->edit_employee();
				$data['title'] = 'Set page title here';
				$this->load->view('templates/header', $data );
				$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
				//echo $this->listview->render();
				$this->load->view('manager_dashboard_edit_user');
				$this->load->view('templates/footer');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'first_name' => set_value('first_name'),
					       	'last_name' => set_value('last_name'),
					       	'company' => set_value('company'),
					       	'position' => set_value('position'),
					       	'email' => set_value('email'),
							'department' => set_value('department'),
							'phone_number' => set_value('phone_number')
						);
						
			$name = array(
			
							'first_name' => set_value('first_name'),
					       	'last_name' => set_value('last_name')
			
			);			
			
			
			 //$name = $name['first_name'];
			 
			// run insert model to write data to db
		
			if ($this->edit_user_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				
				redirect('manager_dashboard/edit_user_success/$id');   // or whatever logic needs to occur
			}
			else
			{
			$data['sign_up_error'] = 'Error editing user';
				$data['error'] = '';
				$data['employee'] = $this->ion_auth->edit_employee();
				$data['title'] = 'Set page title here';
				$this->load->view('templates/header', $data );
				$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
				//echo $this->listview->render();
				$this->load->view('manager_dashboard_edit_user');
				$this->load->view('templates/footer');
			// Or whatever error handling is necessary
			}
		}
	}
	function edit_user_success($id)
	
	{
	
			$data['sign_up_error'] = 'Success';
				$data['error'] = '';
				$data['employee'] = $this->ion_auth->edit_employee();
				$data['title'] = 'Set page title here';
				$this->load->view('templates/header', $data );
				$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
				//echo $this->listview->render();
				$this->load->view('manager_dashboard_edit_user');
				$this->load->view('templates/footer');
	}
}
?>