
/*
var myElement = document.querySelector("header");
var headroom = new Headroom(myElement, {
  "offset": 200,
  "tolerance": 5,
  "classes": {
    "initial": "animated",
    "pinned": "slideUp",
    "unpinned": "slideDown"
  }
});
console.log(headroom); // is this null?
headroom.init();

headroom.destroy();*/
//
//console.log(myElement); // is this null?
//var headroom  = new Headroom(myElement);
//headroom.init();

jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/
jQuery( window ).scroll(function() {

  var height = jQuery(window).scrollTop();

  if(height >= 500) {
    jQuery('.ab-right').addClass('stick');
  } else {
    jQuery('.ab-right').removeClass('stick');
  }

});

jQuery(document).ready(function() {

    jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		//disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});
/*

   jQuery("header").headroom({
  "offset": 700,
  "tolerance": 0,
  "classes": {
    "initial": "animated",
    "pinned": "slideDown",
    "unpinned": "slideUp"
  }
});

    jQuery("#request").headroom({
  "offset": 700,
  "tolerance": 0,
  "classes": {
    "initial": "animated",
    "pinned": "r-fixed",
    "unpinned": "slideDownR"
  }
});
*/
//jQuery("#request").stick_in_parent();
// to destroy
//jQuery("#header").headroom("destroy");



    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();

	 // Makes sure last grid item floats left
	jQuery('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
  jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
    if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
      jQuery(this).wrap("<div class='widescreen flex-video'/>");
    } else {
      jQuery(this).wrap("<div class='flex-video'/>");
    }
  });

});
