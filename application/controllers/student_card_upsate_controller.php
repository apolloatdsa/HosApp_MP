<?php

class Student_card_update_controller extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('student_card_update_model');
	}	
	function index()
	{			
		
		$this->form_validation->set_rules('student_card_number', 'Credit card number', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('month', 'Month', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('year', 'Year', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('ccv', 'CCV', 'required|trim|xss_clean|max_length[3]');			
		
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('templates/header');
			$this->ion_auth->navbar();// calls a function in the ion auth model to return the user level navbar to use
			echo 'Did not pass validate';
			$this->load->view('templates/footer');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'student_card_number' => set_value('card_number'),
					       	'month' => set_value('month'),
					       	'year' => set_value('year'),
					       	'student_ccv_number' => set_value('ccv_number'),
					       	'user_id' => $this->session->userdata('user_id')
						);
						
			
			 
			 //$name = $name['first_name'];
			 
			// run insert model to write data to db
		
			if ($this->student_card_update_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				
				redirect('student_card_update_controller/update_success');   // or whatever logic needs to occur
			}
			else
			{
			$this->load->view('templates/header');
			$this->ion_auth->navbar();// calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('student_billing_fail_view');
			$this->load->view('templates/footer');
			// Or whatever error handling is necessary
			}
		}
	}
	function update_success()
	
	{
		
			$this->load->view('templates/header');
			$this->ion_auth->navbar();// calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('student_billing_success_view');
			$this->load->view('templates/footer');
	}
}
?>