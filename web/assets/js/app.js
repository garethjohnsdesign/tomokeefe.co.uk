// 1. Imports
// ----------

import $ from "jquery";
import Foundation from 'foundation-sites';
import Cookies from 'js-cookie'
import AOS from 'aos';
import "lightGallery";
import "lg-fullscreen";
import "lg-video";

import watchViewport from 'tornis';
import unwatchViewport from 'tornis';
import getViewportState from 'tornis';
import recalibrateOrientation from 'tornis';

// 2. Foundation
// ----------
  
Foundation.Interchange.SPECIAL_QUERIES['medium-retina'] = 'only screen and (min-width: 40em), (min-width: 40em) and (-webkit-min-device-pixel-ratio: 2), (min-width: 40em) and (min--moz-device-pixel-ratio: 2), (min-width: 40em) and (-o-min-device-pixel-ratio: 2/1), (min-width: 40em) and (min-device-pixel-ratio: 2), (min-width: 40em) and (min-resolution: 192dpi), (min-width: 40em) and (min-resolution: 2dppx)';
Foundation.Interchange.SPECIAL_QUERIES['large-retina'] = 'only screen and (min-width: 64em), (min-width: 64em) and (-webkit-min-device-pixel-ratio: 2), (min-width: 64em) and (min--moz-device-pixel-ratio: 2), (min-width: 64em) and (-o-min-device-pixel-ratio: 2/1), (min-width: 64em) and (min-device-pixel-ratio: 2), (min-width: 64em) and (min-resolution: 192dpi), (min-width: 64em) and (min-resolution: 2dppx)';
Foundation.Interchange.SPECIAL_QUERIES['xlarge-retina'] = 'only screen and (min-width: 75em), (min-width: 75em) and (-webkit-min-device-pixel-ratio: 2), (min-width: 75em) and (min--moz-device-pixel-ratio: 2), (min-width: 75em) and (-o-min-device-pixel-ratio: 2/1), (min-width: 75em) and (min-device-pixel-ratio: 2), (min-width: 75em) and (min-resolution: 192dpi), (min-width: 75em) and (min-resolution: 2dppx)';
Foundation.Interchange.SPECIAL_QUERIES['xxlarge-retina'] = 'only screen and (min-width: 90em), (min-width: 75em) and (-webkit-min-device-pixel-ratio: 2), (min-width: 75em) and (min--moz-device-pixel-ratio: 2), (min-width: 75em) and (-o-min-device-pixel-ratio: 2/1), (min-width: 75em) and (min-device-pixel-ratio: 2), (min-width: 75em) and (min-resolution: 192dpi), (min-width: 75em) and (min-resolution: 2dppx)';
  
$(document).foundation();


// 3. Loading
// ----------

$(document).ready(function() {
  if (!Cookies.get('loading')) {

  $(function() {
    $(".loader").removeClass("hide");
    $(".loader").addClass("loading");
    setTimeout(function(){
     $(".loader").addClass("loaded");
     Cookies.set('loading', 'true');
    }, 2500);
  });

  }
});

// 3. Menu
// -------------

// 	Menu hover effect
$(".navigation").hover(function(){
  	$(".home__menu").removeClass("hide");
    $(".home__title").addClass("hide"); 
   	 }, function () {
 	 $(".home__menu").addClass("hide");
 	 $(".home__title").removeClass("hide");
});
  	

// 4. Viewport Height Fix
// ----------------------

// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
const vh = window.innerHeight * 0.01;

// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);

// We listen to the resize event
window.addEventListener('resize', () => {
  // We execute the same script as before
  const vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});


// 5. Animate on Scroll
// --------------------

$(function() {
  AOS.init({ 
   offset: 64,
   easing: 'ease-in-out-quart', 
   duration: 600
   });   
});

$(function() {
window.addEventListener('load', AOS.refresh);
});

// 6. Lightgallery
// ---------------

$('#testinglayout').lightGallery({
  selector: '.videoelement',
  counter : false,
  vimeoPlayerParams: {
      byline : 0,
      portrait : 0,
      color : '272A67'
  },
  youtubePlayerParams: {
      modestbranding: 1,
      showinfo: 0,
      rel: 0,
      controls: 0
  }
});


/*
$(function() {

    var $container    = $("#container"),
        $blocks    = $("#blocks"),
        heightContainer = $container.outerHeight(),
        scrolledHeight = $container[0].scrollHeight,
        mousePos = 0,
        posY = 0,
        hDiff = ( scrolledHeight / heightContainer )*0.6
    
    $container.mousemove(function(e){
      mousePos = e.pageY - this.offsetTop;
    });
  
    setInterval(function(){
		  $blocks.css({marginTop: - mousePos*hDiff });
	  }, 10);

});
*/





/*

// define a watched function, to be run on each update
const updateValues = ({ size, scroll, mouse, position, orientation }) => {
  if (size.changed) {
    // do something related to size
  }
  
  if (scroll.changed) {
    // do something related to scroll position or velocity
  }
 
  if (mouse.changed) {
    // do something related to mouse position or velocity
  }
 
  if (position.changed) {
    // do something related to browser window position or velocity
  }
 
  if (orientation.changed) {
    // do something related to device orientation
  }
};
 
// bind the watch function
// By default this will run the function as it is added to the watch list
watchViewport(updateValues);
 
// to bind the watch function without calling it
watchViewport(updateValues, false);
 
// when you want to stop updating
unwatchViewport(updateValues);
 
// to get a snapshot of the current viewport state
const state = getViewportState();
 
// to reset the default device orientation.
const calibrationData = recalibrateOrientation();
*/





    const animateView = ({ size, scroll, mouse, orientation }) => {

      // Update the zoom based on scroll position
      if (scroll.changed) {
        let scrollOffset = scroll.top / (size.docY - size.y);
        
        // clamp values
        scrollOffset = scrollOffset < 0 ? 0 : scrollOffset;
        scrollOffset = scrollOffset > 1 ? 1 : scrollOffset;
        
        // update scroll position CSS var
        document.body.style.setProperty('--scrollY', scrollOffset);
      }

      // update the camera angle based on mouse position from center or device orientation
      if (mouse.changed || orientation.changed) {
        let xFromCenter;
        let yFromCenter;

        if (mouse.changed) {
          xFromCenter = (mouse.x - size.x / 2) / (size.x / 2);
          yFromCenter = (mouse.y - size.y / 2) / (size.y / 2);
        }

        if (orientation.changed) {
          xFromCenter = orientation.gamma / 22.5;
          yFromCenter = orientation.beta / 22.5;
        }

        // clamp values
        xFromCenter = xFromCenter < -1 ? -1 : xFromCenter;
        xFromCenter = xFromCenter > 1 ? 1 : xFromCenter;
        yFromCenter = yFromCenter < -1 ? -1 : yFromCenter;
        yFromCenter = yFromCenter > 1 ? 1 : yFromCenter;

        // update scroll position CSS var
        document.body.style.setProperty('--shiftX', xFromCenter);
        document.body.style.setProperty('--shiftY', yFromCenter);
      }

    };

    __TORNIS.watchViewport(animateView);


$(".list li a").hover( function() { // Changes the .image-holder's img src to the src defined in .list a's data attribute.
    var value=$(this).attr('data-src');
    $(".image-holder img").attr("src", value);
});
