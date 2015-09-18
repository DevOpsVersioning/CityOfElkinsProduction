<?php require("json_form_scripts.php");?>
<!DOCTYPE HTML>
<html>
	<head> 
	    	<meta charset="UTF-8">
	 	<title>Residential Demolition</title>

        	<link rel="icon" href="http://cityofelkinswv.com/templates/default/favicon.png">
		<link rel="stylesheet" href="elkins.css" type="text/css">

<link rel="icon" href="http://cityofelkinswv.com/templates/default/favicon.png">
<link rel="stylesheet" href="elkins.css" type="text/css">

    	<style>.internaluse { display: none; } </style> </head>
<body>
<!-- Justin Redmon -->

<header></header>
<article>
<h1>Residential Demolition Permit Application</h1>
<form>
<br>

<div class="internaluse">
<h3>Office Use Only</h3><br>

<label> Permit Number
<input type="text" name="permitnumber"><br> 
</div>

<h3>Property Owner Information</h3>

<label>Owner's name 
<input type="text" name="ownersname" class="submitter" required></label><br>
<label>Address 
<input type="text" name="address"></label><br>
<label>Phone number
<input type="text" name="phonenumber" required></label><br>
<p><strong>NOTE: Property owners may only do the work on their own residence. Any work done on other property must be done by a contractor.</strong></p>


<h3>Job Site Information</h3>

<label>Address
<input type="text" name="address"></label><br>
<label>New dwelling area
<input type="text" name="newdwellingarea"> Square feet</label><br>
<label>Garage area
<input type="text" name="garagearea"> Square feet</label><br>
<label>Accessory building
<input type="text" name="accessorybuilding"> Square feet</label><br>
<label>Finished attic area
<input type="text" name="finishedatticarea"> Square feet</label><br>
<label>Basement area
<input type="text" name="basementarea"> Square feet</label><br>
<label>Other area
<input type="text" name="otherarea"> Square feet</label><br>



<h3>Contractor</h3>

<label>Name
<input type="text" name="contractorname"></label><br>
<label>Address
<input type="text" name="contractoraddress"></label><br>
<label>Phone
<input type="text" name="contractorphone"></label><br>
<label>WV License Number
<input type="text" name="contractorwvlicense"></label><br>
<label>City License Number
<input type="text" name="contactorcitylicense"></label><br>
<p><strong>NOTE: Contractors are required by City Ordinance to be registered to work in the City and to file Business and Occupation Taxes on the work done.</strong></p>


<h3>Asbestos Abatement</h3>

<label>State Certified Asbestos Inspector's Name
<input type="text" name="asbestosinspectorsname"></label><br>
<label> Absestos Inspection Results : </label>
<label>Abestos Found
<input type="radio" name="AbsestosFound"></label>
<label>Asbestos Free
<input type="radio" name="AsbestosFree"></label><br>
<label>State Certified Asbestos Inspector's License Number
<input type="text" name="inspectorslicense"></label><br>
<label>State Certified Asbestos Contractor's License Number
<input type="text" name="contractorslicense"></label><br>


<label>Cost of Work
<input type="text" name="costofwork"></label><br>
<br>

<p><strong>No work to begin until this application is approved.</strong></p>
<p><strong>All work must be completed within 30 calendar days.</strong></p>


<p><strong>1. The approved demolition permit must be posted on the construction site before any work is begun and until completion of work covered by
said permit. The permit expires six months after the date of issue.</strong></p>
<p><strong>2. Owner and/or contractor hereby agree to indemnify and hold the City of Elkins and its officials and representatives harmless against
all claims, warrants, demands, cause of action or suits from or occasioned by the work which shall be subject to this permit.</strong></p>
<p><strong>3. At least 48 hours before digging, West Virginia law requires contacting Miss Utility of West Virginia, Inc. at 1-800-245-4848 (toll free).</strong></p>


<h3>Permit Fee (Projects under $800 are exempt)</h3>

<p>$800 TO $3,000 = $10.00</p>
<label>Amount Paid :
<input type="text" name="amountpaid"></label><br>
<p>Above $3,000 = .333% OF Total</p>
<div class="internaluse">
<h3>Office Use Only</h3><br>

<label>Receipt Number: 
<input type="text" name="receiptnumber"></label><br>
<br>
</div>

<h3><strong>I UNDERSTAND AND WILL ADHERE TO FOREGOING REQUIREMENTS.</strong></h3><br>

<label>Signature of Owner
<input type="text" name="ownerssignature"></label><br>
<label>Signature of Applicant
<input type="text" name="applicantsignature"></label><br>
<br>

<div class="internaluse">
<h3>Office Use Only</h3><br>

<label>Approved by Building Inspector: 
<input type="text" name="buildinginspector"></label><br>
<label>Date
<input type= "text" name="date"></label><br>
<label>Signature of Building Inspector
<input type="text" name="buildinginspectorsignature"></label><br>
<br>
<label>Approved by Building Committee: 
<input type="text" name="buildingcommittee"></label><br>
<br>
<label>Signature of Chairman of Building Committee
<input type="text" name="signatureofchairmanofbuildingcommittee"></label><br>
<br>

<h3>Approved by Utility Departments</h3>
<br>
<label>Signature for Sewer Department
<input type="text" name="sewerdepartmentsignature"></label><br>
<label>Signature for Water Department
<input type="text" name="waterdepartmentsignature"></label><br>
<br>
<label>Approved by Fire Chief
<input type="text" name="firechief"></label><br>
<br>
<label>Signature of Fire Chief
<input type="text" name="firechiefsignature"></label><br>
<br>
<br>

<p><strong>The above demolition application has been approved by the building committee and granted by the city council and the elkins 
landmarks commission. you are hereby authorized to proceed according to the specifications as set forth in your application.</strong></p>

<h3>Permit Granted by Elkins City Council</h3>
<br>
<label>Date 
<input type="text" name="applicationdate"></label><br>
<label>Signature of Elkins City Clerk
<input type="text" name="elkinscityclerksignature"></label><br>
<br>

<h3>Elkins Landmarks Commission Notified</h3>
<br>
<label>Date
<input type="text" name="applicationdate"></label><br>
<label>Signature 
<input type="text" name="signature"></label><br>
</div><br>

</form>

<footer>City of Elkins, WV &bull; 401 Davis Avenue, Elkins WV 26241 &bull; 304.636.1414<br> <a href="mailto:lmbarrick@cityofelkinswv.com" target="_blank">info@cityofelkinswv.com</a> &bull; <a href="http://cityofelkinswv.com/index.php/photo-credits">Photo Credits</a></footer> 
</article>

</body>
</html>
