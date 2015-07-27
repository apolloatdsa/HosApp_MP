<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Author: Thomas Delaney
// Student ID: D14126353
// Author: Sarah Barrow
// Student	ID:	D13126793
// Workshop: CodeIgniter MVC Webservice Assignment

// Date:2015/06/09
// Ref: Examples from the following web pages were used in this assignment
// https://ellislab.com/codeigniter/user-guide/libraries/output.html
// https://ellislab.com/codeigniter/user-guide/database/queries.html
// https://ellislab.com/codeigniter/user-guide/database/active_record.html
// http://code.tutsplus.com/articles/30-awesome-codeigniter-tutorials-for-all-skill-levels--net-16915

class Email extends CI_Controller {
	 
	 public function __construct()
        {
                parent::__construct();
		
        }
		

	 
	 public function index()
	{
    
	 
	 $this->load->library('email');// picks up the config info from the config/email.php
	 $this->email->set_newline("\r\n");
	 
	 $this->email->from('thomas.delaney@webinnovate.com','Tom Delaney');
	 $this->email->to('hosappdsa@gmail.com');
	 $this->email->subject('Test');
	 $this->email->message('Test');
	 
	 $path = $this->config->item('server_root');
	// $file = $path . '/codeigniter_h/images/learning-logo.png'; 
	//$this->email->attach($file);
	
	//echo " ". $_POST['fname'], "";
	//echo '<h1>Hello ' . $this->input($_POST["fname"]) . '!</h1>';
	
	
			
	
	
	 if($this->email->send())
	 {
		 echo '<h1> Your email was sent again </h1>';
		 
		 }else{
			 
			 show_error($this->email->print_debugger());
			 
			 }
	 
			
		}
		
 
}
