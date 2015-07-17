<?php

class Company_profile_model extends CI_Model {

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
       */

	function SaveForm($form_data)
	{
		
		$company_name = $form_data['company_name'];
		$query = $this->db->get_where('companies', array('company_name' => $company_name));
		if ($query->num_rows() == 0) // check if record exists
		{// no recore so just insert new
			$this->db->insert('companies', $form_data);
			if ($this->db->affected_rows() == '1')
			{
				return TRUE;
			}
		
		
		}else{
			
			$this->db->where('company_name', $company_name );
			$this->db->update('companies', $form_data);
			if ($this->db->affected_rows() == '1')
			{
				return TRUE;
			}else{
				
				// here is nothing has changed
				return FALSE;
				
				}
		
		
			
		}
		
		
	}
		
}
?>