

<div class="parallax overflow-hidden bg-blue-400 page-section third">
        <div class="container parallax-layer" data-opacity="true">
            <div class="media v-middle">
                <div class="media-left text-center">
                    
                </div>
                <div class="media-body">
                    <h1 class="text-white text-display-1 margin-v-0">Professional training for your staff by the best in the business.</h1>
                    <h3 class="text-white margin-v-0">Up todate accreditation for your business</h3>
                </div>
                <div class="media-right">
                    <span class="label bg-blue-500"><?php  echo '<span> <a href="' .  base_url() .'online_training/contact_us_view" class="navbar-btn btn btn-success"> Contact us</a> </span>'; ?></span>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="container">
        <div class="page-section">
            <div class="row">
                <div class="col-md-9">
                    <!-- Tabbable Widget -->
                    <div class="tabbable paper-shadow relative" data-z="0.5">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="<?php echo base_url() ;?>map/location_map"></i> <span class="hidden-sm hidden-xs"></i> <span class="hidden-sm hidden-xs">Folio Dublin office</span></a></li>
                            <li><a href="<?php echo base_url() ;?>map/galway_location_map"></i> <span class="hidden-sm hidden-xs"></i> <span class="hidden-sm hidden-xs">Folio Galway office</span></a></li>
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
                      <strong>Folio, Ltd.</strong><br>
                      Digital Exchange,<br> 
                      Crane St, Suite 101<br>
                      Dublin 8, Ireland<br>
                      <abbr title="Phone">P:</abbr> (01) 456-7890 <br>
                      <abbr title="Open">Open Today :</abbr> 9:00 am - 5:00 pm
                    </address>
                    
                    <address>
                      <strong>Rose Barrett : Idea owner</strong><br>
                      <a href="mailto:rose.barrett@folio.com?Subject=Contact from Folio website">rose.barrett@folio.com</a>
                    </address>
                    
                	<address>
                   <strong>Dec Dunne : Lead Designer</strong><br>
                      <a href="mailto:dec.dunne@folio.com?Subject=Contact from Folio website">dec.dunne@folio.com</a>
                    </address>
                    
                   <address>
                   <strong>Maggie Byrne : Designer</strong><br>
                      <a href="mailto:maggie.byrne@folio.com?Subject=Contact from Folio website">maggie.byrne@folio.com</a>
                    </address>
                    
                    
                    <address>
                      <strong>Sarah Barrow : Technical Director</strong><br>
                      <a href="mailto:sarah.barrow@folio.com?Subject=Contact from Folio website">sarah.barrow@folio.com</a>
                    </address>
                    
                    <address>
                    <strong>Tom Delaney : Technical Developer</strong><br>
                      <a href="mailto:tom.delaney@folio.com?Subject=Contact from Folio website">tom.delaney@folio.com</a>
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