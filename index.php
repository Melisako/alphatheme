<?php get_header();?>








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

<style>
      .fas.fa-thumbs-up {
    color: green;
    font-size: 24px;
    margin-right: 5px;
    margin-left: 350px;
  }
  .fas.fa-thumbs-down {
    color: red;
    font-size: 24px;
    margin-right: 5px;
    margin-left: 350px;
  }

  .container {
    display: flex;
  }

  h1 {
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    margin-left: 120px;
    margin-top: 40px;
  }

  .pros,
  .cons {
    margin-top: 40px;
    flex: 1;
    padding: 10px;
    box-sizing: border-box;
  }

  .column {
    display: flex;
    align-items: center;
  }

  .column p {
    padding-left: 20px;
    font-size: 16px;
  }
  
  .columns-section {
  
    margin-left: 35px;
    display: flex;
    flex-direction: column;
  }

  .cons .column {
    width: 500px;
    height: 43px;
    margin-bottom: 10px;
    border-radius: 15px;
    background: linear-gradient(to right, #FF0000 0%, #FF0000 5px, rgba(255, 0, 0, 0.1) 5px, rgba(255, 0, 0, 0.1) 100%);
  }

  .pros .column {
    width: 500px;
    height: 43px;
    margin-bottom: 10px;
    border-radius: 15px;
    background: linear-gradient(to right, #008000 0%, #008000 5px, rgba(0, 128, 0, 0.1) 5px, rgba(0, 128, 0, 0.1) 100%);
  }
  
  h2 {
    margin-left: 38px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    margin-bottom: 10px;
    font-weight: bold;
    font-size: 20px;
  }
</style>

<!-- Include the Font Awesome library -->
<script src="your-font-awesome-kit.js" crossorigin="anonymous"></script>
