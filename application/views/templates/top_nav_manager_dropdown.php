<?php 
 
// Date:2015/07/24
// Author: Thomas Delaney
// Student ID: D14126353
// Author: Sarah Barrow
// Student	ID:	D13126793
// This is the Manager dropdown menu in the top navigation bar
// it is used as an include in the administrator / manager / member / student / instructor / public nav bars
// using an include means we only need to make one change to the menus ani it will be effected across nav bars for all user levels. 


?> 
				<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manager <span class="caret"></span></a>
                        <ul class="dropdown-menu active ">
                            <li><a href="<?php echo base_url();?>manager_dashboard/manager_login_dashboard">Manager Dashboard</a></li>
                            <li><a href="<?php echo base_url();?>manager_dashboard/company_billing_form_view">Company Profile</a></li>
                            <li><a href="<?php echo base_url();?>manager_dashboard/company_billing">Company payment</a></li>
                            <li><a href="<?php echo base_url();?>manager_dashboard/employee_list">List Employees</a></li>
                            <li><a href="<?php echo base_url();?>manager_dashboard/employee_report">Employee Progress</a></li>
                            <li><a href="<?php echo base_url();?>manager_dashboard/create_user">Add New Employee</a></li>
                            <li><a href="<?php echo base_url();?>manager_dashboard/all_employee_report_completed">Completed Courses</a></li>
                            <li><a href="<?php echo base_url();?>manager_dashboard/list_completed">Completed Courses Table View</a></li>
                            
                        </ul>
                    </li>