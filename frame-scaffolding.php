<?php
  // Translator loader
  require 'languages.php'
  ?>
<!DOCTYPE html>
<html lang="<?php echo $language ?>">

<head>
  <title><?php echo ___('Frame Scaffolding on Rent | At Best Price | Miami Scaffolding Rental') ?></title>
  <meta name="description" content="<?php echo ___('Rent a scaffolding stair tower from the number 1 rental scaffolding provider that has achieved laurels in providing a comprehensive range of scaffolding rental.') ?>">
  <meta name="Keywords" content="scaffold rental, rental scaffolding, scaffold stair tower, stair scaffold, scaffolds of florida">
  <meta charset="utf-8">
  <link rel="canonical" href="https://miamiscaffoldrental.com/frame-scaffolding" />
  <link rel="alternate" hreflang="es" href="https://es.miamiscaffoldrental.com/frame-scaffolding" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php require 'common_header.php' ?>
  <link rel='stylesheet' href='unitegallery/css/unite-gallery.css' type='text/css' />
  <meta property="og:title" content="<?php echo ___('Frame Scaffolding on Rent | At Best Price | Miami Scaffolding Rental') ?>">
  <meta property="og:site_name" content="Miami Scaffold Rental">
  <meta property="og:url" content="https://miamiscaffoldrental.com/frame-scaffolding"/>
  <meta property="og:description" content="<?php echo ___('Rent a scaffolding stair tower from the number 1 rental scaffolding provider that has achieved laurels in providing a comprehensive range of scaffolding rental.') ?>">
  <meta property="og:type" content="product">
  <meta property="og:image" content="https://miamiscaffoldrental.com/images/msr_logo_bw.png">
</head>

<body>

  <?php require 'components/header-menu-services.php' ?>

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/scaffold_head.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    </div>
  </section>
  <section class="ftco-section">
    <div class="container">
      <h1 class="mb-4"><?php echo ___('Frame Scaffolding') ?></h1>
      <div class="row mb-3">
        <div class="col-md-6 ftco-animate">
          <p><?php echo ___('Our scaffolding framing solutions eradicates problems that arise such as limited access to the areas or obstacles come across at the job site. There’s a wide variety of configurations and options available that saves on labor and time. It erects quickly and eradicates the needs for numerous loose fitting connections to be made. The Framing scaffolds are lighter, faster and stronger, and also an essential element of the construction industry that makes the life of workers easier. It is a valuable and life-saving structure. The scaffolding system makes the life easier for the construction firm or builder who builds low rise and high rise homes, helping you beat the deadlines of the work as it quickens the pace of construction.') ?></p>
        </div>
        <div class="col-md-6">
          <p><?php echo ___('We maintain a full line of scaffold equipment and accessories to meet all your access needs. Our extensive inventory includes:') ?></p>
          <ul>
          <?php echo ___('
            <li>Heavy Duty Scaffolds</li>
            <li>Light Duty Scaffolds</li>
            <li>Walk-Thru Arch Scaffolds</li>
            <li>Guardrails</li>
            <li>Outriggers</li>
            <li>Casters</li>
            <li>Aluminum Catwalks</li>
            <li>Wood Planks</li>
            <li>Ladders</li>
            <li>Stairways</li>
            ') ?>
          </ul>
        </div>
      </div>
    </div>
    <?php require 'service_form.php'; ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12 testimonial">
          <?php require 'gallery/frame.php' ?>
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