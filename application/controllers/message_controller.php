<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message_controller extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('messages_model');
	}	
	function index()
	{			
		//$this->form_validation->set_rules('from', 'from', 'trim|xss_clean|max_length[5]');			
		$this->form_validation->set_rules('to_id', 'To', 'required|trim|xss_clean|max_length[5]');			
		$this->form_validation->set_rules('message', 'message', 'required|xss_clean|max_length[500]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->session->set_flashdata('message', 'ERROR The form failed to validate');
			
			redirect('manager_dashboard/contact_employee');
			
			
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			$from = $this->session->userdata('user_id');
			
			$form_data = array(
			
					       	'from_id' => $from,
					       	'to_id' => set_value('to_id'),
					       	'message' => set_value('message')
							
						);
					
			// run insert model to write data to db
		
			if ($this->messages_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('message_controller/success');   // or whatever logic needs to occur
			}
			else
			{
			$this->session->set_flashdata('message', 'ERROR Your message could not be sent ');
			
			redirect('manager_dashboard/contact_employee');
			}
		}
	}
	function success()
	{
			$this->session->set_flashdata('message', 'Success! Your message has been sent ');
			
			redirect('manager_dashboard/contact_employee');
	}
}
?>