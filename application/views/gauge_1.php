
<?php 
 
// Date:2015/07/24
// Author: Thomas Delaney
// Student ID: D14126353
// Author: Sarah Barrow
// Student	ID:	D13126793
// Script taken from http://justgage.com/
// an include is used on the employee progress page to display the gauge --  include('gauge_1.php')
// the gauge is using php random numbers based on the user course work to produce a demo display for user progress
// also needs to have links to external scripts in the page where it is displayed
// <script src="http://cdn.jsdelivr.net/raphael/2.1.2/raphael-min.js">
// <script src="http://cdn.jsdelivr.net/justgage/1.0.1/justgage.min.js">      


?> 

<div id="gauge" class="300x200px"></div>

<script>
		
			var gageValue = <?php echo $number_ofLogins ?>;	
			var gaugeMax = <?php echo $total_modules ?>;	
			
				var g = new JustGage({
					id: "gauge",
					value: gageValue,
					min: 0,
					max: gaugeMax,
					title: "No# of logins / No# of Modules"
				  });
				


</script>

