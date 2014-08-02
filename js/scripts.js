// DOM Ready

jQuery(document).ready(function($) {



	// www.conditionizr.com

	// Legacy content and retina scripts and styles

	$('head').conditionizr({

		ieLessThan : {

			active: true,
			version: '9',
			scripts: false,
			styles: false,
			classes: true,
			customScript: 'https://gist.github.com/demun/4142494.js'

		}

	});

	

	// SVG custom feature detection and svg to png fallback

	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update

	function supportsSVG() {

		return !! document.createElementNS && !! document.createElementNS('http://www.w3.org/2000/svg','svg').createSVGRect;	

	}

	if (supportsSVG()) {

		document.documentElement.className += ' svg';

	} else {

		document.documentElement.className += ' no-svg';
		var imgs = document.getElementsByTagName('img'),
			dotSVG = /.*\.svg$/;
		for (var i = 0; i != imgs.length; ++i) {
			if(imgs[i].src.match(dotSVG)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + "png";

			}

		}

	}

	

	// iPhone Safari URL bar hides itself on pageload

	if (navigator.userAgent.indexOf('iPhone') != -1) {

	    addEventListener("load", function () {

	        setTimeout(hideURLbar, 0);

	    }, false);

	}

	

	function hideURLbar() {

	    window.scrollTo(0, 0);

	}

	

	//Animation

	loc = $('header .wrapper .animation a img').attr('src').split('/img/')[0]+'/img/';
	
	preload([
		loc+'logo_g.png',
		loc+'logo_h.png',
		loc+'pw_image.jpg',
		loc+'fb_ani_icon.png',
		loc+'ma_ani_icon.png',
		loc+'ph_ani_icon.png'
	]);
	
	function preload(arrayOfImages) {
		$(arrayOfImages).each(function(){
			$('<img/>')[0].src = this;
		});
	}
	
	$('header .play').click(function(){
		
		animateHeader();	
		
	});
	
	function animateHeader() {

		ani = $('header .wrapper .animation');
		
		ani.siblings('.play').hide(500);

		$.easing.easeOutCubic = function (x, t, b, c, d) {

			return c*((t=t/d-1)*t*t + 1) + b;

		}

		$.easing.easeInCubic = function (x, t, b, c, d) {

			return c*(t/=d)*t*t + b;

		}
		
				

		ani.fadeOut(500, function() {

			$(this).empty().append('<h1>jQuery <i>Zindabad!</i></h1>').fadeIn(200, function() { 

				$(this).find('i').animate({'opacity': 1}, 200, function() {

					$(this).parents('h1').delay(500).animate({'opacity': 0}, 500, function() {

						ani.empty().append('<section style="background:url('+loc+'logo_g.png) no-repeat;width:320px;margin:-320px auto 0;pacity:0;"><img style="margin-top:640px;" src="'+loc+'logo_h.png" /></section>').find('section').animate({'opacity': 1, marginTop: 0}, 500, 'easeOutCubic').find('img').animate({marginTop: 0}, 500, 'easeOutCubic', function() {

							$(this).delay(1500).animate({marginLeft: '-320px', 'opacity': 0}, 500, 'easeInCubic').parent().delay(1500).animate({'background-position-x': '320px', 'opacity': 0, 'width': '640px'}, 500, 'easeInCubic', function(){

								ani.empty().append('<h1>I am <i>Ankit Patil</i></h1>').fadeIn(200, function() {

									$(this).find('i').animate({'opacity': 1}, 200, function() {

										$(this).parent().delay(2000).animate({'opacity': 0}, 200, function() {

											$(this).empty().append('<img src="'+loc+'pw_image.jpg" style="border-radius:50%;width:auto;height:1px;margin:20px auto 0;border:0 solid #CCC;opacity:0;" />').animate({'opacity': 1, lineHeight: '1em'}, 200, 'easeOutCubic', function() {
											
												$(this).find('img').animate({'height': '275px', borderWidth: '5px', 'opacity': 1}, 500, 'easeOutCubic', function() {
												
													$(this).delay(2000).animate({'height': '140px'}, 500, 'easeOutCubic', function() {
														$(this).after('<h2 style="width:100%;opacity:0">I like to <i>Create.</i></h2>').siblings('h2').animate({'opacity': 1}, 200, function() {
															
															$(this).find('i').animate({'opacity': 1}, 200,function() {
																
																$(this).parent().delay(2000).animate({'opacity': 0}, 200,function() {
																
																	$(this).empty().append('I can <i>Code,</i>').animate({'opacity': 1}, 200, function(){
																	
																		$(this).find('i').animate({'opacity': 1}, 200, function(){
																			
																			$(this).delay(1000).animate({'opacity': 0}, 200, function(){
																				
																				$(this).empty().append('Illustrate,').animate({'opacity': 1}, 200, function(){
																					
																					$(this).delay(1000).animate({'opacity': 0}, 200, function(){

																						$(this).empty().append('Animate').animate({'opacity': 1}, 500, function(){
																							
																							$(this).parent().delay(1000).animate({'opacity': 0}, 200, function(){
																								
																								$(this).empty().append('and <i>Shoot.</i>').animate({'opacity': 1}, 200, function(){
																									
																									$(this).find('i').animate({'opacity': 1}, 200, function(){	
																									
																										$(this).parent().delay(2000).animate({'opacity': 0}, 200, function(){
																										
																											$(this).empty().append('<a href="http://www.facebook.com/anankitpatil" rel="facebook-page" class="fb-ani" target="_blank">Facebook</a><a href="mailto:anankitpatil@gmail.com" class="ma-ani">anankitpatil@gmail.com</a><a href="#" class="ph-ani">+44 7715950135</a>').animate({'opacity': 1}, 200);
																											
																										});
																									
																									});																									
																									
																								});	
																								
																							});	
																							
																						});	
																							
																					});	
																					
																				});	
																			
																			});	
																			
																		});	
																		
																	});	
																	
																});
																
															}); 
															
														});
													
													});
												
												});
												
											});	

										});

									});

								});

							});

						});

					});

				});

			});

		});	

	}

});

//gPlus
	
(function() {
  var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
  po.src = 'http://apis.google.com/js/plusone.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();

//Fb
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "http://connect.facebook.net/en_GB/all.js#xfbml=1&appId=267333386610873";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));