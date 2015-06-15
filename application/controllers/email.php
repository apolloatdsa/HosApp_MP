<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Author: Thomas Delaney
// Workshop: CodeIgniter MVC Webservice Assignment
// Student ID: D14126353
// Date:2015/06/09
// Ref: Examples from the following web pages were used in this assignment
// https://ellislab.com/codeigniter/user-guide/libraries/output.html
// https://ellislab.com/codeigniter/user-guide/database/queries.html
// https://ellislab.com/codeigniter/user-guide/database/active_record.html


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
	 $this->email->subject('This is a test email from HosApp website');
	 $this->email->message('This is never going to pass for a Major Project. Attachment');
	 
	 $path = $this->config->item('server_root');
	// $file = $path . '/codeigniter_h/images/learning-logo.png'; 
	//$this->email->attach($file);
	
	//echo " ". $_POST['fname'], "";
	//echo '<h1>Hello ' . $this->input($_POST["fname"]) . '!</h1>';
	
	
			
	
	
	 if($this->email->send())
	 {
		 echo '<h1> Your email was sent </h1>';
		 
		 }else{
			 
			 show_error($this->email->print_debugger());
			 
			 }
	 
			
		}
		
 
}
