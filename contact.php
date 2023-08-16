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
          <div class="col-md-6 d-flex">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1795.512081715053!2d-80.32172285897263!3d25.83574907174551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x74a9fdbe82eb6f3d!2sMiami+Scaffold+Rental!5e0!3m2!1sen!2sus!4v1565059694700!5m2!1sen!2sus" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
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
          		<h3 class="mb-4"><?php echo ___('Address') ?></h3>
	            <p>9955 NW 116th Way, Suite 8<br>Medley, FL 33178</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<img src="images/phone_icon.webp">
          		</div>
          		<h3 class="mb-4"><?php echo ___('Phone') ?></h3>
	            <p><a href="tel:+13055308090">305-530-8090</a></p>
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
	            <p><?php echo ___('MON-SAT: 7:00 am to 4:00 pm<br>SUN: Closed') ?></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
    <?php require 'common_footer.php' ?>
  </body>
</html>