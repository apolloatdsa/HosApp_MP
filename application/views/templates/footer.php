    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <h4 class="text-headline text-light">Corporate</h4>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo base_url();?>online_training/about">About the company</a></li>
                        <li><a href="<?php echo base_url();?>map/location_map">Company offices</a></li>
                        <li><a href="<?php echo base_url();?>online_training/partners">Partners</a></li>
                        <li><a href="<?php echo base_url();?>online_training/terms_of_use">Terms of use</a></li>
                        <li><a href="<?php echo base_url();?>online_training/privacy">Privacy</a></li>
                        <li><a href="<?php echo base_url();?>online_training/contact_us_view">Contact us</a></li>
                        
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3">
                    <h4 class="text-headline text-light">Explore</h4>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo base_url();?>online_training/courses_list_view">Courses</a></li>
                        <li><a href="<?php echo base_url();?>online_training/meet_the_team">Meet The Team</a></li>
                        <li><a href="<?php echo base_url();?>online_training/meet_the_tutors">Tutors</a></li>
                        <li><a href="<?php echo base_url();?>online_training/pricing">Pricing</a></li>
                        <li><a href="<?php echo base_url();?>online_training/become_a_tutor">Become Tutor</a></li>
                        <li><a href="<?php echo base_url();?>online_training/sign_up">Sign Up</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h4 class="text-headline text-light">Newsletter</h4>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter email here...">
                            <span class="input-group-btn">
								<button class="btn btn-grey-800" type="button" onclick = "location.href='<?php echo base_url();?>online_training/info'" >Subscribe</button>
							  </span>
                        </div>
                    </div>
                    <br/>
                    <p>
                        <a href="#" class="btn btn-indigo-500 btn-circle"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="btn btn-pink-500 btn-circle"><i class="fa fa-dribbble"></i></a>
                        <a href="#" class="btn btn-blue-500 btn-circle"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="btn btn-danger btn-circle"><i class="fa fa-google-plus"></i></a>
                    </p>
                    <p class="text-subhead">
                    &copy; 2015 Learning and accreditation through Folio. </p>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
       This project was built using | PHP | OOP | MVC | JavaScript | JQuery | Bootstrap | CodeIgniter | MySql |  &copy; Copyright Folio & DSA 2015
    </footer>
    <!-- // Footer -->
    <!-- Inline Script for colors and config objects; used by various external scripts; -->
    <script>
    var colors = {
        "danger-color": "#e74c3c",
        "success-color": "#81b53e",
        "warning-color": "#f0ad4e",
        "inverse-color": "#2c3e50",
        "info-color": "#2d7cb5",
        "default-color": "#6e7882",
        "default-light-color": "#cfd9db",
        "purple-color": "#9D8AC7",
        "mustard-color": "#d4d171",
        "lightred-color": "#e15258",
        "body-bg": "#f6f6f6"
    };
    var config = {
        theme: "html",
        skins: {
            "default": {
                "primary-color": "#42a5f5"
            }
        }
    };
    </script>
    <!-- Separate Vendor Script Bundles -->
   	
    <script src="<?php echo base_url();?>js/vendor-core.min.js"></script>
    <script src="<?php echo base_url();?>js/vendor-countdown.min.js"></script>
    <script src="<?php echo base_url();?>js/vendor-tables.min.js"></script>
    <script src="<?php echo base_url();?>js/vendor-forms.min.js"></script>
    <script src="<?php echo base_url();?>js/vendor-carousel-slick.min.js"></script>
    <script src="<?php echo base_url();?>js/vendor-player.min.js"></script>
    <script src="<?php echo base_url();?>js/vendor-charts-flot.min.js"></script>
    <script src="<?php echo base_url();?>js/vendor-nestable.min.js"></script>
   
    
    <!-- <script src="js/vendor-angular.min.js"></script> -->
    <!-- Compressed Vendor Scripts Bundle
    Includes all of the 3rd party JavaScript libraries above.
    The bundle was generated using modern frontend development tools that are provided with the package
    To learn more about the development process, please refer to the documentation.
    Do not use it simultaneously with the separate bundles above. -->
    <!-- <script src="js/vendor-bundle-all.min.js"></script> -->
    <!-- Compressed App Scripts Bundle
    Includes Custom Application JavaScript used for the current theme/module;
    Do not use it simultaneously with the standalone modules below. -->
    <!-- <script src="js/module-bundle-main.min.js"></script> -->
    <!-- Standalone Modules
    As a convenience, we provide the entire UI framework broke down in separate modules
    Some of the standalone modules may have not been used with the current theme/module
    but ALL the modules are 100% compatible -->
    <script src="<?php echo base_url();?>js/module-essentials.min.js"></script>
    <script src="<?php echo base_url();?>js/module-material.min.js"></script>
    <script src="<?php echo base_url();?>js/module-layout.min.js"></script>
    <script src="<?php echo base_url();?>js/module-sidebar.min.js"></script>
    <script src="<?php echo base_url();?>js/module-carousel-slick.min.js"></script>
    <script src="<?php echo base_url();?>js/module-player.min.js"></script>
    <script src="<?php echo base_url();?>js/module-messages.min.js"></script>
   <!-- <script src="<?php echo base_url();?>js/module-maps-google.min.js"></script> -->
    <script src="<?php echo base_url();?>js/module-charts-flot.min.js"></script>
    <!-- [html] Core Theme Script:
        Includes the custom JavaScript for this theme/module;
        The file has to be loaded in addition to the UI modules above;
        module-bundle-main.js already includes theme-core.js so this should be loaded
        ONLY when using the standalone modules; -->
    <script src="<?php echo base_url();?>js/theme-core.min.js"></script>
</body>
</html>