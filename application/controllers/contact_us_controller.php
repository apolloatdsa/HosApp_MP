<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Contact_us_controller extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('contact_us_model');
	}	
	function index()
	{			
		$this->form_validation->set_rules('fname', 'fname', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('lname', 'lname', 'required|trim|xss_clean|max_length[30]');			
		$this->form_validation->set_rules('subject', 'subject', 'required|trim|xss_clean|max_length[100]');			
		$this->form_validation->set_rules('message', 'message', 'required|trim|xss_clean|max_length[500]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('contact_us_view');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'fname' => set_value('fname'),
					       	'lname' => set_value('lname'),
					       	'subject' => set_value('subject'),
					       	'message' => set_value('message')
						);
					
			// run insert model to write data to db
		
			if ($this->contact_us_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('contact_us_controller/success');   // or whatever logic needs to occur
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
			$this->load->view('templates/header');
			$this->ion_auth->navbar();// calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('contact_us_success_view');
			$this->load->view('templates/footer');
	}
}
?>