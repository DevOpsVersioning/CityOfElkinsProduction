<!DOCTYPE HTML>
<html>
<script type="text/javascript">

var scheduleA = [];
var scheduleB = [];

var container = "container"
var containerOne = "containerOne"

var inputIdOne = "inputIdOne"
var inputIdTwo = "inputIdTwo"

function add(inputId, arr) {
   var inp = document.getElementById(inputId);
   if (inp.value == ""){
	return;
   }
   arr.push(inp.value);
   inp.value = '';
}

function show(inputId, arr, containerId) {
   var arrString;
   arrString = "";
   if(arr == scheduleA){
	arrString = "scheduleA";
	}
	
	else if ( arr == scheduleB){
		arrString = "scheduleB";
	}
   
   var html = '';
   for (var i=0; i<arr.length; i++) {
      html += '<div id="'+ i + inputId +'"><input type="button" value="Delete" onclick="deleteItem('+i+' , \''+i+inputId+'\', '+arrString+'); show(' + inputId+',' +arrString+',' + containerId+')">' + arr[i] + '</div>';
   }
   var con = document.getElementById(containerId);
   con.innerHTML = html;
}

function deleteItem(arrayIndex, containerId, arr) {
var elem = document.getElementById(containerId);
elem.remove();
arr.splice(arrayIndex, 1);

}

function computeTax() {
var element;
element = document.getElementById(contractingSection);
element.innerHTML = "<h3>Schedule B - Rental Property</h3>
				<p>Fill in as many slots as needed:</p>
				
				<p><label>Total Gross Rent This Period<input type="number" name="totalGrossRent"></label></p>
				</p>
				<input type="number" id="inputIdTwo" />
				<input type="button"  onclick="add(inputIdTwo, scheduleB); show(inputIdTwo, scheduleB, containerOne);" value="add"/>
				<br />
				<div id="containerOne"></div>"

		
}

</script>
	
	

	<head> <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<style>
	.hidden
	{
	display:none;
	}
	</style>
	    <meta charset="UTF-8">
	 	<title>Business and Occupation Tax Return</title>

        <link rel="icon" href="http://cityofelkinswv.com/templates/default/favicon.png">
		<link rel="stylesheet" href="elkins.css" type="text/css">
    <style>.internaluse { display: none; } </style> </head>

    <body>
	    <header></header>
	    <article>
		<form>
	    <h1>Business & Occupation Tax Return</h1>
				<p>
				<label>Business Name: <input type="text" name="businessName"></label><br>
				<label>Address: <input type="text" name="contactInfo" required></label><br>
				<label>This return is for tax period: <input type="text" name="taxPeriod"></label>
				</p>

				
				<div>
				<ul>
				<p>Type of business <input type="text" name="typeOfBusiness"></p>
				<p>Is this a final Return?</p> 
				<p>	
					<ul> 
					<li><label><input type="radio" name="finalReturn" onclick="document.getElementById('reveal').style.display='inline'">Yes</label></li>
					<li><label><input type="radio" name="finalReturn" onclick="document.getElementById('reveal').style.display='none'">No</label></li> 
					</ul>
					<ul id="reveal" class="hidden"> 
						<li>Why will this be the final return?</li>
						<li><label><input type="radio" name="ifYes">Sold</label></li> 
						<li><label><input type="radio" name="ifYes">Moved</label></li> 
						<li><label><input type="radio" name="ifYes">Closed</label></li>
					</ul>
					</p>
				<p>If Ownership has changed or business has closed, complete information at the bottom of the page labelled Ownership Change or Business Closure</p>
				</div>
				
				<p>Tax is due one month after the end of the tax period.  Late Filing/Payment is subject to penalties.</p>
				
				
				
				<h3>Computation of Tax</h3>
				<table><!-- Table for the Computation of Tax Section -->
				<p>
				
				<select id="computationOfTax" onchange="computeTax()">
					<option value="coal">Coal Production</option>
					<option value="unminedMinerals">Sand, Gravel, or other Mineral Product not Quarried or Mined</option>
					<option value="oil">Oil, Blast Furnace Slag</option>
					<option value="excessNaturalGas">Natural Gas in Excess of 250.00$ Quarterly</option>
					<option value="limestoneSandstone">Limestone or Sandstone Quarried or Mined</option>
					<option value="timber">Timber</option>
					<option value="naturalResources">Other Natural Resource Products</option>
					<option value="manufacturedProduct">Manufactured, Compounded, Prepared for Sale Products</option>
					<option value="retailerRestaurant">Selling Tangible Property-Retailers, Restaurants, etc</option>
					<option value="wholesalers">Wholesalers & Jobbers</option>
					<option value="water">Water Companies</option>
					<option value="electricCommercial">Commercial Electric Light & Power Companies</option>
					<option value="electricNoncommercial">Non-commercial Electric Light & Power Companies</option>
					<option value="naturalGas">Natural Gas Companies</option>
					<option value="utilities">All Other Public Service or Utility Business</option>
					<option value="contracting" id="contracting">Contracting (Complete Schedule A Section)</option>
					<option value="amusement">Amusement</option>
					<option value="otherBusiness">Service or Calling and All Other Business</option>
					<option value="rentalsRoyaltiesFees" id="rentalsRoyaltiesFees">Rentals, Royalties, Fees and Otherwise(Complete Schedule B Section)</option>
					<option value="banking">Banking and Other Financial Business</option>
				</select>
				
				<label><input type="number" name="taxableIncome" id="taxableIncome"></label>
				<label><input type="number" name="taxDue" id="taxDue"></label>
				
				</p>
				
				<table><!-- Table for Signatures at the end of pg. 1 -->

				<tr>
				<td>Name of Taxpayer</td>
				<td>Title of Taxpayer</td>
				<td>Date</td>
				</tr>
				
				<tr>
				<td><label><input type="text" name="nameOfTaxpayer" class="submitter" ></label></td>
				<td><label><input type="text" name="titleOfTaxpayer"></label></td>
				<td><label><input type="date" name="dateSigned"></label></td>
				</tr>
				
				<tr>
				<td>Preparer's Name</td>
				<td>Firm's Name</td>
				<td>Phone Number</td>
				</tr>
				
				<tr>
				<td><label><input type="text" name="preparerName"></label></td>
				<td><label><input type="text" name="firmName"></label></td>
				<td><label><input type="number" name="phoneNumber"></label></td>
				</tr>
						
				</table>

				
				<div>
				<h3>Gross Taxable Income</h3>
				<table>
				<tr>
				<td><label>Gross Income<input type="number" name="grossIncome"></label></td>
				<td></td>
				</tr>
				
				<tr>
				<td><label>Less Exemptions<input type="number" name="lessExemptions"></label></td>
				<td></td>
				</tr>
				
				<tr>
				<td></td>
				<td></td>
				</tr>
				
				<tr>
				<td>Total Gross Taxable Income This Period</td>
				<td></td>
				</tr>
				
				</table>
				
				<br />
				
				<p>
				Transfer Total to Gross Taxable Income
				</p>
				
				<div>
				
				
				<div id="contractingSection">
				<h3>Schedule A - Contracting Business</h3>
				<p>
				</p>
				<input type="number" id="inputIdOne" />
				<input type="button"  onclick="add(inputIdOne, scheduleA); show(inputIdOne, scheduleA, container);" value="add"/>
				<br />
				<div id="container"></div>
				</div>
				
				</div>
				<br>
				
				
				<div id="rentalsSection">
				<h3>Schedule B - Rental Property</h3>
				<p>Fill in as many slots as needed:</p>
				
				<p><label>Total Gross Rent This Period<input type="number" name="totalGrossRent"></label></p>
				</p>
				<input type="number" id="inputIdTwo" />
				<input type="button"  onclick="add(inputIdTwo, scheduleB); show(inputIdTwo, scheduleB, containerOne);" value="add"/>
				<br />
				<div id="containerOne"></div>
				</div>
				</div>
				<br>
				
				
				<p>
				Ownership Change or Business Closure
				</p>
				
				<p>
				Please provide the following information if there has been a sale or closure of your business during this tax period:
				</p>
				
				<p>
				<label>
				Date Business closed or ownership changed
				
				<input type="date" name="dateOfChange"></label>
				</p>
				
				<p>
				<label>New Owner's Name:  <input type="text" name="newOwnerName"></label>
				</p>
				
				<p>
				<label>New Owner's Address: <input type="text" name="newOwnerAddress"></label>
				</p>
				</form>
				
				<br>
				
				<ol>
				<li>Determine your Business Classification.</li>
				<li>Taxes are based on Gross Receipts. Please enter your gross receipts in the appropriate box on the front of form.</li>
				<li>Gross amount should not include Federal or State excise tax and sales taxes imposed on the customer.</li>
				<li> Multiply the gross amount by the rate multiplier indicated and enter tax due.</li>
				<li>All tax returns are due one month after the end of applicable filing period (i.e, April 30, July 31, October 31, January 31).</li>
				<li> If your return is postmarked after the due date, you will be sent a letter for penalties due. Penalties are 5% for the
 first month or fraction thereof, and 1% for each succeeding month or fraction thereof of delinquency.</li>
				<li>If no reportable activity occurred during the filing period and no tax is due, please indicate this on the return and submit by the
 due date. This will avoid unnecessary delinquent notices. Even if no tax is due, this tax return must be completed.</li>
				<li>Sign and date the return. This return is invalid unless it is signed.</li>
				<li>If part of your gross income is taxed by another city, you are required to submit a copy of the return you filed with the other city.</li>
				<li>Please make checks payable to City of Elkins and mail payments to 401 Davis Avenue, Elkins, WV 26241.</li>
				<li>If you are unsure of your filing status or have any questions, please contact the Deputy Treasurer at 304-636-1414.
 Office hours are 8:30 a.m. to 4:30 p.m. Monday through Friday, except holidays.</li>
				</ol>
				</div>
	    </article>
		
				
	    <footer>City of Elkins, WV &bull; 401 Davis Avenue, Elkins WV 26241 &bull; 304.636.1414<br> <a href="mailto:lmbarrick@cityofelkinswv.com" target="_blank">info@cityofelkinswv.com</a> &bull; <a href="http://cityofelkinswv.com/index.php/photo-credits">Photo Credits</a></footer>


	</body>
</html>
