
<!-- Include the header -->
<?php get_header(); ?>




<h1 class="quick-h1">QUICK FACTS</h1>

<div class="quick-cont">
  <?php if (get_row_layout() == 'quick_facts') :
    $colum = get_sub_field('colum');
    if (is_array($colum) || is_object($colum)) {
  ?>

  <div class="quick-section">
    <?php foreach ($colum as $column) : ?>
    <div class="co">
      <div class="title-quick"><span class="thumb-up">&#128077;</span>

<?php echo $column['title']; ?></div>
      <div class="link"><a href="<?php echo $column['link']; ?>"><?php echo $column['link']; ?></a></div>
      <p class="para"><?php echo $column['content']; ?></p>
    </div>
    <?php endforeach; ?>
  </div>

  <?php } endif; ?>
</div>



<div class="container">

  
      <?php if (get_row_layout() == 'quick_facts') :
        $columns = get_sub_field('colum');
        if (is_array($colum) || is_object($colum)) {
          ?>
   

      <div class="columns-section">
      <?php foreach ($colum as $column) : ?>
          <div class="column">
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
