<?php
	require("dblogin.php"); // get login credentials
	
	echo '<!DOCTYPE HTML>
	<html>
	<head>
	    	<meta charset="UTF-8">
	 	<title>City Hall View</title>

        	<link rel="icon" href="http://cityofelkinswv.com/templates/default/favicon.png">
		<link rel="stylesheet" href="elkins.css" type="text/css">
    	</head>
	<body>
	<header></header>
	<article>';

	// Create connection
	$conn = new mysqli($db_server, $db_city_user, $db_city_password, $db_database);
	// Check connection

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "SELECT submission_number, identifier, form_name FROM cityForms";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<p> id: " . $row["submission_number"]. " Name: ". " " . $row["identifier"]. " " ."Name of form". " " . $row["form_name"]. " ". '<a href="'.$row["form_name"].".php?id=".$row["submission_number"].'">link to form </a>'.  "</p><br>";
			
		}
		
	} else {
		echo "0 results";
	}
	
	
	$conn->close();
	echo '</article>
	<footer>City of Elkins, WV &bull; 401 Davis Avenue, Elkins WV 26241 &bull; 304.636.1414<br> <a href="mailto:lmbarrick@cityofelkinswv.com" target="_blank">info@cityofelkinswv.com</a> &bull;
	<a href="http://cityofelkinswv.com/index.php/photo-credits">Photo Credits</a></footer>
	</body>
	
	</html>';
?>
