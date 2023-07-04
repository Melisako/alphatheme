<!-- Include the header -->
<?php get_header(); ?>


<div class="contain">

  
      <?php if (get_row_layout() == 'quick_facts') :
        $columns = get_sub_field('colum');
        if (is_array($colum) || is_object($colum)) {
          ?>
   

      <div class="columns-section">
      <?php foreach ($colum as $column) : ?>
          <div class="colum">
            <p><?php echo $column['title']; ?></p>
            <p><?php echo $column['content']; ?></p>
            <p><?php echo $column['link']; ?></p>
          </div>
        <?php endforeach; ?>
      </div>

      <?php } endif; ?>
 

</div>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . '/css/quick.css'; ?>">

<!-- Include the footer -->
<?php get_footer(); ?>
