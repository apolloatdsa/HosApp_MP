<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Author: Thomas Delaney
// Workshop: CodeIgniter MVC Webservice Assignment
// Student ID: D14126353
// Date:2015/06/09
// Ref: Examples from the following web pages were used in this assignment
// https://ellislab.com/codeigniter/user-guide/libraries/output.html
// https://ellislab.com/codeigniter/user-guide/database/queries.html
// https://ellislab.com/codeigniter/user-guide/database/active_record.html


class Manager extends CI_Controller {
	 
	 public function __construct()
        {
                parent::__construct();
				//session_start();
				$this->load->library('listview');
				if (!$this->session->userdata('manager') && !$this->session->userdata('admin') ){
					
	 					redirect('auth/logout');
					 
					 };
				
               
				$this->load->library(array('ion_auth','form_validation'));
				$this->load->helper(array('url','language'));

				$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

				$this->lang->load('auth');
				//$this->login_index();
				//$this->index();
        }
		

	 
	function index($offset = 0) {
		$limit = 10;
		$this->load->library('listview');
		$data = $this->listview->filter('users', $limit, $offset);
		$company = $this->session->userdata('company');
		
		$config['table'] = array(
			 'table_open'  => '<class="table table-striped table-hover">', 
			'total_rows' => $data['total_rows'],
			'per_page' => $limit,
			'query' => $data['query'],
			'numbering' => array('active' => false),
			'p_key' => 'id',
			
			'action' => array('position' => 'last', 'merge' => false),
			'fields' => array(
				'first_name' => 'First Name',
				 'last_name' => 'Last Name',
				'email' => 'Email',
				'department' => 'Department',
				'phone' => 'Phone',
				
			)
		);
		
		$this->listview->initialize($config);
		echo $this->listview->render();
	}
	
	private function get_users($options = array()) {
		$company = $this->session->userdata('company');
		$query = $this->db->get_where('users', array('company' => $company));
		foreach ($query->result() as $row) {
			$options[$row->department] = $row->department;
		}
		return $options;
	}
	


	 
	 
	 public function manager_dashboard(){
		 	
			$company = $this->session->userdata('company');
		 	$data['employees'] = $this->ion_auth->company_employees($company);
		 	//echo var_dump($data['employees']);
			
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('manager_dashboard');
			$this->load->view('templates/footer');
		 }
		 
		 
		 
	public function manager_company_profile(){
		
		 	$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('manager_dashboard_company_profile');
			$this->load->view('templates/footer');
		 }
		 
	public function manager_list_employees(){
			
		 	$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('manager_list_employees');
			$this->load->view('templates/footer');
		 }
		 
	public function manager_completed_projects(){
		 
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('manager_completed_projects');
			$this->load->view('templates/footer');
		 }

	public function under_construction(){
		 
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('under_construction');
			$this->load->view('templates/footer');
		 }
	
	 

}
