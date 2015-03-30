<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>ANDRE'S STEAKHOUS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="shortcut icon" href="../../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css"/>
        <link rel="stylesheet" type="text/css" href="css/style4.css"/>
		<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    </head>
    <body id="page">
    	<?php 
			include 'settings.php';
			
			
		?>
        <ul class="cb-slideshow">
            <li>
                <span>Image 01</span>
                    <div>
                        <h3></h3>
                    </div>
            </li>
            <li><span>Image 02</span><div><h3></h3></div></li>
            <li><span>Image 03</span><div><h3></h3></div></li>
            <li><span>Image 04</span><div><h3></h3></div></li>
            <li><span>Image 05</span><div><h3></h3></div></li>
            <li><span>Image 06</span><div><h3></h3></div></li>

        </ul>
        <div class="container">
            
            <header>
                <h1> <img src="images/logobig.png" alt="logo" style="width:100%;"></h1>                    
                    <div id="findUSposition">
                      
                            <a href="tel:<?php echo $telephone ?>" class="callus callfind"><img src="images/call.png" alt="Call" style="float:left;"><p style='margin-top: 14px;'>Call US</p></a>
                        
                        <div id="findUS">
                            <script>
                            var ua = navigator.userAgent;
                            if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
                                console.log("Android uslo");
                                var prostordugme=document.getElementById('findUS');
                                var dugme= document.createElement('a');
                                dugme.setAttribute('class', "callfind findUS");
                                dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
                                dugme.innerHTML="<img src='images/location.png' alt='location' style='float:left;'><p style='margin-top: 14px;'>Find US</p>";
                                prostordugme.appendChild(dugme);
                            }
                            else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
                                console.log("Iphone ");
                                var prostordugme=document.getElementById('findUS');
                                var dugme= document.createElement('a');
                                dugme.setAttribute('class', "callfind findUS");
                                dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
                                dugme.innerHTML="<img src='images/location.png' alt='location' style='float:left;'><p style='margin-top: 14px;'>Find US</p>";
                                prostordugme.appendChild(dugme);
                            }
                            else if (ua.indexOf("BlackBerry") >= 0)
                                    {
                                      
                                        console.log("Blakberu je prosao ");
                                        console.log("Blakberu je prosao ")
                                        var prostordugme=document.getElementById('findUS');
                                        var dugme= document.createElement('a');
                                        dugme.setAttribute('class', "callfind findUS");
                                        dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
                                        dugme.innerHTML="<img src='images/location.png' alt='location' style='float:left;'><p style='margin-top: 14px;'>Find US</p>";
                                        prostordugme.appendChild(dugme);
                                    }                               
                                else {
                                console.log("nije nigdje uslo default ")
                                var prostordugme=document.getElementById('findUS');
                                var dugme= document.createElement('a');
                                dugme.setAttribute('class', "callfind findUS");
                                dugme.setAttribute('href',"geo:0,0?q=1110 W. Lake Cook Road Suite 375 Buffalo Grove, IL 60089");
                                dugme.innerHTML="<img src='images/location.png' alt='location' style='float:left;'><p style='margin-top: 14px;'>Find US</p>";
                                prostordugme.appendChild(dugme);
                            }

                            

                            // if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                            // // some code..
                            // }

                            </script>    
                        </div>
                        
                           <div class="homeposition"><a href="first/index.php" class="homebutton callfind">Home</a></div> 
                                             
                    </div>      	
				
            </header>
        </div>
    </body>
</html>