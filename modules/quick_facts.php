<div class="container">
  <h1 class="quick-h1">QUICK FACTS</h1>

  <div class="quick-cont">
    <?php if (have_rows('quick_facts')) : ?>
      <?php while (have_rows('quick_facts')) : the_row(); ?>
        <?php $colum = get_sub_field('colum'); ?>
        <?php if (is_array($colum) || is_object($colum)) : ?>
          <div class="quick-section">
            <?php foreach ($colum as $column) : ?>
              <a href="<?php echo $column['link']; ?>" class="co">
                <div class="title-quick">
                  <span class="thumb-up">&#128077;</span>
                  <?php echo $column['title']; ?>
                </div>
                <p class="para"><?php echo $column['content']; ?></p>
              </a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>

</div>

<!-- Include the footer -->
<?php get_footer(); ?>
