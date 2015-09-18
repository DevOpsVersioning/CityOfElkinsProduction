<?php require("json_form_scripts.php"); ?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        	<meta charset="UTF-8">
	 	<title>Commercial Demolition Permit Application</title>

        	<link rel="icon" href="http://cityofelkinswv.com/templates/default/favicon.png">
		<link rel="stylesheet" href="elkins.css" type="text/css">
    	</head>

    <body>
	<header></header>
	<article>
        <h1>Commercial Demolition Permit Application</h1>
        <form>
        <h2>Property Owner Information</h2><br>
             <label>Owner's Name <input name="ownersName" class="submitter" required="" type="text"></label><br>
	     
             <label>Address <input name="ownersAddress" required="" type="text"></label><br>
	     
             <label>Phone Number <input name="ownersPhoneNumber" required="" type="text"></label><br>
             
        <p>Note: Property owners may only do the work on their own residence. Any work done on other property must be done by a contractor.</p><br>
	
        <h2>Job Site Information</h2><br>
	<p>
          <label> Address <input name="jobSiteAddress" required="" type="text"></label><br>
	  
           <label>New Dwelling Area <input name="jobSiteNewDwellingArea"  type="text"> square feet</label><br>
	   
           <label>Finished Attic Area <input name="jobSiteFinishedAtticArea"  type="text"> square feet</label><br>
	   
          <label>Garage Area <input name="jobSiteGarageArea"  type="text"> square feet</label><br>
	  
           <label>Basement Area <input name="jobSiteBasementArea"  type="text"> square feet</label><br>
	   
           <label>Accessory Building <input name="jobSiteAccessoryBuilding"  type="text"> square feet</label><br>
	   
           <label>Other Area <input name="jobSiteOtherArea"  type="text"> square feet</label><br>
	</p><br>
           <h2>Contractor</h2><br>
	   <p>
             <label>Name <input name="contractorName"  type="text"></label><br>
	     
             <label>Address <input name="contractorAddress"  type="text"></label><br>
	  
             <label>Phone <input name="contractorPhone"  type="text"></label><br>
	   
             <label>WV License Number <input name="contractorWVLicenseNum"  type="text"></label><br>
	  
             <label>City License Number <input name="contractorCityLicense"  type="text"></label><br>
	   </p>
	   
           <strong>Contractors are required by city ordinance to be 
registered to work in the city and to file Business and Occupation Taxes on
 the work done.</strong>
	   
           <h3>Cost of Work (materials and labor)</h3>
	   <p>
           <label> <input name="contractorInputInformation"  type="text"></label><br><br>
	   </p>
           <h3>Asbestos Abatement</h3>
	   
	   <p>
           <label>State Certified Asbestos Inspector's Name <input name="asbestosStateCertifiedInspector"  type="text"></label><br>
	   </p>
	   
           <h3>Asbestos Inspection Results</h3>
           
          <label> Asbestos Found <input name="asbestosFound" value="asbestosFound" type="radio"></label> <label>Asbestos Free <input name="asbestosFound" value="asbestosFree" type="radio"></label><br>
	  
         <label>State Certified Asbestos Inspector's License Number <input name="asbestosInspectorLicenseNumber"  type="text"></label><br>
	 
         <label>State Certified Asbestos Contractor's License Numer <input name="asbestosContractorLicenseNum"  type="text"></label><br><br>
	 <strong>No work to begin until this permit is approved.</strong><br><em>All work must be completed within 120 calendar days.</em><br><br>
         <strong>1. The approved demolition permit must be posted on the 
contruction site before any work is begun and until completion of work 
covered by said permit. The permit expires six months after the date of 
issue.
	 </strong><br>
<strong>
2. Owner and/or contractor hereby agree to indemnify and hold the city 
of Elkins and its officals and representatives harmless against all 
claims,  warrants, demands, cause of action or suits from or occasioned 
by the work which shall be subject to this permit.</strong>
<strong><br>
3.
At least 48 hours before digging, West Virginia law requires contacting Miss Utility of West Virginia, Inc. at 1-800-245-4848 (toll free).</strong>


            <strong>Permit Fee (Projects Under $800 Are Exempt)</strong><br>
	    
            <strong>$800 To $3000 = $10.00 Above $3,000 = .333% of Total </strong><br>
	    
            <label>Amount Paid: <input name="permitFeeAmountPaid"  type="text"></label><br>
	    
            <label>Receipt # <input name="permitFeeReceiptNum"  type="text"></label><br>
            
            <strong>I understand and will adhere to foregoing requirements.</strong><br>
	    
            <label>Signature of Owner <input name="permitFeeSignatureOfOwner"  type="text"></label><br>
	    
            <label>Signature of Applicant <input name="permitFeeSignatureOfApplicant" required="" type="text"></label><br><br>
            
	    <!--
            <h3>Approved by Building Inspector</h3>
	    
            <label>Date<input name="buildingInspectorDate" required="" type="text"></label><br>
	    
            <label>Signature of Building Inspector<input name="buildingInspectorSignature" required="" type="text"></label><br>
	    
            <h3>Approved by Building Committee</h3>
            <label>Signature of Chairman of Building Committee<input name="buildingCommitteeSignatureChairman" required="" type="text"></label><br>
	    
            <h3>Approved by Utility Departments</h3>
	    
            <label>Signature for Sewer Department <input name="utilityDepartmentSignatureSewer" required="" type="text"></label><br>
	    
            <label>Signature for Water Department <input name="utilityDepartmentWaterSignature" required="" type="text"></label><br>
	    
            <h3>Approved by Fire Chief</h3>
	    
            <label>Signature of Fire Chief<input name="fireChiefSignature" required="" type="text"></label><br>
            
            <h3>The above demolition application has been approved by 
the building committee and granted by the city council and the Elkins 
landmarks commission. You are hereby authorized to proceed according to 
the specifications as set forth in your application.</h3>
            
            <h3>Permit Granted By Elkins City Council</h3>
            <label>Date <input name="grantedByElkinsCityCouncilDate" required="" type="text"></label><br>
	    
            <label>Signature of Elkins City Clerk <input name="grantedByElkinsCityCouncilSignature" type="text"></label><br>
            
            <h3>Permit Granted By Elkins Landmarks Commission</h3>
            <label>Date <input name="landMarksCommissionDate" required="" type="text"></label><br>
            <label>Signature <input name="landMarkCommissionSignature" required="" type="text"></label><br><br>
            <-->
            
        </form>
	    
	    </article>
	    <footer>City of Elkins, WV � 401 Davis Avenue, Elkins WV 26241 � 304.636.1414<br> <a href="mailto:lmbarrick@cityofelkinswv.com" target="_blank">info@cityofelkinswv.com</a> � <a href="http://cityofelkinswv.com/index.php/photo-credits">Photo Credits</a></footer>


	



</body></html>
