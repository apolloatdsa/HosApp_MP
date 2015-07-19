<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit_user_model extends CI_Model {

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
		$this->db->insert('user', $form_data);
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}

}
?>