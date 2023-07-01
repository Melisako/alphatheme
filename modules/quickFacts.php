
<!-- Include the header -->
<?php get_header(); ?>


<h1>Pros & Cons Module</h1>

<div class="container">
  <div class="pros">
    <h2>PROS</h2>

    <?php if (have_rows('module')) : ?>
    <?php while (have_rows('module')) : the_row(); ?>
    <?php if (get_row_layout() == 'quickFacts'):
            $columns = get_sub_field('columns');
        ?>

    <div class="columns-section">
      <?php foreach($columns as $column): ?>
      <div class="column">
   
        <p><?php echo $column['title']; ?></p>
        <p><?php echo $column['content']; ?></p>
        <p><?php echo $column['link']; ?></p>
        <i class="fas fa-thumbs-up"></i>
      </div>
      <?php endforeach; ?>
    </div>

    <?php endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>



   
</div>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . '/css/prosCons.css'; ?>">

<!-- Include the Font Awesome library -->
<script src="your-font-awesome-kit.js" crossorigin="anonymous"></script>
