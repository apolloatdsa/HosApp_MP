
    <div class="page-section bg-white">
        <div class="container">
           <div class="  margin-none" style="height: 600px;">
        
        <div class="parallax-layer overlay overlay-full overlay-bg-white bg-transparent" data-opacity="true" data-speed="8">
            <div >
                <div class="col-md-12  page-section">
               <h4> Session variables used by this project</h4>
                <hr>
                
                <?php 	echo var_dump($this->session->all_userdata());  ?> 
                
               <hr>
                
               
                
				<?php 	$sess = ($this->session->all_userdata());  ?> 
					
					<div class="container">
                    <div class="col-md-6 ">
                      <h2>Your session info</h2>
                                
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Variable</th>
                            <th>Data</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>IP Address</td>
                            <td><?php 	if($this->session->userdata('ip_address')){echo " " . $sess['ip_address']. " <br>" ;};?></td>
							
                            
                          </tr>
                          <tr>
                            <td>Identity</td>
                            <td>
                            <?php 	if($this->session->userdata('identity')){echo " " . $sess['identity']. " <br>" ;};?></td>
							
                            
                          </tr>
                          <tr>
                            <td>User name</td>
                            <td>
							<?php 	if($this->session->userdata('username')){echo " " . $sess['username']. " <br>" ;};?></td>
							
                            
                          </tr>
                          <tr>
                            <td>First Name</td>
                           
                            <td> <?php 	if($this->session->userdata('user_first_name')){echo " " . $sess['user_first_name']. " <br>" ;};?></td>
                            
                          </tr>
                          <tr>
                            <td>Last Name</td>
                            <td><?php 	if($this->session->userdata('user_last_name')){echo " " . $sess['user_last_name']. " <br>" ;};?></td>
							
                            
                          </tr>
                          <tr>
                            <td>User ID</td>
                            <td><?php 	if($this->session->userdata('user_id')){echo " " . $sess['user_id']. " <br>" ;};?></td>
							
                            
                          </tr>
                          <tr>
                            <td>User Level is </td>
                            <td><?php	if($this->session->userdata('admin')){echo " " . $sess['admin']. " <br>" ;};?></td>
				
                          </tr>
                          <tr>
                            <td>User Level is </td>
                            <td><?php 	if($this->session->userdata('instructor')){echo " " . $sess['instructor']. " <br>" ;};?></td>
                            
                          </tr>
                          <tr>
                            <td>User Level is </td>
                            <td><?php	if($this->session->userdata('manager')){echo " " . $sess['manager']. " <br>" ;};?>	</td>
                            
                          </tr>
                          <tr>
                            <td>User Level is </td>
                            <td><?php	if($this->session->userdata('student')){echo " " . $sess['student']. " <br>" ;};?></td>
                            
                          </tr>
                          <tr>
                            <td>User Level is </td>
                            <td><?php	if($this->session->userdata('member')){echo " " . $sess['member']. " <br>" ;};	?></td>
                            
                          </tr>
                           <tr>
                            <td></td>
                            <td>
                            
                            </td>
                            
                          </tr>
                          
                        </tbody>
                      </table>
                      </div>	
                      
                <div class="col-md-6 ">
                    <hr>
                    <h4>Database table</h4>
                    <hr>
                
                      
                      
                </div>    
               <div class="col-md-6 ">
                    <hr>
                    <h4>Database table</h4>
                    <hr>
                
                      
                      
                </div>           
                <div class="col-md-6 ">
                    <hr>
                    <h4>Database table</h4>
                    <hr>
                
                      
                      
                </div>          
                <div class="col-md-6 ">
                    <hr>
                    <h4>Database table</h4>
                    <hr>
                
                      
                      
                </div>          
                <div class="col-md-6 ">
                    <hr>
                    <h4>Database table</h4>
                    <hr>
                
                      
                      
                </div>
                          
                    </div>	
                    
                    
                    
                    

                </div>
            </div>
        </div>
    </div>
    
           
        </div>
    </div>
   
    
    

   