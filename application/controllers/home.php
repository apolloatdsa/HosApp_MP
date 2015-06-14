<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	 
	 public function __construct()
        {
                parent::__construct();
                $this->load->model('Hair_Model'); // calls the model class name //
        }
		
		
		
		
	 
	 public function index()
	{
      
		//$data['active'] = $this->Appointment_Model->get_Active_appoM_list();
		
		$data['gender_count'] = $this->Hair_Model->getGenderCount(); // use the class name to calls the function in the Module
		//echo var_dump($data['gender_count']);
		
		$data['hairstyle_count'] = $this->Hair_Model->getHairstyleCount();
		//echo var_dump($data['hairstyle_count']);
		
		$data['people_count'] = $this->Hair_Model->getPeopleCount();
		//echo var_dump($data['people_count']);
		
		$data['more_than_one'] = $this->Hair_Model->getHairstyleMoreThanOne();
		//echo var_dump($data['more_than_one']);
		
		$data['like_b'] = $this->Hair_Model->getLike();
		//echo var_dump($data['like_b']);
		
		$data['people'] = $this->Hair_Model->getPeople();
		//echo var_dump($data['people']);
		
		$data['gender'] = $this->Hair_Model->getGender();
		//echo var_dump($data['gender']);
		
		$data['hairstyle'] = $this->Hair_Model->getHairstyle();
		//echo var_dump($data['hairstyle']);
		
		$data['genderType'] = $this->Hair_Model->getGenderType();
		//echo var_dump($data['genderType']);
		
		$data['combined'] = $this->Hair_Model->getCombined();
		//echo var_dump($data['combined']);
		
		$this->home_page();
		
		}
	 
	 
	
	 
	 
	 
	 public function edit_app(){
		 
		 $this->form_validation->set_rules('id', 'ID', 'required|min_length[1]|max_length[5]');
		 echo validation_errors();
		$id = $this->input->post('id');
		 
		 	//Transfering data to Model
				$this->Appointment_Model->delete_inactive($id);
				$this->load->view('templates/header');
				$this->load->view('success');
				$this->load->view('templates/footer' );
			
		 }
		 
		 
	public function toggle_active_app(){
		
		//echo "The index of the foreach is  ".$this->i;
		
		$id =  $this->input->post('id');
		$st =  $this->input->post('active');
		//echo $st;
		
		//Transfering data to Model
				$this->Appointment_Model->active_inactive($id, $st); // call function in Model
				
			$this->load->view('templates/header');
			$this->load->view('success');
			$this->load->view('templates/footer' );
			
		}	 
		
	 
	  public function check_addApp(){
		  
		 // echo "Check form function";
		 
		 $this->form_validation->set_rules('firstName', 'First Name', 'required|min_length[1]|max_length[15]');
		 $this->form_validation->set_rules('lastName', 'Last Name', 'required|min_length[1]|max_length[15]');
		 $this->form_validation->set_rules('details', 'Details text', 'required|min_length[1]|max_length[250]');
		$this->form_validation->set_rules('time', 'Appointment time', 'required');
		 
		 
		 
		 if($this->form_validation->run() == false){
			 
			 $data = array(
					'firstName' => $this->input->post('firstName'),
					'lastName' => $this->input->post('lastName'),
					'details' => $this->input->post('details'),
					'time' => $this->input->post('time')
					);
			 
			 $this->load->view('templates/header');
			$this->load->view('errors', $data);
			$this->load->view('templates/footer' );
			 
			// echo "Validation of the form run and is false. <br />";
			// echo validation_errors();
			 
			 }else{
				
				$data = array(
					'firstName' => $this->input->post('firstName'),
					'lastName' => $this->input->post('lastName'),
					'details' => $this->input->post('details'),
					'time' => $this->input->post('time')
					);
				
				//Transfering data to Model
				$this->Appointment_Model->form_insert($data);
				$this->load->view('templates/header');
				$this->load->view('success', $data);
				$this->load->view('templates/footer' );
				
				 }
		 
		 
		 }
		 
		 
		 public function home_page(){
			 
			 echo "This is the HOME page ";
			 
			  	//$this->load->view('templates/header');
				//$this->load->view('templates/navbar');
				///$this->load->view('body');
				//$this->load->view('templates/footer' );
			 
			 
			 }
		 
		 
		 
		 
		 public function login_page(){
			 
			 echo "Login page";
			 
			  	//$this->load->view('templates/header');
				//$this->load->view('templates/navbar');
				//$this->load->view('login');
				//$this->load->view('templates/footer' );
			 
			 
			 }
	 

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */