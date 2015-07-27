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

class Student_card_update_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	// --------------------------------------------------------------------

      /** 
       * function SaveForm()
       *
       * insert form data
       * @param $form_data - array
       * @return Bool - TRUE or FALSE
	   * inserted by Tom Delaney using formigniter form generator
       */

	function SaveForm($form_data)
	{
		$user = $this->session->userdata('user_id');
		$query = $this->db->get_where('payment', "user_id = $user");
		if ($query->num_rows() == 0) // check if record exists
		{// start if there is a record just update if not then add new
		
			//	here if there is no recore	
			$form_data['user_id']=$this->session->userdata('user_id');
			$this->db->insert('payment', $form_data);
			//echo var_dump($this->session->all_userdata());
			if ($this->db->affected_rows() == '1')
			{
				return TRUE;
			}
			
			return FALSE;
		
		} // if record exists
		else
		{
			// Here if there is a record
			$this->db->update('payment', $form_data, "user_id = $user");
			
			if ($this->db->affected_rows() >= '1')
			{
				return TRUE;
			}
				return FALSE;
		}// end else 
		
		
		
	}// end function 

	function getPayment()
	{
		
		$user = $this->session->userdata('user_id');
		$query = $this->db->get_where('payment', "user_id = $user");
		
		return $query->result();
		
		
		
	}

	// Mask credit card numbers in view
	function mask_cc($student_card_number, $mask_char='*')
									{
										return preg_replace("/[^- ]/", $mask_char, substr($student_card_number,0,-4)) . substr($student_card_number,-4);
									}


}
?>