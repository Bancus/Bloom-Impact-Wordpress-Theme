<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
  <article>
  <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>

        <p><img src="<?php bloginfo('template_url'); ?>/img/blog/august.jpg" alt="post img" class="pull-left img-responsive thumb  col-sm-3 col-xs-12">
                         During the last several months, we've built out the technology, brought on top talent, formed strategic partnerships, met with small businesses on the ground, and more. Most importantly...</p>
    <?php the_excerpt(); ?>
    </article>
        <p><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>" class="button btn btn-xs btn-default btn-bloom">Read More</a></p>
    
  <?php endwhile; ?>
<?php else: ?>
  <h2>Can't Find Post</h2>
  <p>Sorry, we were unable to find the page you requested.</p>
<?php endif; ?>