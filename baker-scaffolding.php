<?php
  // Translator loader
  require 'languages.php'
  ?>
<!DOCTYPE html>
<html lang="<?php echo $language ?>">

<head>
  <title><?php echo ___('Baker Scaffolding | Any Size Project at Low Rates') ?></title>
  <meta charset="utf-8">
  <meta name="description" content="<?php echo ___('Reduce your job site cost without sacrificing safety and convenience with the baker scaffolding and accessories from Miami scaffolding rental.') ?>">
  <meta name="Keywords" content="baker scaffolding, baker scaffold, bakers scaffold, bakers scaffolding">
  <link rel="canonical" href="https://miamiscaffoldrental.com/baker-scaffolding" />
  <link rel="alternate" hreflang="es" href="https://es.miamiscaffoldrental.com/baker-scaffolding" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php require 'common_header.php' ?>
  <link rel='stylesheet' href='unitegallery/css/unite-gallery.css' type='text/css' />
</head>

<body>

  <?php require 'components/header-menu-services.php' ?>

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/baker_scaffolding_head.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    </div>
  </section>
  <section class="ftco-section">
    <div class="container">
      <h1 class="mb-4"><?php echo ___('Baker Scaffold') ?></h1>
      <div class="row mb-3">
        <div class="col-md-6 ftco-animate">
          <p><?php echo ___('Baker scaffolding is also known as multi-purpose scaffolding. It can be used for several of projects going around your house, business or industrial application. The Baker scaffold is flexible with a working area of 6x3 ft; it is adjustable and can be safely stacked (up to 24 ft.). Our baker scaffolding unit is commercial grade that can be used for household work as well. It has a convenient locking system which allows you to quickly height adjustment. Scaffolding rentals are economical that helps you reach the toughest space with the ease.') ?></p>
          <p><?php echo ___('The safety of your employees should come as a first. Chances of getting injury and accidents are always high, so get rid of it. There is a risk of falling when employees work on heights. Opt for a scaffolding rental option that serves you as a secure fixed platform and reduce the risk of injury.') ?></p>
        </div>
        <div class="col-md-6 ftco-animate">
          <p><?php echo ___('If we compare the ladder with scaffold structure, it is more convenient, it saves a lot of time by speeding up your project. Ladders are not a secure platform whereas the scaffolding rental option enables your employees to work on greater heights without moving scaffold. Baker scaffolding protects your building as the weight is supported on a separate platform. We can install and fix them anywhere as it is made up of different parts.') ?></p>
          <p><?php echo ___('These work platforms offer contractors and consumers affordability, mobility, safety and ease of use. No tools required, with tower sets up to 24’ height. We also offer:') ?></p>
          <ul> 
          <?php echo ___('<li>Guardrails</li>
            <li>Outriggers</li>
            <li>Casters</li>') ?>
          </ul>
        </div>
      </div>
    </div>
    <?php require 'service_form.php'; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12 testimonial">
          <?php require 'gallery/baker.php' ?>
        </div>
      </div>
    </div>
  </section>


  <?php require 'common_footer.php' ?>
  <script type='text/javascript' src='unitegallery/js/unitegallery.min.js'></script>
  <script type='text/javascript' src='unitegallery/themes/tilesgrid/ug-theme-tilesgrid.js'></script>
  <script type="text/javascript">
    jQuery(document).ready(function() {
      jQuery("#gallery").unitegallery({
        gallery_theme: "tilesgrid",
				theme_panel_position: "right",
        gallery_width:'100%',
        slider_enable_text_panel: false,
        theme_navigation_type:"arrows",
        lightbox_type: "compact",		
      });
    });
  </script>
</body>

</html>