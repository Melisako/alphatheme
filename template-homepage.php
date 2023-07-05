<!-- Include the header -->
<?php
get_header();
$image = get_field('image');

?>


<div class="container-header">

  
      <?php if (get_row_layout() == 'homepage_header') :
        $col = get_sub_field('col');
        if (is_array($col) || is_object($col)) {
          ?>
   

      <div class="columns-section">
      <?php foreach ($col as $column) : ?>
          <div class="colum">
            <h1><?php echo $column['title']; ?></h1>
         
          </div>
        <?php endforeach; ?>
      </div>

      <?php } endif; ?>
      <img src="<?php echo $picture;?>" class="img">
   

</div>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . '/css/homepage.css'; ?>">

