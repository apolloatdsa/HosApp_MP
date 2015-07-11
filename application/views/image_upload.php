 <?php echo form_open_multipart('online_training/user_image_upload');  ?>
                            	
                                <div class="col-md-6  page-section">
                
                                    <table class="table ">
                                    
                                            <thead>
                                              <tr>
                                                <th></th>
                                                <th>Upload your photo </th>
                                               
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
                                        <label for="inputEmail3" class="col-sm-2 control-label">Avatar</label>
                                        <div class="col-md-6">
                                            <div class="media v-middle">
                                  <div class="media-left">
                                    <div class="icon-block width-100 bg-grey-100">
                                                        <i class="fa fa-photo text-light"></i>
                                      </div>
                                                     
                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-md-2 control-label">Full Name</label>
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="">
                                                    	<label for="user_profile_fn">First name</label>
                                                        <input type="text" class="form-control" id="user_profile_fn" placeholder="Your first name" value="<?php echo $this->session->userdata('user_first_name'); ?>">
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="">
                                                   		<label for="user_profile_ln">Last name</label>
                                                        <input type="text" class="form-control" id="user_profile_ln" placeholder="Your last name" value="<?php echo $this->session->userdata('user_last_name'); ?>">
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_profile_email" class="col-md-2 control-label">Email</label>
                                        <div class="col-md-6">
                                            <div class="">
                                                <div class="input-group">
                                                    <span class=""><i class="fa fa-envelope"> </i> </span>
                                                    <input type="email" class="form-control" id="user_profile_email" placeholder="Email" value="<?php echo $this->session->userdata('email'); ?>">
                                                    <label for="user_profile_email">Email address</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_profile_website" class="col-md-2 control-label">Website</label>
                                        <div class="col-md-6">
                                            <div class="">
                                                <div class="input-group">
                                                    <span class=""> <i class="fa fa-link"> </i> </span>
                                                    <input type="text" class="form-control used" id="user_profile_website" value="www.your_web.com">
                                                    <label for="user_profile_website">Website</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user_profile_password" class="col-md-2 control-label">Change Password</label>
                                        <div class="col-md-6">
                                            <div class="">
                                            	<label for="user_profile_password">Password</label>
                                                <input type="password" class="form-control" id="user_profile_website" placeholder="Password">
                                                
                                            </div>
                                            
                                            
                                            
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-offset-2 col-md-6">
                                            <div class="checkbox checkbox-success">
                                                <input id="checkbox3" type="checkbox" checked="">
                                                <label for="checkbox3">Subscribe to our Newsletter</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group margin-none">
                                        <div class="col-md-offset-2 col-md-10">
                                            <?php echo form_submit( 'submit', 'Submit',"class='btn btn-primary'"); ?>
                                        </div>
                                    </div>
                                <?php echo form_close(); ?>
                                
                                
                                
                            </div>