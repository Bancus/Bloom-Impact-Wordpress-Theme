  <?php get_header();
  		//Template Name:Contact
   ?>
    <!-- Header Start -->
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <!-- header Nav Start -->
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="bloom-vav navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                  <img src="<?php bloginfo('template_url'); ?>/img/logo.png" class="small-sz" alt="Bloom Impact Logo">
                </a>
              </div>
                <div class="collapse navbar-collapse bloom-nav-b" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Home</a></li>
                    <li><a href="/#intro">How it works</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="news">News</a></li>
                    <li><a href="/#partner"><button class="btn btn-default btn-bloom">Partner with us</button></a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>
      </div>
    </header><!-- header close -->
    <!-- ..................................Content................................................-->
 <!-- Slider Start -->
        <section id="contact-b">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="block">
                  <h1>Drop Us A Note</h1>
                  <p>Need Help? Want a partner. Don't hesitate to contact us.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- contact form start -->
        <section id="contact-form">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="block">
                  <form>
                    <div class="form-group-2">
                      <textarea class="form-control" rows="3" placeholder="Your Message"></textarea>
                    </div>
                    <button class="btn btn-default" type="submit">Send Message</button>
                  </form>
                </div>
                  </form>
                </div>
              </div>
              <div class="col-md-6 col-sm-12">
                <div id="contact-box" class="row">
              <div class="col-sm-8 col-sm-offset-2 col-xs-12">
                <div class="block">
                  <h2>Stop By For A visit</h2>
                  <ul class="address-block">
                    <li>
                      <i class="fa fa-map-marker"></i>Weija, Accra Ghana
                    </li>
                    <li>
                      <i class="fa fa-envelope-o"></i>Email: support@bloomimpact.com
                    </li>
                    <li>
                      <i class="fa fa-phone"></i>Phone: +233 55 636 5845
                    </li>
                  </ul>

                  <ul class="social-icons">
                    <li>
                      <a href="https://gh.linkedin.com/company/bloomimpact" target="_blank"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                      <a href="https://angel.co/bancus" target="_blank"><i class="fa fa-angellist"></i></a>
                    </li>
                    <li>
                      <a href="https://twitter.com/bloomimpact?lang=en" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="https://www.facebook.com/BloomImpactPBC/" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
              </div>
            </div>
            
          </div>
        </section>
    <!-- ..................................End Content................................................-->
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
    </body>
</html>