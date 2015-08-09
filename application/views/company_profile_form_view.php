<!--
* Date:2015/07/24
* Author: Thomas Delaney
* Student ID: D14126353
-->

<?php include('includes/blue_bar_user_header.php');?>
<?php 
//print_r($company_info->result()); 
$session_company_name = $this->session->userdata('company');

foreach($company_info->result() as $row){
	
	$company_id			= $row->company_id;			
	$company_name   	= $row->company_name;
	$address_1			= $row->address_1;
	$address_2			= $row->address_2;
	$company_city		= $row->company_city;
	$company_country	= $row->company_country;
	$company_phone		= $row->company_phone;
	$company_email		= $row->company_email;
	$company_contact 	= $row->company_contact;
	$company_vat		= $row->company_vat;
	$company_reg		= $row->company_reg;
	$company_position	= $row->company_position;
	$company_num_emp	= $row->company_num_emp;
	
	};      


?>

<div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9  panel panel-default ">
					<div   class=" col-md-8 col-md-offset-3  panel-body">
                    
 

 <div ><h2>Update company information</h2> 
 <h4>Please contact us if you wish to change your company name.</h4> 


 <?php 
                        
						 $message = $this->session->flashdata('company_profile_update');
						
						 if (strpos($message,'error') !== false) {
						
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
  <hr>
                    
<?php // Change the css classes to suit your needs    

$attributes = array('class' => 'form-group form-inline', 'id' => 'company_profile');
echo form_open('company_profile_controller', $attributes); ?>

<p>
        <label for="company_name">Company Name <span class="required">*</span></label>
        <?php echo form_error('company_name'); ?>
        <br /><input id="company_name" type="text" class="form-control form-horizontal" name="company_name" maxlength="30" value="<?php echo $session_company_name  ?><?php echo set_value('company_name'); ?>" readonly />
</p>

<p>
        <label for="address_1">Address  <span class="required">*</span></label>
        <?php echo form_error('address_1'); ?>
        <br /><input id="address_1" type="text" class="form-control"  name="address_1" maxlength="30" value="<?php echo $address_1  ?><?php echo set_value('address_1'); ?>"  />
</p>

<p>
        <label for="address_2">Town </label>
        <?php echo form_error('address_2'); ?>
        <br /><input id="address_2" type="text" class="form-control"  name="address_2" maxlength="30" value="<?php echo $address_2  ?><?php echo set_value('address_2'); ?>"  />
</p>

<p>
        <label for="company_city">City <span class="required">*</span></label>
        <?php echo form_error('company_city'); ?>
        <br /><input id="company_city" type="text" class="form-control"  name="company_city" maxlength="30" value="<?php echo $company_city  ?><?php echo set_value('company_city'); ?>"  />
</p>

<p>
        <label for="company_country">Country <span class="required">*</span></label>
        <?php echo form_error('company_country'); ?>
        <br /><input id="company_country" type="text" class="form-control"  name="company_country" maxlength="30" value="<?php echo $company_country  ?><?php echo set_value('company_country'); ?>"  />
</p>

<p>
        <label for="company_phone">Phone No# <span class="required">*</span></label>
        <?php echo form_error('company_phone'); ?>
        <br /><input id="company_phone" type="text" class="form-control"  name="company_phone" maxlength="15" value="<?php echo $company_phone  ?><?php echo set_value('company_phone'); ?>"  />
</p>

<p>
        <label for="company_email">Contact Email <span class="required">*</span></label>
        <?php echo form_error('company_email'); ?>
        <br /><input id="company_email" type="text" class="form-control"  name="company_email" maxlength="30" value="<?php echo $company_email  ?><?php echo set_value('company_email'); ?>"  />
</p>

<p>
        <label for="company_contact">Contact person <span class="required">*</span></label>
        <?php echo form_error('company_contact'); ?>
        <br /><input id="company_contact" type="text" class="form-control"  name="company_contact" maxlength="30" value="<?php echo $company_contact  ?><?php echo set_value('company_contact'); ?>"  />
</p>

<p>
        <label for="company_vat">Vat No# <span class="required">*</span></label>
        <?php echo form_error('company_vat'); ?>
        <br /><input id="company_vat" type="text" class="form-control"  name="company_vat" maxlength="15" value="<?php echo $company_vat  ?><?php echo set_value('company_vat'); ?>"  />
</p>

<p>
        <label for="company_reg">Co Reg No# <span class="required">*</span></label>
        <?php echo form_error('company_reg'); ?>
        <br /><input id="company_reg" type="text" class="form-control"  name="company_reg" maxlength="15" value="<?php echo $company_reg  ?><?php echo set_value('company_reg'); ?>"  />
</p>

<p>
        <label for="company_position">Your roll / position <span class="required">*</span></label>
        <?php echo form_error('company_position'); ?>
        <br /><input id="company_position" type="text" class="form-control"  name="company_position" maxlength="30" value="<?php echo $company_position  ?><?php echo set_value('company_position'); ?>"  />
</p>

<p>
        <label for="company_num_emp">The number of employees <span class="required">*</span></label>
        <?php echo form_error('company_num_emp'); ?>
        <br /><input id="company_num_emp" type="text"  class="form-control" name="company_num_emp" maxlength="11" value="<?php echo $company_num_emp  ?><?php echo set_value('company_num_emp'); ?>"  />
</p>


<p>
        <?php echo form_submit( 'submit', 'Submit'); ?>
</p>

<?php echo form_close(); ?>
<p>
</p>
									</div>
                                    
								</div>
                                
                                            <div class="col-md-3">
                   
                     <?php  include('includes/manager_dashboard_option_nav.php') ?> <!-- this is the left side option nav block menu -->
                    
                    
                    <h4>Featured</h4>
                    <div class="slick-basic slick-slider" data-items="1" data-items-lg="1" data-items-md="1" data-items-sm="1" data-items-xs="1">
                        <div class="item">
                            <div class="panel panel-default paper-shadow" data-z="0.5" data-hover-z="1" data-animated>
                                <div class="panel-body">
                                    <div class="media media-clearfix-xs">
                                        <div class="media-left">
                                            <div class="cover width-90 width-100pc-xs overlay cover-image-full hover">
                                                <span class="img icon-block s90 bg-default"></span>
                                                <span class="overlay overlay-full padding-none icon-block s90 bg-default">
                                                    <span class="v-center">
                                                        <i class="fa fa-github"></i>
                                                    </span>
                                                </span>
                                                <a href="website-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                                                    <span class="v-center">
                                                    <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-graduation-cap"></i></span>
                                                     </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading margin-v-5-3"><a href="website-course.html">Github Webhooks for Beginners</a></h4>
                                            <p class="small margin-none">
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                                <span class="fa fa-fw fa-star-o text-yellow-800"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    
                </div>         
                                
              
                                
							</div> <!-- row  -->
                           
						</div> <!-- page section  -->
                 
                            
                        
                        
                        
                        
                        
                        
                        
                        
					</div> <!-- container  -->
                    
                    
                    
              
                    
                    