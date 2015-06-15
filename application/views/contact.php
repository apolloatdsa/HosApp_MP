
        </div>
    </div>
    <div class="parallax page-section bg-blue-300">
        <div class="container parallax-layer" data-opacity="true">
            <div class="media media-grid v-middle">
                <div class="media-left">
                    <span class="icon-block half bg-blue-500 text-white"><i class="fa fa-envelope"></i></span>
                </div>
                <div class="media-body">
                    <h3 class="text-display-2 text-white margin-none">Contact us</h3>
                    <p class="text-white text-subhead">Feel free to visit or send us a message anytime.</p>
                </div>
            </div>
        </div>
    </div>
   
    <div class="page-section parallax relative overflow-hidden">
      <h1>&nbsp; </h1>
        <img class="parallax-layer absolute top left" data-translate-when="inViewport" src="<?php echo base_url(); ?>images/photodune-6745579-modern-creative-man-relaxing-on-workspace-m.jpg" alt="parallax image" />
        <div class="container">
            <div class="panel margin-none panel-default paper-shadow max-width-400 h-center" data-z="0.5">
                <div class="panel-heading">
                    <h4 class="text-headline">Send a message</h4>
                </div>
                <div class="panel-body">
                 <h1> </h1>
                    <?php echo form_open(base_url().'email'); ?>
                        <div class="form-group form-control-material">
                        
                    
                        
                            <input class="form-control" type="text" id="fname" placeholder="First name" />
                            <label for="fname"></label>
                        </div>
                        <div class="form-group form-control-material">
                            <input class="form-control" type="tel" id="lname" placeholder="Last name" />
                            <label for="lname"></label>
                        </div>
                        <div class="form-group form-control-material">
                            <input class="form-control" type="text" id="phone" placeholder="Phone" />
                            <label for="phone"></label>
                        </div>
                        <div class="form-group form-control-material">
                            <textarea class="form-control" id="message" placeholder="Your message"></textarea>
                            <label for="message"></label>
                        </div>
                        <div class="text-right">
                            <button class="btn btn-primary relative paper-shadow" data-z="0.5" data-hover-z="1" data-animated>Send message</button>
                        </div>
                    </form>
                </div>
            </div>
            <br/>
        </div>
    </div>
   