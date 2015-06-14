// JavaScript Document
// technique take from https://www.youtube.com/watch?v=TPHQy22-2FE


$('#iso_option').on('change' , function(){getIso()}); // calls function when option value changes
$('#states_option').on('change' , function(){getState()}); // calls function when option value changes


function getIso(){ // get the selected iso
	
	var stateName = $('#iso_option option:selected ').val(); // the ISO code selected
	var iso = $('#iso_option option:selected ').text(); // the ISO code selected
	
	map = stateName.replace(/\s+/g, '');
	//alert (map);
	
	$('#map_image_result').attr("src", "img/usa/" + map  + ".png"); // changes the map image selecting by state name
	
	$("#states_option option[value= " + iso + " ]").prop('selected', true); // set the state option selected to match the iso
	$('#text_result').text('The two state name for '+ iso +' is '+ stateName +'.')
	//changeImage(stateName);
	
	
	}// end getISO
	
//$(document).ready(function(){
 $('#iso_option').change(function(){ //any select change on the dropdown with id country trigger this code
 //$("#cities > option").remove(); //first of all clear select items
 
 
 var selected_iso = $('#iso_option option:selected ').text(); // here we are taking country id of the selected one.
 $.ajax({
 type: "POST",
 url: "http://d14126353-dsa.com/mvc-lab_9/index.php/welcome/get_state/"+selected_iso, //here we are calling our user controller and get_cities method with the country_id
 
 success:  function() //we're calling the response json array 'cities'
 {
   alert('We could make an ajax call to a function in the controller to fetch data from the DB using the selected option '+selected_iso +' in the where statement. ');
 }
 
 });
 
 });
// });



	
	
	
	
function getState(){ // get the selected state
	
	var stateName = $('#states_option option:selected ').text(); // the selected state name
	var iso = $('#states_option option:selected ').val(); // the selected state name
	//$('#iso_option option:selected ').text(iso);
	map = stateName.replace(/\s+/g, '');
	//alert (map);
	
	$('#map_image_result').attr("src", "img/usa/" + map  + ".png"); // changes the map image selecting by state name
	
	$('#text_result').text('The two digit code for '+ stateName +' is '+ iso +'.') 
	alert(stateName); 
	$("#iso_option option[value= " + stateName + " ]").prop('selected', true); // set selected iso option to match the selected state 
	
	//changeImage(stateName);
	
	}
	
	

function changeImage(map){
	
	
	$('#map_image_result').attr("src", "img/usa/" + map  + ".png"); // changes the map image selecting by state name
	
	
	};