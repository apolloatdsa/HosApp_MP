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


class User_info extends CI_Controller {
	// controlls access to the user admin  users need to be admin to access this page
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
		
		if (!$this->session->userdata('manager') && !$this->session->userdata('admin') ){
					
	 					redirect('auth/logout');
					 
					 };
		
		
		
	}// end construct

	//
	#####################################################################################################################
	
	function index()
	{

		if (!$this->ion_auth->logged_in()) // user not logged in 
		{
			//redirect them to the login page
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->load->view('templates/navbar');
			redirect('auth/login', 'refresh'); // go back to login page if not logged on or unsuccessful log in
			$this->load->view('templates/footer');
		}
		elseif (!$this->ion_auth->is_admin()) //remove this elseif if you want to enable this for non-admins
		{
			// do this if not administrator
			//redirect them to the home page because they must be an administrator to view this
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->load->view('templates/navbar');
			return show_error('You must be an administrator to view this page.');
			$this->load->view('templates/footer');
		}
		
		
		else
		{
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			//list the users
			$this->data['users'] = $this->ion_auth->users()->result();
			foreach ($this->data['users'] as $k => $user)
			{
				$this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			}
			
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->load->view('templates/navbar');
			$this->_render_page('auth/index', $this->data); // send users to the auth/index page if they are administrators
			$this->load->view('templates/footer');
		}
		
		
		
		
		
	}

}// end class
?>	