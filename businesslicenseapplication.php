<?php require("json_form_scripts.php");?>
<!DOCTYPE HTML>
<!-- Aaron Sharp -->
<html>
	<head>
	    	<meta charset="UTF-8">
	 	<title>Building Permit Application</title>
        	<link rel="icon" href="http://cityofelkinswv.com/templates/default/favicon.png">
		<link rel="stylesheet" href="elkins.css" type="text/css">
    </head>
    <body>
	    <header></header>
	    <article>
		<form>
<h1>Building Permit Application</h1>
	<!--Application Date <input type="text" name="applicationDate"><br>-->
	<!--Permit Number <input type="text" name="permitNumber">-->
<h2>Property Owner Information</h2>
	<label>Owner's Name <input class="submitter" type="text" name="userName" required></label><br>
	<label>Address <input type="text" name="ownersaddress" required></label><br>
	<label>Phone Number <input type="text" name="ownerPhone" required></label>
	<p>Note: Property owners may only do the work on their own residence. Any work done on other property must be done by a contractor.</p>
<h2>Contractor</h2>
	<label>Name  <input type="text" name="contractorName"></label><br>
	<label>Address  <input type="text" name="contractorAddress"></label><br>
	<label>Phone  <input type="text" name="contractorPhone"></label><br>
	<label>WV license number  <input type="text" name="contractorLicenseNumber"></label><br>
	<label>City license <input type="radio" name="contractorLicense" value="yes">Yes</label><label><input type="radio" name="contractorLicense" value="no">No</label>
	<p>Note: Contractors are required by City Ordinance to be registered to work in the City and to file Business and Occupation taxes on the work done.</p>
<h2>Plumbing Contractor</h2>
	<label>Name  <input type="text" name="plumberName"></label><br>
	<label>Address  <input type="text" name="plumberAddress"></label><br>
	<label>Phone  <input type="text" name="plumberPhone"></label><br>
	<label>WV license number  <input type="text" name="plumberLicenseNumber"></label><br>
	<label>City license <input type="radio" name="plumberLicense" value="yes">Yes</label> <label><input type="radio" name="plumberLicense" value="no">No</label>
<h2>Electrical Contractor</h2>
	<label>Name  <input type="text" name="electricName"></label><br>
	<label>Address  <input type="text" name="electricAddress"></label><br>
	<label>Phone  <input type="text" name="electricPhone"></label><br>
	<label>WV license number  <input type="text" name="electricLicenseNumber"></label><br>
	<label>City license <input type="radio" name="electricLicense" value="yes">Yes</label> <label><input type="radio" name="electricLicense" value="no">No</label><br>
	<label>Electrical license number  <input type="text" name="ElectricalLicenseNumber"></label>
<h2>Contractor-Other (Specify)</h2>
	<label>Name  <input type="text" name="otherName"></label><br>
	<label>Address  <input type="text" name="otherAddress"></label><br>
	<label>Phone  <input type="text" name="otherPhone"></label><br>
	<label>WV license number  <input type="text" name="otherLicenseNumber"></label><br>
	<label>City license <input type="radio" name="otherLicense" value="yes">Yes</label> <label> <input type="radio" name="otherLicense" value="no">No</label>
<h2>Asbestos Abatement</h2>
	<label>State certified asbestos inspector name  <input type="text" name="StateCertifiedAsbestosInspectorName"></label><br>
	<label><input type="radio" name="AsebestosAbatement" value="Abestosfound">Asbestos found</label>
	<label><input type="radio" name="AsebestosAbatement" value="Abestosfree">Asbestos free</label> <br>
	<label>State certified asbestos inspector license number  <input type="text" name="stateCertifiedAsbestosInspectorLicenseNumber"></label><br>
	<label>State certified asbestos contractor license number  <input type="text" name="stateCertifiedAsbestosContractorLicenseNumber"></label><br>
<h2>Description of Work</h2>
<textarea name="workComment"></textarea>
<h2>Job Site Information</h2>
	<label>Address  <input type="text" name="jobSiteAddress"></label><br>
	<label>New dwelling area in square feet <input type="text" name="newDwellingArea"></label><br>
	<label>Finished attic area in square feet <input type="text" name="finishedAtticArea"></label><br>
	<label>Garage area in square feet <input type="text" name="garageArea"></label><br>
	<label>Basement area in square feet <input type="text" name="basementArea"></label><br>
	<label>Accessory building in square feet <input type="text" name="accessoryBuilding"></label><br>
	<label>Other area in square feet <input type="text" name="otherArea"></label><br>
<h2>Type of Improvement</h2>
	<label><input type="radio" name="TypeOfImprovement" value="newNonstruction">New construction</label><br>
	<label><input type="radio" name="TypeOfImprovement" value="addition">Addition</label><br>
	<label><input type="radio" name="TypeOfImprovement" value="sign">Sign (Must attach sign application)</label><br>
	<label><input type="radio" name="TypeOfImprovement" value="remodelOrRenovation">Remodel/Renovation</label><br>
	<label><input type="radio" name="TypeOfImprovement" value="demolition">Demolition</label><br>
	<label><input type="radio" name="TypeOfImprovement" value="other"></label><label>Other <input type="text" name="improvementOther"></label>
<h2>Proposed Use</h2>
	<label><input type="radio" name="ProposedUse" value="familyDwelling">Family dwelling</label><br>
	<label><input type="radio" name="ProposedUse" value="commercialIndustrial">Commercial/Industrial</label><br>
	<label><input type="radio" name="ProposedUse" value="accessoryBuilding">Accessory building</label><br>
	<label><input type="radio" name="ProposedUse" value="multi-family">Multi-Family</label><br>
	<label><input type="radio" name="ProposedUse" value="other">Other</label>
	<label><input type="text" name="useOther"></label>
<h2>New Construction</h2>
	<label>Number of stories high <input type="text" name="numberOfStoriesHigh"></label><br>
	<label>Thickness of external wall <input type="text" name="thicknessOfExternalWall"></label><br>
	<label><input type="checkbox" name="sewerInfo0" value="sewerTapFeePaidToTheCity">Sewer tap fee paid to the city?</label><br>
	<label><input type="checkbox" name="sewerInfo1" value="sewerAuthorizationAsRequested">Sewer authorization as requested?</label><br>
	<label><input type="checkbox" name="sewerInfo2" value="plotAttachedShowingDistanceFromStreetInFrontAndPropertyLinesOnLeftRightAndRear">Plot attached showing distance from street in front, and property lines on left, right, and rear?</label><br>
	<label><input type="checkbox" name="sewerInfo3" value="flueOrChimney">Flue or chimney? (Must start at ground with concrete footer or grouted foundation of brick or block with liner and extend 3 feet above highest point of roof.)</label><br>
	<label><input type="checkbox" name="sewerInfo4" value="commercialBuildingOrNewConstructionPlans">Commercial Building or new construction plans? (2 copies)</label><br>
	<label><input type="checkbox" name="sewerInfo5" value="isPropertyInFloodPlain">Is property in flood plain?(Must attach pages 2 and 3.)</label><a href="http://www.dewv.net/city/steveforms/floodplaininformation.html"> If yes click here to see the Flood Plain Information</a><br> 
	<label><input type="checkbox" name="sewerInfo6" value="waterTapFeePaidToCity">Water tap fee paid to city?</label><br>
<h2>Materials to be Used</h2>
	<label>Roofing material  <input type="text" name="RoofingMaterial"></label><br>
	<label>Other construction materials  <input type="text" name="otherConstructionMaterials"></label><br>
<h2>Cost of Work (Materials and Labor)</h2>
	<label><textarea name="costComment"></textarea><br></label>
</form>
	<p>1. Owner is ultimately responsible for conformance to the latest edition of the International Building Code, the National Electrical Code, and the National Fire Protection Code.</p>
	<p>2. The approved building permit must be posted on the construction site before any work is begun, and until completion of work covered by said permit. The permit expires 6 months after the date of issue.</p>
	<p> 3. Owner and/or contractor hereby agree to indemnify and hold the city of Elkins and its officials and representatives harmless against all claims, warrants, demands, cause of action or suits 
	from or occasioned by the work which shall be subject to this permit.</p>
	<p>4. At least 48 hours before digging, West Virginia law requires contacting Miss Utility of West Virginia, Inc. at 1-800-245-4848 (toll free).</p>
	<p>No work is to begin until this form is approved!</p>
	</article>
	<footer>City of Elkins, WV &bull; 401 Davis Avenue, Elkins WV 26241 &bull; 304.636.1414<br> <a href="mailto:lmbarrick@cityofelkinswv.com" target="_blank">info@cityofelkinswv.com</a> &bull; <a href="http://cityofelkinswv.com/index.php/photo-credits">Photo Credits</a></footer>
	</body>
</html>
