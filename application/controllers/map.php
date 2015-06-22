<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Author: Thomas Delaney
// Workshop: CodeIgniter MVC Webservice Assignment
// Student ID: D14126353
// Date:2015/06/09
// Ref: Examples from the following web pages were used in this assignment
// https://ellislab.com/codeigniter/user-guide/libraries/output.html
// https://ellislab.com/codeigniter/user-guide/database/queries.html
// https://ellislab.com/codeigniter/user-guide/database/active_record.html


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
			
			$this->googlemaps->add_marker($marker);
		 	$this->googlemaps->initialize($config);
			$data['map'] = $this->googlemaps->create_map();
				//echo var_dump($this->googlemaps->create_map());
		 
		 
		 
			$this->load->view('templates/header');
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
			
			$this->googlemaps->add_marker($marker);
		 	$this->googlemaps->initialize($config);
			$data['map'] = $this->googlemaps->create_map();
				//echo var_dump($this->googlemaps->create_map());
		 
		 
		 
			$this->load->view('templates/header');
			$this->ion_auth->navbar(); // calls a function in the ion auth model to return the user level navbar to use
			$this->load->view('galway_map_view',$data);
			//$this->load->view('contact_address_email_view');
			
			$this->load->view('templates/footer');
		 } 
		 
		 
	

}
