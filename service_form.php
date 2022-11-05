<section id="main-contact" class="hero-wrap bg-light">
      <div class="container py-5">
        <div class="row justify-content-center">
        <div class="col-12 col-md-4 heading-section text-center ftco-animate fadeInUp ftco-animated">
            <span class="subheading">HAVE A QUESTION?</span>
            <h2 class="mb-4">Contact Us</h2>
            <p>If you need more information, fill out the form. A team member will reach out to help you soon</p>
          </div>
          <div class="col-12 col-md-8">
            <div class="cold-flex">
                <form action="thank-you" method="post" class=" py-lg-2 contact-form" id="contact-miasfr">
                  <div class="row">
                    <div class="col-sm-4">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your name" name="fname" required>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="E-mail" name="email" required>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <input type="tel" class="form-control" placeholder="Phone" name="phone" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-3">
                    <textarea name="comment" id="" cols="30" rows="2" class="form-control" placeholder="Comments/Questions" required></textarea>
                  </div>
                  <div class="form-group d-flex justify-content-center">
                    <input type="submit" value="Send Message" class="btn btn-secondary py-3 px-5">
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </section>
<script src="https://www.google.com/recaptcha/api.js?render=6Lc_RcQcAAAAADggGqGrJ-kidbEoYQUQZbWPKToE"></script>
<script>
	$('#contact-miasfr').submit(function(event) {
		event.preventDefault();
		grecaptcha.ready(function() {
			grecaptcha.execute('6Lc_RcQcAAAAADggGqGrJ-kidbEoYQUQZbWPKToE', {
				action: 'contact_form'
			}).then(function(token) {
				$('#contact-miasfr').prepend(`<input type="hidden" name="token" value="${token}">`);
				$('#contact-miasfr').prepend(`<input type="hidden" name="action" value="contact_form">`);
				$('#contact-miasfr').unbind('submit').submit();
			})
		})
	})
</script>