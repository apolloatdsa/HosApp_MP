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