



<h1>Pros & Cons Module</h1>

<div class="container">
  <div class="pros">
    <h2>PROS</h2>

    <?php if (have_rows('module')) : ?>
    <?php while (have_rows('module')) : the_row(); ?>
    <?php if (get_row_layout() == 'pro_section'):
            $columns = get_sub_field('columns');
        ?>

    <div class="columns-section">
      <?php foreach($columns as $column): ?>
      <div class="column">
   
        <p><?php echo $column['content']; ?></p>
        <i class="fas fa-thumbs-up"></i>
      </div>
      <?php endforeach; ?>
    </div>

    <?php endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>

  <div class="cons">
    <h2>CONS</h2>

    <?php if (have_rows('cons')) : ?>
    <?php while (have_rows('cons')) : the_row(); ?>
    <?php if (get_row_layout() == 'cons_module'):
            $columns = get_sub_field('column');
        ?>

    <div class="columns-section">
      <?php foreach($columns as $column): ?>
      <div class="column">
       
        <p><?php echo $column['content']; ?></p>
        <i class="fas fa-thumbs-down"></i>
      </div>
      <?php endforeach; ?>
    </div>

    <?php endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
</div>


<link rel="stylesheet" href="style.css">

<!-- Include the Font Awesome library -->
<script src="your-font-awesome-kit.js" crossorigin="anonymous"></script>