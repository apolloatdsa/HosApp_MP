<!--
* Date:2015/07/24
* Author: Thomas Delaney
* Student ID: D14126353
-->

<body class="login">


 <section id="admin_page_1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8  col-lg-offset-2 text-center">
                    <h3 class="section-heading"></h3>

 </div>
                
            </div>
           
        </div>
        
  </section>

    <section id="admin_page_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8   text-center">
                
                <div class="media s-container">
                        
                        <div class="media-body">
                            <div class="panel panel-default">
                                <div class="panel-body">
                
                
                
                 <h3 class="section-heading"></h3>
                 
             
                 
             <h1><?php echo lang('edit_user_heading');?></h1>
            <p><?php echo lang('edit_user_subheading');?></p>
            
            <div id="infoMessage"><?php echo $message;?></div>
            
            <?php echo form_open(uri_string());?>
            
                  <p>
                        <?php echo lang('edit_user_fname_label', 'first_name');?> <br />
                        <?php echo form_input($first_name);?>
                  </p>
            
                  <p>
                        <?php echo lang('edit_user_lname_label', 'last_name');?> <br />
                        <?php echo form_input($last_name);?>
                  </p>
                  
            		 <p>
                        <?php echo lang('edit_user_email_label', 'email');?> <br />
                        <?php echo form_input($email);?>
                  </p>
                  
                  <p>
                        <?php echo lang('edit_user_company_label', 'company');?> <br />
                        <?php echo form_input($company);?>
                  </p>
            
                  <p>
                        <?php echo lang('edit_user_phone_label', 'phone');?> <br />
                        <?php echo form_input($phone);?>
                  </p>
            
                  <p>
                        <?php echo lang('edit_user_password_label', 'password');?> <br />
                        <?php echo form_input($password);?>
                  </p>
            
                  <p>
                        <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
                        <?php echo form_input($password_confirm);?>
                  </p>
            
                 
                
                      <p><?php echo form_submit('submit', lang('edit_user_submit_btn'));?></p>
                
                <?php echo form_close();?>
                
                <p> | <?php echo anchor('auth/index', lang('back_to_index'))?> |</p> 

                
                

               					</div>
                            </div>
                        </div>
                    </div>
              
                </div>
                
                
                <div class="col-md-4 col-lg-3">
                
                	<?php  include('includes/admin_dashboard_option_nav.php') ?> <!-- this is the right side option nav block menu -->
               
                </div>
                
                
                
                
            </div> <!-- end of row -->
           
        </div>
        
    </section>
    
    
    <section id="admin_page_3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8  col-lg-offset-2 text-center">
                    <h3 class="section-heading"></h3>

 </div>
                
            </div>
           
        </div>
        
  </section>