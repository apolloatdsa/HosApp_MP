                            <?php  // echo var_dump($employee)  ?>
                            
                            <?php 
							
							foreach($employee as $row){
								
								$first_name = $row->first_name;
								$last_name = $row->last_name;
								$email = $row->email;
								$username = $row->username;
								$last_login = $row->last_login;
								$company = $row->company;
								$phone = $row->phone;
								$department = $row->department;
								$active = $row->active;
								$created_on = $row->created_on;
								$id = $row->id;
								}
							
							
							?>
                            <div class="item col-xs-12 col-lg-9">
                            <div class="panel panel-default paper-shadow" data-z="0.5">
                                <div class="panel-heading">
                                    <div class="media v-middle">
                                        <div class="media-body">
                                            <h4 class="text-headline margin-none"><?php echo $this->session->userdata('company'); ?>Edit Employees photo</h4>
                                            <h4 class="text-subhead"><?php echo 'Editing - '.$first_name. ' '.$last_name  ?></h4>
                                        </div>
                                        <div class="media-right">
                                            <a class="btn btn-white btn-flat" href="website-instructor-earnings.html"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body"> 
                                 
                                    <!-- Table of employees here -->
                                  <div class="col-md-12">  
							
							<?php echo form_open_multipart("manager_dashboard/user_image_edit/$id/$last_name");  ?>
                            	
                                <div class="col-md-6  page-section">
                
                                    <table class="table ">
                                    
                                            <thead>
                                              <tr>
                                                <th></th>
                                                <th>Upload new photo </th>
                                               
                                              </tr>
                                            </thead>
                                            <tbody>
                                            
                                              <tr>
                                                <td> Select image to upload:</td>
                                                <td><input type="file" name="userfile" class="btn btn-warning"  /></td>
                                                
                                              </tr>
                                              <tr>
                                                <td class="active"><?php  echo $error;  ?></td>
                                                <td><input type="submit" name="submit" value="Upload image" class="btn btn-success" /></td>
                                                
                                              </tr>
                                              </tbody>
                                              </form>
                                          </table>
                                          
                                        </div>	
                                
                                
                                
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Current Photo</label>
                                        <div class="col-md-6">
                                            <div class="media v-middle">
                                  <div class="media-left">
                                    <div class="icon-block width-150 bg-grey-150">
                      <img src="<?php echo base_url();?>images/members/<?php echo $id.'-'.$last_name;?>.JPG" alt="member" class="img-circle width-80" />
                                      </div>
                                                     
                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     </form>
                                    
                                     <div class="form-group">
                                        
                                        <div class="col-md-6">
                                            
                                          <p>
						<?php 
                        
                           echo '<a href="' .  base_url() .'manager_dashboard/employee_list  "class="navbar-btn btn btn-info"> Back to list </a>';
                           
                        ?>
                        </p>     
                                 
                                            
                                        </div>
                                    </div>
                                    
                     </div>
                                 
                                 
                                 
                                </div>
                                <hr/>               
                                    
                                   
                                    
                                    
