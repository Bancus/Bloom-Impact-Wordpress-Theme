  <?php get_header();
      //Template Name:News
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
        <section id="news">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h3>Our Latest News Updates</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content Start -->
    <section id="testimonial">
      <div class="container">
        <div class="col-sm-8">

          <?php
/*
 * Template name: News
 */
$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // get current page number
$args = array(
  'posts_per_page' => get_option('posts_per_page'), // the value from Settings > Reading by default
  'paged'          => $current_page // current page
);
query_posts( $args );
 
$wp_query->is_archive = true;
$wp_query->is_home = false;
 
while(have_posts()): the_post();
  ?>
  <h4><?php the_title() /* post title */ ?></h4>

  <p><?php the_excerpt(); ?></p>
   <p><a href="/index.php/news_details/?postid=<?php echo $id; ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="button btn btn-xs btn-default btn-bloom">Read More</a></p>
   <hr/>
  <?php
endwhile;

if( function_exists('wp_pagenavi') ) wp_pagenavi(); // WP-PageNavi function
?>
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

    <a id="back-to-top" href="#" class="btn btn-default btn-bloom back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="fa fa-chevron-up"></span></a>
    <!-- ..................................End Content................................................-->
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
    <script>
  jQuery('.twitter-read-more').click(function(){
      jQuery('.news-twitter').css('max-height', '100%');
    });
  jQuery(document).ready(function(){
     jQuery(window).scroll(function () {
            if (jQuery(this).scrollTop() > 50) {
                jQuery('#back-to-top').fadeIn();
            } else {
                jQuery('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        jQuery('#back-to-top').click(function () {
            jQuery('#back-to-top').tooltip('hide');
            jQuery('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        jQuery('#back-to-top').tooltip('show');

});
    </script>
    </body>
</html>