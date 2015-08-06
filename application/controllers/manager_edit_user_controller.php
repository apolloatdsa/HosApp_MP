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

class Manager_edit_user_controller extends CI_Controller {
     // used in the manager dashboard to edit registered users          
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('manager_edit_user_model');
		
		if (!$this->session->userdata('manager') && !$this->session->userdata('admin') ){
					
	 					redirect('auth/logout');
					 
					 };
		
		
	}	
	function index($id)
	{			
		$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|valid_email|max_length[30]');			
		$this->form_validation->set_rules('department', 'Department', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('phone', 'Phone', 'required|trim|xss_clean|max_length[30]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
		
			$val_error = array('val_error'  => 'ERROR The form failed to validate' ); // error will be displayed when redirected to the edit page
            
			$this->session->set_flashdata($val_error);
			
			redirect("manager_dashboard/edit/$id");
			 
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
			
					       	'first_name' => set_value('first_name'),
					       	'last_name' => set_value('last_name'),
					       	'email' => set_value('email'),
					       	'department' => set_value('department'),
					       	'phone' => set_value('phone')
							
						);
					
			// run insert model to write data to db
		
			if ($this->manager_edit_user_model->SaveForm($form_data, $id) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect("manager_edit_user_controller/success/$id");   // or whatever logic needs to occur
			}
			else
			{
			//echo 'An error occurred saving your information. Please try again later';
			// Or whatever error handling is necessary
			
			$val_error = array('val_error'  => 'ERROR An error occurred saving your information or nothing has changed. Please try again later' ); // message will be displayed when redirected to the edit page
            
			$this->session->set_flashdata($val_error);
			
			redirect("manager_dashboard/edit/$id");
			
			
			}
		}
	}
	function success($id)
	{
			//echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
			//sessions have not been used and would need to be added in to suit your app';
			
			$val_error = array('val_error'  => 'The user details have been sucesfully updated' ); // message will be displayed when redirected to the edit page
            
			$this->session->set_flashdata($val_error);
			
			redirect("manager_dashboard/edit/$id");
			
			
	}
	function fail($id)
	{
		
			
	}
	
	
	function set_group($id){
		
		// build array for the model
		
			$selected_group = $this->input->post('selected_group');
			
			
			$form_data = array(
			
					       	'user_id' => $id,
					       	'group_id' => $selected_group
					       	
						);
					
			// run insert model to write data to db
		if ($this->manager_edit_user_model->SaveGroup($form_data, $id) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect("manager_edit_user_controller/success/$id");   // or whatever logic needs to occur
			}
			else
			{
			//echo 'An error occurred saving your information. Please try again later';
			// Or whatever error handling is necessary
			
			$val_error = array('val_error'  => 'An error occurred saving your information or nothing has changed. Please try again later' ); // message will be displayed when redirected to the edit page
            
			$this->session->set_flashdata($val_error);
			
			redirect("manager_dashboard/edit/$id");
			
			
			}
		
		}
	
}
?>