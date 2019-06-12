<?php include "includes/header.php"?>

<!-- START HTML FORM -->
</section>
<div class="column">
<form action="contact.php" method="post">
    <fieldset>
    <div>
		<label>Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="50" autofocus />
		</label><br>
    </div>
    <br>
	<div>	
		<label>Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="50" />
		</label>
	</div>
	<!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
	<div>	
<br>
	<div>	
			<legend>What Services Are You Interested In?</legend>
			<input type="checkbox" name="Interested_In[]" value="Hair cut and Style" tabindex="40" /> Hair cut and Style <br />
			<input type="checkbox" name="Interested_In[]" value="Color and Haircut" /> Color and Haircut <br />
			<input type="checkbox" name="Interested_In[]" value="Highlights" /> Highlights <br />
			<input type="checkbox" name="Interested_In[]" value="Complimentary Consultation" /> Complimentary Consultation <br />
			<input type="checkbox" name="Interested_In[]" value="Other" /> Other <br /><br>

	</div>
	
	<div>	

			<legend>Would you like to join our mailing list?</legend>
			<input type="radio" name="Join_Mailing_List?" value="Yes" 
			required="required" title="Mailing list is required" tabindex="50"  
			/> Yes <br />
			<input type="radio" name="Join_Mailing_List?" value="No" /> No <br /><br>
    </div>
    
	<div>	
		<label>
			Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="60"></textarea>
		</label>
	</div>	
	<div></div>
    <div class="g-recaptcha" data-sitekey="6Le4ZZ4UAAAAAO98JuLbr3Pnxl-TcZyM2mR3UQZI"></div>
	<div><br>
		<input type="submit" value="submit" />
	</div>
    </form>
	<!-- END HTML FORM -->
    <script src="https://www.google.com/recaptcha/api.js?hl=en">
    </script>

    <p class="clear-recaptcha"></p>
    </fieldset>
</div>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<div class="contact">
       <br><br><br><br><br>
    <p>Hair and Make Up Appointments&#58;<br>Salon QE<br>2520 1st Avenue<br>Seattle, WA 98121<br><a href="tel:012064410304">206.441.0304</a></p>  <!-- Address END -->
         <!-- Facebook Badge START -->
        <figure class="fb-badge"><br /><a href="https://www.facebook.com/pages/Nello-Addabbo-Hair-Designer-Makeup-Artist/321793876820" title="Nello Addabbo - Hair Designer &amp; Makeup Artist" target="_blank"><img class="img" src="https://badge.facebook.com/badge/321793876820.2893.827093454.png" width="120" height="136" alt="" /></a><br /></figure>
    <!-- END Facebook Badge -->
    <!-- START Instagram Badge -->
         <figure class="instagram"><a href="http://instagram.com/nelloaddabbo?ref=badge" target="_blank"><img src="images/instagrambadge.png" width="137" height="24" alt="Instagram" /></a></figure>
    </div>

<?php include "includes/footer.php"?>