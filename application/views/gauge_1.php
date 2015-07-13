

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

