<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Get_logged_in_user_info extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}


	// added by Tom Delaney	
	###############################################################################################################################################
	
	function index(){
		
		if ($this->ion_auth->logged_in()){ // if user is logged add the user level I.E. admin/ member / student / instructor .. ect to the session
			
			$id = $this->session->userdata('user_id');
			$current_user_name = $this->ion_auth->find_user_firstName($id); // get the user name
			
			foreach($current_user_name as $name){ // one record will be returned
				
				$this->session->set_userdata('user_first_name' , $name->first_name); // add first name to session
				$this->session->set_userdata('user_last_name' , $name->last_name); // add last name to session
				
				}
			
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