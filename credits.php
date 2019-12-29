<!DOCTYPE html>

<html lang="En"> <!--Added lang as per the validator-->

	<head> <!--None visable content-->

  		<title>Chollerton Tearooms</title> <!--What displays in the tab-->

			<?php
			include 'connect.php';
			?>

 	 	<meta charset="utf-8"> <!--The character set I am using, for efficiency and compatibility-->
  	<meta name="description" content="Chollerton Tearooms"> <!--Website metadata-->
	 	<meta name="author" content="Carl Slatter">

  		<link rel="stylesheet" href="style.css"> <!--CSS and Font linking (I use a backup font too)-->
  		<link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'> <!--Imported font that fits the style of the page-->

	</head>

	<body>

		<header> <!--Holds the logo, nav bar and also the form-->

		    	<nav> <!--My navigation bar-->

		    		<img id="logo" src="Images\logo.png" alt="logo"> <!--The logo at the top left of my page, custom made from using materials online-->

			    	<ul>
				     	<li><a href="index.php">Home</a></li>
				     	<li><a href="findoutmore.php">Find Out More</a></li>
				     	<li><a href="admin.php">Admin</a></li>				<!--My links-->
				     	<li><a href="credits.php" class="active">Credit</a></li>
				     	<li><a href="wireframe.pdf">Wireframe</a></li>
			    	</ul>

		  		</nav>	<!--End of nav-->

  	 	</header>	<!--End of header-->

		<section id="toplayer"> <!--I use this to keep the banner elements together, and to style them together-->

    		<img src="Images\banner.jpg" alt="banner" id="banner">   <!--This is for my banner, it's use is appropriate because it takes up little vertical room and makes sense to the brief-->

    		<h1>Chollerton Tearooms</h1> <!--The heading of the page-->

		</section>	<!--End of info-->

			<main> <!--The main 'box' of the page-->
				<article class="creditinfo"> <!--Used for styling later-->

					<h3>Personal Details</h3>
					<ul>
						<b>Name: </b> Carl Slatter				<!--My data-->
						<b>ID: </b> w18004969
						<b>Email: </b> carl.slatter@northumbria.ac.uk
					</ul>

					<h3>Creditation</h3>

					<p> <!--Sourcing info-->
						The Background & Logo were made partially from linked sources with
						rather major tweaking in photoshop to make it suitible for the site.
						The rest of the assets are linked above in the order of url, filename
						on site, website and sourced year.
					</p>

					<ul> <!--Links to the pages these are from, altered or not. I included harvard referencing in the format of url, site filename, website name and year uploaded/website founded-->
	  				<a href="https://www.clipartmax.com/so/tea-clipart/2/">Part Of My Custom Made Logo ~ Tea Time: Clipartmax.com [Online] (2018) (Accessed: 28 April 2019)</a><br>
						<a href="http://www.bcbay.com/life/fun/2014/08/06/259860.html">Banner Image ~Nest in The Teahouse: Bcbay.com [Online] (2014) (Accessed: 28 April 2019)</a><br>
	  				<a href="https://www.vecteezy.com/vector-art/107691-coffee-minimalist-icon-vectors">Source Of The Background Icons ~ Nest in The Teahouse: Vecteezy.com [Online] (2019) (Accessed: 28 April 2019)</a><br>
	  				<a href="https://www.harrods.com/en-gb/restaurants/afternoon-tea/the-harrods-tea-rooms">To Tearoom Image ~ The Harrods Tea Rooms: Harrods.com [Online] (2019) (Accessed: 28 April 2019)</a><br>
	  				<a href="http://findit.chichester.co.uk/company/437866817363968">Craft Store Image ~ Craft & Hobbies: Findit.Chichester.co.uk [Online] (2019) (Accessed: 28 April 2019)</a><br>
	  				<a href="https://www.sfdsystems.com/product/product-gallery/">Village Store Image ~ Lightbox Gallery: SFDSystems.com [Online] (2018) (Accessed: 28 April 2019)</a><br>
	  				<a href="https://courierlocations.uk/category/post-office/">Post Office Image ~ Bestwood Village Sub Post Office: Courier Locations.uk [Online] (2018) (Accessed: 28 April 2019)</a><br>
	    			<a href="https://www.booking.com/hotel/gb/castlecroft-bed-and-breakfast.en-gb.html?aid=356980;label=gog235jc-1DCAsoUEIdY2FzdGxlY3JvZnQtYmVkLWFuZC1icmVha2Zhc3RIM1gDaFCIAQGYAQm4ARfIAQzYAQPoAQGIAgGoAgM;sid=0ffdac3cf6e2fb96f5571f27a04f4f1f;dist=0&keep_landing=1&sb_price_type=total&type=total&">Bed & Breakfast Image ~ Castlecroft Bed and Breakfast: Booking.com [Online] (2015) (Accessed: 28 April 2019)</a><br>
						<a href="https://www.iconfinder.com/icons/1631704/cookies_cup_drink_restaurant_tea_tearoom_yumminky_icon">Tearoom Icon ~ Yumminky Icon: IconFinder.com [Online] (2019) (Accessed: 28 April 2019)</a><br>
						<a href="https://www.iconfinder.com/icons/2889738/bakers_ball_craft_cut_scissors_string_twine_icon">Craft Icon ~ Twine Icon: IconFinder.com [Online] (2019) (Accessed: 28 April 2019)</a><br>
						<a href="http://simpleicon.com/shop-5.html">Village Store Icon ~ Shop 5: SimpleIcon.com (2018) (Accessed: 28 April 2019)</a><br>
						<a href="https://www.iconfinder.com/icons/2424787/home_mailbox_network_office_post_postoffice_property_icon">Post Office Icon ~ Property Icon: IconFinder.com [Online] (2018) (Accessed: 28 April 2019)</a><br>
						<a href="https://thenounproject.com/term/bed-and-breakfast/249107/">Bed And Breakfast: TheNounProject.com [Online] (2018) (Accessed: 28 April 2019)</a><br>
				</ul>

				<h3>Security considerations</h3> <!--Security info in two paragraphs like asked-->
				<p>
					Security is extreamly important in modern day. You must ensure that both the website, and the server itself are secure in order to protect data integrity, confidentiality and availability.
					Data breaches are a common occurance, and steps have to be taken in order to prevent them happening. The admin page needs to be locked down and not be public, preferbly not using the username 'admin', and must
					use a strong password that is unique. Strong password policy is important for any buisness. Some common hacking methods are sql injection in which sql code is injected into a input field in order to modify
					or view data that they shouldn't be allowed to. This is due to lack of care with usage of user created varaibles inside an SQL statement that are not parameterized.
					<br>
					<br>
					There is also XSS(Cross-Site Scripting) in which javascript is uploaded to a server using typical input, usually in a public place, that is then run on other
					machines client side. This can vary in severity but can mean that data is sent to a remote server so it is very important that it protected against. This is normally, but not limited to, because of lack of
					validation of '< >' characters. I have fixed both of these issues on the site. Another important note is that in order to stay in line with GDPR, you must ask the user if they want to use cookies, should they
					ever be implemented into the site.

				</p>
				</article>
			</main>		<!--End of main-->

			<footer>		<!--The actual 'box' around the text-->

				<h4>Chollerton Tearooms © 2018 - Author: Carl Slatter (w18004969)</h4> <!--Useful reference information-->

			</footer>	<!--End of footer-->

	</body>		<!--End of body-->
</html>		<!--End of html-->
