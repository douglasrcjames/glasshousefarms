<?php require_once("includes/sessions.php"); ?>

<!doctype html>
<html>
<head>
	<title>Glass House Farms</title>
	<meta charset="utf-8" >
	<meta name="description" content="Glasshouse Farms - High end growing">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="includes/media/css/styles.css" media="all" rel="stylesheet" type="text/css"/>
	<link href="includes/media/css/uikit.css" media="all" rel="stylesheet" type="text/css"/>
	<script src="includes/media/js/uikit.min.js"></script>
	<script src="includes/media/js/uikit-icons.min.js"></script>
</head>
<!-- 
  - line under navbar
  - change hover of icons to change color or image or something cool
  - thinner glass/water/ between columns
 -->

<style>

/* 
Site Colors
 - Titles Green: hex #6CBD45
 - Body text dark grey: hex #545454
 - “Our Team” background: hex #F7F7F7
*/

/*/    APPLIES TO ALL   /*/

@font-face {
font-family: "AvenirNext";
src: url(includes/media/fonts/avenir-next-pro-full/AvenirNextLTPro-Regular.ttf);
}

@font-face {
font-family: "AvenirNextBold";
src: url(includes/media/fonts/avenir-next-pro-full/AvenirNextLTPro-Bold.ttf);
}

@font-face {
font-family: "AvenirNextDemi";
src: url(includes/media/fonts/avenir-next-pro-full/AvenirNextLTPro-Demi.ttf);
}



body {
font-family: 'AvenirNext','Trebuchet MS';

}

p {
	color: black;
	font-family: 'AvenirNext','Trebuchet MS';
	font-size: 14px;
	color: #545454;
}

h1 {
	font-family: 'AvenirNextBold','Trebuchet MS'; 
	color: #6CBD45;
}

h5 {
	font-family: 'AvenirNextDemi','Trebuchet MS'; 
	color: #545454;
}

h2,h3,h4 {
	font-family: 'AvenirNextDemi','Trebuchet MS'; 
	/*font-weight: 700;*/
	color: #6CBD45;
}

a { 
    color:#545454;
}
	
a:hover { 
    color:#6CBD45;
}
	
a:focus {
	color:#85C467;
}

a:active {
	color:#5FBE31;
}

.ghf_button {
	font-family: 'AvenirNext','Trebuchet MS'; 
    background-color: Transparent;
    background-repeat:no-repeat;
    color:white; 
    border-radius: 9px; 
    padding: 5px 15px; 
    font-size: 12px;
    font-weight: bold;
    border: 2px solid white;
}

.ghf_button:hover {
	font-family: 'AvenirNext','Trebuchet MS'; 
    background-color: white;
    background-repeat:no-repeat;
    color:#6CBD45; 
    border-radius: 9px; 
    padding: 5px 15px; 
    font-size: 12px;
    border: 2px solid #6CBD45;
}

.ghf_button:focus {
		outline:0;
	}

.ghf_button_grey {
	font-family: 'AvenirNext','Trebuchet MS'; 
    background-color: Transparent;
    background-repeat:no-repeat;
    color:#545454; 
    border-radius: 9px; 
    padding: 5px 15px; 
    font-size: 12px;
    font-weight: bold;
    border: 2px solid #545454;
}

.ghf_button_grey:hover {
	font-family: 'AvenirNext','Trebuchet MS'; 
    background-color: white;
    background-repeat:no-repeat;
    color:#6CBD45; 
    border-radius: 9px; 
    padding: 5px 15px; 
    font-size: 12px;
    border: 2px solid #6CBD45;
}

.ghf_button_grey:focus {
		outline:0;
	}

/*.ghf_button:active {
    background-color: white;
    background-repeat:no-repeat;
    color:black; 
    border-radius: 9px; 
    padding: 5px 15px; 
    font-size: 12px;
    border: 2px solid #6CBD45;
    box-shadow: 1 1px #666;
    transform: translateY(1px);

}*/


</style>


<header style="background: #6CBD45;">
	<div style="background: #6CBD45; padding-left: 10%; padding-right: 10%;">
	    <nav class="uk-navbaruk-margin uk-visible@m uk-text-nowrap"  style="background: #6CBD45; padding-top: 1%;" uk-navbar>
	        <div class="uk-navbar-left">
	            <a href="/" class="uk-navbar-item">
					<img style="max-width: 350px" class="uk-logo uk-responsive-height" src="includes/media/images/horizontal-logo-white-1200px.png" alt="GlassHouseLogo">
				</a>
	        </div>
			<div class="uk-navbar-right uk-responsive-height">
				<ul class="uk-navbar-nav">
					<li><a href="#production" style="color:white;"> PRODUCTION </a></li>
                    <li><a href="#technology" style="color:white;"> TECHNOLOGY </a></li>
                    <li><a href="#our-team" style="color:white;"> OUR TEAM </a></li>
					<li><a href="#media" style="color:white;"> MEDIA </a></li>
                    <li><a href="#contact" style="color:white;"> CONTACT </a></li>
				</ul>
			</div>	
	
	    </nav>
	</div>
	
	 <!-- Display only on small screens -->
	<div class="uk-container">
		<nav class="uk-navbar uk-navbar-container uk-margin uk-hidden@m" style="background: #6CBD45; padding-top:1.5%; padding-bottom: 1.5%;">
            <div class="uk-navbar-left">
				<div class="uk-navbar-item" style="max-width: 350px">
					<a href="/" class="uk-navbar-item">
						<img class="uk-logo uk-responsive-height uk-responsive-width"  src="includes/media/images/horizontal-logo-white-1200px.png" alt="GlassHouseLogo">
					</a>
				</div>
			</div>
            <div class="uk-navbar-right">
                <div>
                    <a class="uk-navbar-toggle uk-navbar-toggle-icon uk-icon" href="#" uk-navbar-toggle-icon="" style="color:white;"><svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" ratio="1"><rect y="9" width="20" height="2"></rect><rect y="3" width="20" height="2"></rect><rect y="15" width="20" height="2"></rect></svg></a>
						<div class="uk-navbar-dropdown uk-padding-small" uk-drop="mode: click; cls-drop: uk-navbar-dropdown; boundary: !nav; flip: x">
							<a href="#production">PRODUCTION</a><br>
							<a href="#technology">TECHNOLOGY</a><br>
							<a href="#our-team">OUR TEAM</a><br>
							<a href="#media">MEDIA</a><br>
							<a href="#contact">CONTACT</a><br>
						</div>
                </div>
            </div>
	    </nav>
	</div> 
</header>

<body>
<!-- Alert -->
<div class="uk-container-small uk-width-1-4@m uk-position-top-center uk-position-medium uk-position-z-index">
	<?php echo message(); ?>
</div>

<div class="uk-padding" style="background-color: #6CBD45">
	<div class="uk-container">
		<div class="uk-child-width-1-2@m" uk-grid>
            <div style="padding-left: 16%">
          	    <h1 style="color:white; font-size: 52px;"><b>STEP INTO <br>OUR HOUSE</b></h1>
				<p style="color:white; line-height: 1px;padding-top: 16px;"><i><b>Take a look inside our facility!</b></i></p>
				<button id="js-lightbox" class="ghf_button" type="button">View</button>
				<a href="#contact"><button class="ghf_button" type="button">Contact</button></a>
            </div>
            <div>
                <div class="uk-position-relative uk-light" uk-slideshow="autoplay: true; autoplay-interval: 3500">
				    <ul class="uk-slideshow-items">
				        <li>
				            <img src="includes/media/images/slideshow/facility_1.jpg" alt="" uk-cover>
				        </li>
				        <li>
				            <img src="includes/media/images/slideshow/facility_2.jpg" alt="" uk-cover>
				        </li>
				        <li>
				            <img src="includes/media/images/slideshow/facility_3.jpg" alt="" uk-cover>
				        </li>
						<li>
				            <img src="includes/media/images/slideshow/facility_4.jpg" alt="" uk-cover>
				        </li>
				        <li>
				            <img src="includes/media/images/slideshow/facility_5.jpg" alt="" uk-cover>
				        </li>
				        <li>
				            <img src="includes/media/images/slideshow/GHF_lettuce_fairy.png" alt="" uk-cover>
				        </li>
				    </ul>
				    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
		    		<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

				    <div class="uk-position-bottom-center uk-position-small">
				        <ul class="uk-dotnav">
				            <li uk-slideshow-item="0"><a href="#">Item 1</a></li>
				            <li uk-slideshow-item="1"><a href="#">Item 2</a></li>
				            <li uk-slideshow-item="2"><a href="#">Item 3</a></li>
							<li uk-slideshow-item="3"><a href="#">Item 4</a></li>
				            <li uk-slideshow-item="4"><a href="#">Item 5</a></li>
				            <li uk-slideshow-item="5"><a href="#">Item 6</a></li>
				        </ul>
				    </div>
				</div>
            </div>
       
        </div>
		
		
	</div>

	 <script>
            var util = UIkit.util;

            util.on('#js-animation-switcher', 'change', function() {
                util.attr(util.$('#js-lightbox-animation'), 'animation', this.value);
            });

            util.on('#js-lightbox', 'click', function (e) {
                e.preventDefault();

                UIkit.lightboxPanel({
                    items: [
                        {source: 'includes/media/images/slideshow/facility_1.jpg', caption: 'Our fresh lettuce'},
                        {source: 'includes/media/images/slideshow/facility_2.jpg', caption: 'Our fresh lettuce'},
                        {source: 'includes/media/images/slideshow/facility_3.jpg', caption: 'Our facility and workers'},
                        {source: 'includes/media/images/slideshow/facility_4.jpg', caption: 'Our large greenhouse facility'},
						{source: 'includes/media/images/slideshow/facility_5.jpg', caption: 'Our large greenhouse facility'},
						{source: 'includes/media/images/slideshow/GHF_lettuce_fairy.png', caption: 'Our Lettuce Fairy'},
                    ]
                }).show();
            });
    </script>
</div>

<div class="uk-container uk-background-contain uk-background-center-left uk-visible@m" style="background-image: url('includes/media/images/production-long-rays-1100px.png');">
	<a name="production"></a>
	<div class="uk-container uk-column-1-2@m uk-padding">
		<div class="uk-padding-remove">
			<img src="includes/media/images/blank-box.png" alt="" style="max-width:350px" class="uk-padding-remove">
		</div>
		<div>
			<h2 name="production">Production</h2>
		<p style="">At our facility in Ithaca, NY, Glass House Farms has the capacity to produce an estimated 500-750K heads of Bibb lettuce every year. In addition, we can also grow Basil, Pac Choi, Sylvetta, Arugula, and Kitazawa Arugula lettuce. With the goal of distributing our produce to big-box stores across the nation, we are ensuring the highest quality of lettuce growth by utilizing a glass greenhouse with an automated controlled environment and nutrient-filled watering tables to make sure our lettuce is happy and healthy. </p>
		</div>
	</div>
</div>
<div class="uk-container uk-background-contain uk-background-center-left uk-hidden@m" style="background-color: #F7F7F7">
	<a name="production"></a>
	<div class="uk-container uk-column-1-2@m">
		<div class="uk-padding-remove">
			<img src="includes/media/images/production-long-rays.png" alt="" style="max-width:350px" class="uk-padding-remove">
		</div>
		<div>
			<h2>Production</h2>
		<p class="">At our facility in Ithaca, NY, Glass House Farms has the capacity to produce an estimated 500-750K heads of Bibb lettuce every year. In addition, we can also grow Basil, Pac Choi, Sylvetta, Arugula, and Kitazawa Arugula lettuce. With the goal of distributing our produce to big-box stores across the nation, we are ensuring the highest quality of lettuce growth by utilizing a glass greenhouse with an automated controlled environment and nutrient-filled watering tables to make sure our lettuce is happy and healthy. </p>
		</div>
	</div>
</div>

<div class="uk-padding" style="background-color: #6CBD45">
	<a name="technology"></a>
	<div class="uk-container">
		<h2 style="color:white;">Technology</h2>
		<div style="margin: 0 auto; width: 80%;" class="uk-grid-match uk-child-width-1-3@m uk-padding-small" uk-grid>
			<div class="uk-padding-small">
            	<img class="uk-align-center" src="includes/media/images/sun-icon-900px.png" alt="" style="max-width: 100px; max-height: 100px;">
                <p style="color:white;">Photosynthesis is the basic process plants use to absorb energy from the sun, 
                but having control over the intensity and quality of light being provided results in finely tuned growing techniques. 
            	Glass House Farms’ 8,000sqft. facility is lined with over 140 600W HPS (high pressure sodium) lights that provide our crops with sufficient light, 
        		in addition to the natural energy the sun emits.</p>
            </div>
            <div class="uk-padding-small">
            	<img class="uk-align-center" src="includes/media/images/glass-icon-900px.png" alt="" style="max-width: 100px; max-height: 100px;">
                <p style="color:white;">What is the benefit of growing under glass? Year-round production. 
                By taking advantage of greenhouse farming, Glass House Farms is able to produce Bibb lettuce throughout the winter with controlled temperature and relative humidity. 
            	Growing under glass as opposed to the alternative material, polyurethane, allows a higher percentage of light transparency.</p>
            </div>
            <div class="uk-padding-small">
            	<img class="uk-align-center" src="includes/media/images/water-drop-icon-900px.png" alt="" style="max-width: 100px; max-height: 100px;">
                <p style="color:white;">
                	One of the most significant benefits of greenhouse farming is being able to utilize hydroponics. 
                	We achieve this by elevating the crops above ponds of nutrient-filled water to be sure they grow faster and healthier than traditional field farming. 
            		This also results in using about ¼ of the water that is needed for field crops, as well as greatly reducing the amount of water lost into soil.</p>
            </div>
        </div>
	</div>
</div>


<div class="uk-padding" style="background-color: #F7F7F7">
	<a name="our-team"></a>
	<div class="uk-container">
		<h2>Our Team</h2>
		<div style="margin: 0 auto; width: 80%" class="uk-grid-large uk-child-width-expand@m" uk-grid>
		    <div class="">
		        <div class="uk-text-center">
		            <div class="uk-padding-small">
		                <img src="includes/media/images/wayne.png" alt="">
		            </div>
		            <div>
		                <h4 style="color:#6CBD45;font-family: 'AvenirNextBold','Trebuchet MS'; "><b>WAYNE BISHOP</b></h4>
		                <p>
			            Wayne is the driving force behind Glass House Farms with 25 years of management and project development experience. 
			            He is determined to build a successful cultivation company.<br><br>
	                	<a target="_blank" href="https://www.facebook.com/wayne.a.bishop"><img src="includes/media/images/facebook-icon.png" alt="" style="max-width: 30px"></a>
	                	<a target="_blank"  href="mailto:wbishop@glasshousefarms.co"><img src="includes/media/images/mail-icon.png" alt="" style="max-width: 30px"></a>
	                	<a target="_blank"  href="https://www.linkedin.com/in/wayne-bishop-07194b7/"><img src="includes/media/images/linkedin-icon.png" alt="" style="max-width: 30px"></a>
                		</p>
		            </div>
		        </div>
		    </div>
		    <div>
		        <div class="uk-text-center">
		            <div class="uk-padding-small">
		                <img src="includes/media/images/armando.png" alt="">
		            </div>
		            <div>
		            	<h4 style="color:#6CBD45;font-family: 'AvenirNextBold','Trebuchet MS'; "><b>ARMANDO SUAREZ</b></h4>
		                <p>
			            Armando has been involved in the greenhouse and hydroponic world for 20 years. 
			            He is a horticulture specialist with extensive industry-wide product knowledge.<br><br>
						<a target="_blank"  href=""><img src="includes/media/images/facebook-icon.png" alt="" style="max-width: 30px"></a>
	                	<a target="_blank"  href="mailto:asuarez@glasshousefarms.co"><img src="includes/media/images/mail-icon.png" alt="" style="max-width: 30px"></a>
	                	<a target="_blank"  href="https://www.linkedin.com/in/armando-suarez-8712616/"><img src="includes/media/images/linkedin-icon.png" alt="" style="max-width: 30px"></a>
                		</p>
		            </div>
		        </div>
		    </div>
		    
		</div>
		
	</div>
</div>
<div class="uk-padding" style="background-color: #E0E0E0">
	<a name="media"></a>
	<div class="uk-container">
		<h2>Media</h2>
		<div style="margin: 0 auto; width: 70%" class="uk-grid-large uk-child-width-expand@l uk-visible@l" uk-grid>
		  <div class="uk-card-default uk-padding uk-column-1-2@xl">
			  <img src="includes/media/images/the-ithican-article.jpg" alt="article picture" style="max-width:350px" class="uk-responsive-width">
			  <h4 style="color: #545454;">Dining Services Provides New Options in IC Square</h4>
			  <p>Ithaca College Dining Services implemented an array of changes to IC Square prior to the beginning of the Fall 2018 semester.</p>
			  <a href="https://theithacan.org/news/dining-services-provides-new-options-in-ic-square/" target="_blank">
				<button class="ghf_button_grey" >
				  Read More
			  	</button>
			  </a>
		  </div>
		</div>
		<div class="uk-grid-large uk-child-width-expand@l uk-hidden@l" uk-grid>
		  <div class="uk-card-default uk-padding uk-column-1-2@xl">
			  <img src="includes/media/images/the-ithican-article.jpg" alt="article picture" style="max-width:350px" class="uk-responsive-width">
			  <h4 style="color: #545454;">Dining Services Provides New Options in IC Square</h4>
			  <p>Ithaca College Dining Services implemented an array of changes to IC Square prior to the beginning of the Fall 2018 semester.</p>
			  <a href="https://theithacan.org/news/dining-services-provides-new-options-in-ic-square/" target="_blank">
				<button class="ghf_button_grey" >
				  Read More
			  	</button>
			  </a>
		  </div>
		</div>
	</div>
</div>

<div class="uk-padding-large" style="background-color: #6CBD45">
	<a name="contact"></a>
	<div class="uk-container uk-column-1-2@m">
		<div>
		<img src="includes/media/images/greenhouse-stock3.jpg" alt="" style="max-width:300px" class="uk-padding-remove">
			<h3 style="color:white;line-height: 0px;"><b>Address</b></h3>
	        <p style="color:white;line-height: 20px;">
				10 Pinckney Road,<br>
				Ithaca, NY, 14850<br><br>
				Phone: 661.378.4555<br>
				Email: info@glasshousefarms.co
			</p>
		</div>
		<div>
			<a name="contact"></a>
			<h2 style="color:white;">Contact</h2>
			<form action="includes/process_email.php" method="post" class="uk-grid-small" uk-grid>
				<div class="uk-width-1-2@m">
			        <input style="border-radius: 5px; opacity: 0.90;" class="uk-input" type="name" name="name" placeholder="Name">
			    </div>
			    <div class="uk-width-1-2@m">
			        <input style="border-radius: 5px;opacity: 0.90;" class="uk-input" type="email" name="email" placeholder="Email">
			    </div>
			    <div class="uk-width-1-1">
			        <textarea style="border-radius: 5px;opacity: 0.90;" class="uk-textarea" rows="7" type="message" name="message" placeholder="Message"></textarea>
			    </div>
			    <div class="uk-width-1-1">
			    	<input class="ghf_button" name="submit" type="submit" value="Send Message"></input>
				</div>
			</form>
		</div>
	</div>
</div>	
</body>
<footer style="background-color: #6CBD45">
	<div class="uk-container uk-padding-small" >
		<p class="uk-text-small uk-text-center" style="color:white;">
			<a style="color:white;" class="uk-link">Glass House Farms LLC</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<!-- 			<a uk-icon="icon: twitter" style="color:white;" href=""></a> <a style="color:white;" class="uk-link" href="" target="_blank"> Twitter</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a uk-icon="icon: facebook" style="color:white;" href=""></a> <a style="color:white;" class="uk-link" href="" target="_blank"> Facebook</a>&nbsp;&nbsp;|&nbsp;&nbsp; -->
			<a uk-icon="icon: file-edit" style="color:white;" href="http://www.vines.design"></a> by <a style="color:white;" class="uk-link" href="https://www.vines.design" target="_blank">  Vines.design</a>
		</p>
	</div>
</footer>

</html>