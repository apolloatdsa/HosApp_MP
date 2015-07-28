


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
               <h1><?php echo lang('change_password_heading');?></h1>

                    <div id="infoMessage"><?php echo $message;?></div>
                    
                    <?php echo form_open("auth/change_password");?>
                    
                          <p>
                                <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
                                <?php echo form_input($old_password);?>
                          </p>
                    
                          <p>
                                <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
                                <?php echo form_input($new_password);?>
                          </p>
                    
                          <p>
                                <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
                                <?php echo form_input($new_password_confirm);?>
                          </p>
                    
                          <?php echo form_input($user_id);?>
                          <p><?php echo form_submit('submit', lang('change_password_submit_btn'));?></p>
                    
                    <?php echo form_close();?>





               					</div>
                            </div>
                        </div>
                    </div>
              
              
              
              
              
              
                </div>
                
                
                <div class="col-md-4 col-lg-3">
                
                	<?php  include('admin_dashboard_option_nav.php') ?> <!-- this is the right side option nav block menu -->
               
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