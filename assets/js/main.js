jQuery(document).ready(function($){

	'use strict';
    
    $('#menu').on('click',function() {
    	$('.site-nav ul').toggle(300);
    });

    

    function whole_slider_fun() {
    let x = 4;

    function slider_fun() {
        	  $('.slider-post:nth-child('+ x +')').fadeOut(4000, function() {
    	      x--;
              if ( x > 1 ) {             	  
              	   slider_fun();   
              } 
              if ( x === 1 ) {
                  $(".slider-post").fadeIn(1000);
              	  x = 4;
              	  slider_fun();
              }   
            
       });
    }

    slider_fun();
    }

    whole_slider_fun();

});