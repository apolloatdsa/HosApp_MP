<?php
 
foreach($print_course_certificate->result() as $row){
	
	$course_name = $row->course_name;
	$first_name = $row->first_name;
	$last_name = $row->last_name;
	$id = $row->user_id;
	}



?>

    <div class="parallax bg-white page-section third">
        <div class="container parallax-layer" data-opacity="true">
            <div class="media v-middle media-overflow-visible">
                <div class="media-left">
                    <span class="icon-block s30 bg-lightred"><i class="fa fa-github"></i></span>
                </div>
                <div class="media-body">
                    <div class="text-headline">Print Certificate</div>
                </div>
                <div class="media-right">
                   
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-section padding-top-none">
                        <div class="media v-middle">
                            <div class="media-body">
                                <h1 class="text-display-1 margin-none">Print certificate for <?php echo $course_name ?></h1>
                                <p class="text-subhead text-light">Information on the certificate here.</p>
                            </div>
                           
                        </div>
                    </div>
                    <div class="panel panel-default paper-shadow"  data-z="0.5">
                        <ul class="list-group">
                            <li class="list-group-item media v-middle">
                                <div class="media-left">
                                    <div class="icon-block half img-circle bg-grey-300">
                                        <i class="fa fa-file-text text-white"></i>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <h4 class="text-subhead margin-none">
                                        <a href="website-course-forum-thread.html" class="link-text-color">Well earned certificate below?</a>
                                    </h4>
                                    <div class="text-light text-caption">
                                        Course completed by <?php echo $first_name. ' '. $last_name    ?>
                                        <a href="#">
                                            <img src="<?php echo base_url();?>images/members/<?php echo $id.'-'.$last_name;?>.JPG" alt="member" class="img-circle width-40" /> </a> &nbsp; | 
                                    </div>
                                </div>
                                <div class="media-right">
                                <span> <?php 
                                                                
                                                      echo"<a href='" .  base_url() ."manager_dashboard/manager_login_dashboard' class='navbar-btn btn btn-success'> <i class='fa fa-fw fa-arrow-left'> </i> Return to Dashboard </a>";
                                                                   
                                                                ?></span>
                                
                                    
                                </div>
                            </li>
                          
                        </ul>
                        
                        
                        <div class="" style="height: 1648px;   background-size: cover; background:url('http://d14126353-dsa.com/codeigniter_h/images/blank_certificate-1024.png'); background-size: cover; " >
                        
                        <div class="col-md-12 col-lg-12">
                         <div class="col-md-9 col-md-offset-1">
                         <h2>&nbsp;</h2>
						
                        </div>
                        <div class="col-md-9 col-md-offset-1">
                        <h1><?php echo $course_name  ?></h1>
						
                        </div>
                        <div class="col-md-9 col-md-offset-1">
                         <h2>&nbsp;</h2>
						
                        </div>
                        <div class="col-md-9 col-md-offset-1">
                         <h2>&nbsp;</h2>
						
                        </div>
                        <div class="col-md-9 col-md-offset-1">
                         <h2>&nbsp;</h2>
						
                        </div>
                        <div class="col-md-9 col-md-offset-1">
                         <h2>&nbsp;</h2>
						
                        </div>
                        </div>
                        <div class="col-md-9 col-md-offset-1">
                         <h2>&nbsp;</h2>
						
                        </div>
                        <div class="col-md-9 col-md-offset-1">
                         <h2>&nbsp;</h2>
						
                        </div>
                        <div class="col-md-9 col-md-offset-1">
                         <h2>&nbsp;</h2>
						
                        </div>
                        
                        <div class="col-md-9 col-md-offset-1">
                         <h2>&nbsp;</h2>
						<h2>&nbsp;</h2>
                        </div>
                        
                         <div class="col-md-9 col-md-offset-3" id="cert_user_name">
                        <h1><?php echo $first_name. ' ' .$last_name  ?></h1>
						
                        </div>
                        
                        <div class="col-md-6 col-md-offset-4 text-headline"  id="cert_user_name">
                        	Has successfully completed the course requirements for <?php echo $course_name  ?> acheiving a destinction grade.				
                        </div>
                        
                        
                        
                        
                        
                        </div>
                        
                        
                            </div>
                        
                        
                        
                       
                        
                        
                    </div>
                  
                </div>
            
                
            </div>
        </div>
    </div>