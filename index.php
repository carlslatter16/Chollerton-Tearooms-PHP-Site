<!DOCTYPE html>

<html lang="En"> <!--Added lang as per the validator-->

	<head> <!--None visable content-->

  		<title>Chollerton Tearooms</title> <!--What displays in the tab-->

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
				     	<li><a href="index.php" class="active">Home</a></li>
				     	<li><a href="findoutmore.php">Find Out More</a></li>
				     	<li><a href="admin.php">Admin</a></li>				<!--My links-->
				     	<li><a href="credits.php">Credit</a></li>
				     	<li><a href="wireframe.pdf">Wireframe</a></li>
			    	</ul>

		  		</nav>	<!--End of nav-->

  	 	</header>	<!--End of header-->

		<section id="toplayer"> <!--I use this to keep the banner elements together, and to style them together-->

    		<img src="Images\banner.jpg" alt="banner" id="banner">   <!--This is for my banner, it's use is appropriate because it takes up little vertical room and makes sense to the brief-->

    		<h1>Chollerton Tearooms</h1> <!--The heading of the page-->

		</section>	<!--End of info-->

		<main> <!--The main 'box' of the page-->

			<article> <!--The main block of the website-->

				<h2>Tearoom</h2> <!--Subheading-->

				<section class="wrapper"> <!--Used to wrap the image and text-->

						<img src="Images\tearoom.jpg" alt="Tearoom" class="images"> <!--The image that is next to the text, with a class to style them together-->

						<p>	<!--Generic text that covers what the brief wanted-->
							We have a fantastic range of facilities here at Chollerton Tearooms. Come and have a traditional cup of tea, done the proper way. In our tearoom we have a wide variety of cakes, fine teas and confectionary for your delight. We believe in all things british here so you know they are coming made from traditionally sourced ingredients. Prices: Slice Of Victoria Sponge - £1.79, Cup of british tea - £1.10,
							Scone - £1.25. More to come!
					    </p>

				</section>	<!--End of info-->


				<h2>Craft Shop</h2> <!--Subheading-->


				<section class="wrapperAlt"> <!--Used to wrap the image and text in a reversed variant-->

						<img src="Images\craftshop.png" alt="Craft Shop" class="images"> <!--The image that is next to the text, with a class to style them together-->

						<p>	<!--Generic text that covers what the brief wanted-->
							Our craft shop is indespensible for those of you who love to sew, knit or any other medium. You can buy the tools, the materials, have a place to have a go at it and even ask advice from those who have done it for many years. We offer classes of various skills such as those listed above among others. The materials are fairly priced and are gathered from natural sources. There is always something new to learn at Chollerton Tearooms so come on by.
						</p>

				</section>	<!--End of info-->


				<h2>Village Store</h2> <!--Subheading-->

				<section class="wrapper"> <!--Used to wrap the image and text-->

						<img src="Images\villageshop.jpg" alt="Village Shop" class="images"> <!--The image that is next to the text, with a class to style them together-->

						<p>	<!--Generic text that covers what the brief wanted-->
							If you find yourself needing something, chances are we have it in our village store, we have all the standard shopping you'd normally do, plus some extras. Our prices are reasonable and like everything else, is inbuilt into the building. The store is open until late so even if you want a small snack, we've got you covered. If you need something, let us know and we'll see what we can do. Our shopkeeps are very friendly so you need only ask.
						</p>

				</section>	<!--End of info-->


				<h2>Post Office</h2> <!--Subheading-->

				<section class="wrapperAlt"> <!--Used to wrap the image and text in a reversed variant-->

					<img src="Images\postoffice.jpg" alt="Post Office" class="images"> <!--The image that is next to the text, with a class to style them together-->

						<p>	<!--Generic text that covers what the brief wanted-->
							We have a dedicated post office, to both send and recieve mail, and your own P.O box if you stay for an extended amount of time. You won't have to worry about missing parcels while you are out, let us do that for you. You can also buy postage materials onsite as well for your convinience. The post is sent out at 1200am and collected by 2:30pm.
						</p>

				</section> 	<!--End of wrapper-->


				<h2>Bed & Breakfast</h2> <!--Subheading-->

				<section class="wrapper"> <!--Used to wrap the image and text-->

						<img src="Images\bedandbreakfast.jpg" alt="B&B" class="images"> <!--The image that is next to the text, with a class to style them together-->

						<p>	<!--Generic text that covers what the brief wanted-->
							When you choose to stay at Chollerton Tearooms, we ensure you stay in the finest accomodation. You get views of the beautiful Chollerton countryside, with the vibe of a true traditionally british experience. You can stay as long as you want, with discounts for the longer you stay.
							We appreitate loyalty, and have our customers interests at heart so we often give free gifts to those who come multiple times.
						</p>

				</section> 		<!--End of wrapper-->

			</article>


			<section id="information"> <!--The element to the side of article but inside the main, holds useful info. My use of sections are like the legacy use of aside, but more relevant. Ignore the warnings from the sections, as I use headings inside the child elements-->

				<!--I use asides here to have multiple elements inside this seciton, it is appropriate because the parent element is still 'aside'-->

				<aside>

					<h3>Opening Times</h3> <!--Smaller Sub Heading-->

					<ul>
						<li><a>Monday: 8am - 6pm</a></li>
						<li><a>Tuesday: 8am - 6pm</a></li>
						<li><a>Wednesday: 8am - 6pm</a></li>
						<li><a>Thursday: 8am - 6pm</a></li>			<!--Generic text that covers what the brief wanted-->
						<li><a>Friday: 8am - 6pm</a></li>
						<li><a>Monday: 10am - 4pm</a></li>
						<li><a>Sunday: 12pm - 3pm</a></li>
					</ul>

					<h3>Holidays</h3> <!--Smaller Sub Heading-->

					<ul>
						<li><a>Easter: 8th April - 22nd April</a></li>
						<li><a>Christmas: 24th December - 4th January</a></li>		<!--Generic text that covers what the brief wanted-->
						<li><a>All Bank Holidays</a></li>
					</ul>

				</aside>	<!--End of aside-->

				<aside>

					<h3>Where To Find Us</h3>			<!--Smaller Sub Heading-->

					<p>You will find us in the cosy village of Chollerton. We are in the center of the village so you can't miss us! Our address is: </p>

					<ul>
						<li><a>Chollerton Tearooms</a></li>
						<li><a>46 Yellow Brick Rd</a></li>
						<li><a>Chollerton</a></li>				<!--Generic text that covers what the brief wanted-->
						<li><a>Hexham</a></li>
						<li><a>NE46 4TQ</a></li>
					</ul>

					<p>Our phone number for bookings and enquiries is <b>01509813888</b>. We answer from 8am - 6pm most days so it has never been easier. We can also offer you a free no obligation quote so you have time to decide.</p>

					<p>Our contact email address: <b>support@chollerton.co.uk</b></p>	<!--Contact information that would be useful for bookings-->

				</aside>	<!--End of aside-->

				<aside>

					<h3>News & Updates</h3>			<!--Smaller Sub Heading-->


					<p>12/04/18 - We have just recently renovated our suites with premium furnishments, we have put a lot of effort in so we just know you will love it. We have outfitted them with new wardrobes, drawers, tables, and chairs. We sourced them all from traditional craftsmen who turn their love for woodworking into a memorable experience for our valued customers. Make sure to have a look next time you are here, you won't be disappointed.
					</p>
														<!--Generic text that covers what the brief wanted-->

					<p>16/05/18 - We have updated our range of cakes and confectionaries. We now offer triple chocolate fudge cake free with any main course, and to sweeten the deal even further, all our pancakes now come with free syrup before 11am. We have added the aforementioned fudge cake along with victoria sponge, cheesecake and a selection of shortbreads. You will be able to view our prices online in the future so keep an eye out for that.

				</aside>	<!--End of aside-->

			</section> 		<!--End of section-->

		</main>		<!--End of main-->

		<footer>		<!--The actual 'box' around the text-->

			<h4>Chollerton Tearooms © 2018 - Author: Carl Slatter (w18004969)</h4> <!--Useful reference information-->

		</footer>	<!--End of footer-->

	</body>		<!--End of body-->
</html>		<!--End of html-->
