  <?php get_header();
  		//Template Name:Contact
   ?>
   <?php 
//If the form is submitted
if(isset($_POST['submitted'])) {

  //Check to see if the honeypot captcha field was filled in
  if(trim($_POST['checking']) !== '') {
    $captchaError = true;
  } else {
  
    //Check to make sure that the name field is not empty
    if(trim($_POST['contactName']) === '') {
      $nameError = 'You forgot to enter your name.';
      $hasError = true;
    } else {
      $name = trim($_POST['contactName']);
    }
    
    //Check to make sure sure that a valid email address is submitted
    if(trim($_POST['email']) === '')  {
      $emailError = 'You forgot to enter your email address.';
      $hasError = true;
    } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
      $emailError = 'You entered an invalid email address.';
      $hasError = true;
    } else {
      $email = trim($_POST['email']);
    }
      
    //Check to make sure comments were entered  
    if(trim($_POST['comments']) === '') {
      $commentError = 'You forgot to enter your comments.';
      $hasError = true;
    } else {
      if(function_exists('stripslashes')) {
        $comments = stripslashes(trim($_POST['comments']));
      } else {
        $comments = trim($_POST['comments']);
      }
    }
      
    //If there is no error, send the email
    if(!isset($hasError)) {

      $emailTo = 'support@bloomimpact.net';
      $subject = 'Contact Form Submission from '.$name;
      $sendCopy = trim($_POST['sendCopy']);
      $body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
      $headers = 'From: Bloomimpact.net <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
      
      mail($emailTo, $subject, $body, $headers);

      if($sendCopy == true) {
        $subject = 'You emailed Your Name';
        $headers = 'From: Your Name <noreply@somedomain.com>';
        mail($email, $subject, $body, $headers);
      }

      $emailSent = true;

    }
  }
} ?>
    <!-- Header Start -->
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 fix-tab">
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
                <a class="navbar-brand" href="/">
                  <img src="<?php bloginfo('template_url'); ?>/img/logo.png" class="small-sz" alt="Bloom Impact Logo">
                </a>
              </div>
                <div class="collapse navbar-collapse bloom-nav-b" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Home</a></li>
                    <li><a href="/#intro">How it works</a></li>
                    <li><a href="index.php/about">About</a></li>
                    <li><a href="index.php/contact">Contact</a></li>
                    <li><a href="index.php/news">News</a></li>
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
                  <h3>Drop Us A Note</h3>
                  <p>Need Help? Want to partner. Don't hesitate to contact us.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- contact form start -->
        <section id="contact-form">
          <div class="container">
            <div class="row">
<?php if(isset($emailSent) && $emailSent == true) { ?>
  <div class="alert alert-success"><strong>Thanks, <?=$name;?></strong> Your email was successfully sent. We will be in touch soon.</div>
<?php } else { ?>

  <?php if (have_posts()) : ?>
  
  <?php while (have_posts()) : the_post(); ?>

    <?php if(isset($hasError) || isset($captchaError)) { ?>
          <div class="alert alert-danger">
  <strong>There was an error submitting the form.
</div>
    <?php } ?>

              <div class="col-md-6 col-sm-12">
                <div class="block">
                  <form action="<?php the_permalink(); ?>" id="contactForm" method="post">
                    <div class="form-group">
                      <label for="contactName">Name</label>
                      <input type="text" name="contactName" id="contactName" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="form-control required" placeholder="Your Name">
                      <?php if($nameError != '') { ?>
            <span class="error"><?=$nameError;?></span> 
          <?php } ?>
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="form-control required" placeholder="Email Address">
                      <?php if($emailError != '') { ?>
            <span class="error"><?=$emailError;?></span>
          <?php } ?>
                    </div>
                    <div class="block">
                    <div class="form-group-2">
                      <label for="commentsText">Comments</label>
                      <textarea class="form-control" name="comments" id="commentsText" rows="3" placeholder="Your Message">
                        <?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?>
                      </textarea>
                      <?php if($commentError != '') { ?>
            <span class="error"><?=$commentError;?></span> 
          <?php } ?>
                    </div>
                    <input type="hidden" name="submitted" id="submitted" value="true" />
                    <button class="btn btn-default" type="submit">Send Message</button>
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
                      <i class="fa fa-envelope-o"></i>Email: support@bloomimpact.net
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
    <?php endwhile; ?>
  <?php endif; ?>
<?php } ?>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/contact-form.js"></script>
    </body>
</html>