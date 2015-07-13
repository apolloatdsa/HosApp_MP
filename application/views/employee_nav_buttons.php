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
                                                                
						