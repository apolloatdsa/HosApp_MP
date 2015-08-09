<!--
* Date:2015/07/24
* Author: Thomas Delaney
* Student ID: D14126353
-->

<?php    

$attributes = array('class' => '', 'id' => '');
echo form_open('message_controller', $attributes); ?>



<p>
        <label  for="to">to <span class="required">*</span></label>
        <?php echo form_error('to_id'); ?>
        
        <?php // Change the values in this array to populate your dropdown as required ?>
        <?php 
		
		$loggin_user = $this->session->userdata('user_id');
		$options = array(); 
								
						foreach($employee_list->result() as $row){
							
							if ($loggin_user != $row->id){	// exclude current user from the list
							// create key and value to store in the options array	
							$key = $row->id;
							$value = $row->first_name. ' '. $row->last_name	; 
							
							$options[$key] = $value; // build options array with list of user for the company
							}			
								}				
												
												?>

        <br /><?php echo form_dropdown('to_id', $options, set_value('to_id'),"class='form-control'")?>
</p>                                             
                        
<p>
        <label for="message">message <span class="required">*</span></label>
	<?php echo form_error('message'); ?>
	<br />
							
	<?php echo form_textarea( array( 'name' => 'message', 'rows' => '15', 'cols' => '50', 'value' => set_value('message') ),"class='form-control'" )?>
</p>

 
<p>
        <?php echo form_submit( 'submit', 'Submit',"class='btn btn-primary'"); ?>
</p>

<?php echo form_close(); ?>
