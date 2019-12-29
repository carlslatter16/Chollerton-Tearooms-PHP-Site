<!DOCTYPE html>

<html lang="En"> <!--Added lang as per the validator-->

	<head> <!--None visable content-->
  		<title>Chollerton Tearooms</title> <!--What displays in the tab-->


 	 	<meta charset="utf-8">
  		<meta name="description" content="Chollerton Tearooms"> <!--Website metadata-->
	 	<meta name="author" content="Carl Slatter">

  		<link rel="stylesheet" href="style.css"> <!--CSS and Font linking I use a backup font too-->
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
				<?php /**Runs the function from the scripts file to prepare the sanatized data array for upload and display**/
					include 'scripts.php';
					prepareInput();
				?>
			</main>		<!--End of main-->

			<footer>		<!--The actual 'box' around the text-->

				<h4>Chollerton Tearooms © 2018 - Author: Carl Slatter w18004969</h4> <!--Useful reference information-->

			</footer>	<!--End of footer-->

	</body>		<!--End of body-->
</html>		<!--End of html-->
