<!--
* Date:2015/07/24
* Author: Thomas Delaney
* Student ID: D14126353
-->

 <div class="parallax overflow-hidden bg-blue-400 page-section third">
        <div class="container parallax-layer" data-opacity="true">
            <div class="media v-middle">
                <div class="media-left text-center">
                    <a href="#">
                        <img src="<?php echo base_url();?>images/members/<?php echo $this->session->userdata('user_id').'-'.$this->session->userdata('user_last_name');?>.jpg" alt="people" class="img-circle width-80" />
                    </a>
                </div>
                <div class="media-body">
                    <h1 class="text-white text-display-1 margin-v-0"><?php echo " " . $this->session->userdata('user_first_name'). " ". $this->session->userdata('user_last_name')." " ; ?></h1>
                    <p class="text-subhead"><a class="link-white text-underline" href="website-student-public-profile.html">View public profile</a></p>
                </div>
                <div class="media-right">
                    <span class="label bg-blue-500">Student</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
                   <div class="page-section">
            <div class="row">
            
            
                <div class="col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
                    <h1 class="page-section-heading">Folio Price levels</h1>
                    <div class="table-responsive">
                        <!-- Pricing table -->
                        <table class="table panel panel-default table-pricing">
                            <!-- Table heading -->
                            <thead>
                                <tr>
                                    <th class="text-center">Choose your plan</th>
                                    <th class="text-center" style="width: 15%">
                                        <span class="plan">Basic</span>
                                        <span class="price">€125.00</span>
                                      <?php  echo '<span> <a href="' .  base_url() .'online_training/sign_up" class="navbar-btn btn btn-primary"> Sign Up</a> </span>'; ?>
                                    </th>
                                    <th class="text-center" style="width: 15%">
                                        <span class="plan">Bronze</span>
                                        <span class="price">€199.99</span>
                                        <?php  echo '<span> <a href="' .  base_url() .'online_training/sign_up" class="navbar-btn btn btn-primary"> Sign Up</a> </span>'; ?>
                                    </th>
                                    <th class="text-center" style="width: 15%">
                                        <span class="plan">Silver</span>
                                        <span class="price">€250.99</span>
                                        <?php  echo '<span> <a href="' .  base_url() .'online_training/sign_up" class="navbar-btn btn btn-primary"> Sign Up</a> </span>'; ?>
                                    </th>
                                    <th class="text-center" style="width: 15%">
                                        <span class="plan">Gold</span>
                                        <span class="price">€299.99</span>
                                        <?php  echo '<span> <a href="' .  base_url() .'online_training/sign_up" class="navbar-btn btn btn-primary"> Sign Up</a> </span>'; ?>
                                    </th>
                                </tr>
                            </thead>
                            <!-- // Table heading END -->
                            <!-- Table body -->
                            <tbody>
                                <!-- Table row -->
                                <tr>
                                    <td>Dedicated account manager</td>
                                    <td class="text-center text-success"><span class="fa fa-check-circle"><i></i></span></td>
                                    <td class="text-center text-success"><span class="fa fa-check-circle"><i></i></span></td>
                                    <td class="text-center text-success"><span class="fa fa-check-circle"><i></i></span></td>
                                    <td class="text-center text-success"><span class="fa fa-check-circle"><i></i></span></td>
                                </tr>
                                <!-- // Table row END -->
                                <!-- Table row -->
                                <tr>
                                    <td>More than 5 accounts</td>
                                    <td class="text-center text-danger"><span class="fa fa-times-circle"><i></i></span></td>
                                    <td class="text-center text-danger"><span class="fa fa-times-circle"><i></i></span></td>
                                    <td class="text-center text-success"><span class="fa fa-check-circle"><i></i></span></td>
                                    <td class="text-center text-success"><span class="fa fa-check-circle"><i></i></span></td>
                                </tr>
                                <!-- // Table row END -->
                                <!-- Table row -->
                                <tr>
                                    <td>Management reports</td>
                                    <td class="text-center text-success"><span class="fa fa-check-circle"><i></i></span></td>
                                    <td class="text-center text-success"><span class="fa fa-check-circle"><i></i></span></td>
                                    <td class="text-center text-success"><span class="fa fa-check-circle"><i></i></span></td>
                                    <td class="text-center text-success"><span class="fa fa-check-circle"><i></i></span></td>
                                </tr>
                                <!-- // Table row END -->
                                <!-- Table row -->
                                <tr>
                                    <td>Awarded certificates</td>
                                    <td class="text-center text-danger"><span class="fa fa-times-circle"><i></i></span></td>
                                    <td class="text-center text-success"><span class="fa fa-check-circle"><i></i></span></td>
                                    <td class="text-center text-success"><span class="fa fa-check-circle"><i></i></span></td>
                                    <td class="text-center text-success"><span class="fa fa-check-circle"><i></i></span></td>
                                </tr>
                                <!-- // Table row END -->
                                <!-- Table row -->
                                <tr>
                                    <td>Progress tracking</td>
                                    <td class="text-center">Basic Tracking</td>
                                    <td class="text-center text-success"><span class="fa fa-check-circle"><i></i></span></td>
                                    <td class="text-center text-success"><span class="fa fa-check-circle"><i></i></span></td>
                                    <td class="text-center text-success"><span class="fa fa-check-circle"><i></i></span></td>
                                </tr>
                                <!-- // Table row END -->
                            </tbody>
                            <!-- // Table body END -->
                        </table>
                        <!-- // Pricing table END -->
                    </div>
                
                </div>
                
                
                
            </div>
        </div>
    
    
    
    
    
    

    </div>
    
    
    
     <div class="modal grow modal-overlay modal-backdrop-body fade" id="student_image_upload">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <div class="modal-dialog">
            <div class="v-cell">
                <div class="modal-content">
                    <div class="modal-body">
                    
                        
                    </div>
                </div>
            </div>
        </div>
    </div>   