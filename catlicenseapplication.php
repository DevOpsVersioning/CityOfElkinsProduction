<?php require("json_form_scripts.php");?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	    	<meta charset="UTF-8">
	 	<title>Cat Form Application</title>

        	<link rel="icon" href="http://cityofelkinswv.com/templates/default/favicon.png">
		<link rel="stylesheet" href="elkins.css" type="text/css">
    	</head>

    <body>

             <header></header>
    <article>
    <h1>Cat Form Application</h1><br>
    <h2>Pet Owner</h2>


    <form enctype="multipart/form-data">
    <p>


    	 <label>Name
        <input name="userName" class="submitter" required="" type="text" id='name'></label> <br> <br>

      <label> Phone
      <input name="phone" required="" type="text" id='phone'></label> <br> <br>

        <label>Street Address
        <input name="streetAddress"  type="text" id='streetAddress'></label><br> <br>

        <label>Mailing Address
        <input name="mailingAddress"  type="text" id='mailingAddress'></label><br><br>


	</p>
    <h2>Cat Information</h2>
    <p>

	  <label>Name
        <input name="catName" required="" type="text" id='catName'>
       </label><br> <br>

       <label>Breed
       <input name="breedType"  type="text" id='breed'></label> <br> <br>

        <label>Primary Color
        <input name="primaryColor"  type="text" id='primaryColor'></label> <br> <br>

        <label>Secondary Color
        <input name="secondaryColor"  type="text" id='secondaryColor'></label> <br> <br>

        <label>Distinguishing Markings
        <input name="distinguishingMarking"  type="text" id='distinguishingMarking'></label> <br> <br>


        <label>Coat Length:  <input name="coatLength" value="male" type="radio" id='coatLength'></label> <label>Short <input name="hair_length" value="male" type="radio" id='hair_length'></label> <label>Medium
        </label> <input name="hair_length" value="male" type="radio">Long </label> <br>

        <label>Sex: <input name="sex" value="female" type="radio" id='female'></label><label>Female <input name="sex" value="male" type="radio" id='male'>Male</label><br>
        <label>Tail Docked: </label>
        <label><input name="tailDocked" value="tail_docked_Yes" type="radio" id='yes'>Yes </label> <label><input name="tail" value="tail_docked_No" type="radio" id='no'>No </label> <br>

        <label>Rabies Vaccine Date Given(YYYY/MM/DD)<input name="rabiesVaccineDateGiven" type="date" id='rabiesVaccineDateGiven'></label><br> <br>

        <label>Date Expires (YYYY/MM/DD)
        <input name="dateExpires" type="date" id='dateExpires' ></input></label><br> <br>

	</p>
    <!--
    <p style="font-weight: bold">Copy Of Rabies Certification Must Be
    attached.</p>
	 -->
	   <h2>Fees</h2>


        <label>$5.00
        <input name="Fees" value="5" type="radio" id='5'> -
        Altered (Neutered or Spayed) - Proof Must Be Attached.</label><br>

        <label>$25.00<input name="Fees" value="25" type="radio" id='25'> - Unaltered</label><br>

        <label>$100.00<input name="Fees" value="100" type="radio" id='100'> - Breeder</label><br><br>


    <p>I certify the information included in this application is correct, that
    I am 18 years of age or older, and that I am the owner of the described
    cat.</p>

      <label>Signature of Owner
        <input name="signatureOfOwner" required="" type="text" id='signatureOfOwner'></label> <br> <br>


   <!--  <form action="upload.php" method="post" enctype="multipart/form-data"> -->
  Please upload Rabies Vaccine certificate file:<br></br> <input name="uploadFile" type="file" id="uploadFile"> <br> <br></br>
                                                         <input type="hidden" name="MAX_FILE_SIZE" value="2000000">



    </form>
    </article>
    <footer>City of Elkins, WV ? 401 Davis Avenue, Elkins WV 26241 ? 304.636.1414<br> <a href="mailto:lmbarrick@cityofelkinswv.com" target="_blank">info@cityofelkinswv.com</a> ? <a href="http://cityofelkinswv.com/index.php/photo-credits">Photo Credits</a></footer>

</body></html>
