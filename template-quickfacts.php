<?php
/*
Template Name: Quick Facts Template
*/

get_header();
?>
 <h1>QUICK FACTS</h1> 
<div class="conta">
  
  <div class="swiper-container quick">
    <div class="swiper-wrapper">
      <?php if (have_rows('module')) : ?>
        <?php $count = 1; ?>
        <?php while (have_rows('module')) : the_row(); ?>
          <?php if (get_row_layout() == 'quick_facts') :
            $colum = get_sub_field('colum');
            if (is_array($colum) || is_object($colum)) {
              ?>
              <?php foreach ($colum as $column) : ?>
                <div class="swiper-slide col"> <!-- Update class name here -->
                  <h2 class="column-title"><?php echo $count; ?>. <?php echo $column['title']; ?></h2>
                  <div class="col-content">
                    <p><?php echo $column['content']; ?></p>
                    <a href="<?php echo $column['link']; ?>" class="column-link"><?php echo $column['link']; ?></a>
                  </div>
                </div>
                <?php $count++; ?>
              <?php endforeach; ?>
            <?php } endif; ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . '/css/quick.css'; ?>">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 2, // Number of slides to show
      spaceBetween: 20, // Gap between slides
      loop: true, // Enable continuous loop
      pagination: {
        el: '.swiper-pagination', // Pagination element
        clickable: true // Enable clickable pagination bullets
      },
      navigation: {
        nextEl: '.swiper-button-next', // Next button class
        prevEl: '.swiper-button-prev', // Previous button class
      }
    });
  });
</script>

<?php get_footer(); ?>
