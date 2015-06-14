<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products_Model extends CI_Model {

        public function __construct()
        {
                parent ::__construct();
				//$this->load->database();
        }
		
		
		public function getProducts($id) // the function
		{
		
		if($id === null){ // get all products if no parameter (id) is sent 
			
				$this->db->order_by('products_id');
				$query = $this->db->get('products'); // gets the whole table and returns an array of colums and rows
			   	if($query->num_rows() > 0){
				   
				return $query->result(); // if the bd contains products return the result array 
			
				}else{
			
					return "No product description found"; // no products in the data base.
			
					} // end if 
			
			
		}else{ // do this if a parameter is used -- even if an invalid ID was supplied
			
				$this->db->order_by('products_id');
				$query = $this->db->get_where('products', array('products_id' => $id)); // gets the product with the matching id
       
	   			if($query->num_rows() > 0){ // there are products to return
		   
				return $query->result(); // the table array 
				}else{
					
					return "Your search ID does not match any products in the file. Please ckeck and try again.";
			
					} // end if if($query->num_rows() > 0)
			
			}// end else
		
		}// function getProducts($id)
		
		
		public function getProductsDesc($sku) // the function
		{
		
		if($sku === null){ // get all products if no parameter (SKU) is sent 
			
				$this->db->order_by('products_id');
				$query = $this->db->get('products_description'); // gets the whole table and returns an array of colums and rows
			   	if($query->num_rows() > 0){
				   
				return $query->result(); // if the bd contains products return the result array 
			
				}else{
			
					return "No product description found"; // no products in the data base.
			
					} // end if 
			
			
		}else{ // do this if a parameter is used -- even if an invalid SKU was supplied
			
				$this->db->order_by('products_id');
				$query = $this->db->get_where('products_description', array('sku' => $sku)); // gets the product with the matching sku
       
	   			if($query->num_rows() > 0){ // there are products to return
		   
				return $query->result(); // the table array 
				}else{
					
					return "Your search SKU does not match any products in the file. Please ckeck and try again.";
			
					} // end if if($query->num_rows() > 0)
			
			}// end else
		
		}// function getProductsDesc($sku)
			
} // end Product_Model class