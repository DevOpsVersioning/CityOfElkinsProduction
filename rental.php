<!doctype html>
<?php require("json_form_scripts.php"); ?>
<!--Jacob Lancaster-->
<html>
<head>
<meta charset="UTF-8">
<title>Elkins Rental Registration Application</title>

<link rel="icon" href="http://cityofelkinswv.com/templates/default/favicon.png">
<link rel="stylesheet" href="elkins.css" type="text/css">

</head>
<body>
<header></header>

<article>
<h1>City of Elkins Rental Registration Program<br>Certificate of Use and Occupancy Application</h1>

<form>

<h3>Unit Information</h3>

<p>
	<label>Street Address 
	<input type="text" name="streetAddress">
	</label>

	<label>Unit Number 
	<input type="text" name="unitNum">
	</label>

	<label>Number of Units(Apartments) in the building 
	<input type="text" name="numOfUnits">
	</label>
</p>

<p>
	<label>This unit is located on the following story: </label>
	<label><input type="radio" name="floor" value="first">First Floor</label>
	<label><input type="radio" name="floor" value="second">Second Floor</label>
	<label><input type="radio" name="floor" value="third">Third Floor</label>
	<label><input type="radio" name="floor" value="basement">Basement</label>
	<label><input type="radio" id="otherButton" name="floor" value="other">Other</label>
	<input type="text" id="otherText" name="otherStory">
</p>

<h3>Owner Information</h3>

<p>
	<label>Name of Owner 
	<input type="text" name="ownerName"></label><br>

	<label>Mailing Address 
	<input type="text" name="mailingAddress"></label><br>

	<label>City & State 
	<input type="text" name="cityState"></label><br>

	<label>Home Phone
	<input type="text" name="ownerHomePhone"></label>

	<label>Work Phone
	<input type="text" name="ownerWork"></label>

	<label>Cell Phone
	<input type="text" name="ownerCell"></label><br>

	<label>Email 
	<input type="text" name="email"></label><br>
</p>

<h3>Contact Information</h3>

<p>
	<label>Contact Name 
	<input type="text" name="contactName" class="submitter" required></label><br>

	<label>Home Phone
	<input type="text" name="contactHomePhone" required></label>

	<label>Work Phone
	<input type="text" name="contactWorkNum"></label>

	<label>Cell Phone
	<input type="text" name="contactCellNum"></label><br>

	<label>Mail Certificate To 
	<input type="text" name="contactAddress" required></label><br>
</p>

<p>
	<label>I acknowledge that Elkins City Code requires that access be provided to all areas of any structure containing rental dwelling units. I agree to provide such access and to schedule inspection(s) on or before the expiration date of the current Certificate of Use and Occupancy.</label><br>

	<label><input type="checkbox" name="acknowledgement" value="yes" required>I Accept the Terms</label>
</p>

<div class="internaluse">
	<h3>THIS SECTION FOR OFFICE USE ONLY</h3>
	<p>
		<label>Received by:
		<input type="text" name="receivedBy"></label>
		<label>Fee Amount:
		<input type="text" name="feeAmount"></label>
		<label>Date Received:
		<input type="text" name="dateReceived"></label>
		<label>No:
		<input type="text" name="number"></label>
	</p>
</div>

</form>

<p>
<label>Resources:</label>
</p>
<ul>
	<li>The City Ordinance pertaining to residential leasing is available <a href=RentalOrdinance.html>here.</a></li>
	<li>A guideline for landlords on inspections is also available <a href=RentalInspection.html>here.</a></li>
</ul>

<p>
<label>Notes: </label>
</p>
<ol>
	<li>Use a separate form for each unit (house or apartment).</li>
	<li>Registration Fee is $30.00 per unit.</li>
	<li>Maximum of $150 per apartment building.</li>
	<li>A $10.00 fee will be assessed for missed appointments.</li>
	<li>Please make checks payable to: City of Elkins, 401 Davis Avenue, Elkins, WV 26241.</li> 
	<li>There will be a $25.00 fee for all returned checks.</li>
</ol>

<footer>City of Elkins, WV &bull; 401 Davis Avenue, Elkins WV 26241 &bull; 304.636.1414<br> <a href="mailto:lmbarrick@cityofelkinswv.com" target="_blank">info@cityofelkinswv.com</a> &bull; <a href="http://cityofelkinswv.com/index.php/photo-credits">Photo Credits</a></footer>

</article>
</body>
</html>
