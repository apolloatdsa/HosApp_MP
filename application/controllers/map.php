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


class Map extends CI_Controller {
	 
	 public function __construct()
        {
                parent::__construct();
				//session_start();
				$this->load->library('googlemaps');
				
				
        }
		
	 public function index()
		{
		
  				
		}
	 
	 
	 public function location_map(){
		 
		 	$config = array();
			$config['center'] = 'Dublin, Ireland';
			$config['zoom'] = '13';
			
			$marker = array();
			$marker['position'] = 'Digital Exchange Building Crane St Dublin 8 , Ireland';
			$marker['infowindow_content'] = 'Folio Dublin office';
			
			$this->googlemaps->add_marker($marker);
		 	$this->googlemaps->initialize($config);
			$data['map'] = $this->googlemaps->create_map();
				//echo var_dump($this->googlemaps->create_map());
		 
		 
		 
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('dublin_map_view',$data);
			//$this->load->view('contact_address_email_view');
			
			$this->load->view('templates/footer');
		 }
		 
		public function galway_location_map(){
		 
		 	$config = array();
			$config['center'] = 'Galway, Ireland';
			$config['zoom'] = '13';
			
			$marker = array();
			$marker['position'] = 'Galway Technology Centre Mervue Galway , Ireland';
			$marker['infowindow_content'] = 'Folio Galway office';
			
			$this->googlemaps->add_marker($marker);
		 	$this->googlemaps->initialize($config);
			$data['map'] = $this->googlemaps->create_map();
				//echo var_dump($this->googlemaps->create_map());
		 
		 
		 
			$data['title'] = 'Set page title here';
			$this->load->view('templates/header', $data );
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('galway_map_view',$data);
			//$this->load->view('contact_address_email_view');
			
			$this->load->view('templates/footer');
		 } 
		 
		 
	

}
