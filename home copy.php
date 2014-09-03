<?php include("./myhead.inc"); ?>






  <!-- Login Modal -->
<div aria-hidden='true' aria-labelledby='loginModalLabel' class='modal fade' id='loginModal' role='dialog' tabindex='-1'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button aria-hidden='true' class='close' data-dismiss='modal' type='button'>×</button>
        <h4 class='modal-title'>Login example</h4>
      </div>
      <div class='modal-body'>
        <form action='#' role='form'>
          <div class='row'>
            <div class='col-md-6'>
              <label class='control-label' for=''>Username</label>
              <input class='form-control' placeholder='your username' type='text'>
            </div>
            <div class='col-md-6'>
              <label class='control-label' for=''>Password</label>
              <input class='form-control' placeholder='your password' type='text'>
            </div>
          </div>
        </form>
      </div>
      <div class='modal-footer'>
        <button class='btn btn-default' data-dismiss='modal' type='button'>Close</button>
        <button class='btn btn-primary' type='button'>Log In</button>
      </div>
    </div>
  </div>
</div>

  <!-- Contact Modal -->
<div aria-hidden='true' aria-labelledby='contactModalLabel' class='modal fade' id='contactModal' role='dialog' tabindex='-1'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button aria-hidden='true' class='close' data-dismiss='modal' type='button'>×</button>
        <h4 class='modal-title'>Contact Us Form</h4>
      </div>
      <div class='modal-body'>
        <form action='#' role='form'>
          <div class='form-group'>
            <div class='row'>
              <div class='col-md-6'>
                <label class='control-label' for=''>Your Name</label>
                <input class='form-control' placeholder='your username' type='text'>
              </div>
              <div class='col-md-6'>
                <label class='control-label' for=''>Your Email</label>
                <input class='form-control' placeholder='your password' type='text'>
              </div>
            </div>
          </div>
          <div class='form-group'>
            <div class='row'>
              <div class='col-md-12'>
                <label class='control-label' for=''>Your Message</label>
                <textarea class='form-control' name='' rows='4'></textarea>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class='modal-footer'>
        <button class='btn btn-default' data-dismiss='modal' type='button'>Cancel</button>
        <button class='btn btn-primary' type='button'>Send Message</button>
      </div>
    </div>
  </div>
</div>

<div class='noise-wrapper'>
  <div class='header-main'>
    <div class='container'>
  <nav class='navbar navbar-default' role='navigation'>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class='navbar-header'>
      <button class='navbar-toggle' data-target='.navbar-ex1-collapse' data-toggle='collapse' type='button'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a class='current navbar-brand' href='index.html'>
        <img alt=''  src='<?php echo $config->urls->templates?>assets/images/logo-small-top.png'>
      </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class='collapse navbar-collapse navbar-ex1-collapse'>
      <a class='btn btn-default navbar-btn navbar-right' data-toggle='modal' href='#loginModal'>
        Sign In
        <i class='icon-signin'></i>
      </a>
      <ul class='nav navbar-nav navbar-right'>
        <li class='current active'>
          <a class='current' href='index.html'>Home</a>
        </li>
        <li>
          <a href='about.html'>About Us</a>
        </li>
        <li>
          <a href='portfolio.html'>Portfolio</a>
        </li>
        <li>
          <a href='loop.html'>Blog</a>
        </li>
        <li>
          <a data-toggle='modal' href='#contactModal'>Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>
</div>

  </div>
  <div class='separator-shadow-bottom'>
    <img alt='' src='<?php echo $config->urls->templates?>assets/images/shadow-separator-wide-bottom.png'>
  </div>
  <section class='leaderboard leaderboard-style-one'>
    <div class='container'>
      <h1 class='animated fadeInDown'>Hospital Veterinario Benipeixcar</h1>
      <h2 class='animated fadeInDown'>Ofrecemos nuestros servicio a profesionales del sector y dueños de mascotas </h2>
      <div class='relative-w'>
        <div class='loupe loupe-left animated rollIn'>
          <img alt='' src='http://placehold.it/700x500'>
        </div>
        <div class='loupe loupe-right animated fadeInRightBig'>
          <img alt='' src='http://placehold.it/700x500'>
        </div>
        <div class='frame-browser animated bounceInUp'>
          <div class='frame-buttons'>
            <div class='frame-button-close'></div>
            <div class='frame-button-max'></div>
            <div class='frame-button-min'></div>
          </div>
          <div class='frame-browser-image'>
            <img alt='' src='http://placehold.it/700x500'>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class='separator-shadow-top above-screenshot-shadow'>
    <img alt='' src='<?php echo $config->urls->templates?>assets/images/shadow-separator-wide-top.png'>
  </div>
</div>
<div class='area-content'>
  <div class='container'>
    <div class='separator-shadow-top sub-screenshot-shadow'>
      <img alt='' src='<?php echo $config->urls->templates?>assets/images/shadow-separator-wide-top.png'>
    </div>
    <div class='iconed-features lift-on-hover style-1'>
      <div class='row'>
        <div class='col-md-4'>
          <div class='iconed-feature' href='#'>
            <div class='feature-icon-w'>
              <i class='icon-eye-open'></i>
            </div>
            <h4>Responsive Layout</h4>
            <p>Works perfectly on everything from desktops to mobile devices.</p>
            <div class='btn-show-on-parent-hover'>
              <a class='read-more-link' href='#'>Read More</a>
            </div>
          </div>
        </div>
        <div class='col-md-4'>
          <div class='iconed-feature' href='#'>
            <div class='feature-icon-w'>
              <i class='icon-cog'></i>
            </div>
            <h4>Unlimited Colors</h4>
            <p>Theme comes with multiple predefined colors.</p>
            <div class='btn-show-on-parent-hover'>
              <a class='read-more-link' href='#'>Read More</a>
            </div>
          </div>
        </div>
        <div class='col-md-4'>
          <div class='iconed-feature' href='#'>
            <div class='feature-icon-w'>
              <i class='icon-leaf'></i>
            </div>
            <h4>Modern Look</h4>
            <p>Clean and simple design is what people want nowadays.</p>
            <div class='btn-show-on-parent-hover'>
              <a class='read-more-link' href='#'>Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='separator-shadow-bottom bottom-margin'>
      <img alt='' src='<?php echo $config->urls->templates?>assets/images/shadow-separator-wide-bottom.png'>
    </div>
    <div class='row bottom-margin'>
      <div class='col-md-5'>
        <h2 class='header-lined'>Wrappers for images</h2>
        <ul class='list-checkmarked text-bigger'>
          <li>This theme comes with a set of amazin wrappers for your images. If you are a web designer and want to showcase your websites - there is nothing better on a market than theme Earth.</li>
          <li>Simply wrap the image with couple lines of html and you will have a gorgeous looking browser frame and a magnifiyng glass for showcasing your projects details.</li>
        </ul>
        <!-- %a.btn.btn-default{:href => "#"} Show me Example -->
      </div>
      <div class='col-md-1'></div>
      <div class='col-md-6'>
        <div class='relative-w'>
          <div class='loupe loupe-left loupe-large animated-when-visible' data-animation-type='fadeInLeft'>
            <img alt='' src='http://placehold.it/800x600'>
          </div>
          <div class='frame-browser animated-when-visible' data-animation-type='bounceInRight'>
            <div class='frame-buttons'>
              <div class='frame-button-close'></div>
              <div class='frame-button-max'></div>
              <div class='frame-button-min'></div>
            </div>
            <div class='frame-browser-image'>
              <img alt='' src='http://placehold.it/800x600'>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='separator-shadow-top bottom-margin'>
      <img alt='' src='<?php echo $config->urls->templates?>assets/images/shadow-separator-wide-top.png'>
    </div>
    <div class='slogan text-center'>
      <h2 class='header-highlighted'>Great for Blog, Portfolio, Company Website and more</h2>
      <p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</p>
      <div class='slogan-buttons'>
        <a class='btn btn-primary btn-cta btn-lg animated swing' href='#'>
          Purchase Theme Now
        </a>
      </div>
    </div>
    <div class='separator-shadow-bottom bottom-margin'>
      <img alt='' src='<?php echo $config->urls->templates?>assets/images/shadow-separator-wide-bottom.png'>
    </div>
    <div class='pull-right carousel-top-controls'>
      <a data-slide='prev' href='#carousel-works'>
        <span class='icon-angle-left'></span>
      </a>
      <a data-slide='next' href='#carousel-works'>
        <span class='icon-angle-right'></span>
      </a>
    </div>
    <h2 class='header-lined'>Recent Works Slider</h2>
    <div class='carousel slide carousel-with-animated-content' id='carousel-works'>
      <!-- Wrapper for slides -->
      <div class='carousel-inner'>
        <div class='item active'>
          <div class='row'>
            <div class='col-md-4'>
              <div class='portfolio-item portfolio-style-3 animated-when-visible' data-animation-type='flipInY'>
                <div class='frame-browser'>
                  <figure>
                    <img alt='' src='http://placehold.it/800x600'>
                    <figcaption>
                      <h5 class='fp-title'>
                        <a href='#'>Color Picker</a>
                      </h5>
                      <div class='fp-content'>Web Development</div>
                      <div class='fp-buttons'>
                        <a class='btn btn-default btn-sm fp-details-btn' href='portfolio-single.html'>
                          <i class='icon-file-text-alt'></i>
                          View Details
                        </a>
                        <a class='btn btn-default btn-sm fp-lightbox-btn prettyphoto' data-rel='prettyPhoto' href='http://placehold.it/700x500'>
                          <i class='icon-zoom-in'></i>
                          View Bigger
                        </a>
                      </div>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
            <div class='col-md-4'>
              <div class='portfolio-item portfolio-style-3 animated-when-visible delay-animation-one' data-animation-type='flipInY'>
                <div class='frame-browser'>
                  <figure>
                    <img alt='' src='http://placehold.it/800x600'>
                    <figcaption>
                      <h5 class='fp-title'>
                        <a href='#'>Color Picker</a>
                      </h5>
                      <div class='fp-content'>Web Development</div>
                      <div class='fp-buttons'>
                        <a class='btn btn-default btn-sm fp-details-btn' href='portfolio-single.html'>
                          <i class='icon-file-text-alt'></i>
                          View Details
                        </a>
                        <a class='btn btn-default btn-sm fp-lightbox-btn prettyphoto' data-rel='prettyPhoto' href='http://placehold.it/700x500'>
                          <i class='icon-zoom-in'></i>
                          View Bigger
                        </a>
                      </div>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
            <div class='col-md-4'>
              <div class='portfolio-item portfolio-style-3 animated-when-visible delay-animation-two' data-animation-type='flipInY'>
                <div class='frame-browser'>
                  <figure>
                    <img alt='' src='http://placehold.it/800x600'>
                    <figcaption>
                      <h5 class='fp-title'>
                        <a href='#'>Color Picker</a>
                      </h5>
                      <div class='fp-content'>Web Development</div>
                      <div class='fp-buttons'>
                        <a class='btn btn-default btn-sm fp-details-btn' href='portfolio-single.html'>
                          <i class='icon-file-text-alt'></i>
                          View Details
                        </a>
                        <a class='btn btn-default btn-sm fp-lightbox-btn prettyphoto' data-rel='prettyPhoto' href='http://placehold.it/700x500'>
                          <i class='icon-zoom-in'></i>
                          View Bigger
                        </a>
                      </div>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class='item'>
          <div class='row'>
            <div class='col-md-4'>
              <div class='portfolio-item portfolio-style-3 animated-when-visible' data-animation-type='flipInY'>
                <div class='frame-browser'>
                  <figure>
                    <img alt='' src='http://placehold.it/800x600'>
                    <figcaption>
                      <h5 class='fp-title'>
                        <a href='#'>Color Picker</a>
                      </h5>
                      <div class='fp-content'>Web Development</div>
                      <div class='fp-buttons'>
                        <a class='btn btn-default btn-sm fp-details-btn' href='portfolio-single.html'>
                          <i class='icon-file-text-alt'></i>
                          View Details
                        </a>
                        <a class='btn btn-default btn-sm fp-lightbox-btn prettyphoto' data-rel='prettyPhoto' href='http://placehold.it/700x500'>
                          <i class='icon-zoom-in'></i>
                          View Bigger
                        </a>
                      </div>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
            <div class='col-md-4'>
              <div class='portfolio-item portfolio-style-3 animated-when-visible delay-animation-one' data-animation-type='flipInY'>
                <div class='frame-browser'>
                  <figure>
                    <img alt='' src='http://placehold.it/800x600'>
                    <figcaption>
                      <h5 class='fp-title'>
                        <a href='#'>Color Picker</a>
                      </h5>
                      <div class='fp-content'>Web Development</div>
                      <div class='fp-buttons'>
                        <a class='btn btn-default btn-sm fp-details-btn' href='portfolio-single.html'>
                          <i class='icon-file-text-alt'></i>
                          View Details
                        </a>
                        <a class='btn btn-default btn-sm fp-lightbox-btn prettyphoto' data-rel='prettyPhoto' href='http://placehold.it/700x500'>
                          <i class='icon-zoom-in'></i>
                          View Bigger
                        </a>
                      </div>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
            <div class='col-md-4'>
              <div class='portfolio-item portfolio-style-3 animated-when-visible delay-animation-two' data-animation-type='flipInY'>
                <div class='frame-browser'>
                  <figure>
                    <img alt='' src='http://placehold.it/800x600'>
                    <figcaption>
                      <h5 class='fp-title'>
                        <a href='#'>Color Picker</a>
                      </h5>
                      <div class='fp-content'>Web Development</div>
                      <div class='fp-buttons'>
                        <a class='btn btn-default btn-sm fp-details-btn' href='portfolio-single.html'>
                          <i class='icon-file-text-alt'></i>
                          View Details
                        </a>
                        <a class='btn btn-default btn-sm fp-lightbox-btn prettyphoto' data-rel='prettyPhoto' href='http://placehold.it/700x500'>
                          <i class='icon-zoom-in'></i>
                          View Bigger
                        </a>
                      </div>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='block-lined-over'>
      <a class='continue-reading-link pull-right' href='portfolio.html'>
        <i class='icon-th'></i>
        View All
      </a>
    </div>
    <h2 class='header-lined has-sub-header text-center'>Our Clients</h2>
    <h4 class='sub-lined-header less-margin text-center'>Our clients love us! You are welcome to become one of them.</h4>
    <div class='clients'>
      <div class='row bottom-margin'>
        <div class='col-md-2'>
          <img alt='' class='animated-when-visible' data-animation-type='rotateInUpLeft' src='http://placehold.it/800x400'>
        </div>
        <div class='col-md-2'>
          <img alt='' class='animated-when-visible delay-animation-one' data-animation-type='rotateInUpLeft' src='http://placehold.it/800x400'>
        </div>
        <div class='col-md-2'>
          <img alt='' class='animated-when-visible delay-animation-two' data-animation-type='rotateInUpLeft' src='http://placehold.it/800x400'>
        </div>
        <div class='col-md-2'>
          <img alt='' class='animated-when-visible delay-animation-two' data-animation-type='rotateInUpRight' src='http://placehold.it/800x400'>
        </div>
        <div class='col-md-2'>
          <img alt='' class='animated-when-visible delay-animation-one' data-animation-type='rotateInUpRight' src='http://placehold.it/800x400'>
        </div>
        <div class='col-md-2'>
          <img alt='' class='animated-when-visible' data-animation-type='rotateInUpRight' src='http://placehold.it/800x400'>
        </div>
      </div>
    </div>
  </div>
  <div class='highlight-content bottom-margin light'>
    <div class='carousel slide' id='carousel-testimonials'>
      <!-- Indicators -->
      <ol class='carousel-indicators'>
        <li class='active' data-slide-to='0' data-target='#carousel-testimonials'></li>
        <li data-slide-to='1' data-target='#carousel-testimonials'></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class='carousel-inner'>
        <div class='item active'>
          <div class='container'>
            <div class='testimonial'>
              <div class='testimonial-icon'>
                <i class='icon-quote-left'></i>
              </div>
              <p>"The guys at Parallax did a really great job of working with the company brand, and the final execution was exactly how I imagined it. I just can’t wait to show everyone our new website!"</p>
              <div class='testimonial-by'>Thomas Mayers - Yorkshire Foundation</div>
            </div>
          </div>
        </div>
        <div class='item'>
          <div class='container'>
            <div class='testimonial'>
              <div class='testimonial-icon'>
                <i class='icon-quote-left'></i>
              </div>
              <p>"The guys at Parallax did a really great job of working with the company brand, and the final execution was exactly how I imagined it. I just can’t wait to show everyone our new website!"</p>
              <div class='testimonial-by'>Thomas Mayers - Yorkshire Foundation</div>
            </div>
          </div>
        </div>
      </div>
      <!-- Controls -->
      <a class='left carousel-control' data-slide='prev' href='#carousel-testimonials'>
        <span class='icon-prev'></span>
      </a>
      <a class='right carousel-control' data-slide='next' href='#carousel-testimonials'>
        <span class='icon-next'></span>
      </a>
    </div>
  </div>
  <div class='container'>
    <h2 class='header-lined has-sub-header text-center'>More Features</h2>
    <h4 class='sub-lined-header text-center'>Another type of layout for your company features with icons located on the left of the description.</h4>
    <div class='iconed-features style-2'>
      <div class='row'>
        <div class='col-md-4'>
          <div class='iconed-feature' href='#'>
            <div class='row'>
              <div class='col-md-4'>
                <div class='feature-icon-w animated-when-visible' data-animation-type='rollIn'>
                  <i class='icon-comments'></i>
                </div>
              </div>
              <div class='col-md-8'>
                <h4>Customer Support</h4>
                <p>Our app enables you to manage all your work – from the most complex projects to everyday tasks.</p>
              </div>
            </div>
          </div>
        </div>
        <div class='col-md-4'>
          <div class='iconed-feature' href='#'>
            <div class='row'>
              <div class='col-md-4'>
                <div class='feature-icon-w animated-when-visible' data-animation-type='rollIn'>
                  <i class='icon-exchange'></i>
                </div>
              </div>
              <div class='col-md-8'>
                <h4>Sliders Included</h4>
                <p>Our app enables you to manage all your work – from the most complex projects to everyday tasks.</p>
              </div>
            </div>
          </div>
        </div>
        <div class='col-md-4'>
          <div class='iconed-feature' href='#'>
            <div class='row'>
              <div class='col-md-4'>
                <div class='feature-icon-w animated-when-visible' data-animation-type='rollIn'>
                  <i class='icon-archive'></i>
                </div>
              </div>
              <div class='col-md-8'>
                <h4>Awesome Icons</h4>
                <p>Our app enables you to manage all your work – from the most complex projects to everyday tasks.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='iconed-features style-2'>
      <div class='row'>
        <div class='col-md-4'>
          <div class='iconed-feature' href='#'>
            <div class='row'>
              <div class='col-md-4'>
                <div class='feature-icon-w animated-when-visible' data-animation-type='rollIn'>
                  <i class='icon-desktop'></i>
                </div>
              </div>
              <div class='col-md-8'>
                <h4>Responsive</h4>
                <p>Our app enables you to manage all your work – from the most complex projects to everyday tasks.</p>
              </div>
            </div>
          </div>
        </div>
        <div class='col-md-4'>
          <div class='iconed-feature' href='#'>
            <div class='row'>
              <div class='col-md-4'>
                <div class='feature-icon-w animated-when-visible' data-animation-type='rollIn'>
                  <i class='icon-eye-open'></i>
                </div>
              </div>
              <div class='col-md-8'>
                <h4>Retina Ready</h4>
                <p>Our app enables you to manage all your work – from the most complex projects to everyday tasks.</p>
              </div>
            </div>
          </div>
        </div>
        <div class='col-md-4'>
          <div class='iconed-feature' href='#'>
            <div class='row'>
              <div class='col-md-4'>
                <div class='feature-icon-w animated-when-visible' data-animation-type='rollIn'>
                  <i class='icon-font'></i>
                </div>
              </div>
              <div class='col-md-8'>
                <h4>Google Fonts</h4>
                <p>Our app enables you to manage all your work – from the most complex projects to everyday tasks.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='pull-right carousel-top-controls'>
      <a data-slide='prev' href='#carousel-posts'>
        <span class='icon-angle-left'></span>
      </a>
      <a data-slide='next' href='#carousel-posts'>
        <span class='icon-angle-right'></span>
      </a>
    </div>
    <h2 class='header-lined'>Recent Posts Slider</h2>
    <div class='carousel slide' id='carousel-posts'>
      <!-- Wrapper for slides -->
      <div class='carousel-inner'>
        <div class='item active'>
          <div class='row bottom-margin'>
            <div class='col-md-4'>
              <div class='blog-teaser animated-when-visible' data-animation-type='flipInX'>
                <img alt='' src='http://placehold.it/800x600'>
                <h3>
                  <a href='#'>How to build a theme</a>
                </h3>
                <div class='blog-teaser-meta'>
                  <span class='meta-item'>
                    <i class='icon-time'></i>
                    17 Nov, 2013
                  </span>
                  <span class='meta-item'>
                    <a href='#'>
                      <i class='icon-comments'></i>
                      24
                    </a>
                  </span>
                  <span class='meta-item'>
                    <a href='#'>
                      <i class='icon-heart'></i>
                      15
                    </a>
                  </span>
                </div>
                <p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate.</p>
                <a class='continue-reading-link' href='#'>Continue Reading</a>
              </div>
            </div>
            <div class='col-md-4'>
              <div class='blog-teaser animated-when-visible delay-animation-one' data-animation-type='flipInX'>
                <img alt='' src='http://placehold.it/800x600'>
                <h3>
                  <a href='#'>Why is Earth a better theme</a>
                </h3>
                <div class='blog-teaser-meta'>
                  <span class='meta-item'>
                    <i class='icon-time'></i>
                    17 Nov, 2013
                  </span>
                  <span class='meta-item'>
                    <a href='#'>
                      <i class='icon-comments'></i>
                      24
                    </a>
                  </span>
                  <span class='meta-item'>
                    <a href='#'>
                      <i class='icon-heart'></i>
                      15
                    </a>
                  </span>
                </div>
                <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables.</p>
                <a class='continue-reading-link' href='#'>Continue Reading</a>
              </div>
            </div>
            <div class='col-md-4'>
              <div class='blog-teaser animated-when-visible delay-animation-two' data-animation-type='flipInX'>
                <img alt='' src='http://placehold.it/800x600'>
                <h3>
                  <a href='#'>Free customer support</a>
                </h3>
                <div class='blog-teaser-meta'>
                  <span class='meta-item'>
                    <i class='icon-time'></i>
                    17 Nov, 2013
                  </span>
                  <span class='meta-item'>
                    <a href='#'>
                      <i class='icon-comments'></i>
                      24
                    </a>
                  </span>
                  <span class='meta-item'>
                    <a href='#'>
                      <i class='icon-heart'></i>
                      15
                    </a>
                  </span>
                </div>
                <p>Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate customer.</p>
                <a class='continue-reading-link' href='#'>Continue Reading</a>
              </div>
            </div>
          </div>
        </div>
        <div class='item'>
          <div class='row bottom-margin'>
            <div class='col-md-4'>
              <div class='blog-teaser animated-when-visible' data-animation-type='flipInX'>
                <img alt='' src='http://placehold.it/800x600'>
                <h3>
                  <a href='#'>How to build a theme</a>
                </h3>
                <div class='blog-teaser-meta'>
                  <span class='meta-item'>
                    <i class='icon-time'></i>
                    17 Nov, 2013
                  </span>
                  <span class='meta-item'>
                    <a href='#'>
                      <i class='icon-comments'></i>
                      24
                    </a>
                  </span>
                  <span class='meta-item'>
                    <a href='#'>
                      <i class='icon-heart'></i>
                      15
                    </a>
                  </span>
                </div>
                <p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate.</p>
                <a class='continue-reading-link' href='#'>Continue Reading</a>
              </div>
            </div>
            <div class='col-md-4'>
              <div class='blog-teaser animated-when-visible delay-animation-one' data-animation-type='flipInX'>
                <img alt='' src='http://placehold.it/800x600'>
                <h3>
                  <a href='#'>Why is Earth a better theme</a>
                </h3>
                <div class='blog-teaser-meta'>
                  <span class='meta-item'>
                    <i class='icon-time'></i>
                    17 Nov, 2013
                  </span>
                  <span class='meta-item'>
                    <a href='#'>
                      <i class='icon-comments'></i>
                      24
                    </a>
                  </span>
                  <span class='meta-item'>
                    <a href='#'>
                      <i class='icon-heart'></i>
                      15
                    </a>
                  </span>
                </div>
                <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables.</p>
                <a class='continue-reading-link' href='#'>Continue Reading</a>
              </div>
            </div>
            <div class='col-md-4'>
              <div class='blog-teaser animated-when-visible delay-animation-two' data-animation-type='flipInX'>
                <img alt='' src='http://placehold.it/800x600'>
                <h3>
                  <a href='#'>Free customer support</a>
                </h3>
                <div class='blog-teaser-meta'>
                  <span class='meta-item'>
                    <i class='icon-time'></i>
                    17 Nov, 2013
                  </span>
                  <span class='meta-item'>
                    <a href='#'>
                      <i class='icon-comments'></i>
                      24
                    </a>
                  </span>
                  <span class='meta-item'>
                    <a href='#'>
                      <i class='icon-heart'></i>
                      15
                    </a>
                  </span>
                </div>
                <p>Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate customer.</p>
                <a class='continue-reading-link' href='#'>Continue Reading</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class='highlight-content highlighted-image bottom-margin text-center cta-box light'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-2'></div>
        <div class='col-md-8'>
          <h1>Highlighted Sections</h1>
          <p>Great for attacting user attention, they come in different colors and you can set a custom background image for it.</p>
          <a class='btn btn-clean-light btn-lg animated-when-visible' data-animation-type='wobble' href='#'>Purchase Theme Now</a>
        </div>
      </div>
    </div>
  </div>
  <div class='container'>
    <h2 class='header-lined has-sub-header text-center'>Meet the "Dream Team"</h2>
    <h4 class='sub-lined-header text-center'>We are a small team of designers and developers who help brands with big ideas.</h4>
    <div class='row bottom-margin'>
      <div class='col-md-3'>
        <div class='team-member animated-when-visible' data-animation-type='bounceInUp'>
          <div class='member-avatar'>
            <img alt='' src='http://placehold.it/500x500'>
          </div>
          <h3>Lionel Messi</h3>
          <h4>Goal Machine</h4>
          <p>Messi started the season by lifting the Spanish Supercup with Barcelona, scoring three goals and providing two assists.</p>
          <div class='member-social'>
            <a href='#'>
              <i class='icon-facebook'></i>
            </a>
            <a href='#'>
              <i class='icon-twitter'></i>
            </a>
            <a href='#'>
              <i class='icon-linkedin'></i>
            </a>
            <a href='#'>
              <i class='icon-envelope'></i>
            </a>
          </div>
        </div>
      </div>
      <div class='col-md-3'>
        <div class='team-member animated-when-visible delay-animation-one' data-animation-type='bounceInUp'>
          <div class='member-avatar'>
            <img alt='' src='http://placehold.it/500x500'>
          </div>
          <h3>David Villa</h3>
          <h4>Perfect Finisher</h4>
          <p>Messi started the season by lifting the Spanish Supercup with Barcelona, scoring three goals and providing two assists.</p>
          <div class='member-social'>
            <a href='#'>
              <i class='icon-facebook'></i>
            </a>
            <a href='#'>
              <i class='icon-twitter'></i>
            </a>
            <a href='#'>
              <i class='icon-linkedin'></i>
            </a>
            <a href='#'>
              <i class='icon-envelope'></i>
            </a>
          </div>
        </div>
      </div>
      <div class='col-md-3'>
        <div class='team-member animated-when-visible delay-animation-two' data-animation-type='bounceInUp'>
          <div class='member-avatar'>
            <img alt='' src='http://placehold.it/500x500'>
          </div>
          <h3>Andres Iniesta</h3>
          <h4>Magician</h4>
          <p>Messi started the season by lifting the Spanish Supercup with Barcelona, scoring three goals and providing two assists.</p>
          <div class='member-social'>
            <a href='#'>
              <i class='icon-facebook'></i>
            </a>
            <a href='#'>
              <i class='icon-twitter'></i>
            </a>
            <a href='#'>
              <i class='icon-linkedin'></i>
            </a>
            <a href='#'>
              <i class='icon-envelope'></i>
            </a>
          </div>
        </div>
      </div>
      <div class='col-md-3'>
        <div class='team-member animated-when-visible delay-animation-three' data-animation-type='bounceInUp'>
          <div class='member-avatar'>
            <img alt='' src='http://placehold.it/500x500'>
          </div>
          <h3>Xavi Hernandez</h3>
          <h4>Another Magician</h4>
          <p>Messi started the season by lifting the Spanish Supercup with Barcelona, scoring three goals and providing two assists.</p>
          <div class='member-social'>
            <a href='#'>
              <i class='icon-facebook'></i>
            </a>
            <a href='#'>
              <i class='icon-twitter'></i>
            </a>
            <a href='#'>
              <i class='icon-linkedin'></i>
            </a>
            <a href='#'>
              <i class='icon-envelope'></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class='row bottom-margin'>
      <div class='col-md-7'>
        <h2 class='header-lined'>Tabs</h2>
        <ul class='nav nav-tabs'>
          <li class='active'>
            <a data-toggle='tab' href='#home'>
              <i class='icon-eye-open'></i>
              Retina Ready
            </a>
          </li>
          <li>
            <a data-toggle='tab' href='#profile'>
              <i class='icon-desktop'></i>
              Responsive Design
            </a>
          </li>
          <li class='visible-lg'>
            <a data-toggle='tab' href='#messages'>
              <i class='icon-picture'></i>
              Portfolio Ready
            </a>
          </li>
        </ul>
        <div class='tab-content'>
          <div class='tab-pane active' id='home'>
            <h4 class='header-lined less-margin'>Attention to details</h4>
            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
          </div>
          <div class='tab-pane' id='profile'>
            <h4>Customer Support</h4>
            <p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables. Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing.</p>
          </div>
          <div class='tab-pane' id='messages'>
            <h4>Responsive Design</h4>
            <p>Collaboratively administrate turnkey channels whereas virtual e-tailers. Objectively seize scalable metrics whereas proactive e-services. Seamlessly empower fully researched growth strategies and interoperable internal or "organic" sources. Credibly innovate granular internal or "organic" sources whereas high standards in web-readiness. Energistically scale future-proof core competencies vis-a-vis impactful experiences. Dramatically synthesize integrated schemas with optimal networks.</p>
          </div>
        </div>
      </div>
      <div class='col-md-5'>
        <h2 class='header-lined'>Accordions</h2>
        <div class='panel-group accordion-w' id='accordion'>
          <div class='panel panel-default'>
            <div class='panel-heading'>
              <h4 class='panel-title'>
                <a class='accordion-toggle' data-parent='#accordion' data-toggle='collapse' href='#collapseOne'>
                  Responsive and Retina Ready
                </a>
              </h4>
            </div>
            <div class='panel-collapse collapse in' id='collapseOne'>
              <div class='panel-body'>
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
              </div>
            </div>
          </div>
          <div class='panel panel-default'>
            <div class='panel-heading'>
              <h4 class='panel-title'>
                <a class='accordion-toggle' data-parent='#accordion' data-toggle='collapse' href='#collapseTwo'>
                  Great for your next project
                </a>
              </h4>
            </div>
            <div class='panel-collapse collapse' id='collapseTwo'>
              <div class='panel-body'>
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class='panel panel-default'>
            <div class='panel-heading'>
              <h4 class='panel-title'>
                <a class='accordion-toggle' data-parent='#accordion' data-toggle='collapse' href='#collapseThree'>
                  SEO Optimized for better rankings
                </a>
              </h4>
            </div>
            <div class='panel-collapse collapse' id='collapseThree'>
              <div class='panel-body'>
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <h2 class='header-lined has-sub-header text-center'>Our Skills</h2>
    <h4 class='sub-lined-header text-center'>We can do more than you might think, we are awesome and we can make you awewsome.</h4>
    <div class='row'>
      <div class='col-md-3'>
        <div class='skill'>
          <input class='dial' data-fgColor='#87ceeb' data-linecap='round' data-thickness='.2' type='text' value='90'>
          <h4>Web Design</h4>
        </div>
      </div>
      <div class='col-md-3'>
        <div class='skill'>
          <input class='dial' data-fgColor='#34bab3' data-linecap='round' data-thickness='.2' type='text' value='70'>
          <h4>Graphic Design</h4>
        </div>
      </div>
      <div class='col-md-3'>
        <div class='skill'>
          <input class='dial' data-fgColor='#e3ce9f' data-linecap='round' data-thickness='.2' type='text' value='85'>
          <h4>Photoshop</h4>
        </div>
      </div>
      <div class='col-md-3'>
        <div class='skill'>
          <input class='dial' data-fgColor='#d74681' data-linecap='round' data-thickness='.2' type='text' value='65'>
          <h4>SEO / Marketing</h4>
        </div>
      </div>
    </div>
  </div>
</div>




<?php include("./myfoot.inc");  ?>


