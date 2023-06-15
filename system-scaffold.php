<?php
  // Translator loader
  require 'languages.php'
  ?>
<!DOCTYPE html>
<html lang="<?php echo $language ?>">

<head>
  <title><?php echo ___('System Scaffold on Rent | At Best Price | Miami Scaffolding Rental') ?></title>
  <meta name="description" content="<?php echo ___('Rent a scaffolding stair tower from the number 1 rental scaffolding provider that has achieved laurels in providing a comprehensive range of scaffolding rental.') ?>">
  <meta name="Keywords" content="scaffold rental, rental scaffolding, scaffold stair tower, stair scaffold, scaffolds of florida">
  <meta charset="utf-8">
  <link rel="canonical" href="https://miamiscaffoldrental.com/system-scaffold" />
  <link rel="alternate" hreflang="es" href="https://es.miamiscaffoldrental.com/system-scaffold" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php require 'common_header.php' ?>
  <link rel='stylesheet' href='unitegallery/css/unite-gallery.css' type='text/css' />
  <meta property="og:title" content="<?php echo ___('System Scaffold on Rent | At Best Price | Miami Scaffolding Rental') ?>">
  <meta property="og:site_name" content="Miami Scaffold Rental">
  <meta property="og:url" content="https://miamiscaffoldrental.com"/>
  <meta property="og:description" content="<?php echo ___('Rent a scaffolding stair tower from the number 1 rental scaffolding provider that has achieved laurels in providing a comprehensive range of scaffolding rental.') ?>">
  <meta property="og:type" content="product">
  <meta property="og:image" content="https://miamiscaffoldrental.com/images/msr_social.webp">
</head>

<body>

  <?php require 'components/header-menu-services.php' ?>

  <section class="hero-wrap hero-wrap-2" style="background-image: url('images/system_scaffolds_bg_2.webp');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    </div>
  </section>
  <section class="ftco-section">
    <div class="container">
      <h1 class="mb-4"><?php echo ___('System Scaffold') ?></h1>
      <div class="row mb-3 justify-content-center">
        <div class="col-md-6 ftco-animate">
          <p><?php echo ___('The system scaffolding is quick and easy to erect, and provides a superior working platform compared to traditional scaffolding. I also provides a better aesthetic finish.') ?></p>
          <p><?php echo ___('A system scaffolding structure is essentially a frame structure that has evolved from the general principles of tube and fitting scaffolding, but utilizes a specialized modular connection. The major difference between tube and fitting and system scaffolds is the connection between the uprights (or “standards”), the horizontal members (or “transoms and ledgers”), and the diagonal members (or “braces”).') ?></p>
        </div>
        <div class="col-md-6 ftco-animate">
          <p><?php echo ___('The connection between the various members normally consists a specially designed mouth piece at the ends of the horizontal and diagonal tube members and a rosette device at regular spacing up the standard, or other similar modular connection') ?></p>
          <p><?php echo ___('The main advantage of system scaffolds over traditional tube and fitting scaffolds is that the erection speed is greatly increased; it’s not unusual for a system scaffold structure to be put up in a quarter of the time of a similar size traditional tube and fitting scaffold structure.') ?></p>
        </div>
      </div>
    </div>
    <?php require 'service_form.php'; ?>
    <div class="container">
      <div class="row">
        <div class="col testimonial">
          <?php require 'gallery/system.php' ?>
        </div>
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