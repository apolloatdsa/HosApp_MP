<!--
* Date:2015/07/24
* Author: Thomas Delaney
* Student ID: D14126353
-->
<?php include('includes/blue_bar_user_header.php');?>

    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                   
                   
                    <div class="media s-container">
                        
                        <div class="media-body">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                
                                <div class="col-md-6 text-left">
                                 <h4 class="text-headline margin-none"><?php echo $this->session->userdata('company'); ?> CDN Lists here  </h4>
                                            <p class="text-subhead text-light">
                                            </p>
                                 </div>           
                                 <div class="col-md-6 text-right">
                                 <p>  <?php echo '<a href="' .  base_url() .'cdn/cdn_do_something  "class="navbar-btn btn btn-info"> Do something </a>'; ?></p> 
                                 </div>
                                 <hr> 
                                    <div class="col-md-12 col-lg-12"> 
                                    
                                    <h1>CDN Dashboard will be here</h1>
                                    
                                    <p>This is the page where we will manage our content network interface. Folio will source training videos and course content from an
                                    online content distribution network. </p>
                                    
                                    <p>All CDN API functions will be listed here. </p>
                                    
                                    <p></p>
                                 
                                                                                         
                                     <?php //$this->contacts->index(); 
								   
									//echo // $this->listview->render(); // creates the table
								   
								   ?> 
                                               
                                      
                                         
                                                   
                                         
                                         <div class="col-md-12"><h4 style="color:green" ><?php echo $this->session->flashdata('message');   ?><h4></div>
                                                     
         
                                   </div>
                                                         
                                                         
                                   
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                  
                   
                </div>
                
                
                <div class="col-md-4 col-lg-3">
                
                	<?php  include('includes/manager_dashboard_option_nav.php') ?> <!-- this is the left side option nav block menu -->
               
                </div>
            </div>
        </div>
    </div>
    