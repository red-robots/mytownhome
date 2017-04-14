/**
 *	Custom jQuery Scripts
 *
 */

jQuery(document).ready(function ($) {

	$(".div1").delay( 1200 ).fadeIn(3000);
    $(".div2").delay( 3500 ).fadeIn(2400);
    $("#div3").delay( 4800 ).fadeIn(3000);


     document.getElementById("button1").disabled = true;
      document.getElementById("button2").disabled = true;

      function enableBtn1(){
        document.getElementById("button1").disabled = false;
       }
       function enableBtn2(){
        document.getElementById("button2").disabled = false;
       }

       
    /*
	*
	*	Equal Heights Divs
	*
	------------------------------------*/
	$('.js-blocks').matchHeight();

	$('.flexslider').imagesLoaded( function() {
		$('.flexslider').flexslider({
			animation: "fade",
			slideshowSpeed: 5000,
			smoothHeight: true,
		}); // end register flexslider
	});
	

	(function() {
 
	  // store the slider in a local variable
	  var $window = $(window),
	      flexslider = { vars:{} };
	 
	  // tiny helper function to add breakpoints
	  function getGridSize() {
	    return (window.innerWidth < 600) ? 1 :
	           (window.innerWidth < 900) ? 2 : 2;
	  }
	 
	  // $(function() {
	  //   SyntaxHighlighter.all();
	  // });
	 
	  $window.load(function() {
	    $('.flexslider2').flexslider({
	      animation: "slide",
	      animationLoop: true,
	      itemWidth: 350,
	      itemMargin: 15,
	      minItems: getGridSize(), // use function to pull in initial value
	      maxItems: getGridSize() // use function to pull in initial value
	    });
	  });
	 
	  // check grid size on resize event
	  $window.resize(function() {
	    var gridSize = getGridSize();
	 
	    flexslider.vars.minItems = gridSize;
	    flexslider.vars.maxItems = gridSize;
	  });
	}());

	$('.flexslider3').flexslider({
		animation: "slide",
		slideshowSpeed: 6000,
	}); 
	
		$('.flexslider4').flexslider({
		animation: "fade",
		slideshowSpeed: 5000,
	}); 

	// Colorbox. 
	// agent link iframes
	$(".iframe").colorbox({iframe:true, width:"90%", height:"89%"});

	$(".calculator").colorbox({iframe:true, width:"50%", height:"89%"});
	
	$(".group1").colorbox({rel:'group1'});
	
	$(".inline").colorbox({inline:true, width:"50%"});



	// Google map
(function($) {

/*
*  new_map
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

function new_map( $el ) {
	
	// var
	var $markers = $el.find('.marker');
	
	
	// vars
	var args = {
		zoom		: 16,
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
	
	
	// return
	return map;
	
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
// global var
var map = null;

$(document).ready(function(){

	$('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});

});

})(jQuery);


});// END #####################################    END

(function($) {
  // your function
})(jQuery);