<?php

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