// 1. Imports
// ----------

import $ from "jquery";
import Foundation from 'foundation-sites';
import Cookies from 'js-cookie'
import AOS from 'aos';
import Swup from 'swup';
import "lightGallery";
import "lg-fullscreen";
import "lg-video";
import SwupBodyClassPlugin from "@swup/body-class-plugin";
import SwupScrollPlugin from '@swup/scroll-plugin';
import SwupGaPlugin from '@swup/ga-plugin';


$( document ).ready( function() {
  function init() {

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

// 6. Hover
// --------

$(".list li a").hover( function() { // Changes the .image-holder's img src to the src defined in .list a's data attribute.
    var value=$(this).attr('data-src');
    $(".image-holder img").attr("src", value);
});

}

// 2. Page Transitions
// -------------------
const options = {
  animationSelector: '[class*="swup-transition-"]',
  containers: [ '#swup-body', '#swup-header' ],
  plugins: [ 
    new SwupBodyClassPlugin(),
    new SwupGaPlugin(),
    new SwupScrollPlugin({
        doScrollingRightAway: false,
        animateScroll: true,
        scrollFriction: 0.3,
        scrollAcceleration: 0.04
    })
  ]
};

const swup = new Swup( options );

// 2. Run Once
// -----------
init();

swup.on( 'contentReplaced', init );

} );