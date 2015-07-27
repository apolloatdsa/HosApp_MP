<?php defined('BASEPATH') OR exit('No direct script access allowed');

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
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar();// calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('contact_us_success_view');
			$this->load->view('templates/footer');
	}
}
?>