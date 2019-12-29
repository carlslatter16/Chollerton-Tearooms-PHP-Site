
  	<?php
		$servername="localhost";
		$username="placeholderUser";
		$password="placeholderPass";
		$dbname="placeholderDBName";

		$conn = new mysqli($servername,$username,$password,$dbname);

		if ($conn === false)
		{
			echo "<p> The Connection Failed!</p>";
			echo "<p>The Error Was: " . $conn->connect_error . "</p>";
			exit;
		}
  	?>
