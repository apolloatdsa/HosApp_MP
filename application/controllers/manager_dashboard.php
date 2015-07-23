<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manager_dashboard extends CI_Controller {
	
	 public function __construct()
        {
                parent::__construct();
				//session_start();
				$this->load->library('listview');
				if (!$this->session->userdata('manager') && !$this->session->userdata('admin') ){
					
	 					redirect('auth/logout');
					 
					 };
				
               $this->load->model('Student_card_update_model'); // calls the model class name //
				$this->load->library(array('ion_auth','form_validation'));
				$this->load->helper(array('url','language'));

				$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

				$this->lang->load('auth');
				//$this->login_index();
				//$this->index();
        }
		
	
	

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
			
			if(!$this->valid_id($id)){
				
				$this->session->set_flashdata('message', ' An INVALID ID was detected');
				redirect("/manager_dashboard/employee_report", 'refresh');
				//echo '<h1> An invalid id was detected </h2>';
				return false;
				}; // check to see if the employee id is valid
			
			
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
	
	
	function get_employee_count_for_course_id($course_id){
		
		$data['count_empolyees_on_course'] = $this->ion_auth->count_empolyees_on_course($course_id);
		return $employee_on_course_count;
		
		}	
		
	function manager_login_dashboard(){
		
			$company = $this->session->userdata('company');
		 	$data['employee_list'] = $this->ion_auth->get_employee_list($company);
			$data['employee_count'] = $this->ion_auth->employee_count($company);
			$data['courses'] = $this->ion_auth->get_courses(); // courses list
			//$data['count_empolyees_on_course'] = $this->ion_auth->count_empolyees_on_course($course_id); // courses the number of employees on a course
		 	//echo var_dump($data['employees']);
			
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('manager_login_dashboard' ,$data);
			$this->load->view('templates/footer');
		
		}
	function company_profile(){
		
			
			$data['error'] = '';
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('company_profile_view' ,$data);
			$this->load->view('templates/footer');
		
		
		}
	function company_billing(){
		
			$data['payment'] = $this->Student_card_update_model->getPayment();
			$data['error'] = '';
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('company_billing' ,$data);
			$this->load->view('templates/footer');
		
		
		}
	function company_billing_form_view(){
		
			$company_name = $this->session->userdata('company');
			//echo $company_name;
			$data['company_info'] = $this->ion_auth->get_company_info($company_name);
			$data['payment'] = $this->Student_card_update_model->getPayment();
			$data['error'] = '';
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('company_profile_form_view' ,$data);
			$this->load->view('templates/footer');
		
		
		}
		
	function employees_on_selected_course($course_id){
		
			$company = $this->session->userdata('company');
			$data['employee_on_course'] = $this->ion_auth->get_employee_on_course($course_id, $company);
			$data['error'] = '';
			//$data['id'] = $id;
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			//echo $this->listview->render();
			$this->load->view('manager_dashboard_employee_on_course');
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
			
			if(!$this->valid_id($id)){
				
				$this->session->set_flashdata('message', ' An INVALID ID was detected');
				redirect("/manager_dashboard/employee_report", 'refresh');
				//echo '<h1> An invalid id was detected </h2>';
				return false;
				}; // check to see if the employee id is valid
			
			// if called by the refresh use the parameter as the user ID
			$this->session->userdata('edit_id', $id);
			$data['employee'] = $this->ion_auth->edit_employee($id);// employee list
			$data['courses'] = $this->ion_auth->get_courses(); // courses list
			$data['registered_courses'] = $this->ion_auth->get_registered_courses($id); // employee is registered on these courses
			$data['course_names'] = $this->ion_auth->get_registered_courses_names($id); // used to match course names
			
			
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('manager_dashboard_selected_employee_report');
			$this->load->view('templates/footer');
			
		}
		
	function 	selected_employee_report_completed($id){
		
			$this->session->userdata('edit_id', $id);
			$data['employee'] = $this->ion_auth->edit_employee($id);// employee list
			$data['courses'] = $this->ion_auth->get_courses(); // courses list
			$data['completed_courses'] = $this->ion_auth->get_completed_courses($id); // employee is registered on these courses
			$data['course_names'] = $this->ion_auth->get_registered_courses_names($id); // used to match course names
		
		
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('manager_dashboard_selected_employee_report_completed');
			$this->load->view('templates/footer');
		
		}
	
	function remove_course($course_id, $id){
		
		if(!$this->valid_id($id)){
				
				$this->session->set_flashdata('message', ' An INVALID ID was detected');
				redirect("/manager_dashboard/employee_report", 'refresh');
				//echo '<h1> An invalid id was detected </h2>';
				return false;
				}; // check to see if the employee id is valid
		
		
		if($this->ion_auth->manager_remove_course($course_id, $id)){
			
				$this->session->set_flashdata('message', 'The selected course was removed');
				redirect("/manager_dashboard/selected_employee_report/$id", 'refresh');
			
			}else{
				
				$this->session->set_flashdata('message', 'Failed to remove the selected course');
				redirect("/manager_dashboard/selected_employee_report/$id", 'refresh');
				
				};
		
		}
	function selected_next_employee($id, $company){ // this function will control the next employee button and keep the next selection within the company and within the range of employees
		
		
		if(!$this->valid_id($id)){
				
				
				$this->session->set_flashdata('message', ' An INVALID ID was detected');
				redirect("/manager_dashboard/employee_report", 'refresh');
				//echo '<h1> An invalid id was detected </h2>';
				return false;
				}; // check to see if the employee id is valid
		
		$emp_id_list = $this->ion_auth->get_employee_list($company); // get a complete list fo company employees from the db
		$emp_id_array = array(); // create an array to store employee id
		
		
		foreach($emp_id_list->result() as $row){ // loop through each result and push employee id into the array
			array_push($emp_id_array, $row->id);
			};
			$number_of_employees = count($emp_id_array);
			//echo $number_of_employees;	
			$current_id_index = array_search($id, $emp_id_array); // find the array index of the current user
			if($current_id_index < --$number_of_employees){
			// next user is the index plus one 
			$next_employee = ++$current_id_index;
			$next_id = $emp_id_array[$next_employee];
			$this->session->set_userdata('edit_id' ,$next_id );
			redirect("/manager_dashboard/selected_employee_report/$next_id", 'refresh');
			
			}else{
				
				$next_id = $this->session->userdata('edit_id');
				$this->session->set_flashdata('message', 'You have reached the end of the employee list ');
				redirect("/manager_dashboard/selected_employee_report/$next_id", 'refresh');
				};
	
		}		
	function selected_previous_employee($id, $company){// this function will control the previous employee button and keep the next selection within the company and within the range of employees
		if(!$this->valid_id($id)){
				
				$this->session->set_flashdata('message', ' An INVALID ID was detected');
				redirect("/manager_dashboard/employee_report", 'refresh');
				//echo '<h1> An invalid id was detected </h2>';
				return false;
				}; // check to see if the employee id is valid
		
		
		$emp_id_list = $this->ion_auth->get_employee_list($company); // get a complete list fo company employees from the db
		$emp_id_array = array(); // create an array to store employee id
		foreach($emp_id_list->result() as $row){ // loop through each result and push employee id into the array
			array_push($emp_id_array, $row->id);
			};
			$number_of_employees = count($emp_id_array);	
			$current_id_index = array_search($id, $emp_id_array); // find the array index of the current user
			if($current_id_index > 0 && $current_id_index <=  --$number_of_employees){// keep within the range of employees
			// next user is the index minus one 
			$next_employee = --$current_id_index;
			$next_id = $emp_id_array[$next_employee];
			$this->session->set_userdata('edit_id' ,$next_id ); // save the user id being edited to the session 
			redirect("/manager_dashboard/selected_employee_report/$next_id", 'refresh');
			
			}else{
				
				$next_id = $this->session->userdata('edit_id');
				$this->session->set_flashdata('message', 'You have reached the end of the employee list ');
				redirect("/manager_dashboard/selected_employee_report/$next_id", 'refresh');
				};
	
		}
		
	
	
	
	
		
	function selected_first_employee($id, $company){ // this function will control the next employee button and keep the next selection within the company and within the range of employees
		
		$emp_id_list = $this->ion_auth->get_employee_list($company); // get a complete list fo company employees from the db
		$emp_id_array = array(); // create an array to store employee id
		foreach($emp_id_list->result() as $row){ // loop through each result and push employee id into the array
			array_push($emp_id_array, $row->id);
			};
			$number_of_employees = count($emp_id_array);	
			$current_id_index = array_search($id, $emp_id_array); // find the array index of the current user
			if($current_id_index < --$number_of_employees){
			// next user is the index plus one 
			
			$next_id = $emp_id_array[0];
			$this->session->set_userdata('edit_id' ,$next_id );
			redirect("/manager_dashboard/selected_employee_report/$next_id", 'refresh');
			
			}else{
				
				$next_id = $this->session->userdata('edit_id');
				$this->session->set_flashdata('message', 'You have reached the end of the employee list ');
				redirect("/manager_dashboard/selected_employee_report/$next_id", 'refresh');
				};
	
		}		
	function selected_last_employee($id, $company){// this function will control the previous employee button and keep the next selection within the company and within the range of employees
		
		
		$emp_id_list = $this->ion_auth->get_employee_list($company); // get a complete list fo company employees from the db
		$emp_id_array = array(); // create an array to store employee id
		foreach($emp_id_list->result() as $row){ // loop through each result and push employee id into the array
			array_push($emp_id_array, $row->id);
			};
			$number_of_employees = count($emp_id_array);	
			$current_id_index = array_search($id, $emp_id_array); // find the array index of the current user
			if($current_id_index < --$number_of_employees){
			// next user is the index plus one 
			
			$next_id = $emp_id_array[$number_of_employees];
			$this->session->set_userdata('edit_id' ,$next_id );
			redirect("/manager_dashboard/selected_employee_report/$next_id", 'refresh');
			
			}else{
				
				$next_id = $this->session->userdata('edit_id');
				$this->session->set_flashdata('message', 'You have reached the end of the employee list ');
				redirect("/manager_dashboard/selected_employee_report/$next_id", 'refresh');
				};
	
		}			
		
		
		
		
		
		
		
				
	function add_course_to_employee($id){
		
		if(!$this->valid_id($id)){
				
				$this->session->set_flashdata('message', ' An INVALID ID was detected');
				redirect("/manager_dashboard/employee_report", 'refresh');
				//echo '<h1> An invalid id was detected </h2>';
				return false;
				}; // check to see if the employee id is valid
		
		//Get the value from the form.
			$selected_course = $this->input->post('selected_course_ID');
			$course_id = $selected_course;
			$company = $this->session->userdata('company');
			// first check if the employee has done this corse before
			
			if($this->ion_auth->check_if_already_completed($course_id, $id)){
				
				$this->session->set_flashdata('message', 'The user has ALREADY completed this course');
				
				redirect("/manager_dashboard/selected_employee_report/$id", 'refresh');
				
				};
			
			
			
			if ($this->ion_auth->add_employee_to_course($course_id, $id, $company) == TRUE){
				
				//echo '<h1>Course with ID ' .$course_id. ' has been assigned to employee with ID '.$id. '</h2>';
				$this->ion_auth->add_to_employee_result_table($course_id, $id ); // add same course to the result table 
				
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
		
	function md_test($id){
				//echo $course_id;
	  	//echo '<h1>Employee with ID '.$id.' registered on course  with ID '.$course_id.' progress page ';
	  		if($this->input->post('course_report')){ // if called by the form get the user ID from the POST
			//Get the value from the form.
			$course_report = $this->input->post('course_report');
			//$id = $selected_employee_ID;
			}
			
			if(!$this->valid_id($id)){
				
				$this->session->set_flashdata('message', ' An INVALID ID was detected');
				redirect("/manager_dashboard/employee_report", 'refresh');
				//echo '<h1> An invalid id was detected </h2>';
				return false;
				}; // check to see if the employee id is valid
				
				
			
			// if called by the refresh use the parameter as the user ID
			$this->session->userdata('edit_id', $id);
			$data['employee'] = $this->ion_auth->edit_employee($id);// employee list
			$data['courses'] = $this->ion_auth->get_courses(); // courses list
			$data['registered_courses'] = $this->ion_auth->get_registered_courses($id); // employee is registered on these courses
			$data['course_names'] = $this->ion_auth->get_registered_courses_names($id); // used to match course names
			$data['course_results'] = $this->ion_auth->get_employee_results($id, 2); // used to match course names
			
			$data['message'] = '';
			$data['error'] = '';
			$company = $this->session->userdata('company');
			
			$data['employee_list'] = $this->ion_auth->get_employee_list($company);
			
			
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			//echo $this->listview->render();
			$this->load->view('manager_dashboard_employee_report_test', $data);
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
		
		if(!$this->valid_id($id)){
				
				$this->session->set_flashdata('message', ' An INVALID ID was detected');
				redirect("/manager_dashboard/employee_report", 'refresh');
				//echo '<h1> An invalid id was detected </h2>';
				return false;
				}; // check to see if the employee id is valid
		
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

	function valid_id($id){ // checks to see if the supplied id is in the employee list
		
		$company = $this->session->userdata('company');
		$emp_id_list = $this->ion_auth->get_employee_list($company); // get a complete list fo company employees from the db
		$emp_id_array = array(); // create an array to store employee id
		foreach($emp_id_list->result() as $row){ // loop through each result and push employee id into the array
			array_push($emp_id_array, $row->id);
			};
			$number_of_employees = count($emp_id_array);
			if (in_array($id, $emp_id_array)){
				return true;
				}else{
					return false;
					
					}
		}

  function course_progress($id, $course_id){
	  
	  		//echo $course_id;
	  	//echo '<h1>Employee with ID '.$id.' registered on course  with ID '.$course_id.' progress page ';
	  		if($this->input->post('course_report')){ // if called by the form get the user ID from the POST
			//Get the value from the form.
			$course_report = $this->input->post('course_report');
			//$id = $selected_employee_ID;
			}
			
			if(!$this->valid_id($id)){
				
				$this->session->set_flashdata('message', ' An INVALID ID was detected');
				redirect("/manager_dashboard/employee_report", 'refresh');
				//echo '<h1> An invalid id was detected </h2>';
				return false;
				}; // check to see if the employee id is valid
				
				
			
			// if called by the refresh use the parameter as the user ID
			$this->session->userdata('edit_id', $id);
			$data['employee'] = $this->ion_auth->edit_employee($id);// employee list
			$data['courses'] = $this->ion_auth->get_courses(); // courses list
			$data['registered_courses'] = $this->ion_auth->get_registered_courses($id); // employee is registered on these courses
			$data['course_names'] = $this->ion_auth->get_registered_courses_names($id); // used to match course names
			$data['course_results'] = $this->ion_auth->get_employee_results($id, $course_id); // used to match course names
			
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('manager_dashboard_employee_course_progress_report_page');
			$this->load->view('templates/footer');
	  
	  }
	function mark_as_completed($id, $course_id){
		
		// add or remove the completed flag in employee_to_coursed
		if($this->ion_auth->set_remove_completed($id, $course_id)){
			
			//$this->session->set_flashdata('message', ' Completed has been changed');
			 
			redirect("/manager_dashboard/selected_employee_report/$id", 'refresh');
			
			}; // courses list
		
		
		}
	function save_completed($id, $course_id){
		
		// add or remove the completed flag in employee_to_coursed
		if($this->ion_auth->set_couses_as_completed($id, $course_id)){
			
			$this->session->set_flashdata('message', 'The employee has sucessfully completed the course');
			 
			 $this->ion_auth->archive_completed_course($course_id, $id);
			 
			 
			redirect("/manager_dashboard/selected_employee_report/$id", 'refresh');
			
			}else{
				
				$this->session->set_flashdata('message', 'The employee has not completed the course');
				redirect("/manager_dashboard/selected_employee_report/$id", 'refresh');
				}; // courses list
		
		
		}
	function 	all_employee_report_completed(){
		
			
			$data['completed_courses'] = $this->ion_auth->get_all_completed_courses(); // employee is registered on these courses
			$data['number_of_results'] = $this->ion_auth->count_all_completed_courses(); // used to match course names
			
		
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('manager_dashboard_all_employee_report_completed');
			$this->load->view('templates/footer');
		
		}		
		
	function list_completed($sort_by = NULL, $sort_order = NULL){
		
		if($this->input->post('sort_list')){ // if called by the form get the user ID from the POST
			//Get the value from the form.
			$sort_by = $this->input->post('sort_list');
			
			}
		
		
		$sort_order = ($sort_order == NULL) ? 'asc' : $sort_order;
		$sort_by = ($sort_by == NULL) ? 'last_name' : $sort_by;
		$sort_columns = array(' First Name ', 'last_name', 'course_name', 'start_date', 'end_date');
		$sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'last_name';
		
		
		$company = $this->session->userdata('company');
		$this->load->library('pagination');
		$this->load->library('table');
		$this->table->set_heading(
		
								array(
		
								' First Name ', 
								' Last Name ',
								' Course Name ', 
								' Start Date ', 
								' End Date '
								
								));
								
		$tmpl = array (
                    'table_open'          => '<table  class="table table-striped ">',

                    'heading_row_start'   => '<tr>',
                    'heading_row_end'     => '</tr>',
                    'heading_cell_start'  => '<th>',
                    'heading_cell_end'    => '</th>',

                    'row_start'           => '<tr>',
                    'row_end'             => '</tr>',
                    'cell_start'          => '<td>',
                    'cell_end'            => '</td>',

                    'row_alt_start'       => '<tr>',
                    'row_alt_end'         => '</tr>',
                    'cell_alt_start'      => '<td>',
                    'cell_alt_end'        => '</td>',

                    'table_close'         => '</table>'
              );

		$this->table->set_template($tmpl);
		
		$config['base_url'] = base_url().'/manager_dashboard/list_completed';
		$config['total_rows'] = $this->db
								->join('courses', 'courses.course_id = employee_results.course_id')
								->join('users', 'users.id = employee_results.user_id')
								->where('completed', 1)
								->where('company', $company)
								->get('employee_results')
								->num_rows();
								
		$config['per_page'] = 10;
		$config['num_links'] = 20;
		$config['full_tag_open'] = '<div class="h4 " id="pagination">';
		$config['full_tag_close'] = '</div>';
		
		
		$this->pagination->initialize($config);
		
		$data['completed_courses'] =  $this->db
										->select('first_name, last_name , course_name , start_date , end_date,  ')
										->join('courses', 'courses.course_id = employee_results.course_id')
										->join('users', 'users.id = employee_results.user_id')
										->where('completed', 1)
										->where('company', $company)
										->order_by($sort_by, $sort_order)
										->get('employee_results' ,$config['per_page'], $this->uri->segment(3));
							
								
		$data['sort_by'] = 'last_name';
		$data['sort_order'] = 'asc';
		$data['title'] = 'Set page title here';
		$this->load->view('templates/header', $data );
		$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
		$this->load->view('manager_dashboard_all_employee_report_completed_test' , $data);
		$this->load->view('templates/footer');
		
		
		
		
		}
		
		
		
		
		
		function list_completed_test($sort_by ,$sort_order ){
		
		//$sort_order = ($sort_order == NULL) ? 'desc' : 'asc';
		
		$sort_order = ($sort_order == 'desc') ? 'desc' : 'asc';
		
		
		$sort_columns = array(' First Name ', 'last_name', 'course_name', 'start_date', 'end_date');
		$sort_by = (in_array($sort_by, $sort_columns)) ? $sort_by : 'last_name';
		
		
		$company = $this->session->userdata('company');
		$this->load->library('pagination');
		$this->load->library('table');
		$this->table->set_heading(
		
								array(
		
								'<a href="' .  base_url() .'manager_dashboard/list_completed/first_name/'.(($sort_order == 'asc') ? 'desc' : 'asc').' " class="link-text-color"  > First Name </a>', 
								'<a href="' .  base_url() .'manager_dashboard/list_completed/last_name/'.(($sort_order == 'asc') ? 'desc' : 'asc').'" class="link-text-color" > Last Name </a>',
								'<a href="' .  base_url() .'manager_dashboard/list_completed/course_name/'.(($sort_order == 'asc') ? 'desc' : 'asc').'" class="link-text-color" > Course Name </a>', 
								'<a href="' .  base_url() .'manager_dashboard/list_completed/start_date/'.(($sort_order == 'asc') ? 'desc' : 'asc').'" class="link-text-color" > Start Date </a>', 
								'<a href="' .  base_url() .'manager_dashboard/list_completed/end_date/'.(($sort_order == 'asc') ? 'desc' : 'asc').'" class="link-text-color" > End Date </a>'
								
								));
								
		$tmpl = array (
                    'table_open'          => '<table  class="table table-striped ">',

                    'heading_row_start'   => '<tr>',
                    'heading_row_end'     => '</tr>',
                    'heading_cell_start'  => '<th>',
                    'heading_cell_end'    => '</th>',

                    'row_start'           => '<tr>',
                    'row_end'             => '</tr>',
                    'cell_start'          => '<td>',
                    'cell_end'            => '</td>',

                    'row_alt_start'       => '<tr>',
                    'row_alt_end'         => '</tr>',
                    'cell_alt_start'      => '<td>',
                    'cell_alt_end'        => '</td>',

                    'table_close'         => '</table>'
              );

		$this->table->set_template($tmpl);
		
		
		
		$config['base_url'] = base_url().'/manager_dashboard/list_completed/'.$sort_by.'/'.$sort_order;
		$config['total_rows'] = $this->db
								->join('courses', 'courses.course_id = employee_results.course_id')
								->join('users', 'users.id = employee_results.user_id')
								->where('completed', 1)
								->where('company', $company)
								->get('employee_results')
								->num_rows();
								
		$config['per_page'] = 10;
		$config['num_links'] = 20;
		$config['full_tag_open'] = '<div class="h4 " id="pagination">';
		$config['full_tag_close'] = '</div>';
		
		
		
		$this->pagination->initialize($config);
		
		$data['completed_courses'] =  $this->db
										->select('first_name, last_name , course_name , start_date , end_date,  ')
										->join('courses', 'courses.course_id = employee_results.course_id')
										->join('users', 'users.id = employee_results.user_id')
										->where('completed', 1)
										->where('company', $company)
										->order_by($sort_by, $sort_order)
										->get('employee_results' ,$config['per_page'], $this->uri->segment(5));
		
		
		$data['sort_by'] = 'last_name';
		$data['sort_order'] = 'asc';
		$data['title'] = 'Set page title here';
		$this->load->view('templates/header', $data );
		$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
		$this->load->view('manager_dashboard_all_employee_report_completed_test' , $data);
		$this->load->view('templates/footer');
		
		
		
		
		}		
		
//##################################################################################################################################
//#################################################################################################################################

	public function user_image_edit($id, $last_name){
		
		if(!$this->valid_id($id)){
				
				$this->session->set_flashdata('message', ' An INVALID ID was detected');
				redirect("/manager_dashboard/employee_report", 'refresh');
				//echo '<h1> An invalid id was detected </h2>';
				return false;
				}; // check to see if the employee id is valid
		
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
