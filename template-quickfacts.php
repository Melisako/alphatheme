
<?php
/*
Template Name: Quick Facts Template
*/

get_header();
?>
 <h1>QUICK FACTS</h1> 

<div class="conta">
  <?php if (have_rows('module')) : ?>
    <?php $count = 1; ?>
    <?php while (have_rows('module')) : the_row(); ?>
      <?php if (get_row_layout() == 'quick_facts') :
        $colum = get_sub_field('colum');
        if (is_array($colum) || is_object($colum)) {
          ?>
          <?php foreach ($colum as $column) : ?>
            <div class="custom-column"> <!-- Replace "custom-column" with your preferred class name -->
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
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . '/css/quick.css'; ?>">
<?php get_footer(); ?>