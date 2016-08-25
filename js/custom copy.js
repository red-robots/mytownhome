/**
 *	Custom jQuery Scripts
 *
 */
 

jQuery(document).ready(function ($) { 




	

$(document).ready(function(){ 
        $(".div1").delay( 1200 ).fadeIn(3000);
        $(".div2").delay( 3500 ).fadeIn(2400);
        $("#div3").delay( 4800 ).fadeIn(3000);
});

$(window).load(function() {

	// front page slider 
	$('.flexslider').flexslider({
		animation: "fade",
		slideshowSpeed: 5000,
	}); // end register flexslider



  $('.flexslider2').flexslider({
    animation: "slide",
    animationLoop: true,
    itemWidth: 275,
    itemMargin: 0,
    minItems: 2,
    maxItems: 2
  });
  
  
  $('.flexslider3').flexslider({
		animation: "slide",
		slideshowSpeed: 6000,
  });  
  




}); // end of on window load function.


	// Colorbox. 
	//The first variable is the click class the linked 
	// element is triggering. Just make sure it matches.
	
	$(".group1").colorbox({rel:'group1'});
	
	
	/*
		FAQ dropdowns
__________________________________________
*/
// $('.question').click(function() {
 
//     $(this).next('.answer').slideToggle(500);
//     $(this).toggleClass('close');
 
// });





/* GOOGLE MAP */

(function($) {

/*
*  render_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function render_map( $el ) {

	// var
	var $markers = $el.find('.marker');

	// vars
	var args = {
		zoom		: 20,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};

	// create map	        	
	var map = new google.maps.Map( $el[0], args);

	// add a markers reference
	map.markers = [];

	// add markers
	$markers.each(function(){

    	add_marker( $(this), map );

	});

	// center map
	center_map( map );

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}
})(jQuery);
/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/

$(document).ready(function(){

	$('.acf-map').each(function(){

		render_map( $(this) );

	});

});



});// END ########  END documet ready function