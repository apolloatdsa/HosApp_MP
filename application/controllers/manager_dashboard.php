<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manager_dashboard extends CI_Controller {

	function employee_list($offset = 0) {
		$limit = 10;
		$this->load->library('listview');
		$where = $this->session->userdata('company');
		$data = $this->listview->filter('users', $limit, $offset, $where);
		
		
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


	function edit($id){
		
			$data['id'] = $id;
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			//echo $this->listview->render();
			$this->load->view('manager_dashboard_edit_user');
			$this->load->view('templates/footer');
			
		}

	function delete($id){
		
		echo 'Delete employee with ID '.$id;
		
		}
	
}

/* End of file manager_dashboard.php */
/* Location: ./application/controllers/manager_dashboard.php */
