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

class Company_profile_controller extends CI_Controller {
    // used by the manager dashboard to edit company information           
	function __construct()
	{
 		
		
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('company_profile_model');
		
		if (!$this->session->userdata('manager') && !$this->session->userdata('admin') ){
					
	 					redirect('auth/logout');
					 
					 };
		
		
	}	
	function index()
	{	
			
		$this->form_validation->set_rules('company_name', 'company_name', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('address_1', 'address_1', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('address_2', 'address_2', 'trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('company_city', 'company_city', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('company_country', 'company_country', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('company_phone', 'company_phone', 'required|trim|xss_clean|max_length[15]');			
		$this->form_validation->set_rules('company_email', 'company_email', 'required|trim|xss_clean|valid_email|max_length[30]');			
		$this->form_validation->set_rules('company_contact', 'company_contact', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('company_vat', 'company_vat', 'required|trim|xss_clean|max_length[15]');			
		$this->form_validation->set_rules('company_reg', 'company_reg', 'required|trim|xss_clean|max_length[15]');			
		$this->form_validation->set_rules('company_position', 'company_position', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('company_num_emp', 'company_num_emp', 'required|trim|xss_clean|max_length[11]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			//echo '<h1>Failed to validate  </h1>';
			//print_r($this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>'));
			//$data['error'] = 'The from failed to Validate';
			$this->session->set_flashdata('company_profile_update', 'The form failed to validate ');
			redirect('manager_dashboard/company_billing_form_view');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'company_name' => set_value('company_name'),
					       	'address_1' => set_value('address_1'),
					       	'address_2' => set_value('address_2'),
					       	'company_city' => set_value('company_city'),
					       	'company_country' => set_value('company_country'),
					       	'company_phone' => set_value('company_phone'),
					       	'company_email' => set_value('company_email'),
					       	'company_contact' => set_value('company_contact'),
					       	'company_vat' => set_value('company_vat'),
					       	'company_reg' => set_value('company_reg'),
					       	'company_position' => set_value('company_position'),
					       	'company_num_emp' => set_value('company_num_emp')
						);
					
			// run insert model to write data to db
		
			if ($this->company_profile_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('company_profile_controller/success');   // or whatever logic needs to occur
			}
			else
			{
			
			$this->session->set_flashdata('company_profile_update', '>Nothing has changed.<br> OR an error occurred saving your information.<br> Please try again later ');
			redirect('manager_dashboard/company_billing_form_view');	
				
			//echo 'An error occurred saving your information. Please try again later';
			// Or whatever error handling is necessary
			}
		}
	}
	function success()
	{
			
			//echo 'success';
			$this->session->set_flashdata('company_profile_update', 'Success The data has been updated ');
			
			redirect('manager_dashboard/company_billing_form_view');
			//$this->load->view('manager_dashboard/company_profile', $data);
	}
}
?>