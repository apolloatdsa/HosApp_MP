<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts extends CI_Controller {

	function index($offset = 0) {
		$limit = 10;
		$this->load->library('listview');
		$data = $this->listview->filter('users', $limit, $offset);
		$company = $this->session->userdata('company');
		
		$config['table'] = array(
			 
			 
			'total_rows' => $data['total_rows'],
			'per_page' => $limit,
			'query' => $data['query'],
			'numbering' => array('active' => false),
			'p_key' => 'id',
			'action' => array('position' => 'last', 'merge' => false),
			'table_open'          => '<class="table table-striped table-hover">',
			'fields' => array(
				'first_name' => 'First Name',
				 'last_name' => 'Last Name',
				'email' => 'Email',
				'department' => 'Department',
				'phone' => 'Phone',
				
			)
		);
		
		$this->listview->initialize($config);
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			//echo $this->listview->render();
			$this->load->view('manager_dashboard');
			$this->load->view('templates/footer');
		
		
		//echo $this->listview->render();
		
		
	}
	
	private function get_users($options = array()) {
		$company = $this->session->userdata('company');
		$query = $this->db->get_where('users', array('company' => $company));
		foreach ($query->result() as $row) {
			$options[$row->department] = $row->department;
		}
		return $options;
	}
	
}

/* End of file contacts.php */
/* Location: ./application/controllers/contacts.php */
