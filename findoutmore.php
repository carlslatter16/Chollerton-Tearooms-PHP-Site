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
				     	<li><a href="index.php">Home</a></li>
				     	<li><a href="findoutmore.php" class="active">Find Out More</a></li>
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
				<form action="confirmation.php" method="POST" name="interestform"> <!--Input form to send data to the sql server, via the confirmation page-->
					<h3>Register Your Interest</h3>

					Forename: <br><input type="text" name="forename" placeholder="John" required> <!--I give each field a name for using in my scripts, a placeholder to help the user and required paramenters for everything except landline, which is reasonable-->
					<br>
					Surname: <br><input type="text" name="surname" placeholder="Doe" required>
					<br>
					Email: <br><input type="text" name="email" placeholder="example@gmail.com" required>
					<br>
					Landline Telephone No: <br><input type="text" name="landline" placeholder="0191*******">
					<br>
					Mobile No: <br><input type="text" name="mobile" placeholder="07********" required>
					<br>
					Postal Address: <br><input type="text" name="postaladdress" placeholder="Street, City/Town, Post Code" required>

					<h4>Category Of Facility:</h4>
					<select name="category">
						<?php
							include 'scripts.php';
							fetchCategories(); /**A function to dynamically grab the names of the categories and put them into a select box, only one can be selected, as per the specification**/
						?>
					</select>

					<h4>Contact Method:</h4> <!--I use radio buttons since they are binary choice which is what the specification wanted, similarly to the selection box above, I can use either, but this works better stylistically below this-->
					<input type="radio" name="deliverymethod" value="post" required>Post<br> <!--The radio buttons share a bame group meaning the group has the required property-->
					<input type="radio" name="deliverymethod" value="email">Email<br>
					<input type="radio" name="deliverymethod" value="sms">SMS<br>

					<input type="submit" value="Submit">  <!--The submit button to trigger the event to switch pages-->
				</form>

			</main>		<!--End of main-->

			<footer>		<!--The actual 'box' around the text-->

				<h4>Chollerton Tearooms © 2018 - Author: Carl Slatter (w18004969)</h4> <!--Useful reference information-->

			</footer>	<!--End of footer-->

	</body>		<!--End of body-->
</html>		<!--End of html-->
