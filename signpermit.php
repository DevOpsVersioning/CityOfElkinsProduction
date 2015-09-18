<?php require("json_form_scripts.php");?>
<!DOCTYPE html>
<html>
	<head> 
	    <meta charset="UTF-8">
	 	<title>Sign Permit Application</title>
        <link rel="icon" href="http://cityofelkinswv.com/templates/default/favicon.png">
		<link rel="stylesheet" href="elkins.css" type="text/css">
     </head>
<body>
<!-- Justin Redmon -->

<header></header>
<article>
<h1>Sign Permit Application</h1>
<form>
	<br>
	<div class="internaluse">
	<h3>Office Use Only</h3><br>
	<label>Application Date: 
	<input type="text" name="applicationdate"></label><br>
	<label>Permit Number: 
	<input type="text" name="PermitNumber"></label><br>
	<br>
	</div>
	
	<h3>Applicant Info</h3>
	<div>
	<label>Applicant Name:<input type="text" name="applicantName"></label>
	<label>Applicant Phone Number:<input type="text" name="applicantNumber"></label>
	</div>

	<h3>Type of Sign</h3>

		<label><input type="radio" name="typeOfSign" value="Billboard" checked> Billboard</label><br>
		<label><input type="radio" name="typeOfSign" value="RoofSign"> Roof Sign</label><br>
		<label><input type="radio" name="typeOfSign" value="GroundPoleSign"> Ground Pole Sign</label><br>
		<label><input type="radio" name="typeOfSign" value="DoubleFacedSign"> Double Faced Sign</label><br>
		<label><input type="radio" name="typeOfSign" value="ProjectingSign"> Projecting Sign</label><br>
		<label><input type="radio" name="typeOfSign" value="WallSign"> Wall Sign</label><br>
		<label><input type="radio" name="typeOfSign" value="Other"> Other</label><br>
		
		<br>
		<label>If Other, specify type
		<input type="text" name="OtherType"></label><br>
		<br>


	<h3> Dimensions of Sign</h3>

	<label>Long
	<input type="text" name="DimensionsLong"></label>
	<label>Street Clearance
	<input type="text" name="StreetClearance"></label><br>
	<label>Wide
	<input type="text" name="DimensionsWide"></label>
	<label>Walk Clearance
	<input type="text" name="WalkClearance"></label><br>
	<label>Weight
	<input type="text" name="Weight"></label>
	<label>Sign Clearance From Face to Curb
	<input type="text" name="SignClearanceFromFacetoCurb"></label><br>
	<label>Additional Information
	<input type="text" name="AdditionalInformation"></label><br>
	<br>

	<label>Materials To Be Used<br>
	<textarea rows="3" cols="50" name="materialstobeused" ></textarea></label><br>

	<br>
	<label>Cost of Work (Materials and Labor)<br>
	<textarea rows="3" cols="50" name="costofwork" ></textarea></label><br>


	<p><strong>1. No projections of any kind, that is, vault, airways, step, cellar door, balconies, bay windows, oriels, marquees, tower projections, etc.,
	which may be beyond the street lines is included or authorized in this permit.</strong></p>
	<p><strong>2. I / We hereby promise to restore any and all damages to city sidewalks, streets, alleys, sewers, gas lines, water lines, or electrical
	installations which may result from this work.</strong></p><br>

	<p><strong>No work to begin until this permit is approved.</strong></p><br>
	
	<label>Signature Of The Owner<input type="text" name="userName" class="submitter" required></label>
	<label>Siganture Of The Applicant<input type="text" name="signatureOfOwner"></label>

<!--	<input id="json_form_button" type="submit" name="json_form_submit" value="Submit" class="json_form_nostore" formmethod="post" formaction="json_form_store.php">
			<input id="json_form_result" type="hidden" name="json_form_result" class="json_form_nostore">
			<input id="json_form_submission_id" type="hidden" name="json_form_submission_id" class="json_form_nostore">
			<input id="json_form_type" type="hidden" name="json_form_type" class="json_form_nostore">  --> 
</form>


<footer>City of Elkins, WV &bull; 401 Davis Avenue, Elkins WV 26241 &bull; 304.636.1414<br> <a href="mailto:lmbarrick@cityofelkinswv.com" target="_blank">info@cityofelkinswv.com</a> &bull; <a href="http://cityofelkinswv.com/index.php/photo-credits">Photo Credits</a></footer>
</article>

</body>
</html>
