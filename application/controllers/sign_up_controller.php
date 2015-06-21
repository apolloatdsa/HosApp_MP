<?php

class Sign_up_controller extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('sign_up_model');
	}	
	function index()
	{			
		$this->form_validation->set_rules('first_name', 'First Name', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('company', 'Company', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('position', 'Position', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|max_length[30]');
		$this->form_validation->set_rules('phone_number', 'Phone Number', 'required|trim|xss_clean|max_length[30]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('templates/header');
			$this->ion_auth->navbar();// calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('sign_up_view');
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
							'phone_number' => set_value('phone_number')
						);
						
			$name = array(
			
							'first_name' => set_value('first_name'),
					       	'last_name' => set_value('last_name')
			
			);			
			
			 $this->session->set_userdata($name);
			 
			 //$name = $name['first_name'];
			 
			// run insert model to write data to db
		
			if ($this->sign_up_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				
				redirect('sign_up_controller/sign_up_success');   // or whatever logic needs to occur
			}
			else
			{
			$this->load->view('templates/header');
			$this->ion_auth->navbar();// calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('sign_up_view');
			$this->load->view('templates/footer');
			// Or whatever error handling is necessary
			}
		}
	}
	function sign_up_success()
	
	{
			
			
			$this->load->view('templates/header');
			$this->ion_auth->navbar();// calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('sign_up_success_view');
			$this->load->view('templates/footer');
	}
}
?>