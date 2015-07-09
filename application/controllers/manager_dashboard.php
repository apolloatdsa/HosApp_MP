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
			
			$data['employee'] = $this->ion_auth->edit_employee($id);
			
			$data['error'] = '';
			$data['id'] = $id;
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			//echo $this->listview->render();
			$this->load->view('manager_dashboard_edit_user');
			$this->load->view('templates/footer');
			
		}
		
	function employee_report(){
			
			$company = $this->session->userdata('company');
			
			$data['employee_list'] = $this->ion_auth->get_employee_list($company);
			
			$data['error'] = '';
			//$data['id'] = $id;
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			//echo $this->listview->render();
			$this->load->view('manager_dashboard_employee_report');
			$this->load->view('templates/footer');
			
		}	
	function selected_employee_report($id = NULL){ // this method can be called by a form submit with a user ID in the POST or by a refresh call from another method in this controller
			
			if($this->input->post('selected_employee_ID')){ // if called by the form get the user ID from the POST
			//Get the value from the form.
			$selected_employee_ID = $this->input->post('selected_employee_ID');
			$id = $selected_employee_ID;
			}
			// if called by the refresh use the parameter as the user ID
			$this->session->userdata('edit_id', $id);
			$data['employee'] = $this->ion_auth->edit_employee($id);
			$data['courses'] = $this->ion_auth->get_courses();
			$data['registered_courses'] = $this->ion_auth->get_registered_courses($id);
			$data['course_names'] = $this->ion_auth->get_registered_courses_names($id);
			
			
			
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			//echo $this->listview->render();
			$this->load->view('manager_dashboard-selected_employee_report');
			$this->load->view('templates/footer');
			
			
		}
		
	function remove_course($course_id, $id){
		
		if($this->ion_auth->manager_remove_course($course_id, $id)){
			
				$this->session->set_flashdata('message', 'The selected course was removed');
				redirect("/manager_dashboard/selected_employee_report/$id", 'refresh');
			
			}else{
				
				$this->session->set_flashdata('message', 'Failed to remove the selected course');
				redirect("/manager_dashboard/selected_employee_report/$id", 'refresh');
				
				};
		
		
		
		}	
	
	function add_course_to_employee($id){
		
		//Get the value from the form.
			$selected_course = $this->input->post('selected_course_ID');
			$course_id = $selected_course;
			
			if ($this->ion_auth->add_employee_to_course($course_id, $id) == TRUE){
				
				//echo '<h1>Course with ID ' .$course_id. ' has been assigned to employee with ID '.$id. '</h2>';
				$this->session->set_flashdata('message', 'The selected course has been added');
				redirect("/manager_dashboard/selected_employee_report/$id", 'refresh');
				
				
				
				}else{
					
					$this->session->set_flashdata('message', 'The user is already registered');
					redirect("/manager_dashboard/selected_employee_report/$id", 'refresh');
					//echo '<h1>There was an error connection to the database </h1>';
					//$this->session->set_flashdata('message', 'There was an error connection to the database ');
					//redirect('/manager_dashboard/selected_employee_report', 'refresh');
					
					};
			
		
		
		
		}
		
	function edit_employee_image(){
			
			
			$id =  $this->session->userdata('edit_id');
			$data['employee'] = $this->ion_auth->edit_employee($id);
			
			$data['error'] = '';
			$data['id'] = $id;
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			//echo $this->listview->render();
			$this->load->view('manager_dashboard_edit_user_image');
			$this->load->view('templates/footer');
			
		}
		
		
	function create_new_user(){
			
			
			
			$data['message'] = '';
			$data['error'] = '';
			
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			//echo $this->listview->render();
			$this->load->view('manager_dashboard_add_new_user');
			$this->load->view('templates/footer');
			
		}
		
	//create a new user
	function create_user()
	{
		$this->data['title'] = "Create User";

		$tables = $this->config->item('tables','ion_auth');

		//validate form input
		$this->form_validation->set_rules('first_name', $this->lang->line('create_user_validation_fname_label'), 'required|trim');
		$this->form_validation->set_rules('last_name', $this->lang->line('create_user_validation_lname_label'), 'required|trim');
		$this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email|is_unique['.$tables['users'].'.email]');
		$this->form_validation->set_rules('phone', $this->lang->line('create_user_validation_phone_label'), 'required');
		$this->form_validation->set_rules('company', $this->lang->line('create_user_validation_company_label'), 'required');
		$this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
		$this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');

		if ($this->form_validation->run() == true)
		{
			$username = strtolower($this->input->post('first_name')) . ' ' . strtolower($this->input->post('last_name'));
			$email    = strtolower($this->input->post('email'));
			$password = $this->input->post('password');

			$additional_data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name'  => $this->input->post('last_name'),
				'company'    => $this->input->post('company'),
				'phone'      => $this->input->post('phone'),
			);
		}
		if ($this->form_validation->run() == true && $this->ion_auth->register($username, $password, $email, $additional_data))
		{
			//check to see if we are creating the user
			//redirect them back to the admin page
			$this->session->set_flashdata('message', $this->ion_auth->messages());
			redirect("manager_dashboard/employee_list", 'refresh');
		}
		else
		{
			//display the create user form
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

			$this->data['first_name'] = array(
				'name'  => 'first_name',
				'id'    => 'first_name',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('first_name'),
			);
			$this->data['last_name'] = array(
				'name'  => 'last_name',
				'id'    => 'last_name',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('last_name'),
			);
			$this->data['email'] = array(
				'name'  => 'email',
				'id'    => 'email',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('email'),
			);
			$this->data['company'] = array(
				'name'  => 'company',
				'id'    => 'company',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('company'),
			);
			$this->data['phone'] = array(
				'name'  => 'phone',
				'id'    => 'phone',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('phone'),
			);
			$this->data['password'] = array(
				'name'  => 'password',
				'id'    => 'password',
				'type'  => 'password',
				'value' => $this->form_validation->set_value('password'),
			);
			$this->data['password_confirm'] = array(
				'name'  => 'password_confirm',
				'id'    => 'password_confirm',
				'type'  => 'password',
				'value' => $this->form_validation->set_value('password_confirm'),
			);

			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			//$this->_render_page('manager_dashboard/create_user', $this->data);
			$this->load->view('manager_dashboard_add_new_user',$this->data );
			$this->load->view('templates/footer');
		}
	}
	

	function delete($id){
		
		
		if($this->ion_auth->manager_delete_user($id)){
			
		//echo 'Delete employee with ID '.$id;
		
			$this->session->set_flashdata('message', 'The selected user has been deleted');
			  redirect('/manager_dashboard/employee_list', 'refresh');
		
		
		}else{
			//echo 'Failed to delete employee with ID '.$id;
			$this->session->set_flashdata('message', 'Failed to delete the selected user');
			redirect('/manager_dashboard/employee_list', 'refresh');
			
			
			}
		
		
		}
		
		
		
		
//##################################################################################################################################
//#################################################################################################################################

	
	
	public function user_image_edit($id, $last_name){
			$config['upload_path'] = './images/members/';
			$config['overwrite'] = TRUE;
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '2048';
   			//$config['encrypt_name'] = TRUE;
			$filename = $id.'-'.$last_name.'.JPG';
			//echo '<h1>' . $filename. '</h1>';
			$config['file_name'] = $filename;
			$this->load->library('upload', $config);
			if($this->upload->do_upload())
				{
					
					//echo "file upload success";
					 $upload_data = $this->upload->data();

					//resize:
			
					$config['image_library'] = 'gd2';
					$config['source_image'] = $upload_data['full_path'];
					$config['overwrite'] = TRUE;
					$config['maintain_ratio'] = TRUE;
					$config['width']     = 110;
					$config['height']   = 110;
					
					$this->load->library('image_lib', $config); 
			
					$this->image_lib->resize();
					
					
					$data['error'] = 'Upload success';
					
					$data['title'] = 'Set page title here';
					$data['employee'] = $this->ion_auth->edit_employee($id);
					$this->load->view('templates/header', $data );
					$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
					//echo $this->listview->render();
					$this->load->view('manager_dashboard_edit_user_image');
					$this->load->view('templates/footer');
					
				}
				else
				{
				  // here if upload failed
				  //$upload_data = $this->upload->data();
				 $data['error'] = '';//$this->upload->display_errors;
				 // $data = array('upload_data' => $this->upload->data());
				   //echo "file upload failed";
				
				$data['error'] = '';
				$data['employee'] = $this->ion_auth->edit_employee($id);
				$data['title'] = 'Set page title here';
				$this->load->view('templates/header', $data );
				$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
				//echo $this->listview->render();
				$this->load->view('manager_dashboard_edit_user_image');
				$this->load->view('templates/footer');
					   
				}
							
			
			
			}		
	
	
	
	
}

/* End of file manager_dashboard.php */
/* Location: ./application/controllers/manager_dashboard.php */
