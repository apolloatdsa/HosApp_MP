<!--
* Date:2015/07/24
* Author: Thomas Delaney
* Student ID: D14126353
-->


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
                          
                                 	<h1><?php echo lang('edit_group_heading');?></h1>
                                    <p><?php echo lang('edit_group_subheading');?></p>
                                    
                                    <div id="infoMessage"><?php echo $message;?></div>
                    
                                    <?php echo form_open(current_url());?>
                                    
                                          <p>
                                                <?php echo lang('edit_group_name_label', 'group_name');?> <br />
                                                <?php echo form_input($group_name);?>
                                          </p>
                                    
                                          <p>
                                                <?php echo lang('edit_group_desc_label', 'description');?> <br />
                                                <?php echo form_input($group_description);?>
                                          </p>
                                    
                                          <p><?php echo form_submit('submit', lang('edit_group_submit_btn'));?></p>
                                    
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