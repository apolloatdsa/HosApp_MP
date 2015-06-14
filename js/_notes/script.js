// JavaScript Document my script
// technique take from https://www.youtube.com/watch?v=TPHQy22-2FE

$( document ).ready(function() {
	
	var jsonreturn = []
			
	$( "#button-3" ).on( "click", function() {
		
			  var breezecatcherAPI = "http://d14126353-dsa.com/mvc_assignment/breezecatcher_api/products/";
			  $.getJSON( breezecatcherAPI, {
				
				format: "json"
			  })
				.done(function( data ) {
					var str = JSON.stringify(data, null, 2); // spacing level = 2
					console.log(str);
				 //  $.each( data.items, function( i, item ) {
					  
				//	$( "<img>" ).attr( "src", item.media.m ).appendTo( "#images" );
					
				//  });
				});
			});
		
	 
	});
	
	

				   
				   
				   
				   
                   