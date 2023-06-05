<?php
  // Translator loader
  require 'languages.php'
  ?>
<!DOCTYPE html>
<html lang="<?php echo $language ?>">

<head>
  <title><?php echo ___('Hoist Repair Services | Get back on the job as soon as possible') ?></title>
  <meta charset="utf-8">
  <meta name="description" content="<?php echo ___('On-call, scheduled and in-house hoist repair services.  We are certified to repair, and offer warranty, on most commercial brands') ?>">
  <link rel="canonical" href="https://miamiscaffoldrental.com/hoist-repair-services" />
  <link rel="alternate" hreflang="es" href="https://es.miamiscaffoldrental.com/hoist-repair-services" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php require 'common_header.php' ?>
</head>

<body>

  <?php require 'components/header-menu-services.php' ?>

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/swing-stages-featured-02.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    </div>
  </section>
  <section class="ftco-section">
    <div class="container">
      <h1 class="mb-4"><?php echo ___('Hoist Repair Services') ?></h1>
      <div class="row">
        <div class="col-md-6 ftco-animate">
          <p><?php echo ___('Miami Scaffold Rental offers highly-trained technicians to help diagnose and repair your hoist. We offer on-call, scheduled and in-house hoist repair services. Also, emergency repairs when needed. Our goal is to get you back on the job, and running, as soon as possible. We are certified to repair, and offer warranty, on most commercial brands, including <a href="https://www.bisoh.co.jp/en/" target="_blank" rel="noopener noreferrer">BISOMAC</a>, <a href="http://powerclimber.com/" target="_blank" rel="noopener noreferrer">Power Climber</a> and <a href="https://skyclimber.com/" target="_blank" rel="noopener noreferrer">Sky Climber</a>. We work only with OEM parts which helps ensure that you are getting the right part for your hoist. Our warranty repair center is in Medley, FL.') ?></p>
          <h5><?php echo ___('Call us at ') ?><a href="tel:+13055308090">305-530-8090</a><?php echo ___(' to schedule a repair.') ?></h5>
        </div>
        <div class="col-md-6 ftco-animate">
          <div class="p-4 bg-light">
            <div class="desc">
              <p><?php echo ___('Key services we offer include:') ?></p>
              <ul>
              <?php echo ___('
                <li>Service center run by hoist professionals</li>
                <li>Complete hoist electrical and mechanical repairs</li>
                <li>Factory authorized warranty repair center for major brands</li>
                <li>In-house test stand for dynamic and static testing of your hoist</li>
                <li>Experienced repair technicians trained by major brands</li>
                <li>Fast turnaround on repair jobs – 1 to 3 days depending on part availability</li>
                ') ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php require 'service_form.php'; ?>
  <?php require 'common_footer.php' ?>
</body>

</html>