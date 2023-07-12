<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-content">
    <div class="blog-posts">
      <?php
      $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'order' => 'DESC',
        'posts_per_page' => 2 // Show only 2 posts initially
      );

      $blog_posts = new WP_Query($args);

      if ($blog_posts->have_posts()) :
        while ($blog_posts->have_posts()) : $blog_posts->the_post();
          $textare = get_field('textare');
          $imag = get_field('imag');
      ?>
          <div class="post">
            <h1><?php the_title(); ?></h1>
            <div class="textare"><?php echo wpautop($textare); ?></div>
            <?php if ($imag) : ?>
              <img src="<?php echo $imag['url']; ?>" alt="<?php echo $imag['alt']; ?>" class="imag">
            <?php endif; ?>
          </div>
      <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
  </div>
</article>


<div class="load-more">
  <div class="loadmore">Load More</div>
</div> 
