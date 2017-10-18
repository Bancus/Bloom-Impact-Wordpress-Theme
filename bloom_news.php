  <?php get_header();
  		//Template Name:Bloom_News
   $post = $_GET['postid'];
$bloom_post = get_post($post);
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
                <a class="navbar-brand" href="/">
                  <img src="<?php bloginfo('template_url'); ?>/img/logo.png" class="small-sz" alt="Bloom Impact Logo">
                </a>
              </div>
                <div class="collapse navbar-collapse bloom-nav-b" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">Home</a></li>
                    <li><a href="/#intro">How it works</a></li>
                    <li><a href="/index.php/about">About</a></li>
                    <li><a href="/index.php/contact">Contact</a></li>
                    <li><a href="/index.php/news">News</a></li>
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
    <!-- Content Start -->
    <section id="testimonial">
      <div class="container">
        <div class="col-sm-8">
          <article>
           <h3><?php echo $bloom_post->post_title;?></h3>
           <p>
            <div class="clearfixe">
              <?php echo $bloom_post->post_content;?>
            </div>
          </p> 

          </article>

</div>
<div class="col-sm-4">
  <div class=" news-twitter">
  <a class="twitter-timeline" data-dnt="true" data-theme="light" data-link-color="#9b6c1b" href="https://twitter.com/BloomImpact?ref_src=twsrc%5Etfw">Tweets by BloomImpact</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
<br/>
  <button class="btn btn-xs btn-default btn-bloom pull-right twitter-read-more">Read More</button>
</div>
</div>
    </section>
    <!-- ..................................End Content................................................-->
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
    </body>
</html>