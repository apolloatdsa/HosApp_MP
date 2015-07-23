<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manager_edit_user_controller extends CI_Controller {
               
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
		
			$val_error = array('val_error'  => 'The form failed to validate' ); // error will be displayed when redirected to the edit page
            
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
			
			$val_error = array('val_error'  => 'An error occurred saving your information or nothing has changed. Please try again later' ); // message will be displayed when redirected to the edit page
            
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
	
	
}
?>