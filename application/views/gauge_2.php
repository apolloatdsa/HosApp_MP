 

    <div id="gauge2" class="300x200px"></div>
    
    
    <script>
					
					var gageValue = <?php echo $time_on ?>;
					var gaugeMax = <?php echo $total_modules * 1.75 ?>;
					
							var g = new JustGage({
								id: "gauge2",
								value: gageValue,
								min: 0,
								max: gaugeMax,
								title: "Time logged in / Hours"
							});

 
</script>                   
                                 