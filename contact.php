<!DOCTYPE html>
<html lang="en">
	<head>
  	<meta charset="utf-8">
  	<meta name="description" content="Your description goes here">
  	<meta name="keywords" content="one, two, three">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>OneCare by Lua | Homecare Services</title>
		
		<!-- external CSS link -->
		<script src="https://kit.fontawesome.com/993cdbabb8.js" crossorigin="anonymous"></script>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Anybody:wght@200;300;400;700&family=Cinzel&family=Merriweather:wght@300;400;700&family=Roboto:ital,wght@0,400;0,700;1,300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<header class="clear">
			<div class="Navbar">
				<div class="Navbar__Link Navbar__Link-brand">
					<i class="fa-solid fa-hands-holding-heart"></i>OneCare by Lua
				 </div>
				 <div class="Navbar__Link Navbar__Link-toggle">
				   <i class="fa-solid fa-bars"></i></i>
				 </div>
			   <nav class="Navbar__Items">
				 <div class="Navbar__Link">
				   <a href="index.html">Home</a>
				 </div>
				 <div class="Navbar__Link">
					<a href="#ourService">Our Service</a>
				 </div>
				 <div class="Navbar__Link">
					<a href="#aboutUs">About Us</a>
				 </div>
			   </nav>
			   <nav class="Navbar__Items Navbar__Items--right">
				 <div class="Navbar__Link">
				   Link
				 </div>
				 <div class="Navbar__Link">
				   Link
				 </div>
			   </nav>
			 </div>
		</header>
		<main>
			<section class="hero">
				<h1>In-home Care <br> Services </h1>
				<h4>We offer different types of home care services that would fit your family's needs and budget.</h4>
				
				<a class="btn-white" href="#">CONTACT US</a>
			</section>
			
		</main>
				<?php

                if($message_sent):

                ?>
					<h3> Your Message Has Been Sent Successfully!</h3>

                <?php

                else: 

                ?>

                <div class="container">  
                    <form id="contact" action="contactform.php" method="post">
                        <!-- Honeypot -->
                        <input type="text" name="_honey" style="display: none">

                        <!-- Disable Capcha -->
                        <input type="hidden" name="_captcha" value="false">

                        <input type="hidden" name="_next" value"#">

                      <h3>Quick Contact</h3>
                      <h4>Contact us today, and get reply with in 24 hours!</h4>
                      <fieldset>
                        <input placeholder="Your Full Name" type="text" name="Name" tabindex="1" required autofocus>
                      </fieldset>
                      <fieldset>
                        <input placeholder="Your Email Address" type="email" name="email" tabindex="2" required>
                      </fieldset>
                      <fieldset>
                        <input placeholder="Your Phone Number" type="tel" name="phone" tabindex="3" required>
                      </fieldset>
                      <fieldset>
                        <textarea placeholder="How Can We Help You...." name="message" tabindex="5" required></textarea>
                      </fieldset>
                      <fieldset>
                        <button name="submit" type="submit" name="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                      </fieldset>
                    </form>
                   
                    
                  </div>

                <?php
                endif
                ?>
			

		<section id="aboutUs" class="about">
				<section class="about_con">
					<h2>About Us</h2>
					<p>OneCare by Lua is a home care assistance service provider based in Southern California. Our service areas cover Los Angeles County, San Bernandino County, and Orange County.</p>
					<img class="headshot" src="css/images/headshot_placeholder.png" alt="Uriel Lua">
					<h5>Uriel Lua, Founder and Owner</h5>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque beatae, nemo ipsum officiis saepe sapiente voluptates consequatur autem pariatur ullam veniam illum repellat, ratione labore, dolores expedita ipsa voluptate cumque.</p>
					<br>
					<h3>Want to chat with us about our services? Or, interested in receiving a quote?</h3>
					<a class="btn-white" href="#">CONTACT US</a>
				</section>
			</section>
			
			</section>
		</section>
		<footer class="clear">
			<section class="contactInfo">
				<section class="contactInfo_con">
					<h6>OneCare by Lua</h6>
					<h6>Email: info@onecarebylua.com</h6>
					<h6>Mobile: (XXX) 123-1234</h6>
				</section>
			</section>
			<small> &copy; 2022 Maggie Chu | Template Designed by maggiemkchu </small>
		</footer>
		
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>
