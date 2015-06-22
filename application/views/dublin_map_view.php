

 <div class="parallax overflow-hidden bg-blue-400 page-section third">
       
    </div>
    
    
    
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                    <!-- Tabbable Widget -->
                    <div class="tabbable paper-shadow relative" data-z="0.5">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="<?php echo base_url() ;?>map/location_map"></i> <span class="hidden-sm hidden-xs"></i> <span class="hidden-sm hidden-xs">HosApp Dublin office</span></a></li>
                            <li><a href="<?php echo base_url() ;?>map/galway_location_map"></i> <span class="hidden-sm hidden-xs"></i> <span class="hidden-sm hidden-xs">HosApp Galway office</span></a></li>
                        </ul>
                        <!-- // END Tabs -->
                        <!-- Panes -->
                        <div class="tab-content">
                            <div id="account" class="tab-pane active">
                            
                            <?php echo $map['html'];  ?>
                                
                                
                                

                            </div>
                        </div>
                        <!-- // END Panes -->
                        
                        
                    </div>
                    <!-- // END Tabbable Widget -->
                    <br/>
                    <br/>
                    
                    
                </div>
                <div class="col-md-3">
                            <div class="panel margin-none panel-default paper-shadow max-width-400 h-center" data-z="0.5">
                <div class="panel-heading">
                    <h4 class="text-headline">Dublin Office </h4>
                </div>
                <div class="panel-body">
                
                 <address>
                      <strong>HosApp, Ltd.</strong><br>
                      Digital Exchange,<br> 
                      Crane St, Suite 101<br>
                      Dublin 8, Ireland<br>
                      <abbr title="Phone">P:</abbr> (01) 456-7890 <br>
                      <abbr title="Open">Open Today :</abbr> 9:00 am - 5:00 pm
                    </address>
                    
                    <address>
                      <strong>Rose Barrett : Idea owner</strong><br>
                      <a href="mailto:#">rose.barrett@hosapp.com</a>
                    </address>
                    
                	<address>
                   <strong>Dec Dunne : Lead Designer</strong><br>
                      <a href="mailto:#">dec.dunne@hosapp.com</a>
                    </address>
                    
                   <address>
                   <strong>Maggie Byrne : Designer</strong><br>
                      <a href="mailto:#">maggie.byrne@hosapp.com</a>
                    </address>
                    
                    
                    <address>
                      <strong>Sharah Barrow : Technical Director</strong><br>
                      <a href="mailto:#">sarah.barrow@hosapp.com</a>
                    </address>
                    
                    <address>
                    <strong>Tom Delaney : Technical Developer</strong><br>
                      <a href="mailto:#">tom.delaney@hosapp.com</a>
                    </address>
                   
                </div>
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
    <?php echo $map['js'];  ?> <!-- Google map  -->