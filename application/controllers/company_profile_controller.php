<?php

class Company_profile_controller extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('company_profile_model');
	}	
	function index()
	{	
			
		$this->form_validation->set_rules('company_name', 'company_name', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('address_1', 'address_1', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('address_2', 'address_2', 'trim|xss_clean|valid_email|max_length[30]');			
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
			echo '<h1>Failed to validate  </h1>';
			echo $this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
			//$this->load->view('company_profile_form_view');
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
			echo 'An error occurred saving your information. Please try again later';
			// Or whatever error handling is necessary
			}
		}
	}
	function success()
	{
			echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
			sessions have not been used and would need to be added in to suit your app';
	}
}
?>