<?php
  // Translator loader
  require 'languages.php'
  ?>
<!DOCTYPE html>
<html lang="<?php echo $language ?>">

<head>
  <title><?php echo ___('Shoring Post| Post Shoring - Free Rental Quote') ?></title>
  <meta charset="utf-8">
  <meta name="description" content="<?php echo ___('Shoring post is used to temporarily support beams or floors in a building.We offer a comprehensive line of shoring rental equipment.') ?>">
  <meta name="Keywords" content="post shores, shoring jacks, shoring post, shoring post rental">
  <link rel="canonical" href="https://miamiscaffoldrental.com/post-shoring" />
  <link rel="alternate" hreflang="es" href="https://es.miamiscaffoldrental.com/post-shoring" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php require 'common_header.php' ?>
  <link rel='stylesheet' href='unitegallery/css/unite-gallery.css' type='text/css' />
  <meta property="og:title" content="<?php echo ___('Shoring Post| Post Shoring - Free Rental Quote') ?>">
  <meta property="og:site_name" content="Miami Scaffold Rental">
  <meta property="og:url" content="https://miamiscaffoldrental.com/post-shoring"/>
  <meta property="og:description" content="<?php echo ___('Shoring post is used to temporarily support beams or floors in a building.We offer a comprehensive line of shoring rental equipment.') ?>">
  <meta property="og:type" content="product">
  <meta property="og:image" content="https://miamiscaffoldrental.com/images/msr_social.webp">
</head>

<body>

  <?php require 'components/header-menu-services.php' ?>

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/post_shoring_head.jpeg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    </div>
  </section>
  <section class="ftco-section">
    <div class="container">
      <h1 class="mb-4"><?php echo ___('Post Shores') ?></h1>
      <div class="row mb-3">
        <div class="col-md-6 ">
          <p><?php echo ___('Post shores require minimal maintenance that can be converted to shoring frames if required. They are durable, reduce labor expense and help you in finishing up the job on time. Post shoring is more efficient as of its lightweight. Single men can handle, assemble and dismantle it providing a streamlined operation. Post shores scale down your inventory more as they are backed with demountable ledgers that can be easily converted to frames. Each post shore accepts bolts with three different heads that are equipped with a full-length vertical t-bolt slot on all the slides. This saves your time and money. Shoring post enables you to conserve capital for other projects and opportunities as no need for capital to be invested in buying or repairing the post shores.') ?></p>
        </div>
        <div class="col-md-6 ">
          <p><?php echo ___('No need of repair, wear and tear happens to trench boxes and slide rail systems. This also comes in our part. We repair wear and tear in our location. Shoring post rental allows you to get the job done promptly as you have the exact equipment needed for specific job you were looking for.') ?></p>
          <p><?php echo ___('We offer a quick, easy and safe way to support structures. With wide range of heights (5’ to 16’) and load capacities up to 8,000 Lbs per unit, our post shores are a great solution for a wire range of applications.') ?></p>
        </div>
      </div>
    </div>
    <?php require 'service_form.php'; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12 testimonial">
          <?php require 'gallery/shoring.php' ?>
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