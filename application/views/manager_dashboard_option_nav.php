<?php $id = $this->session->userdata('user_id');?>
 <div class="panel panel-default" data-toggle="panel-collapse" data-open="true">
                        <div class="panel-heading panel-collapse-trigger">
                            <h4 class="panel-title">Actions</h4>
                        </div>
                        <div class="panel-body list-group">
                            <ul class="list-group list-group-menu">
                            	<li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>manager_dashboard/employee_list">List employees</a></li>
                                
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>manager_dashboard/create_user">Add new employee</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>manager_dashboard/employee_report">Select Employee</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="#">Select course</a></li>
                                <li class="list-group-item"><a class="link-text-color" href="#"><span>Another option here</span></a></li>
                                <li class="list-group-item"><a class="link-text-color" href="#"><span>Another option here</span></a></li>
                                <li class="list-group-item"><a class="link-text-color" href="#"><span>Another option here</span></a></li>
                                <li class="list-group-item"><a class="link-text-color" href="#"><span>Another option here</span></a></li>
                                <li class="list-group-item"><a class="link-text-color" href="#"><span>Another option here</span></a></li>
                                <li class="list-group-item"><a class="link-text-color" href="#"><span>Another option here</span></a></li>
                                <li class="list-group-item"><a class="link-text-color" href="#"><span>Another option here</span></a></li>
                                <li class="list-group-item"><a class="link-text-color" href="<?php echo base_url();?>manager_dashboard/company_billing_form_view"><span>Logout</span></a></li>
                                
                                
                                
                            </ul>
                        </div>
                    </div>