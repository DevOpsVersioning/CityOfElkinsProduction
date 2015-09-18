<?php require ("json_form_scripts.php");?>

<!DOCTYPE html>
<!-- Alain Bailey -->
<html>
<head>   
    <link rel="stylesheet" href="./elkins.css" type="text/css" />
    <meta charset="UTF-8">
   <title>Excavation Permit</title>
</head>

<body>
     <header></header>
    <article>
        <!--TBD application date form-->
    <h1>Excavation Permit Application</h1>
<!-- FORM TO FOLLOW-->
<form>
    <h3>Property owner information</h3>
    <label>Owner's name <input type="text" name="Nameusr" class="submitter" required></label><br>
    <label>Address <input type="text" name="Addressusr" required></label><br>
    <label>Phone number <input type="text" name="phoneusr" required></label><br>
    
    <h3>Contractor</h3>
    <label>Name <input type="text" name="Namectr" required></label><br>
    <label>Phone <input type="text" name="phonectr" required></label> <label>WV License number <input type="text" name="license"></label> <label>City License <input type="text" name="Citycode"> </label>
    <!--TBD is bond relative in internet-->
        
    <h3>Bond</h3>
    <select name="bond">
        <option value="copyattached">Copy attached</option>
        <option value="waived">Waived</option><br>
    </select>
    
  

    <h3>Job site information</h3>
    <label>Job site address <input type="text" name="jobaddress"></label><br>
    <p>Purpose of excavation and scope of work </p><textarea name="purpose" rows="4" cols="50"></textarea><br><br>
    <label>Date work to begin <input type="date" name="startdate"></label> <label>Date work to end <input type="date" name="enddate"></label><br>
    <p>Street closure requested? <select name="closure">
        <option value="yes">Yes</option>
        <option value="no">No</option><br>
    </select>
        <p>If yes, give details.</p> <textarea name="details" rows="4" cols="50">
        </textarea><br>
      
    <strong>No work to begin until this permit is approved</strong>
    
    <ol>
        <li>The approved Excavation Permit must be available on the construction site <u>before</u>
        any work is begun and until completion of work covered by this permit.
        <li>At least 48 hours <u>before</u> digging,
        West Virginia law requires contacting Miss Utility of West Virginia, Inc. at 1-800-245-4848 (Toll-free).</li>
    </ol>
      <h3>Person Responsible for execution of work, safety, surface restoration, payment of expenses incurred, and compliance with City of Elkins codes and ordinances.</h3>
      <label>Name <input type="text" name="nameresp"></label><br>
      <label>Address <input type="text" name="addressresp"></label><br>
      <label>Phone <input type="text" name="phoneresp"></label><br>
      
  
</form><br>
</article>
  <footer>City of Elkins, WV &bull; 401 Davis Avenue, Elkins WV 26241 &bull; 304.636.1414<br> <a href="mailto:lmbarrick@cityofelkinswv.com" target="_blank">info@cityofelkinswv.com</a> &bull; <a href="http://cityofelkinswv.com/index.php/photo-credits">Photo Credits</a></footer>

</body>
</html>
