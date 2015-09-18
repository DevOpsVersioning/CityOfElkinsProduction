<!DOCTYPE HTML>
<?php require("json_form_scripts.php");?>
<!-- Brian Dixon -->
<!-- Version 6: Elkins Website Template-->
<html>
	<head>
	    	<meta charset="UTF-8">
	 	<title>Events Request</title>

        	<link rel="icon" href="http://cityofelkinswv.com/templates/default/favicon.png">
		<link rel="stylesheet" href="elkins.css" type="text/css">
			
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="parsley.js"></script>
    	</head>

<body>
	<header></header>
	<article>
<h1><b>Application to Use or Close Elkins City Streets<br>Runs/Walks/Ride-Ins/Block Parties and Related Events</b></h1>

<form>
<table>
<tr>
<td><label>Date(s) of Event <input type="text" name="e_date" required></label></td>
<td>Time: From <input type="text" name="e_start"> To <input type="text" name="e_end"></td>
</tr>
<tr>
<td><label>Date of Street Closing <input type="text" name="street_close" required></label></td>
<td><label>Time of Street Closing <input type="text" name="street_timeclose" required></label></td>
</tr>
<tr>
<td><label>Date of Street Reopening <input type="text" name="street_opening" required></label></td>
<td><label>Time of Street Reopening <input type="text" name="street_timeopen" required></label></td>
</tr>
</table>

<table>
<tr>
<td>Organization Name <input type="text" name="organization"></td>
<td>Address <input type="text" name="address"></td>
</tr>
<tr>
<td>City/State/Zip <input type="text" name="city"></td>
<td>Fax <input type="text" name="fax"></td>
</tr>
</table>

<table>
<tr>
<td><label>Contact <input type="text" class="submitter" name="contact" required></label></td>
<td><label>Telephone <input type="text" name="telephone" required></label></td>
<td><label>E-mail <input type="email" name="email" required></label></td>
</tr>
<tr>
<td>2<sup>nd</sup>Contact <input type="text" name="contact2"></td>
<td>Telephone <input type="text" name="telephone2"></td>
<td>E-mail <input type="email" name="email2"></td>
</tr>
</table>
<br>
Does applicant have liability insurance that names the City as an additional insured?*
<input type="radio" name="insurance" value="Yes">Yes <input type="radio" name="insurance" value="No">No
<i>(*A Certificate of Insurance may be required of the applicant for this event) <b>This information must be submitted to the Mayor's Office upon request.</b></i>
<br>Explain event or reason for request<br>
<TEXTAREA name="reason" rows= 3 cols= 90 ></TEXTAREA>
<br>

<p>Streets you are requesting to use or close - <b>identify specific block.</b></p>
<ol>
<li><input type="text" name="street1">
from <input type="text" name="s1_start"> to <input type="text" name="s1_end">
<b>Barricade Street</b><input type="checkbox" name="barricade1" value="Yes">
<b>Sidewalk Usage</b><input type="checkbox" name="sidewalk1" value="Yes"></li>
<li><input type="text" name="street2">
from <input type="text" name="s2_start"> to <input type="text" name="s2_end">
<b>Barricade Street</b><input type="checkbox" name="barricade2" value="Yes">
<b>Sidewalk Usage</b><input type="checkbox" name="sidewalk2" value="Yes"></li>
<li><input type="text" name="street3">
from <input type="text" name="s3_start"> to <input type="text" name="s3_end">
<b>Barricade Street</b><input type="checkbox" name="barricade3" value="Yes">
<b>Sidewalk Usage</b><input type="checkbox" name="sidewalk3" value="Yes"></li>
<li><input type="text" name="street4">
from <input type="text" name="s4_start"> to <input type="text" name="s4_end">
<b>Barricade Street</b><input type="checkbox" name="barricade4" value="Yes">
<b>Sidewalk Usage</b><input type="checkbox" name="sidewalk4" value="Yes"></li>
</ol>
<br>

Specific assistance needed from City (Parking, Police, Fire, etc.)<br>
<TEXTAREA name="assistance" rows = 3 cols = 90></TEXTAREA>
<br><br>

<p><b>Contingencies---Restrictions:</b></p>
<br>
<hr>

<p>File this application at least two months in advance of the requested date of street closure to assure full consideration. Approval is subject to any restrictions or changes required by the City Administration
or Council, <b>or if necessary for public safety reasons.</b></p>
<br>

</form>
</article>
<footer>City of Elkins, WV &bull; 401 Davis Avenue, Elkins WV 26241 &bull; 304.636.1414<br> <a href="mailto:lmbarrick@cityofelkinswv.com" target="_blank">info@cityofelkinswv.com</a> &bull; <a href="http://cityofelkinswv.com/index.php/photo-credits">Photo Credits</a></footer>


</body>
</html>
