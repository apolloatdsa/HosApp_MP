<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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

class Course_access extends CI_Controller {
	
	// used to controll access to course material 
	 public function __construct()
        {
                parent::__construct();
				//session_start();
				
				if (!$this->ion_auth->logged_in()){ // user has to be logged in to access 
					
	 					//redirect them to the login page
					$data['title'] = 'Set page title here';
					$this->load->view('templates/header', $data );
					$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
					redirect('auth/login', 'refresh'); // go back to login page if not logged on or unsuccessful log in
					//$this->load->view('templates/footer');
					 
					 };
				
              
				$this->load->library(array('ion_auth','form_validation'));
				$this->load->helper(array('url','language'));
				$this->lang->load('auth');
				//$this->login_index();
				//$this->index();
        }
		

	 
	 public function index()
	{
  			
		
		}
	 
	public function select($course_id, $id){
			
			$data['selected_course'] = $this->ion_auth->get_display_course($course_id);
			//print_r($data['course_list']->result());
			$data['course_id'] = $course_id;
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('course_display_view');
			$this->load->view('templates/footer');
		
		
		}
	
			 
			 
			 
			 	 	 	 
			 
//#################################################################################################


	 

}
