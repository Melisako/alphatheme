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



<!-- Include the footer -->
<?php get_footer(); ?>
