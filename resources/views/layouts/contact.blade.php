<section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Send Me a Message 
                    </h5>
                  </div>
                  <div>
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                      {{-- <form action="{{ route('contact.submit') }}" method="POST" role="form" class="php-email-form"> --}}
                        @csrf 
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="{{ old('name') }}" required>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" required>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" value="{{ old('subject') }}" required>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required>{{ old('message') }}</textarea>
                          </div>
                        </div>
                        <div class="col-md-12 text-center my-3">
                          <div class="loading">Loading</div>
                          <div class="error-message"></div>
                          <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="col-md-12 text-center">
                          <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Get in Touch
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      Looking to hire a talented and skilled software engineer and web developer? Look no further! With my extensive experience and expertise in the field, I am the ideal candidate for your project. My proficiency in programming languages, frameworks, and tools ensures that I can tackle any project with ease and efficiency. I am a detail-oriented professional who excels at problem-solving
                      and is dedicated to staying up-to-date with the latest industry trends. By hiring me, you can expect top-notch quality, timely delivery, and a seamless collaboration experience. 
                      Contact me today to discuss how I can contribute to your success.
                    </p>
                    <ul class="list-ico">
                      <li><span class="bi bi-geo-alt"></span>Logpom-Rois mages. Cameroon, Littoral, Douala</li>
                      <li><span class="bi bi-phone"></span> (+237) 697-45-81-30</li>
                      <li><span class="bi bi-envelope"></span> <a href="">kemoaudrey17@gmail.com</a></li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href=""><span class="ico-circle"><i class="bi bi-whatsapp"></i></span></a></li>
                      {{-- <li><a href=""><span class="ico-circle"><i class="bi bi-Email"></i></span></a></li> --}}
                      {{-- <li><a href=""><span class="ico-circle"><i class="bi bi-twitter"></i></span></a></li> --}}
                      <li><a href=""><span class="ico-circle"><i class="bi bi-linkedin"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>