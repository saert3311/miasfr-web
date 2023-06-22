<?php
require 'vendor/autoload.php';
require 'languages.php';
$dotenv = Dotenv\Dotenv::createImmutable('../', '.miasfr');
$dotenv->load();
use \DrewM\MailChimp\MailChimp;
$token = $_POST['token'];
$action = $_POST['action'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('secret' => $_ENV['RECAPTCHA_V3_SECRET_KEY'], 'response' => $token)));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$arrResponse = json_decode($response, true);

// verificar la respuesta
if($arrResponse["success"] == '1' && $arrResponse["action"] == $action && $arrResponse["score"] >= 0.5) {

    $message = '';

    if (!empty($_POST)) {

      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $correo = $_POST['email'];
      $phone = $_POST['phone'];
      $company = $_POST['company'];
      $zip = $_POST['zip'];
      $hear = $_POST['hear'];
      $comment = $_POST['comment'];
      $subscribed = $_POST['subscribe'];
      $content = "New contact from ". $fname . " " . $lname . "\r\n".
      "Email: ".$correo. "\r\n".
      "Company: ".$company. "\r\n".
      "Zip: " . $zip . "\r\n".
      "Phone: " . $phone . "\r\n".
      "Referral: " . $hear . "\r\n".
      "Message:\r\n".
      $comment. "\r\n".
      "\r\n".
      "Mail sent through miamiscaffoldrental.com form";

      $email = new \SendGrid\Mail\Mail(); 
      $email->setFrom("web@miamiscaffoldrental.com", "Web Contact");
      $email->setSubject("Web contact from ".$fname . " " . $lname);
      $email->addTo("info@miamiscaffoldrental.com", "Info Miami Scaffold Rental");
      $email->addContent("text/plain", $content);

      $sendgrid = new \SendGrid($_ENV['SENDGRID_KEY']);

      if ($subscribed == 'yes') {
        $MailChimp = new MailChimp($_ENV['MAILCHIMP_KEY']);
        $list_id = '11bd6a5445';
        $result = $MailChimp->post("lists/$list_id/members", [
          'email_address' => $correo,
          'status'        => 'subscribed',
        ]);

      }

      try {
          $response = $sendgrid->send($email);

          if ($response->statusCode() == '202') {
            $message = 'Thank you for writing us, we will contact you soon!';
        }else {
            $message = 'Oh Oh there was an error, please try again<br><a href="contact" class="btn btn-light">Try Again</a>';
        }

      } catch (Exception $e) {
        $message = 'There is an error on ' . $e->getMessage() . '<br><a href="contact" class="btn btn-light">Try Again</a>';
      }

    }else {
      header("Location: /contact");
      die();
    }
  } else {
    $message = 'You are a robot';
  }

?>
<!DOCTYPE html>
<html lang="<?php echo $language ?>">
  <head>
    <title><?php echo ___('Miami Scaffold Rental') ?></title>
    <meta charset="utf-8">
    <link rel="canonical" href="https://miamiscaffoldrental.com/thank-you"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php require 'common_header.php' ?>
  </head>
  <body>
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
      <a class="navbar-brand" href="/"><picture><source media="(max-width:576px), (pointer:coarse) and (min-width:640px)" srcset="images/msr_mobile_w.webp"><img alt="Miami Scaffolding Rental Service" class="erlogo" src="images/msr_logo_w.webp"></picture></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span><?php echo ___('Menu') ?>
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
			<li class="nav-item"><a href="/" class="nav-link external" data-nav-section="home"><span><?php echo ___('Home') ?></span></a></li>
	          <li class="nav-item"><a href="/#section-counter" class="nav-link external" data-nav-section="about"><span><?php echo ___('About Us') ?></span></a></li>
	          <li class="nav-item"><a href="/#the-services" class="nav-link external" data-nav-section="services"><span><?php echo ___('Services') ?></span></a></li>
	          <li class="nav-item cta"><a href="tel:+13057901410" class="nav-link external">305-790-1410</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    
    <section class="hero-wrap js-fullheight" style="background-image: url('images/banner_1.webp');" data-section="home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start">
          <div class="col-md-8 ftco-animate mt-5">
            <h1 class="mb-4"><?php print_r($message); ?></h1>
          </div>
        </div>
      </div>
    </section>
	<?php require 'common_footer.php' ?> 
  </body>
</html>