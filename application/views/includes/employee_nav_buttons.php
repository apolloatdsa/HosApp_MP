<!--
* Date:2015/07/24
* Author: Thomas Delaney
* Student ID: D14126353
-->



 <div class="media-right"> <!-- div 9 -->
                                    <div class="icon-block width-150 bg-grey-150"> <!-- div 10 -->
                      <img src="<?php echo $image ?>" alt="member" class="img-circle width-80" />
                                      </div> <!-- div 10 -->
                               		<br> <label for="last_login">Last Login </label>
                                	<input class="form-control" id="last_login" type="text" name="last_login" maxlength="30"  value="<?php echo unix_to_human($last_login);   ?>" readonly />
                                 	<br> <label for="created_on">Created on </label>
                                	 <input class="form-control" id="created_on" type="text" name="created_on" maxlength="30"  value="<?php echo unix_to_human($created_on);   ?>" readonly />           
                    				<br> <label for="created_on">Folio user ID </label>
                                 	<input class="form-control" id="created_on" type="text" name="created_on" maxlength="30"  value="<?php echo $id;   ?>" readonly />          	
                                    
                                  
															</p> 
                                                              <p>


<?php 
                                                                
                                                                   echo '<a href="' .  base_url() .'manager_dashboard/employee_list  "class="navbar-btn btn btn-info"> Back to list </a>';
                                                                   
                                                                ?>
                                                                </p> 
                                                                <p>
                                                                <span>
                                                                <?php 
                                                                
                                                      echo "<a href='" .  base_url() ."manager_dashboard/selected_previous_employee/$id/$company 'class='navbar-btn btn btn-success'> <i class='fa fa-fw fa-arrow-left'> </i> Back </a>";
                                                                   
                                                                ?>
                                                                </span>
                                                                <span>  </span>
                                                                
                                                                <span>
                                                                <?php 
                                                                
                                                        echo "<a href='" .  base_url() ."manager_dashboard/selected_next_employee/$id/$company 'class='navbar-btn btn btn-success'> Next <i class='fa fa-fw fa-arrow-right'> </i></a>";
                                                                   
                                                                ?>
                                                                </span>
                                                                <br>
                                                                 <span>
                                                                <?php 
                                                                
                                                      echo "<a href='" .  base_url() ."manager_dashboard/selected_first_employee/first/$company 'class='navbar-btn btn btn-success'> <i class='fa fa-fast-backward'> </i> First  </a>";
                                                                   
                                                                ?>
                                                                </span>
                                                                <span>  </span>
                                                                
                                                                <span>
                                                                <?php 
                                                                
                                                        echo "<a href='" .  base_url() ."manager_dashboard/selected_last_employee/last/$company 'class='navbar-btn btn btn-success'>  Last <i class='fa fa-fast-forward'> </i></a>";
                                                                   
                                                                ?>
                                                                </span>
                                                                </p>  
                                                                 <p>
                                                        <?php 
                                                                
                                                                   echo "<a href='" .  base_url() ."manager_dashboard/edit/$id  'class='navbar-btn btn btn-info'> Edit employee </a>";
                                                                   
                                                                ?>
                                                                 <?php 
                                                                
                                                      echo"<a href='" .  base_url() ."manager_dashboard/manager_login_dashboard' class='navbar-btn btn btn-success'> <i class='fa fa-fw fa-arrow-left'> </i> Return to Dashboard </a>";
                                                                   
                                                                ?>
														<?php 
                                                                
                                                      echo"<a href='" .  base_url() ."manager_dashboard/contact_employee' class='navbar-btn btn btn-success'> <i class='fa fa-fw fa-pencil-square-o'> </i> Contact </a>";
                                                                   
                                                                ?>
																
                                                                 </div> <!-- div 9 -->