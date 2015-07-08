 <?php 
 
 
 
 ?>
 
 
       
                            <h3 class="section-heading"></h3>

            <h1><?php echo lang('create_user_heading');?></h1>
            <p><?php echo lang('create_user_subheading');?></p>
            
            <div id="infoMessage"><?php echo $message;?></div>
            
            <?php echo form_open("manager_dashboard/create_user");?>
            
                  <p>
                  
                        <?php echo 'First name';?> <br />
                        <?php echo form_input($first_name);?>
                  </p>
            
                  <p>
                        <?php echo  'Last name';?> <br />
                        <?php echo form_input($last_name);?>
                  </p>
            
                  <p>
                        <?php echo 'Company';?> <br />
                        <?php echo form_input($company);?>
                  </p>
            
                  <p>
                        <?php echo  'Email';?> <br />
                        <?php echo form_input($email);?>
                  </p>
            
                  <p>
                        <?php echo 'Phone';?> <br />
                        <?php echo form_input($phone);?>
                  </p>
            
                  <p>
                        <?php echo  'Password';?> <br />
                        <?php echo form_input($password);?>
                  </p>
            
                  <p>
                        <?php echo  'Password confirm';?> <br />
                        <?php echo form_input($password_confirm);?>
                  </p>
            
            
                  <p><?php echo form_submit('submit', 'Create user ' );?></p>
            
            <?php echo form_close();?>
            
           
            
            <?php 
                        
            echo '<a href="' .  base_url() .'manager_dashboard/employee_list  "class="navbar-btn btn btn-info"> Back to list </a>';
                           
            ?>

          
                
                