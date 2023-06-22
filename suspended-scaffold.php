<?php
  // Translator loader
  require 'languages.php'
  ?>
<!DOCTYPE html>
<html lang="<?php $language ?>">

<head>
  <title><?php echo ___('Suspended Scaffolding at Guaranteed Lowest Price| Call Us Today') ?></title>
  <meta charset="utf-8">
  <meta name="description" content="<?php echo ___('Suspended Scaffolding is an adjustable solution for working on high rise building. They are also known as swing stay suspended scaffolding.') ?>">
  <meta name="Keywords" content="suspended scaffolding, suspended scaffold">
  <link rel="canonical" href="https://miamiscaffoldrental.com/suspended-scaffold" />
  <link rel="alternate" hreflang="es" href="https://es.miamiscaffoldrental.com/suspended-scaffold" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php require 'common_header.php' ?>
  <link rel='stylesheet' href='unitegallery/css/unite-gallery.css' type='text/css' />
  <meta property="og:title" content="<?php echo ___('Suspended Scaffolding at Guaranteed Lowest Price| Call Us Today') ?>">
  <meta property="og:site_name" content="Miami Scaffold Rental">
  <meta property="og:url" content="https://miamiscaffoldrental.com/suspended-scaffold"/>
  <meta property="og:description" content="<?php echo ___('Suspended Scaffolding is an adjustable solution for working on high rise building. They are also known as swing stay suspended scaffolding.') ?>">
  <meta property="og:type" content="product">
  <meta property="og:image" content="https://miamiscaffoldrental.com/images/msr_social.webp">
</head>

<body>

  <?php require 'components/header-menu-services.php' ?>

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/suspended_scaffold_head.webp');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    </div>
  </section>
  <section class="ftco-section">
    <div class="container">
      <h1 class="mb-4"><?php echo ___('Suspended Scaffold') ?></h1>
      <div class="row mb-4">
        <div class="col-md-6 ">
          <p><?php echo ___('Suspended scaffold is also known as swing-stage scaffold, that play an outstanding role in elevated construction. Suspended scaffold provides access and working platform for construction, inspection; repair or maintenance. It can be raised or lowered when required. Usually, there are two-point adjustable suspension scaffolds that window washers use on skyscrapers.') ?></p>
          <p><?php echo ___('Suspended scaffold comes in a variety of models that enables workers or engineers to work on heights. A few examples where suspended scaffolding comes in use: Repair or window clean, refurbishing or decorating, concrete restoration and painting on buildings, etc. It consists of three main elements: a platform to work, a supporting frame and a suspension system.') ?></p>
        </div>
        <div class="col-md-6 ">
          <p><?php echo ___('Suspended scaffold is durable and lightweight as their bearing parts are made up of hot-dipped GI and components with an anti-corrosive powder coating that makes the scaffolding system to withstand unfavorable weather condition. It is made up of aluminum that has a low density and it resists corrosion. It is very adaptable as you can adjust the working height according to your preference. You can easily access facades and walls. Suspended scaffolding is versatile; it can be used for a variety of projects.') ?></p>
          <p><?php echo ___('The perfect solution. for high-rise exterior access. Supported by cables connected to stirrups at each end of the platform. They are additionally equipped with an electrical motor to permit the platform to be raised and lowered as needed. Best used by facade restoration companies on high-rise buildings these platforms are integral to moving personnel and building materials for construction as well.') ?></p>
        </div>
      </div>
    </div>
    <?php require 'service_form.php'; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12 testimonial">
          <?php require 'gallery/suspended.php' ?>
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