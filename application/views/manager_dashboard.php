<?php 

// Date:2015/07/24
// Author: Thomas Delaney
// Student ID: D14126353
// Author: Sarah Barrow
// Student	ID:	D13126793
// Major Project: CodeIgniter MVC framework for Folio LMS website. 
// Used in manager dashboard as the list users page

?>
<?php include('blue_bar_user_header.php'  );?> <!-- includes the large blue bar with user image and level -->

    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                   
                   
                    <div class="media s-container">
                        
                        <div class="media-body">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                
                                <div class="col-md-6 text-left">
                                 <h4 class="text-headline margin-none"><?php echo $this->session->userdata('company'); ?> Employee List </h4>
                                            <p class="text-subhead text-light">
                                            </p>
                                 </div>           
                                 <div class="col-md-6 text-right">
                                 <p>  <?php echo '<a href="' .  base_url() .'manager_dashboard/create_user  "class="navbar-btn btn btn-info"> Add New Employee </a>'; ?></p> 
                                 </div>
                                 <hr> 
                                    <div class="col-md-12 col-lg-12"> 
                                                                                         
                                     <?php //$this->contacts->index(); 
								   
									echo $this->listview->render(); // creates the user list table with edit links 
								   
								   ?> 
                                    
                                         <div class="col-md-12"><h4 style="color:green" ><?php echo $this->session->flashdata('message');   ?><h4></div>
                                                     
         
                                   </div>
                                  
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                  
                   
                </div>
                
                
                <div class="col-md-4 col-lg-3">
                
                	<?php  include('manager_dashboard_option_nav.php') ?> <!-- this is the right side option nav block menu -->
               
                </div>
            </div>
        </div>
    </div>
    