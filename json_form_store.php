<!DOCTYPE HTML>
<html>
	<head>
	    	<meta charset="UTF-8">
	 	<title>Submission Results</title>

        	<link rel="icon" href="http://cityofelkinswv.com/templates/default/favicon.png">
		<link rel="stylesheet" href="elkins.css" type="text/css">
    	</head>

	<body>
	    <header></header>
	    <article>

<?php
	require("dblogin.php"); // get login credentials
$test = 1;	
	$message = "";

	$json_string = json_encode($_POST);

	if (isset($id)) {
		$conn = mysqli_connect($db_server, $db_city_user, $db_city_password, $db_database);
	}
	else {
		$conn = mysqli_connect($db_server, $db_public_user, $db_public_password, $db_database);
	}
	
	if (!$conn) {
            echo("<p class=\"syserror\">Error connecting to database: " . mysqli_connect_error() . "</p>");
	}
	else {
		// Extract the basename of the form from the referer.
		$form_name = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH);
		$form_name = substr($form_name, strrpos($form_name, "/") + 1);
		$form_name = substr($form_name, 0, strrpos($form_name, "."));

		// Open server's copy of file that defines the form ...
		$data_missing = false;
		$submitter = "Unknown";
		$dom = new DOMDocument();
		$dom->loadHTMLFile($form_name . ".php");
		$dom->preserveWhiteSpace = false;
		$inputs = $dom->getElementsByTagName('input');
		$i = 0;

		// ... and examine all HTML input elements ...
		while ($input = $inputs->item($i++)) {
			// ... identify any inputs marked required that are missing data
			if ($input->hasAttribute("required") && $_POST[$input->getAttribute("name")] == "") {
				$data_missing = true;
				$message .= "<p class=\"usererror\">You must provide data for " . trim($input->parentNode->nodeValue) . ".</p>";
			}

			// ... find the input with class="submitter": the special identifier input
			if ($input->getAttribute("class") == "submitter") {
				$submitter = $_POST[$input->getAttribute("name")];

			}
		}

		// The following statement sets $id if an id value is specified in the URL query string.
		parse_str(rawurldecode(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_QUERY)));

		$form_name = mysqli_real_escape_string($conn, $form_name);
		$submitter = mysqli_real_escape_string($conn, $submitter);
		$json_string = mysqli_real_escape_string($conn, $json_string);

		if ($data_missing) {
			$message .= "<p>&nbsp;</p><p class=\"usererror\">Please use your browser's Back button, then make corrections and re-submit.</p>";
		}
		else if (isset($id)) {
			$id = mysqli_real_escape_string($conn, $id);

			$sql = "CALL update_submission($submitter, $json_string, $id);";

			if (mysqli_query($conn, $sql) && mysqli_affected_rows($conn) == 1) {
				$message = "<p>The data for submission number $id was updated.</p>";
			}
			else {
				$message = "<p class=\"syserror\">Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
			}
		}
		else {
			$sql = "SELECT submit_form('$submitter', '$form_name', '$json_string') AS new_id;";
			$result = $conn->query($sql);
			
			if ($result->num_rows == 1) {
    			$new_id = $result->fetch_assoc()["new_id"];
				$sql = "SELECT verify_submission('$submitter', '$form_name', '$json_string') AS verified;";
				$result = $conn->query($sql);
				if ($result->num_rows == 1 && $result->fetch_assoc()["verified"]) {
					$message = "<p>Thank you.</p><p>The tracking number for your submission is " . $new_id . ". Please make a note of it.</p>";

					/* The following code handles storing files in the database as binary. */
		
					$fileName = $_FILES['uploadFile']['name'];
					if (!empty($fileName)) {
					$tmpName  = $_FILES['uploadFile']['tmp_name'];
					$fileSize = $_FILES['uploadFile']['size'];
					$fileType = $_FILES['uploadFile']['type'];
					
					$fp      = fopen($tmpName, 'r');
					$content = fread($fp, filesize($tmpName));
					$content = addslashes($content);
					fclose($fp);
			      
					// Insert into the database:
					$query =  "CALL upload_attachment('$fileName', '$fileType','$fileSize' ,'$content' ,'$new_id');";
		
					$result = mysqli_query($conn, $query);
		
					if (mysqli_affected_rows($conn) != 1) {
						$message = $message . '<p class="syserror">Unfortunately, the file attachment(s) did not upload successfully.</p>';
						if (isset($test)){
							$message = $message . "<p class=\"syserror\">Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
							$message = $message . "<p>Test failed.</p>";
						}
					}}
					else if (isset($test)) {
						$message = $message . "<p>Test succeeded.</p>";
					}
				}
				else {
					$message = "<p class=\"syserror\">Error: your submission could not be verified.</p>";
					if (isset($test)){
						$message = $message . "<p class=\"syserror\">Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
						$message = $message . "<p>Test failed.</p>";
					}
				}

			}
			else {
				$message = "<p class=\"syserror\">Error: your submission was not processed.</p>";
				if (isset($test)){
					$message = $message . "<p class=\"syserror\">Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
					$message = $message . "<p>Test failed.</p>";
				}
			}
	    }

		mysqli_close($conn);
    }

	echo '<div class="result">' . $message . '</div>';

?>

	    </article>
	    <footer>City of Elkins, WV &bull; 401 Davis Avenue, Elkins WV 26241 &bull; 304.636.1414<br> <a href="mailto:lmbarrick@cityofelkinswv.com" target="_blank">info@cityofelkinswv.com</a> &bull; <a href="http://cityofelkinswv.com/index.php/photo-credits">Photo Credits</a></footer>

	</body>
</html>
