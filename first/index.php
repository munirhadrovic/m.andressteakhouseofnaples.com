<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">

		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function(){
				$('#menu-menu').slicknav({
					prependTo:'#navigation-menu-menu'
				});
			});
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });		
    	</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><img src="img/logo.png" alt="LOGO"></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1>Powered by <a href="http://mobilegrows.com">Mobilegrows.com</a> |<a href="http://andressteakhouseofnaples.com/index.shtml" rel="external">  Clasic Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
		  		<a name="tops"></a>
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/1slide.jpg" alt="Steak">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/2slide.jpg" alt="Steak">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/3slide.jpg" alt="Steak">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/4slide.jpg" alt="Steak">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
				      
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn ui-icon-phone ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0) {

									console.log("Blakberu je prosao ")
									var prostordugme=document.getElementById('findUS');
									var dugme= document.createElement('a');
									dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
									dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									dugme.innerHTML="Find US";
									prostordugme.appendChild(dugme);
									}		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	   
				</fieldset>			
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#ourstory" data-transition="<?php echo $transitionefect ?>">Our Story</a>
					</div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#menu-page" data-transition="<?php echo $transitionefect ?>">Menu</a>
					</div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></div>
				</div>
				<img src="img/horns.png" alt="Rogovi" style="width:100%;">
				<p style="font-style:italic;">
					"The bites of tenderloin were scrumptious, tender beyond belief, and bursting with the flavor of aged meat standing on its own merit"
				</p>
				<h2>
					Award Winning Steaks
				</h2>
				<p>
				Andre’s Steakhouse was established in 1993, direct from one of New York's finest steakhouses, Andre's brings to Naples this world famous taste. Our customers say we have the best steak they've ever had! We are also the winner of the Wine Spectator award yearly since 2001, for having one of the most outstanding wine lists in Naples. We have nearly 4,000 bottles of wine in our cellar to make sure there is one to suit your tastes.
At Andre’s we pride ourselves on providing a unique dining experience for our patrons. Quality food and exceptional service create the total dinning experience.	
				</p>
				<a href="#tops" id="top1" class="backToTop ui-corner-all invisible"></a> 
		  </div>
		  
		 
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page 2 Our story///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="ourstory" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu">
						<ul id="menu" class="menuhide">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#ourstory" data-transition="<?php echo $transitionefect ?>">Our Story</a></li>
							<li><a href="#menu-page" data-transition="<?php echo $transitionefect ?>">Menu</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>
					
					<iframe width="100%" height="auto" src="https://www.youtube.com/embed/5cj4VmZ-PDM" frameborder="0" allowfullscreen></iframe>	   
					<h3>Andre's Story</h3>
					<p>I’m Andre and welcome to my restaurant. I pride myself on delivering to my customers the very best dining experience in Naples Florida. Stop in for yourself and see why people are raving about our food and service. Please watch the above video to see what you have been missing. I’m looking forward to serving you this evening. I am very pleased to be one of the few restaurants in Naples to be able to celebrate a 20th anniversary!</p>
					<p style="font-style:italic;">"We enjoyed our experience at Andre's. The staff is very attentive and the owner, Andre is always around to make you feel welcome! Oh yea, the food is amazing. I recommend the filet and Andre's salad! Kathy K."</p>
				</div>
				
			</div>			
		</div>
		
		<!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- contact us ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
						<ul id="menu-contact" class="menuhide">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#ourstory" data-transition="<?php echo $transitionefect ?>">Our Story</a></li>
							<li><a href="#menu-page" data-transition="<?php echo $transitionefect ?>">Menu</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>
					<div>

						<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
							Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
							E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
							Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
							Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
							Message:<br>
							<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
							<input type="submit" value="Send" name="submit" class="btn" id="input-dugme">
						</form>
					</div>

				</div>
			</div>		
		</div>
<!--contact us///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<!-- page seo ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="menu-page" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-menu">
						<ul id="menu-menu" class="menuhide">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#ourstory" data-transition="<?php echo $transitionefect ?>">Our Story</a></li>
							<li><a href="#menu-page" data-transition="<?php echo $transitionefect ?>">Menu</a></li>
							<li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>
					
					<div id="menu-text">
						<h2>Andre's Steakhouse Menu</h2>  
						  <h2>APPETIZERS &amp; SALADS</h2>

						  <div class="menu-left-column">
						    <div class="menu-selection">SLICED TOMATOES<br>
						      <span class="menu-selection-description">With Andre's own sauce (for two)</span> </div>
						    <div class="menu-selection">SLICED TOMATOES &amp; ONIONS<br>
						      <span class="menu-selection-description">With Andre's own sauce (for two)</span> </div>
						    <div class="menu-selection">WEDGE OF LETTUCE<br>
						      <span class="menu-selection-description">Served with bacon and blue cheese dressing </span> </div>
						    <div class="menu-selection">HOUSE SALAD </div>
						    <div class="menu-selection">SARDINES Boneless and Skinless </div>
						    <div class="menu-selection">GRILLED SMOKED BACON </div>
						  </div>
						  <!-- END MENU-LEFT-COLUMN -->
						  <div class="menu-right-column">
						    <div class="menu-selection">ANDRE'S SALAD<br>
						      <span class="menu-selection-description">Chopped tomatoes, onions, lettuce, bacon and shrimp, 
						      tossed with Andre's sauce, and topped with crumbled blue cheese</span> </div>
						    <div class="menu-selection">JUMBO SHRIMP COCKTAIL (6) </div>
						    <div class="menu-selection">MARINATED HERRING w/onion </div>
						    <div class="menu-selection">JUMBO STONE CRAB CLAW<br>
						      <span class="menu-selection-description">Market Price</span> </div>
						    <div class="menu-selection">LUMP CRAB MEAT COCKTAIL </div>
						  </div>
						  <div class="clear"></div>
						  <!-- END MENU-RIGHT-COLUMN -->
						  <span id="menu-specialties-lead-in">
						  	</br><p>Hot from the Broiler, made to your Individual Order
						    Served on a Sizzling Platter Suitable for Sharing </p>
						  </span>
						  <!-- END MENU-SPECIALTIES-LEAD-IN -->
						  <h2>HOUSE SPECIALTIES</h2>
						  <div class="menu-left-column">
						    <div class="menu-selection">STEAK FOR ONE, N.Y. STRIP  </div>
						    <div class="menu-selection">STEAK FOR TWO, PORTERHOUSE  </div>
						    <div class="menu-selection">STEAK FOR THREE, PORTERHOUSE  </div>
						    <div class="menu-selection">STEAK FOR FOUR, T-BONE  </div>
						  </div>
						  <div class="menu-right-column">
						  <div class="menu-selection">FILET MIGNON <span class="menu-selection-description">10oz. prepared Andre's way</span> </div>
						  <div class="menu-selection">LAMB CHOP <span class="menu-selection-description">French Rack</span> </div>
						  <div class="menu-selection">PRIME VEAL CHOP <span class="menu-selection-description">delicately broiled to release all the flavor</span> </div>
						  <div class="menu-selection">PORK CHOP </div>
						  <div class="menu-selection">BROILED CHICKEN <span class="menu-selection-description">One half</span> </div>
						  <div class="menu-selection">FRESH FISH OF THE DAY </div>
						  <div class="menu-selection">8 OZ. LOBSTER TAIL <span class="menu-selection-description">to compliment your steak ~ Market Price</span> </div>
						  </div>
						  <div class="clear"></div>
						  
						    <h2>SIDE DISHES</h2>
						 <div class="menu-left-column">
						  <div class="menu-selection">ANDRE'S GERMAN FRIED POTATO PLATTER (for two) </div>
						    <div class="menu-selection">CREAMED SPINACH</div>
						    <div class="menu-selection">BAKED IDAHO POTATO</div>
						    <div class="menu-selection">FRENCH FRIES</div>
						  </div>
						  <div class="menu-right-column">
						    <div class="menu-selection">STEAMED ASPARAGUS </div>
						    <div class="menu-selection">SAUTEED MUSHROOMS</div>
						    <div class="menu-selection">FRIED SHOESTRING ONIONS </div>
						  </div>
						  <div class="clear"></div>
						  
						  <p>&nbsp;</p>
						  <h2>DESSERTS - <span class="menu-extra">Available with Schlag (whipped cream)</span></h2>
						  <div class="menu-left-column">
						    <div class="menu-selection">PECAN PIE</div>
						    <div class="menu-selection">CARROT CAKE</div>
						    <div class="menu-selection">CHEESE CAKE </div>
						    <div class="menu-selection">CHOCOLATE MOUSSE CAKE</div>
						  </div>
						  <div class="menu-right-column">
						    <div class="menu-selection">ICE CREAM </div>
						    <div class="menu-selection">KEY LIME PIE </div>
						    <div class="menu-selection">PROFITEROLES </div>
						    <div class="menu-selection">STRUDEL </div>
						  </div>
						  <div class="clear"></div>
						 
						 
						 
						  <h2>BEVERAGES</h2>
						  <div class="menu-left-column">
						    <div class="menu-selection">COFFEE</div>
						    <div class="menu-selection">TEA</div>
						    <div class="menu-selection">ESPRESSO </div>
						    <div class="menu-selection">CAPPUCINO</div>
						    <div class="menu-selection">ICED COFFEE</div>
						  </div>
						  <div class="menu-right-column">
						    <div class="menu-selection">ICED TEA </div>
						    <div class="menu-selection">SODA </div>
						    <div class="menu-selection">VOSS STILL WATER </div>
						    <div class="menu-selection">VOSS SPARKLING WATER </div>
						  </div>

						  <div class="clear"></div>

						  <p>&nbsp;</p>

						  <h2>SPECIALTY COFFEES - <span class="menu-extra">All of our coffee drinks are topped with real schlag</span></h2>
						 <div class="menu-left-column">
						  <div class="menu-selection">MEXICAN COFFEE <span class="menu-selection-description">with Kahlua </span> </div>
						  <div class="menu-selection">IRISH COFFEE <span class="menu-selection-description">Irish Whiskey with a splash of green Creme de menthe</span> </div>
						  <div class="menu-selection">SPANISH COFFEE <span class="menu-selection-description">Cognac &amp; Tia Maria</span> </div>
						  </div>
						  <div class="menu-right-column">
						  <div class="menu-selection">BRAZILIAN COFFEE <span class="menu-selection-description">Cognac, Grand marnier &amp; tia Maria</span> </div>
						  <div class="menu-selection">ANDRE'S COFFEE <span class="menu-selection-description">Cognac, Amaretto &amp; Cacao Liqueur</span> </div>
						  </div>
						    <div class="clear"></div>
						  <p>&nbsp;</p>
						  <div class="menu-left-column">
						  <h2>Beer</h2>
						        <div class="menu-selection">Beck's</div>
						      <div class="menu-selection">Octoberfest</div>
						      <div class="menu-selection">Budweiser</div>
						      <div class="menu-selection">Bud Light</div>
						  </div>
						  <div class="menu-right-column">
						  <h2>Non-Alcoholic Beer</h2>
						        <div class="menu-selection">St. Paulie Girl </div>
						      <div class="menu-selection">O'Douls </div>
						</div>  
						  <p>&nbsp;</p>
						  <p>&nbsp;</p>
						    <div class="clear"></div>
						  <h2>WINE BY THE GLASS</h2>
						  <div id="menu-wine-left">
						  <h3>House Wine</h3>
						    <div class="menu-selection">Chardonnay </div>
						    <div class="menu-selection">Merlot </div>
						    <div class="menu-selection">Cabernet Sauvignon </div>
						    <div class="menu-selection">Pinot Grigio </div>
						  </div>
						  <div id="menu-wine-center">
						    <h3>Beringer</h3>
						    <div class="menu-selection">Chardonnay </div>
						    <div class="menu-selection">Merlot </div>
						    <div class="menu-selection">Cabernet Sauvignon </div>
						    <div class="menu-selection">White Zinfandel </div>
						    <div class="menu-selection">Pinot Grigio </div>
						    <div class="menu-selection">Pinot Noir </div>
						  </div>
						  <!-- End MENU WINE DENTER -->
						  <div id="menu-wine-right">
						  <h3>Andre's Wine</h3>
						    <div class="menu-selection">Chardonnay </div>
						    <div class="menu-selection">Merlot </div>
						    <div class="menu-selection">Cabernet Sauvignon </div>
						    <div class="menu-selection">Pinot Noir </div>
					  		</div>
					  <!-- End MENU WINE RIGHT -->
					</div>
										
				</div>
			</div>
		
		</div>
<!--page seo///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
			</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
		<script src="js/easing.js" type="text/javascript"></script>
		<!-- UItoTop plugin -->
		<script src="js/jquery.ui.totop.js" type="text/javascript"></script>
		<!-- Starting the plugin -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				*/
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
	</body>
</html>
