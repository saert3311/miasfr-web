<?php
header("Location: https://miamiscaffoldrental.com",TRUE,301);
die();
  // Translator loader
  require 'languages.php'
  ?>
<!DOCTYPE html>
<html lang="<?php $language ?>">
  <head>
    <title><?php echo ___('Miami Scaffold Rental - Ladders') ?></title>
    <meta charset="utf-8">
    <link rel="canonical" href="https://miamiscaffoldrental.com/ladders"/>
    <link rel="alternate" hreflang="es" href="https://es.miamiscaffoldrental.com/ladders" />
	  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require 'common_header.php' ?>
  </head>
  <body>
	  
  <?php require 'components\header-menu-services.php'?>
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/ladders_head.webp');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
	  <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9  pb-5 text-center">
          </div>
        </div>
        </div>
      </div>
    </section>
	<section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 order-lg-last ">
		  <h2 class="mb-4"><?php echo ___('Ladders') ?></h2>
			<p><?php echo ___('We offer a wide range of heights and styles including straight ladders which lean up against a solid surface for support, step ladders and even combinations. From step ladders to 50’ ladder extensions.') ?></p>
      <a href="contact" role="button" class="btn btn-primary"><?php echo ___('Contact Us') ?></a>
          </div>
          <div class="col-lg-4 sidebar ">
            <div class="sidebar-box ">
            	<h3 class="heading-sidebar"><?php echo ___('Services') ?></h3>
              <ul class="categories">
              <li><a href="frame-scaffolding"><?php echo ___('Frame Scaffolding') ?></a></li>
               <li><a href="system-scaffold"><?php echo ___('System Scaffold') ?></a></li>
                <li><a href="baker-scaffolding"><?php echo ___('Baker Scaffolding') ?></a></li>
                <li><a href="suspended-scaffold"><?php echo ___('Suspended Scaffold') ?></a></li>
                <li><a href="scissor-lift"><?php echo ___('Scissor Lift') ?></a></li>
                <li><a href="boom-lift"><?php echo ___('Boom Lift') ?></a></li>
              </ul>
            </div>

          </div>

        </div>
      </div>
    </section>
    <?php require 'service_form.php'; ?>  
    <?php require 'common_footer.php' ?> 
  </body>
</html>