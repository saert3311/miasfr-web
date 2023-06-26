<section id="main-contact" class="hero-wrap bg-light">
      <div class="container py-5">
        <div class="row justify-content-center">
        <div class="col-12 col-md-4 heading-section  fadeInUp d">
            <span class="subheading mb-0"><?php echo ___('HAVE A QUESTION?') ?></span>
            <span class="subheading"><?php echo ___('NEED AN ESTIMATE?') ?></span>
            <p class="mb-2 heading-title"><?php echo ___('Contact Us') ?></p>
            <p><?php echo ___('If you need more information, fill out the form. A team member will reach out to help you soon') ?></p>
          </div>
          <div class="col-12 col-md-8">
            <div class="cold-flex">
                <form action="thank-you" method="post" class="contact-form" id="contact-miasfr">
                <div class="cf-turnstile" data-sitekey="0x4AAAAAAAGk3s1j51WOybkd"></div>
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="<?php echo ___('Your name') ?>" name="fname" required>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="E-mail" name="email" required>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <input type="tel" class="form-control" placeholder="<?php echo ___('Phone') ?>" name="phone" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-3">
                    <textarea name="comment" id="" cols="30" rows="2" class="form-control" placeholder="<?php echo ___('Comments/Questions') ?>" required></textarea>
                  </div>
                  <div class="form-group d-flex justify-content-end mb-0">
                    <input type="submit" value="<?php echo ___('Send Message') ?>" class="btn btn-secondary py-3 px-5">
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>