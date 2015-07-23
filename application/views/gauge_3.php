 

    <div id="gauge3" class="300x200px"></div>
    
    
    <script>
					
					var gageValueTotal = <?php echo $time_on ?>;
					var gaugeMax = <?php echo ($total_completed_modules * 1.75) + $total_modules ?>;
					
							var g = new JustGage({
								id: "gauge3",
								value: gageValueTotal,
								min: 0,
								max: gaugeMax,
								title: "Total Hours logged in "
							});

 
</script>                   
                                 