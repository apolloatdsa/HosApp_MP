<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_info extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}// end construct

	// start Tom Delaney edit	
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