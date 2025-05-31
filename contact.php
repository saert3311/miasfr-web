<?php
  // Translator loader
  require 'languages.php'
  ?>
<!DOCTYPE html>
<html lang="<?php echo $language ?>">
  <head>
    <title><?php echo ___('Contact Us | Scaffolding on Rent-Miami Scaffold Rental') ?></title>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo ___('Contact Miami Scaffold Rental for more details.Request a quote & get the best price.Expert scaffolding and over 40 years of experience.') ?>">
	<meta name="Keywords" content="scaffold rental">
	<link rel="canonical" href="https://miamiscaffoldrental.com/contact"/>
	<link rel="alternate" hreflang="es" href="https://es.miamiscaffoldrental.com/contact" />
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require 'common_header.php' ?>
	<meta property="og:title" content="<?php echo ___('Contact Us | Scaffolding on Rent-Miami Scaffold Rental') ?>">
  <meta property="og:site_name" content="Miami Scaffold Rental">
  <meta property="og:url" content="https://miamiscaffoldrental.com/contact"/>
  <meta property="og:description" content="<?php echo ___('Contact Miami Scaffold Rental for more details.Request a quote & get the best price.Expert scaffolding and over 40 years of experience.') ?>">
  <meta property="og:type" content="business.business">
  <meta property="og:image" content="https://miamiscaffoldrental.com/images/msr_social.webp">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>

  <style>
    #map-medley, #map-fort { height: 400px; margin-bottom: 1.5rem; }
  </style>
  </head>
  <body>
	  
  <?php require 'components/header-menu-services.php'?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/contact_bg.webp');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
    </section>
    
    <section class="contact-section bg-light pt-5 pb-5" data-section="contact" id="contacto">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ">
            <span class="subheading"><?php echo ___('HAVE A QUESTION?') ?></span>
            <h1 class="mb-4"><?php echo ___('Contact Us') ?></h1>
            <p><?php echo ___('Please, fill out the form bellow.<br>A team member will reach out to help you') ?></p>
          </div>
        </div>
        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="thank-you" method="post" class="bg-light p-lg-5 contact-form" id="contact-miasfr">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="<?php echo ___('First Name') ?>" name="fname" required>
                <input type="text" name="middlename" id="middlename-hp" class="harrypotter" autocomplete="off" placeholder="Your name here">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="<?php echo ___('Last Name') ?>" name="lname" required>
							</div>
							<div class="form-group">
                <input type="text" class="form-control" placeholder="<?php echo ___('Your Company Name') ?>" name="company" required>
							</div>
							<div class="form-group">
                <input type="email" class="form-control" placeholder="E-mail" name="email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="<?php echo ___('Zip Code') ?>" name="zip" required>
							</div>
							<div class="form-group">
                <input type="tel" class="form-control" placeholder="<?php echo ___('Phone') ?>" name="phone" required>
							</div>
							<div class="form-group">
							<select class="form-control" name="hear" required>
									<option value="None"><?php echo ___('How did you hear about us?') ?></option>
									<option value="Referal"><?php echo ___('Referal') ?></option>
									<option value="Google Search"><?php echo ___('Google Search') ?></option>
								    <option value="Printed Ad"><?php echo ___('Printed Ad') ?></option>
								</select>
                <input type="checkbox" name="terms" id="terms-hp" class="harrypotter" autocomplete="off" placeholder="Accept Terms">
							</div>
              <div class="form-group mb-3">
                <textarea name="comment" id="" cols="30" rows="7" class="form-control" placeholder="Comments/Questions" required></textarea>
							</div>
							<div class="form-check mb-3">
									<input class="form-check-input" type="checkbox" value="yes" id="defaultCheck1" name="subscribe">
									<label class="form-check-label" for="defaultCheck1">
									<?php echo ___('Subscribe to Newsletter') ?>
									</label>
								</div>
              <div class="form-group">
                <input type="submit" value="<?php echo ___('Send Message') ?>" class="btn btn-secondary py-3 px-5">
              </div>
            </form>
          
          </div>
          <div class="col-md-6 d-flex flex-column">
						<div id="map-medley"></div>
						<div id="map-fort"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<img src="images/address_icon_2.webp" alt="Scaffolding on Rent">
          		</div>
          		<h3 class="mb-4"><?php echo ___('Addresses') ?></h3>
	            <p class="mb-3">9955 NW 116th Way, Suite 8<br>Medley, FL 33178</p>
	            <p>4525 NW 8th Ave<br>Fort Lauderdale, FL 33309</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<img src="images/phone_icon.webp">
          		</div>
          		<h3 class="mb-4"><?php echo ___('Phone') ?></h3>
	            <p><a href="tel:+13055308090">305-530-8090</a></p>
	            <p><a href="tel:+19547664834">954-766-4834</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box pt-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<img src="images/email_icon.webp" alt="Miami Scaffold Rental">
          		</div>
          		<h3 class="mb-4">Email</h3>
	            <p><a href="mailto:info@miamiscaffoldrental.com">info@miamiscaffoldrental.com</a></p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<img src="images/hours_icon.webp">
          		</div>
          		<h3 class="mb-4"><?php echo ___('Hours') ?></h3>
	            <p><?php echo ___('MON-FRI: 7:00 am to 4:00 pm<br>SAT-SUN: Closed') ?></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
    <?php require 'common_footer.php' ?>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
     <script>
      var medley = L.map('map-medley',{scrollWheelZoom:false}).setView([25.8752532, -80.3609318], 15);
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
      }).addTo(medley);
      L.marker([25.8752532, -80.3609318]).addTo(medley)
        .bindPopup('<h5>Medley</h5><a href="https://maps.app.goo.gl/LwEpgAvLteALt2DVA" target="_blank" rel="noreferrer nofollow">9955 NW 116th Way, Suite 8<br>Medley, FL 33178</a>')
        .openPopup();
      var fort = L.map('map-fort', {scrollWheelZoom:false}).setView([26.18225,-80.15363], 15);
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
      }).addTo(fort);
      L.marker([26.18225,-80.15363]).addTo(fort)
        .bindPopup('<h5>Fort Lauderdale</h5><a href="https://maps.app.goo.gl/sussU1aovcZ7aUHC6" target="_blank" rel="noreferrer nofollow">4525 NW 8th Ave<br>Fort Lauderdale, FL 33309</a>')
        .openPopup();
     </script>
  </body>
</html>