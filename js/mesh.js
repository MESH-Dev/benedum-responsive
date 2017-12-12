jQuery(document).ready(function($){

  //Are we loaded?
  console.log('New theme loaded!');

  //Let's do something awesome!

  $('.carousel').slick({

  		 dots: false,
  		 autoplay: true,
  		autoplaySpeed: 2000,
	 infinite: true,
	  speed: 6000,
	  slidesToShow: 1,
	  fade: true,
  	cssEase: 'ease-in-out',
   responsive:[
      {
         breakpoint: 750,
         settings: {
            dots: false,
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true,
            //speed: 1000,
            slidesToShow: 1,
            fade: true,
            cssEase: 'ease-in-out',
         }
      }
   ]
  });

  $('.sidr-trigger').sidr({
     name: 'sidr-main',
     source: '.main-navigation',
     side: 'right'
    });

    // Hide subnavs so that we can accordion them later
    $('ul.sidr-class-sub-menu').hide();

    //Save the location of the first li and link that has children
    $topLink = $('.sidr-inner ul.sidr-class-menu > li.sidr-class-menu-item-has-children > a');

    //Add a 'button' to just after the link in any top level li that has children
    $('<span class="open"> + </span>').insertAfter($topLink);
    
    //Now we get all of the peices together

    //1 Create a counter to act as a toggle, we will be setting this counter to 1, then back to 
    //  zero with each click
    $openCnt = 0;

    $('.open').click(function(e){
      //Increment our counter
      $openCnt++;

      //Perform an action on our submenus based on the counter value,
      //setting back to 0 each 'even' numbered click
      if($openCnt == 1){
        $(this).next('.sidr-class-sub-menu').slideDown();
        $(this).html(' &mdash; ');
      }else{
        $(this).next('.sidr-class-sub-menu').slideUp();
        $(this).html(' + ');
        $openCnt = 0;
      }
   });

//$('.searchandfilter .sf-field-search').append('<sup class="input-label">Search title, region, year, amount, or grant description</sup>');

//Highlight.js__from site pre 2017 WP Migration

  /**************************************************************************
 *                                                                        *
 *  JAVASCRIPT MENU HIGHLIGHTER v.1.5 (080929)                            *
 * --------------------------------------------                           *
 * ©2005 Media Division (www.MediaDivision.com)                           *
 *                                                                        *
 * Written by Marius Smarandoiu & Armand Niculescu                        *
 *                                                                        *
 * You are free to use, modify and distribute this file, but please keep  *
 * this header and credits                                                *
 *                                                                        *
 * Usage:                                                                 *
 * - the script will apply the .current class to the <a> and its parent   *
 *   <li> that is contained in the element with id="primarynav" and points*
 *   to the current URL                                                   *
 * - works in IE6, Firefox and Opera                                      *
 **************************************************************************/
function extractPageName(hrefString)
{
	var arr = hrefString.split('/');
	return  (arr.length<2) ? hrefString : arr[arr.length-2].toLowerCase() + arr[arr.length-1].toLowerCase();
}

function setActiveMenu(arr, crtPage)
{
	for (var i=0; i<arr.length; i++)
	{
		if(extractPageName(arr[i].href) == crtPage)
		{
			if (arr[i].parentNode.tagName != "DIV")
			{
				arr[i].className = "current";
				arr[i].parentNode.parentNode.parentNode.className = "current";
			}
		}
	}
}

function setPage()
{
	hrefString = document.location.href ? document.location.href : document.location;

	if (document.getElementById("primarynav")!=null)
		setActiveMenu(document.getElementById("primarynav").getElementsByTagName("a"), extractPageName(hrefString));
}

//Colorfade.js file from site pre WP Migraion

$("#primarynav_about a:not(.current)").hover(function(){

	$(this).stop().animate({color: '#ffffff', backgroundColor: '#8ba022'}, "fast");
}, function() {
    $(this).stop().animate({color: '#655b52', backgroundColor: '#ffffff'}, "fast");

		return false;
	});

$("#primarynav_programs a:not(.current)").hover(function(){

	$(this).stop().animate({color: '#ffffff', backgroundColor: '#b00049'}, "fast");
}, function() {
    $(this).stop().animate({color: '#655b52', backgroundColor: '#ffffff'}, "fast");

		return false;
	});

$("#primarynav_apply a:not(.current)").hover(function(){

	$(this).stop().animate({color: '#ffffff', backgroundColor: '#00728a'}, "fast");
}, function() {
    $(this).stop().animate({color: '#655b52', backgroundColor: '#ffffff'}, "fast");

		return false;
	});

$("#primarynav_grants a:not(.current)").hover(function(){

	$(this).stop().animate({color: '#ffffff', backgroundColor: '#faa61a'}, "fast");
}, function() {
    $(this).stop().animate({color: '#655b52', backgroundColor: '#ffffff'}, "fast");

		return false;
	});

$("#primarynav_resources a:not(.current)").hover(function(){

	$(this).stop().animate({color: '#ffffff', backgroundColor: '#6c8cc7'}, "fast");
}, function() {
    $(this).stop().animate({color: '#655b52', backgroundColor: '#ffffff'}, "fast");

		return false;
	});


});
