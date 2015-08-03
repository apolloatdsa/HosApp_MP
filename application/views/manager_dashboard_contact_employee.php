
<?php 

include('includes/blue_bar_user_header.php');
$company = $this->session->userdata('company');


?>

    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                   
                   
                    <div class="media s-container">
                        
                        <div class="media-body">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                <div class="col-md-12 text-left">
                                            
                                            <h4 class="text-headline margin-none"><?php echo $this->session->userdata('company'); ?> Send message to employee </h4>
                                        </div>
                                       
                                 <hr>
                                 
            <div class="col-md-9 col-lg-9"> 
            
            
            
            <?php include('includes/messages_form.php');?> <!-- This is the student message form -->
             </div>                                                      
                
             <div class="col-md-9 col-lg-9">    
                                  
                                 <?php 
                        
						 $message = $this->session->flashdata('message');
						
						 if (strpos($message,'ERROR') !== false ) {
						
                       echo '
                                <div class="panel panel-danger">
                                 <div class="panel-heading text-headline text-white "><span class="text-white text-display-1"> <i class=" fa fa-arrows-alt"  ></i> Error</div>
                                  <div class="panel-body"><h4>'.  $message .'</h4></div>
                                </div>
                        		';
								
						 }else{
							 
							if($message){ 
							 echo '
                                <div class="panel panel-success">
                                 <div class="panel-heading text-headline"><span class="text-white text-display-1"><i class="fa fa-check"></i> Success</span></div>
                                  <div class="panel-body"><h4>'.  $message .'</h4></div>
                                </div>
                        		';
										}
							 
							 
							 }
						
                        ?>  
                                         
                                    
         
           </div>
                                 
                                 
              <div class="col-md-4 col-md-offset-1"> <!-- div 8 -->
                                            <div class="media v-middle"> <!-- div 11 -->
                                  <div class="media-right"> <!-- div 9 -->
                                    <div class="icon-block width-150 bg-grey-150"> <!-- div 10 -->
                     
                                      </div> <!-- div 10 -->
                               		
                                    
                                   </div> <!-- div 9 -->
                                   
                                                       
                                            </div> <!-- div 11 -->
                                        </div>   <!-- div 8 -->                            
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                    
                                    
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
    