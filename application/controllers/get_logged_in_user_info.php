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

class Get_logged_in_user_info extends CI_Controller {
	// used to get required information about the user and add to the current session
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
		
		
	}


	// added by Tom Delaney	
	###############################################################################################################################################
	
	function index(){
		
		if ($this->ion_auth->logged_in()){ // if user is logged add the user level I.E. admin/ member / student / instructor .. ect to the session
			
			$id = $this->session->userdata('user_id');
			$current_user_name = $this->ion_auth->find_user_firstName($id); // get the user name
			// function adds the user name and company name to the session use this function to add any user data to the session
			
			
			$grpNames = $this->ion_auth->get_group_name(); // get all group names from db
			$user_type=array(); // cereate array to store group names
			$gpNo=0;
			foreach ($grpNames as $row)// populate array of group names
			{
				
				array_push($user_type,$row->name );
				$this->session->set_userdata('user_type_'.$gpNo , $row->name); // creates a user type variable to store user type and adds to session
				$gpNo++;
			}
			
			$id = $this->session->userdata('user_id'); // get the user id from the session and use it as the WHERE in the group db query
			$userGroup = $this->ion_auth->find_user_group($id); // brings back one or more rows depending on how many groups the user is in
			
			$key = 0;
			foreach ($userGroup->result() as $row)// for each returned row
			{
				$data['group_'.$key] =  $row->group_id; // creates a group type variable 
				$key++;
			}
			
			
			$data['user_id'] =  $this->session->userdata('user_id');
			$data['user_identity'] =  $this->session->userdata('identity');
			$data['user_name'] =  $this->session->userdata('username');
			$data['user_email'] =  $this->session->userdata('email');
			
			
			
			}
		
		}
		
	// end Tom Delaney edit	
	#####################################################################################################################
}
?>	