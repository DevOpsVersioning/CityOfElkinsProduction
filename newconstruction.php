<?php require("json_form_scripts.php");?>
<!DOCTYPE html>
<!--Ryan Donchez-->
<html>
	<head>
		<style>
		.hidden{display : none;}
		</style>
		<meta charset="UTF-8">
		<title>Application for New Construction</title>
		<link rel="icon" href="http://cityofelkinswv.com/templates/default/favicon.png">
		<link rel="stylesheet" href="elkins.css" type="text/css">
	</head>
	<body>
	<header><br><br></header>
		<article>
		<form>
		<h1>Application for New Construction</h1>
		<p> APPLICANT INSTRUCTIONS: For all applications, complete parts 1,2,3,4 &amp; 5
		of this form. If electrical work, also complete Part 6. If plumbing work, also complete Part 7. 
		If mechanical work, also complete part 8. For other permits, also complete part 9. See Part 10 for Site Plan.
		</p>
		<p>
		CITY OF ELKINS   401 DAVIS AVE   ELKINS WV 26241
		<label> Date Pd<input type = "date" name = "datePeriod"></label>
		<label> Receipt Number<input type = "number" name ="ReceiptNumber"></label>
		<label> Session Number<input type = "number" name ="SessionNumber"></label>
		</p>
		<h2> 1. Property Information </h2>
			<p>
				<label>Street Address: <input type="text" name="propertyAddress"></label><br>
				<label>Application Date: <input type="text" name="applicationDate"></label><br>
				<label>Apt: <input type="text" name="propertyApt"></label><br>
				<label>Zip: <input type="text" name="propertyZip"></label><br>
				<label>Parcel Number: <input type="text" name="parcelNum"></label><br>
				<label>Zoning: <input type="text" name="propertyZoning"></label><br>
				<label>Subdivision: <input type="text" name="propertySubdivision"></label><br>
				<label>Lot Number: <input type="text" name="propertyLotNum"></label>
			</p>
			<p>
				Parcel Type:<br>
				<label><input type="radio" name="parcelType" value="Residential"> Residential (R)</label><br>
				<label><input type="radio" name="parcelType" value="Industrial"> Industrial (I)</label><br>
				<label><input type="radio" name="parcelType" value="Commercial"> Commercial (C)</label><br>
				<label><input type="radio" name="parcelType" value="Other"> Other (O)</label><br>
			</p>
		<h2> 2. Owner Information</h2>
			<p>
				<label>First Name: <input type="text" name="ownerFirstName"></label><br> 
				<label>Last Name or Business Name: <input class ="submitter" type="text" name="userName" required></label><br> 
				<label>Phone: <input type="text" name="ownerPhone" required></label><br> 
				<label>Street Address: <input type="text" name="ownerAddress"></label><br> 
				<label>City, State: <input type="text" name="ownerCityState"></label><br> 
				<label>Zip: <input type="text" name="ownerZip"></label><br> 
			</p>	
		<h2> 3. Contractor Information</h2>
			<h3>Applicant (not owner):</h3>
			<p>
				<label>Name of Contractor: <input type="text" name="applicantName"></label><br>
				<label>Street Address:<input type="text" name="applicantAddress"></label><br>
				<label>City, State:<input type="text" name="applicantLocation"></label><br>
				<label>License Number:<input type="text" name="applicantLicense"></label><br>
			</p>
			<h3>Architect/Engineer:</h3>
			<p>	
				<label>Name of Contractor: <input type="text" name="builderName"></label><br>
				<label>Street Address:<input type="text" name="builderAddress"></label><br>
				<label>City, State:<input type="text" name="builderLocation"></label><br>
				<label>License Number:<input type="text" name="builderLicense"></label><br>
			</p>
			<h3>General Contractor:</h3>
			<p>		
				<label>Name of Contractor: <input type="text" name="contractorName"></label><br>
				<label>Street Address:<input type="text" name="contractorAdress"></label><br>
				<label>City, State:<input type="text" name="contractorLocation"></label><br>
				<label>License Number:<input type="text" name="contractorNumber"></label><br>
			</p>
			<h3>Excavation:</h3>
			<p>
				<label>Name of Contractor: <input type="text" name="excavationName"></label><br>
				<label>Street Address:<input type="text" name="excavationAdress"></label><br>
				<label>City, State:<input type="text" name="excavationLocation"></label><br>
				<label>License Number:<input type="text" name="excavationLicense"></label><br>
			</p>
			<h3>Concrete:</h3>
			<p>
				<label>Name of Contractor: <input type="text" name="concreteName"></label><br>
				<label>Street Address:<input type="text" name="concreteAddress"></label><br>
				<label>City, State:<input type="text" name="concreteLocation"></label><br>
				<label>License Number:<input type="text" name="contractorLicense"></label><br>
			</p>
			<h3>Carpentry:</h3>
			<p>
				<label>Name of Contractor: <input type="text" name="carpentryName"></label><br>
				<label>Street Address:<input type="text" name="carpentryAddress"></label><br>
				<label>City, State:<input type="text" name="carpentryLocation"></label><br>
				<label>License Number:<input type="text" name="carpentryLicense"></label><br>
			</p>
			<h3>Electrical:</h3>
			<p>
				<label>Name of Contractor: <input type="text" name="electricalName"></label><br>
				<label>Street Address:<input type="text" name="electricalAddress"></label><br>
				<label>City, State:<input type="text" name="electricalLocation"></label><br>
				<label>License Number:<input type="text" name="electricalLicense"></label><br>
			</p>
			<h3>Plumbing:</h3>			
			<p>
				<label>Name of Contractor: <input type="text" name="plumbingName"></label><br>
				<label>Street Address:<input type="text" name= "plumbingAddress"></label><br>
				<label>City, State:<input type="text" name="plumbingLocation"></label><br>
				<label>License Number:<input type="text" name="plumbingLicense"></label><br>
			</p>
			<h3>Sewer:</h3>
			<p>	
				<label>Name of Contractor: <input type="text" name="sewerName"></label><br>
				<label>Street Address:<input type="text" name="sewerAddress"></label><br>
				<label>City, State:<input type="text" name="sewerLocation"></label><br>
				<label>License Number:<input type="text" name="sewerLicense"></label><br>
			</p>	
			<h3>Mechanical:</h3>
			<p>	
				<label>Name of Contractor: <input type="text" name="mechanicalName"></label><br>
				<label>Street Address:<input type="text" name="mechanicalAddress"></label><br>
				<label>City, State:<input type="text" name="mechanicalLocation"></label><br>
				<label>License Number:<input type="text" name="mechanicalLicense"></label><br>
			</p>
			<h3>Roofing:</h3>
			<p>	
				<label>Name of Contractor: <input type="text" name="roofingName"></label><br>
				<label>Street Address:<input type="text" name="roofingAddress"></label><br>
				<label>City, State:<input type="text" name="roofingLocation"></label><br>
				<label>License Number:<input type="text" name="roofingLicense"></label><br>
			</p>
			<h3>Masonry:</h3>
			<p>
				<label>Name of Contractor: <input type="text" name="roofingName"></label><br>
				<label>Street Address:<input type="text" name="roofingAddress"></label><br>
				<label>City, State:<input type="text" name="roofingLocation"></label><br>
				<label>License Number:<input type="text" name="roofingLicense"></label><br>
			</p>
			<h3>Drywall or Lathing:</h3>			
			<p>	
				<label>Name of Contractor: <input type="text" name="drywallName"></label><br>
				<label>Street Address:<input type="text" name="drywallAddress"></label><br>
				<label>City, State:<input type="text" name="drywallLocation"></label><br>
				<label>License Number:<input type="text" name="drywallLicense"></label><br>
			</p>
			<h3>Sprinkler:</h3>	
			<p>	
				<label>Name of Contractor: <input type="text" name="sprinklerName"></label><br>
				<label>Street Address:<input type="text" name="sprinklerAddressr"></label><br>
				<label>City, State:<input type="text" name="sprinklerLocation"></label><br>
				<label>License Number:<input type="text" name="sprinklerLicense"></label><br>
			</p>
			<h3>Paving:</h3>
			<p>	
				<label>Name of Contractor: <input type="text" name="pavingName"></label><br>
				<label>Street Address:<input type="text" name="pavingAddress"></label><br>
				<label>City, State:<input type="text" name="pavingLocation"></label><br>
				<label>License Number:<input type="text" name="pavingLicense"></label><br>
			</p>
			<h3>Fire Alarm:</h3>			
			<p>	
				<label>Name of Contractor: <input type="text" name="fireAlarmName"></label><br>
				<label>Street Address:<input type="text" name="fireAlarmAddress"></label><br>
				<label>City, State:<input type="text" name="fireAlarmLocatioin"></label><br>
				<label>License Number:<input type="text" name="fireAlarmLicense"></label><br>
				
			</p>
		<h2> 4. Certification </h2>
			<p> I hereby certify that I am the owner of record of the named property, or that the proposed work is authorized by the owner of record and that I have been authorized by the owner to make this application as his/her authorized and I agree to conform to all applicable laws of this jurisdiction. In addition, if a permit for work described in this application is issued, I certify that the code official or the code official's authorized representative shall have the authority to enter areas covered by such permit at any reasonable hour to enforce the provisions of the code(s) applicable to such permit.</p>
			<p>
				<label>Signature of Applicant: <input type="text" name="applicantSignature"></label><br>
				<label>Address:  <input type="text" name="applicantAddress"></label><br>
				<label>Phone Number: <input type="text" name="applicantPhone"></label><br>
				<label>Person in Charge: <input type="text" name="personInCharge"></label><br>
				<label>Title: <input type="text" name="personInChargeTitle"></label><br>
				<label>Phone Number: <input type="text" name="personInChargePhone"></label><br>
			</p>	
		<h2> 5. Building Permit Application </h2>
			<p>
				<label>Request Plan Number: <input type="text" name="Request Plan Number"></label><br>
				<label><input type="checkbox" name="ImprovementType0" value="newConstruction"> New Construction (1)</label><br>
				<label><input type="checkbox" name="ImprovementType1" value="addition"> Addition (2)</label><br>
				<label><input type="checkbox" name="ImprovementType2" value="alteration"> Alteration (3)</label><br>
				<label><input type="checkbox" name="ImprovementType3" value="repairOrRelacement"> Repair/Replacement (4)</label><br>
				<label><input type="checkbox" name="ImprovementType4" value="demolition"> Demolition(5)</label><br>
				<label><input type="checkbox" name="ImprovementType5" value="relocation"> Relocation (6)</label><br>
				<label><input type="checkbox" name="ImprovementType6" value="foundationOnly"> Foundation Only (7)</label><br>
				<label><input type="checkbox" name="improvementType7" value="changeOfUse"> Change Of Use Only (8)</label><br>
			<h2>PROPOSED USE </h2>
			<h3>ASSEMBLY: </h3>
			<p>
				<label><input type="checkbox" name="Assembly0" value="useTheater"> Theatre (1)</label><br>
				<label><input type="checkbox" name="Assembly1" value="useNight Club"> Night Club (2)</label><br>
				<label><input type="checkbox" name="Assembly2" value="useRestaurant"> Restaurant (3)</label><br>
				<label><input type="checkbox" name="Assembly3" value="useChurch"> Church (4)</label><br>
				<label><input type="checkbox" name="Assembly4" value="useOtherAssembly"> Other Assembly (5)</label><br>
			</p>
			<h3>Business: </h3>
			<p>
				<label><input type="checkbox" name="Business" value="useBusiness"> Business (6)</label><br>
			</p>
			<h3>Educational:</h3>
			<p>
				<label><input type="checkbox" name="Educational0" value="useSchool"> Grades 1-12 (7)</label><br>
				<label><input type="checkbox" name="Educational1" value="useDayCare"> Day Care Faculty (8)</label><br>
			</p>
			<h3>Factory: </h3>
			<p>
				<label><input type="checkbox" name="Factory" value="useModerateHazard"> Moderate Hazard (9)</label><br>
				<label><input type="checkbox" name="Factory" value="useLowHazard"> Low Hazard (10)</label><br>
			</p>
			<h3>High hazard:</h3>
			<p>
				<label><input type="checkbox" name="HighHazard" value="useHighHazard"> High Hazard (11)</label><br>
			</p>
			<h3> Institutional:</h3> 
			<p>
				<label><input type="checkbox" name="Institutional0" value="useGroupHome"> Group Home (12)</label><br>
				<label><input type="checkbox" name="Institutional1" value="useHospital"> Hospital (13)</label><br>
				<label><input type="checkbox" name="Institutional2" value="useJail"> Jail (14)</label><br>
			</p>
			<h3>Mercantile:</h3>
			<p>
				<label><input type="checkbox" name="Mercantile" value="useMercantile"> Mercantile (15)</label><br>
			</p>
			<h3>Residential:</h3>
			<p>
				<label><input type="checkbox" name="Residential0" value="useHotelMotel">Hotel, Motel (16)</label><br>
				<label><input type="checkbox" name="Residential1" value="useMultiFamily">Multi-Family (17)</label><br>
				<label><input type="checkbox" name="Residential2" value="useBocaTwoFamily">Boca Two Family (18)</label><br>
				<label><input type="checkbox" name="Residential3" value="useCaboTwoFamily">Cabo Two Family (19)</label><br>
				<label><input type="checkbox" name="Residential4" value="useBocaSingleFamily">Boca Single Family (20)</label><br>
				<label><input type="checkbox" name="Residential5" value="useCableSingleFamily">Cabo Single Family (21)</label><br>
			</p>
			<h3>Storage:</h3>
			<p>
				<label><input type="checkbox" name="Storage0" value="useModerateHazard">Moderate Hazard (22)</label><br>
				<label><input type="checkbox" name="Storage1" value="useLowHazard">Low Hazard (23)</label><br>
			</p>
			<h3>Other:</h3>
			<p>
				 <label><input type="checkbox" name="Other0" value="useParkingGarage">Parking Garage</label><br>
				 <label><input type="checkbox" name="Other1" value="useCarport">Carport</label><br>
				 <label><input type="checkbox" name="Other2" value="useMotorFeulSer">Motor Fuel Ser</label><br>
				 <label><input type="checkbox" name="Other3" value="useRepairGarage">Repair Garage</label><br>
				 <label><input type="checkbox" name="Othe4r" value="usePublicUtility">Public Utility</label><br>
				 <label><input type="checkbox" name="Other5" value="useHPM"> HPM</label><br>
				 <label>Other:<input type="text" name="Other6"></label>
			</p>
			<h3>Structural (check all the apply)</h3>
			<p>
				<label><input type="checkbox" name="Structural0" value="structureFrameSteel"> Frame Steel (1)</label><br>
				<label><input type="checkbox" name="Structural1" value="structureMasonry"> Masonry (2)</label><br>
				<label><input type="checkbox" name="Structural2" value="structureConcrete"> Concrete (3)</label><br>
				<label><input type="checkbox" name="Structural3" value="structureWood"> Wood (4)</label><br>
				<label>Other (5):<input type="text" name="structureOther"></label>
			</p>
			<h3>Exterior (Check those applicable)</h3>
			<p>
				<label><input type="checkbox" name="Exterior0" value="exteriorFrameSteel"> Frame Steel (1)</label><br>
				<label><input type="checkbox" name="Exterior1" value="exteriorMasonry"> Masonry (2)</label><br>
				<label><input type="checkbox" name="Exterior2" value="exteriorConcrete"> Concrete (3)</label><br>
				<label><input type="checkbox" name="Exterior3" value="exteriorWood"> Wood (4)</label><br>
				<label>Other (5):<input type="text" name="exteriorOther"></label>
			</p>
			<p> Are any structural assemblies fabricated off-site?
				<label><input type="radio" name="offSiteFabrication" value="Yes"> Yes</label> 
				<label><input type="radio" name="offSiteFabrication" value="No"> No</label>
			</p>
			<p>
				<label>Street Frontage (feet):<input type="number" min="0" name="streetFrontage"></label><br>
				<label>Front Setback (feet):<input type="number" min="0" name="frontSetback"></label><br>
				<label>Left Setback (feet):<input type="number" min="0" name="leftSetback"></label><br>
				<label>Rear Setback (feet) :<input type="number" min="0" name="rearSetback"></label><br>
				<label>Right Setback (feet):<input type="number" min="0" name="rightSetback"></label><br>
				<label>Height Above Grade (feet):<input type="number" min="0" name="heightAboveGrade"></label><br>
				<label>Stories (number):<input type="number" min="0" name="stories"></label><br>
				<label>Bedrooms (number):<input type="number" min="0" name="bedrooms"></label><br>
				<label>Full Baths (number):<input type="number" min="0" name="fullBaths"></label><br>
				<label>Partial Baths (number):<input type="number" min="0" name="partialBaths"></label><br>
				<label>Garages (number):<input type="number" min="0" name="garages"></label><br> 
				<label>Windows (number):<input type="number" min="0" name="windows"></label><br>
				<label>New Residential Units (number):<input type="number" min="0" name="newResidentialUnits"></label><br>
				<label>Fireplaces (number):<input type="number" min="0" name="fireplaces"></label><br>
				<label>Enclosed Parking (number):<input type="number" min="0" name="enclosedParking"></label><br>
				<label>Existing Residential Units (number):<input type="number" min="0" name="existingResidentialUnits"></label><br>
				<label>Elevators/Escalators (number):<input type="number" min="0" name="elevatorsEscalators"></label><br>
				<label>Outside Parking (number):<input type="number" min="0" name="outsideParking"></label><br>
				<label>Lot Area (square ft):<input type="number" min="0" name="lotArea"></label><br>
				<label>Building Area (square ft):<input type="number" min="0" name="buildingArea"></label><br>
				<label>Parking Area (square ft):<input type="number" min="0" name="parkingArea"></label><br>
				<label>Living Area (square ft):<input type="number" min="0" name="livingArea"></label><br>
				<label>Basement Area (square ft):<input type="number" min="0" name="basementArea"></label><br>
				<label>Garage Area (square ft):<input type="number" min="0" name="garageArea"></label><br>
				<label>Office/Sales (square ft):<input type="number" min="0" name="officeSales"></label><br>
				<label>Service (square ft):<input type="number" min="0" name="service"></label><br>
				<label>Manufacturing (square ft):<input type="number" min="0" name="manufacturing"></label>
			</p>
			<p>
				<label>Est. Start Date<input type="date" name="estBuildinStart"></label>
				<label>Est. Finish Date<input type="date" name="estBuildinFinish"></label>
				<label>Building Est. Value:$:<input type="number" min="0" name="buildingValue"></label>
			</p>
		<h2> 6. Electrical Permit Application</h2>
		<label> Electrical Work?<input type="radio" name="ElectricalWork" value="Yes" onclick="document.getElementById('mechnicalWork').style.display='inline'"> Yes</label>
		<label><input type="radio" name="ElectricalWork" value="No" onclick="document.getElementById('mechnicalWork').style.display='none'"> No</label>
		<div id = "mechnicalWork" class = "hidden">
			<p>
				<label>Total Service<input type="text" name="totalServiceAmps">amps</label><br>
			</p>
				<h3>Number Of Circuits:</h3>
				<p>
				<label>2 Wire<input type="number" name="wire2"></label><br>
				<label>3 Wire<input type="number" name="wire3"></label><br>
				<label>4 Wire<input type="number" name="wire4"></label><br>
				</p>
				<h3>Number of Service Outlets:</h3>
				<p>
				<label>110v<input type="number" name="110v"></label><br>
				<label>220v<input type="number" name="220v"></label><br>
			</p>
			<table>  
			<tr>
				<th></th>
				<th>Power Devices</th>
				<th>#</th>
				<th>output/load</th>
			</tr>
			<tr>
				<td>1</td>
				<td><label><input type="text" name="PowerDevice1"></label></td>
				<td><label><input type="number" min="0" name="num1"></label></td>
				<td><label><input type="text" name="output-load1"></label></td>
			</tr>
			<tr>
				<td>2</td>
				<td><label><input type="text" name="PowerDevice2"></label></td>
				<td><label><input type="number" min="0" name="num2"></label></td>
				<td><label><input type="text" name="output-load2"></label></td>
			</tr>
			<tr>
				<td>3</td>
				<td><label><input type="text" name="PowerDevice3"></label></td>
				<td><label><input type="number" min="0" name="num3"></label></td>
				<td><label><input type="text" name="output-load3"></label></td>
			</tr>
			<tr>
				<td>4</td>
				<td><label><input type="text" name="PowerDevice4"></label></td>
				<td><label><input type="number" min="0" name="num4"></label></td>
				<td><label><input type="text" name="output-load4"></label></td>
			</tr>
			<tr>
				<td>5</td>
				<td><label><input type="text" name="PowerDevice5"></label></td>
				<td><label><input type="number" min="0" name="num5"></label></td>
				<td><label><input type="text" name="output-load5"></label></td>
			</tr>
			<tr>
				<td>6</td>
				<td><label><input type="text" name="PowerDevice6"></label></td>
				<td><label><input type="number" min="0" name="num6"></label></td>
				<td><label><input type="text" name="output-load6"></label></td>
			</tr>
			<tr>
				<td>7</td>
				<td><label><input type="text" name="PowerDevice7"></label></td>
				<td><label><input type="number" min="0" name="num7"></label></td>
				<td><label><input type="text" name="output-load7"></label></td>
			</tr>
			<tr>
				<td>8</td>
				<td><label><input type="text" name="PowerDevice8"></label></td>
				<td><label><input type="number" min="0" name="num8"></label></td>
				<td><label><input type="text" name="output-load8"></label></td>
			</tr>
			<tr>
				<td>9</td>
				<td><label><input type="text" name="PowerDevice9"></label></td>
				<td><label><input type="number" min="0" name="num9"></label></td>
				<td><label><input type="text" name="output-load9"></label></td>
			</tr>
			<tr>
				<td>10</td>
				<td><label><input type="text" name="PowerDevice"></label></td>
				<td><label><input type="number" min="0" name="num10"></label></td>
				<td><label><input type="text" name="output-load10"></label></td>
			</tr>
			<tr>
				<td>11</td>
				<td><label><input type="text" name="PowerDevice11"></label></td>
				<td><label><input type="number" min="0" name="num11"></label></td>
				<td><label><input type="text" name="output-load11"></label></td>
			</tr>
			<tr>
				<td></td>
				<td>Total Number of Motors</td>
				<td><label><input type="number" min="0" name="MotorNum"></label></td>
				<td></td>
			</tr>
			</table>
			<p>
				<label>Utility Service Revision:<input type="text" name="serviceRevision"></label>
			</p>
			<p>
				<label>Estimated Start Date<input type="date" name="estElectricStart"></label>
				<label>Estimated Finish Date<input type="date" name="estElectricalFinish"></label>
				<label>Plumbing Work Estimated Value $<input type ="number" min="0" name="estElectricalValue"></label>
			</p>
		</div>
		<h2> 7. Plumbing Permit Application</h2>
		<p>Plumbing Work <label><input type="radio" name="PlumbingWork" value="Yes" onclick ="document.getElementById('plumbingWork').style.display='inline'"> Yes </label><label><input type="radio" name="PlumbingWork" value="No" onclick ="document.getElementById('plumbingWork').style.display='none'"> No </label>
		<div id = "plumbingWork" class = "hidden">
		<h3>Enter the Number of Fixtures Being Installed, Replaced, or Repaired.</h3>
			<p>
				<label>Tubs/Shower:<input type="number" min="0" name="tubsShower" ></label><br>
				<label>Shower Stalls:<input type="number" min="0" name="showerStalls" ></label><br>  
				<label>Lavatories:<input type="number" min="0" name="lavatories" ></label><br>
				<label>Toilets:<input type="number" min="0" name="toilets" ></label><br>  
				<label>Urinals:<input type="number" min="0" name="urinals" ></label><br>  
				<label>Sinks:<input type="number" min="0" name="sinks" ></label><br>  
				<label>Laundry Tubs:<input type="number" min="0" name="laundryTubs" ></label><br>
				<label>Dishwashers:<input type="number" min="0" name="dishwashers" ></label><br>  
				<label>Drinking Fountains:<input type="number" min="0" name="drinkingFountains" ></label><br>  
				<label>Floor Drains:<input type="number" min="0" name="floorDrains" ></label><br>
				<label>Water Heaters:<input type="number" min="0" name="waterHeaters" ></label><br>  
				<label>Water Softeners:<input type="number" min="0" name="waterSofteners" ></label><br>  
				<label>Sewage Ejectors:<input type="number" min="0" name="sewageEjectors" ></label><br>  
				<label>Sump Pumps:<input type="number" min="0" name="sumpPumps" ></label><br>  
				<label>Grease Traps:<input type="number" min="0" name="greaseTraps" ></label><br>
				<label>Bidets:<input type="number" min="0" name="bidets" ></label><br>	
				<label>Back Flow Prevention:<input type="number" min="0" name="backFlowPrevention" ></label><br>		
				<label>Water Pumps:<input type="number" min="0" name="waterPumps" ></label><br>  
				<label>Roof Openings:<input type="number" min="0" name="roofOpenings" ></label><br>  
				<label>Parking Lot Drains:<input type="number" min="0" name="parkingLotDrains" ></label><br>
				<label>Inside Downspouts:<input type="number" min="0" name="insideDownspouts" ></label><br>
				<label>Swimming Pools:<input type="number" min="0" name="swimmingPools" ></label><br>  
				<label>Standpipes(Number Hose Outlets):<input type="number" min="0" name="standpipes" ></label><br> 		
				<label>Fire Sprinklers(Number of Heads):<input type="number" min="0" name="fireSprinklers" ></label><br>
				<label>Lawn Sprinklers(Number of Heads):<input type="number" min="0" name="lawnSprinklers" ></label><br>
				<label>Public Water <input type="radio" name="publicWater" value="Yes"> Yes</label><label><input type="radio" name="publicWater" value="No"> No</label><br>
				<label>Public Sewer <input type="radio" name="publicSewer" value="Yes"> Yes</label><label><input type="radio" name="publicSewer" value="No"> No</label><br>
				<label>Water Service:<input type="number" min="0" name="waterService" >IN</label><br> 
				<label>Water Meter Size :<input type="number" min="0" name="waterMeterSize" ></label><br>  
				<label>IN Avg. Daily Water Use :<input type="number" min="0" name="dailyWater" ></label><br>  
				<label>GPD Utility Service Revisions:<input type="number" min="0" name="serviceRevisions" ></label><br>
				<label>Estimated Start:<input type= "date" name ="estPlumbingStart"></label>
				<label>Estimated Finish:<input type= "date" name= "estPlumbingFinish"></label>
				<label>Plumbing Work Estimated Value: $:<input type="number" min="0" name="plumbingValue" ></label>
			</p>
		</div>
		<h2> 8. Mechanical Permit Application Mechanical Work </h2>
		<p>Mechanical Work?<label><input type="radio" name="mechanicalWork" value="Yes" onclick="document.getElementById('mechanicalWork').style.display='inline'"> Yes</label><label><input type="radio" name="mechanicalWork" value="No" onclick="document.getElementById('mechanicalWork').style.display='none'"> No</label></p>
		<div id = "mechanicalWork" class = "hidden">	
		<h3>Enter Number of New or Replacement Utilities </h3>
			<p>
				<label>Forced Air Furnace Unit Heater:<input type="number" min="0" name="unitHeat"></label><br> 
				<label>Gas/Oil Conversion:<input type="number" min="0" name="gasOilConversion"></label><br> 
				<label>Air Handling Unit:<input type="number" min="0" name="airHandlingUnit"></label><br> 
				<label>Heat Pump:<input type="number" min="0" name="heatPump"></label><br> 
				<label>Air Cleaner:<input type="number" min="0" name="air Cleaner"></label><br> 
				<label>Parking Lot Drains:<input type="number" min="0" name="parkingLotDrains"></label><br> 
				<label>Urinals Inside Down spouts:<input type="number" min="0" name="urinalsInsideDownspouts"></label><br> 
				<label>Sinks:<input type="number" min="0" name="sinks"></label><br> 
				<label>Laundry Tubs:<input type="number" min="0" name="laundryTubs"></label><br> 
				<label>Dishwashers:<input type="number" min="0" name="dishwashers"></label><br> 
				<label>Garbage Disposals:<input type="number" min="0" name="garbageDisposals"></label><br> 
				<label>Space Heater:<input type="number" min="0" name="spaceHeater"></label><br>
				<label>Gravity Furnace:<input type="number" min="0" name="gravityFurnace"></label><br> 
				<label>Solid Fuel Appliance:<input type="number" min="0" name="solidFuelAppliance"></label><br> 
				<label>Incinerator:<input type="number" min="0" name="incinerator"></label><br> 
				<label>Boiler:<input type="number" min="0" name="boiler"></label><br> 
				<label>Coil Unit:<input type="number" min="0" name="coilUnit"></label><br>
				<label>Window A/C Unit:<input type="number" min="0" name="windowACUnit"></label><br>
				<label>Split System A/C:<input type="number" min="0" name="splitSystemAC"></label><br> 
				<label>A/C Compressor:<input type="number" min="0" name="aCCompressor"></label><br> 
				<label>Kitchen Exhaust Hood:<input type="number" min="0" name="kitchenExhaustHood"></label><br> 
				<label>Hazardous Exhaust System:<input type="number" min="0" name="hazardousExhaustSystem"></label><br> 
				<label>Electric Furnace:<input type="number" min="0" name="electricFurnace"></label><br> 
				<label>Utility Service Revisions:<input type="number" min="0" name="utilityServiceRevisions"></label>
			</p>
			<p>
				Type of Heating Fuel:<br>
				<label><input type="radio" name="heatingFuel" value="heatingGas">Gas(1)</label>
				<label><input type="radio" name="heatingFuel" value="heatingOil">Oil (2)</label>
				<label><input type="radio" name="heatingFuel" value="heatingElectric">Electric (3)</label>
				<label><input type="radio" name="heatingFuel" value="heatingCoal">Coal (4)</label>
				<label><input type="radio" name="heatingFuel" value="heatingWood">Wood (5)</label>
				<label>Other(6):<input type="text" name="heatingOther"></label>
			</p>
			<p>
				<label>Estimated Start<input type="date" name = "estMechanicalStart"></label> 
				<label>Estimated Finish<input type="date" name = "estMechanicalFinish"></label> 
				<label>Mechanical Work Estimated Value $<input type="number" min="0" name="mehanicalTotal"></label>
			</p>
		</div>
		<h2> 9. Other Required Permit Application(S)</h2>
			<p><label>Permit Type:<input type="text" name="otherPermit"></label></p>
			<p><label>Description:<input type="text" name="otherDescription"></label></p>
			<p><label>Estimated Start<input type="date" name="estOtherStart"></label>
			<label>Estimated Finish<input type="date" name="estOtherEnd"></label> 
			<label>Mechanical Work Estimated Value:$<input type="number" min="0" name="otherPermitlValue"></label></p>
		<h2> 10. Site Plan</h2>
			<p>You will be asked to upload your Site Plan File after the submission of your information. </p>
		<div class ="internaluse">	
		<h2> 11. Data Entry</h2>
			<p><label>Application Received<input type="date" name="appReceivedDate"></label>
			<label>By:<input type="text" name="applicationReceived By"></label></p>
			<p><label>Application Reviewed <input type="date" name="appReviewedDate"></label>
			<label>By:<input type="text" name="applicationReviewedBy"></label></p>
			<p><label> Data Entry<input type="date" name="dataEntryDate"></label>
			<label>By:<input type="text" name="dataEntryBy"></label></p>
		<h2> 12. Flood plan Evaluation </h2>
			<p>
				<label>Flood Map Number &amp; Date <input type="text" name="floodMapNumber"></label><br>
				<label>Lowest Floor Elevation <input type="text" name="lowestFloorElevation"></label><br>
				<label>Flood Zone <input type="text" name="floodZone"></label><br>
				<label>Base Flood Elevation <input type="text" name="baseFloodElevation"></label><br>		
			</p>
		<h2> 13. Zoning Plan Evaluation </h2>
			<p> 
				<label>Zoning District <input type="text" name="zoningDistrict"></label><br>
				<label>Map Number <input type="text" name="mapNumber"></label><br>
				<label>Lot Area (From Page 2) <input type="text" name="lotArea"></label><br>
				<label>Lot Coverage(%) <input type="text" name="lotCoverage"></label><br>
				<label>Lot Area Per Room <input type="text" name="lotAreaPerRoom"></label><br>
				<label>Encroachments <input type="text" name="encroachments"></label><br>
				<label>Off Street Parking Spaces, Required <input type="text" name="offStreetParkingNeeded"></label><br>
				<label>Provided <input type="text" name="parkingProvided"></label><br>
				<label>Loading Space <input type="text" name="loadingSpace"></label><br>
				<label>Signs: Number <input type="text" name="numOfSigns"></label><br>
				<label>Size Of Each Sign <input type="text" name="sizeOfSign"></label><br>
				<label>Planning Commission Approval Required <input type="text" name="planningCommissionApproval"></label><br>
				<label>Board Of Zoning Appeals Approval Required<input type="text" name="boardZoningApproval"></label>
			</p>
		<h2> 14. Plan Review Record </h2>
			<table>
			<tr>
				<th>Plans Review Required</th>
				<th>Check</th>
				<th>Plan Review Fee</th>
				<th>Date Plans Started</th>
				<th>By</th>
				<th>Date Plans Approved</th>
				<th>By</th> 
				<th>Notes</th>
			</tr>
			<tr>
				<td>Building</td>
				<td><label><input type="radio" name="buildingCheck"></label></td>
				<td><label><input type="number" min = "0" name="buildingCost"></label></td>
				<td><label><input type = "date" name = "dateBuildingPlansStarted"></label></td>
				<td><label><input type= "text" name = "by1a"></label></td>
				<td><label><input type = "date" name = "dateBuildingApproved"></label></td>
				<td><label><input type= "text" name = "by1b"></label></td>
				<td><label><input type="text" name="buildingNotes"></label></td>
			</tr>
			<tr>
				<td>Plumbing</td>
				<td><label><input type="radio" name="PLUMBING"></label></td>
				<td><label><input type="number" min = "0" name="plumbingCost"></label></td>
				<td><label><input type = "date" name = "datePlumbingStarted"></label></td>
				<td><label><input type ="text" name = "by2a"></label></td>
				<td><label><input type = "date" name = "datePlumbingApproved"></label></td>
				<td><label><input type ="text" name = "by2b"></label></td>
				<td><label><input type="text" name="plumbingNotes"></label></td>
			</tr>
			<tr>
				<td>Mechanical</td>
				<td><label><input type="radio" name="MECHANICAL"></label></td>
				<td><label><input type="number" min = "0" name="mechanicalCost"></label></td>
				<td><label><input type = "date" name = "dateMechanicalStarted"></label></td>
				<td><label><input type= "text" name = "by3a"></label></td>
				<td><label><input type = "date" name = "dateMechanicalApproved"></label></td>
				<td><label><input type ="text" name = "by3b"></label></td>
				<td><label><input type="text" name="mechanicalNotes"></label></td>
			</tr>
			<tr>
				<td>Electrical</td>
				<td><label><input type="radio" name="Electrical"></label></td>
				<td><label><input type="number" min= "0" name="ElectricalCost"></label></td>
				<td><label><input type = "date" name = "dateElecricalStarted"></label></td>
				<td><label><input type= "text" name = "by4a"></label></td>
				<td><label><input type = "date" name = "dateElectricalApproved"></label></td>
				<td><label><input type= "text" name = "by4b"></label></td>
				<td><label><input type="text" name="electricaNotes"></label></td>
			</tr>
			</table>
			<p><label>TOTAL $ <input type="text" name="totalPlanCost"></label> To Be Entered On Part 18</p>
		<h2>15. Additional Permits Required</h2>
			<table>
			<tr>
				<th>Permit Or Approval</th>
				<th>Check</th>
				<th>Date Obtained</th>
				<th>Number</th>
				<th>By</th>
			</tr>
			<tr>
				<td>Boiler</td>
				<td><label><input type="radio" name="BOILER"></label></td>
				<td><label><input type = "date" name = "boilerPermitDate" ></label></td>
				<td><label><input type="text" name="boilerPermitNumber"></label></td>
				<td><label><input type ="text" name = "boilerBy"></label></td>
			</tr>
			<tr>
				<td>Curb OR Sidewalk Cut</td>
				<td><label><input type="radio" name="curbOrSidewalkCut"></label></td>
				<td><label><input type = "date" name = "curbPermitDate" ></label></td>
				<td><label><input type="text" name="curbOrSidewalkCutPermitNumber"></label></td>
				<td><label><input type= "text" name = "sidewalkBy"></label></td>
			</tr>
			<tr>
				<td>Elevator</td>
				<td><label><input type="radio" name="ELEVATOR"></label></td>
				<td><label><input type = "date" name = "elevatorPermitDate" ></label></td>
				<td><label><input type="text" name="elevatorPermitNumber"></label></td>
				<td><label><input type ="text" name = "elevatorBy"></label></td>
			</tr>
			<tr>
				<td>Electrical</td>
				<td><label><input type="radio" name="ELECTRICAL"></label></td>
				<td><label><input type = "date" name = "electricalPermitDate" ></label></td>
				<td><label><input type="text" name="ElectricalPermitNumber"></label></td>
				<td><label><input type= "text" name = "electricalBy"></label></td>
			</tr>
			<tr>
				<td>Furnace</td>
				<td><label><input type="radio" name="FURNACE"></label></td>
				<td><label><input type = "date" name = "furnacePermitDate" ></label></td>
				<td><label><input type="text" name="FurnacePermitNumber"></label></td>
				<td><label><input type= "text" name = "furnaceBy"></label></td>
			</tr>
			<tr>
				<td>Grading</td>
				<td><label><input type="radio" name="grading"></label></td>
				<td><label><input type = "date" name = "gradingPermitDate" ></label></td>
				<td><label><input type="text" name="GradingPermitNumber"></label></td>
				<td><label><input type= "text" name = "gradingBy"></label></td>
			</tr>
			<tr>
				<td>Oil Burner</td>
				<td><label><input type="radio" name="OilBurner"></label></td>
				<td><label><input type = "date" name = "oilPermitDate" ></label></td>
				<td><label><input type="text" name="OilBurnerPermitNumber"></label></td>
				<td><label><input type= "text" name = "oilBy"></label></td>
			</tr>
			<tr>
				<td>Plumbing</td>
				<td><label><input type="radio" name="PLUMBING"></label></td>
				<td><label><input type = "date" name = "plumbingPermitDate" ></label></td>
				<td><label><input type="text" name="plumbingPermitNumber"></label></td>
				<td><label><input type= "text" name = "plumbingBy"></label></td>
			</tr><tr>
				<td>Roofing</td>
				<td><label><input type="radio" name="Roofing"></label></td>
				<td><label><input type = "date" name = "roofingPermitDate" ></label></td>
				<td><label><input type="text" name="roofingPermitNumber"></label></td>
				<td><label><input type= "text" name = "roofingBy"></label></td>
			</tr>
			<tr>
				<td>SEWER</td>
				<td><label><input type="radio" name="Sewer"></label></td>
				<td><label><input type = "date" name = "sewerPermitDate" ></label></td>
				<td><label><input type="text" name="Sewer Permit Number"></label></td>
				<td><label><input type= "text" name = "sewerBy"></label></td>
			</tr>
			<tr>
				<td>Sign Or Billboard</td>
				<td><label><input type="radio" name="signOrBillboard"></label></td>
				<td><label><input type = "date" name = "signPermitDate" ></label></td>
				<td><label><input type="text" name="signOrBillboardPermitNumber"></label></td>
				<td><label><input type= "text" name = "billboardBy"></label></td>
			</tr>
			<tr>
				<td>Street Grades</td>
				<td><label><input type="radio" name="streetGrades"></label></td>
				<td><label><input type = "date" name = "streetGradesPermitDate" ></label></td>
				<td><label><input type="text" name="streetGradesPermitNumber"></label></td>
				<td><label><input type= "text" name = "streetBy"></label></td>
			</tr>
			<tr>
				<td>Use Of Public Areas</td>
				<td><label><input type="radio" name="useOfPublicAreas"></label></td>
				<td><label><input type = "date" name = "publicAreasPermit" ></label></td>
				<td><label><input type="text" name="useOfPublicAreasPermitNumber"></label></td>
				<td><label><input type= "text" name = "publicBy"></label></td>
			</tr>
			<tr>
				<td>Demolition</td>
				<td><label><input type="radio" name="demolition"></label></td>
				<td><label><input type = "date" name = "demolitionPermitDate" ></label></td>
				<td><label><input type="text" name="demolitionPermitNumber"></label></td>
				<td><label><input type= "text" name = "demoBy"></label></td>
			</tr>
			</table>

		<h2> 16. Project Documents (Drawings &amp; Calculations)</h2>
			<table>
			<tr>
				<th>Type Drawings/Report</th>
				<th>Submitted</th>
				<th>Signed AND Sealed</th>
				<th>Date</th>
				<th>Revision Date</th>
			</tr>	
			<tr>
				<td>Site Plan</td>
				<td><label><input type="radio" name="SitePlanSubmitted" value="Yes"> Yes</label>
				<label><input type="radio" name="SitePlanSubmitted" value="No"> No</label></td>
				<td><label><input type="radio" name="SitePlanSigned" value="Yes"> Yes</label>
				<label><input type="radio" name="SitePlanSigned" value="No"> No</label></td>
				<td><label><input type="date" name= "sitePlanSubmittedDate"></label></td>
				<td><label><input type="date" name ="sitePlanRevisionDate"></label></td>
			</tr>
			<tr>
				<td>Soil Report</td>
				<td><label><input type="radio" name="SoilReportSubmitted" value="Yes"> Yes</label>
				<label><input type="radio" name="SoilReportSubmitted" value="No"> No</label></td>
				<td><label><input type="radio" name="SoilReportSigned" value="Yes"> Yes</label>
				<label><input type="radio" name="SoilReportSigned" value="No"> No</label></td>
				<td><label><input type="date" name= "soilReportSubmittedDate"></label></td>
				<td><label><input type="date" name ="soilReportRevisionDate"></label></td>
			</tr>
			<tr>
				<td>Architectural Drawings </td>
				<td><label><input type="radio" name="ArchitecturalDrawingsSubmitted" value="Yes"> Yes</label>
				<label><input type="radio" name="ArchitecturalDRAWINGSSubmitted" value="No"> No</label></td>
				<td><label><input type="radio" name="ArchitecturalDrawingsSigned" value="Yes"> Yes</label>
				<label><input type="radio" name="ArchitecturalDRAWINGSSigned" value="No"> No</label></td>
				<td><label><input type="date" name= "architecturalDrawingsSubmittedDate"></label></td>
				<td><label><input type="date" name= "architecturalDrawingsRevisionDate"></label></td>
			</tr>
			<tr>
				<td>Structural Drawings </td>
				<td><label><input type="radio" name="StructuralDrawingsSubmitted" value="Yes"> Yes</label>
				<label><input type="radio" name="StructuralDrawingsSubmitted" value="No"> No</label></td>
				<td><label><input type="radio" name="StructuralDrawingsSigned" value="Yes"> Yes</label>
				<label><input type="radio" name="StructuralDrawingsSigned" value="No"> No</label></td>
				<td><label><input type="date" name= "structuralDrawingsSubmittedDate"></label></td>
				<td><label><input type="date" name= "structuralDrawingsRevisionDate"></label></td>
			</tr>
			<tr>
				<td>Mechanical Drawings </td>
				<td><label><input type="radio" name="MechanicalDrawingsSubmitted" value="Yes"> Yes</label>
				<label><input type="radio" name="MechanicalDrawingsSubmitted" value="No"> No</label></td>
				<td><label><input type="radio" name="MechanicalDrawingsSigned" value="Yes"> Yes</label>
				<label><input type="radio" name="MechanicalDrawingsSigned" value="No"> No</label></td>
				<td><label><input type="date" name= "mechanicalDrawingsSubmittedDate"></label></td>
				<td><label><input type="date" name= "mechanicalDrawingsRevisionDate"></label></td>
			</tr>
			<tr>
				<td>Electrical Drawings </td>
				<td><label><input type="radio" name="ElectricalDrawingsSubmitted" value="Yes"> Yes</label>
				<label><input type="radio" name="ElectricalDrawingsSubmitted" value="No"> No</label></td>
				<td><label><input type="radio" name="ElectricalDrawingsSigned" value="Yes"> Yes</label>
				<label><input type="radio" name="ElectricalDrawingsSigned" value="No"> No</label></td>
				<td><label><input type="date" name= "electricalDrawingsSubmittedDate"></label></td>
				<td><label><input type="date" name= "electricalDrawingsRevisionDate"></label></td>
			</tr>
			<tr>
				<td>Job Specifications</td>
				<td><label><input type="radio" name="JobSpecificationsSubmitted" value="Yes"> Yes</label>
				<label><input type="radio" name="JobSpecificationsSubmitted" value="No"> No</label></td>
				<td><label><input type="radio" name="JobSpecificationsSigned" value="Yes"> Yes</label>
				<label><input type="radio" name="JobSpecificationsSigned" value="No"> No</label></td>
				<td><label><input type="date" name= "jobSpecificationsSubmittedDate"></label></td>
				<td><label><input type="date" name= "jobSpecificationsRevisionDate"></label></td>
			</tr>
			<tr>
				<td>Structural Connect Drawings</td>
				<td><label><input type="radio" name="StructuralConnectSubmitted" value="Yes"> Yes</label>
				<label><input type="radio" name="StructuralConnectSubmitted" value="No"> No</label></td>
				<td><label><input type="radio" name="StructuralConnectSigned" value="Yes"> Yes</label>
				<label><input type="radio" name="StructuralConnectSigned" value="No"> No</label></td>
				<td><label><input type="date" name= "structuralConnectSubmittedDate"></label></td>
				<td><label><input type="date" name= "structuralConnectRevisionDate"></label></td>
			</tr>
			<tr>
				<td>Structural Calculations </td>
				<td><label><input type="radio" name="StructuralCalculationsSubmitted" value="Yes"> Yes</label>
				<label><input type="radio" name="StructuralCalculationsSubmitted" value="No"> No</label></td>
				<td><label><input type="radio" name="StructuralCalculationsSigned" value="Yes"> Yes</label>
				<label><input type="radio" name="StructuralCalculationsSigned" value="No"> No</label></td>
				<td><label><input type="date" name= "structuralCalculationsSubmittedDate"></label></td>
				<td><label><input type="date" name= "structuralCalculationsRevisionDate"></label></td>
			</tr>
			<tr>
				<td>Special Inspection Data </td>
				<td><label><input type="radio" name="SpecialInspectionDataSubmitted" value="Yes"> Yes</label>
				<label><input type="radio" name="SpecialInspectionDataSubmitted" value="No"> No</label></td>
				<td><label><input type="radio" name="SpecialInspectionDataSigned" value="Yes"> Yes</label>
				<label><input type="radio" name="SpecialInspectionDataSigned" value="No"> No</label></td>
				<td><label><input type="date" name= "specialInspectionSubmittedDate"></label></td>
				<td><label><input type="date" name= "specialInspectionRevisionDate"></label></td>
			</tr>
			<tr>
				<td>Sprinkler Drawings </td>
				<td><label><input type="radio" name="SprinklerDrawingsSubmitted" value="Yes"> Yes</label>
				<label><input type="radio" name="SprinklerDrawingsSubmitted" value="No"> No</label></td>
				<td><label><input type="radio" name="SprinklerDrawingsSigned" value="Yes"> Yes</label>
				<label><input type="radio" name="SprinklerDrawingsSigned" value="No"> No</label></td>
				<td><label><input type="date" name= "sprinklerDrawingsSubmittedDate"></label></td>
				<td><label><input type="date" name= "sprinklerDrawingsRevisionDate"></label></td>
			</tr>
			<tr>
				<td>Sprinkler Calculations</td>
				<td><label><input type="radio" name="SprinklerCalculationsSubmitted" value="Yes"> Yes</label>
				<label><input type="radio" name="SprinklerCalculationsSubmitted" value="No"> No</label></td>
				<td><label><input type="radio" name="SprinklerCalculationsSigned" value="Yes"> Yes</label>
				<label><input type="radio" name="SprinklerCalculationsSigned" value="No"> No</label></td>
				<td><label><input type="date" name= "sprinklerCalculationsSubmittedDate"></label></td>
				<td><label><input type="date" name= "sprinklerCalculationsRevisionDate"></label></td>
			</tr>
			</table>
		<h2>17. Other Department Approvals</h2>
			<table>
			<tr>
				<th>_</th>
				<th> Signature </th>
				<th> Date </th>
			</tr>
			<tr>
				<td>Fire</td>
				<td><label><input type="text" name="fireApproval"></label></td>
				<td><label><input type="date" name="FireApprovalDate"></label></td>
			</tr>	
			<tr>
				<td>Public Works</td>
				<td><label><input type="text" name="publicWorksApproval"></label></td>
				<td><label><input type="date" name="PublicWorksApprovalDate"></label></td>
			</tr>
			<tr>
				<td>Zoning Planning</td>
				<td><label><input type="text" name="zoningPlanningApproval"></label></td>
				<td><label><input type="date" name="ZoningApprovalDate"></label></td>
			</tr>
			<tr>
				<td>Environmental Management</td>
				<td><label><input type="text" name="environmentalManagementApproval"></label></td>
				<td><label><input type="date" name="EnvironmentalManagementApproval Date"></label></td>
			</tr>
			<tr>
				<td>Health and Sanitation</td>
				<td><label><input type="text" name="healthSanitationApproval"></label></td>
				<td><label><input type="date" name="HeathApprovalDate"></label></td>
			</tr>
			<tr>
				<td>Water</td>
				<td><label><input type="text" name="waterApproval"></label></td>
				<td><label><input type="date" name="WaterApprovalDate"></label></td>
			</tr>
			<tr>
				<td>Architectural Review</td>
				<td><label><input type="text" name="architecturalReviewApproval"></label></td>
				<td><label><input type="date" name="ArchitecturalReviewApprovalDate"></label></td>
			</tr>
			<tr>
				<td>Building</td>
				<td><label><input type="text" name="buildingApproval"></label></td>
				<td><label><input type="date" name="BuildingApprovedDate"></label></td>
			</tr>
			</table>
		<h2>18. Validation </h2>
			<table>
			<tr>
				<td>Building Permit</td>
				<td><label>Date<input type="date" name="buildingPermitDate"></label></td>
				<td><label>Number<input type="text" name="BuildingPermitNumber"></label></td>
				<td><label>Permit/Insp. Fee <input type="text" name="buildingPermitFee"></label></td>
			</tr>
			<tr>
				<td>Electrical Permit</td>
				<td><label>Date<input type="date" name="preparedDate"></label></td>
				<td><label>Number <input type="text" name="electricalPermitNumber"></label></td>
				<td><label>Permit/Insp. Fee <input type="number" min="0" name="electricalPermitFee"></label></td>
			</tr>
			<tr>
				<td>Plumbing Permit</td>
				<td><label>Date<input type="date" name="preparedDate"></label></td>
				<td><label>Number <input type="text" name="plumbingPermitNumber"></label></td>
				<td><label>Permit/Insp. Fee <input type="number" min="0" name="plumbingPermitFee"></label></td>
			</tr>
			<tr>
				<td>Mechanical Permit</td>
				<td><label>Date<input type="date" name="preparedDate"></label></td>
				<td><label>Number <input type="text" name="mechanicalPermitNumber"></label></td>
				<td><label>Permit/Insp. Fee <input type="number" min="0" name="mechanicalPermitFee"></label></td>
			</tr>
			</table>
			<p>
				<label>Plan Review Fee (From Part 14)<input type="number" min="0" name="planReviewFee"></label><br>
				<label>Certificate of Occupancy Fee <input type="number" min="0" name="certOccupancyFee"></label><br>
				<label>Other Fee <input type="number" min="0" name="otheFees"></label><br>
				<label>TOTAL FEES <input type="number" min="0" name ="totalFees"></label><br>
			</p>
			<p><label>Prepared By:<input type="text" name="Preparedby"></label><label>Date<input type="date" name="preparedDate"></label></p>
			<p><label>Approved By:<input type="text" name="Approvedby"></label><label>Date<input type="date" name="approvedDate"></label></p>
			</div>
			</form>
		</article>
		<footer>City of Elkins, WV &bull; 401 Davis Avenue, Elkins WV 26241 &bull; 304.636.1414<br> <a href="mailto:lmbarrick@cityofelkinswv.com" target="_blank">info@cityofelkinswv.com</a> &bull; <a href="http://cityofelkinswv.com/index.php/photo-credits">Photo Credits</a></footer>
	</body>
</html>
