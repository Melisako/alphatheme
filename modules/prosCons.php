<h1>PROS & CONS </h1>
  <div class="container">
  
    <table>
      <tr>
        <td>
          <div class="pros">
            <h2>PROS</h2>

            <?php if (have_rows('module')) : ?>
              <?php while (have_rows('module')) : the_row(); ?>
                <?php if (get_row_layout() == 'pro_section') :
                  $columns_copy = get_sub_field('columns_copy');
                  if (is_array($columns_copy) || is_object($columns_copy)) {
                ?>

                  <div class="columns-section">
                    <?php foreach ($columns_copy as $column) : ?>
                      <div class="column">
                        <p><?php echo $column['content']; ?></p>
                        <i class="fas fa-thumbs-up"></i>
                      </div>
                    <?php endforeach; ?>
                  </div>

                <?php } endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </td>

        <td>
          <div class="cons">
            <h2>CONS</h2>

            <?php if (have_rows('module')) : ?>
              <?php while (have_rows('module')) : the_row(); ?>
                <?php if (get_row_layout() == 'cons_section') :
                  $columns = get_sub_field('columns');
                ?>

                  <div class="columns-section">
                    <?php foreach ($columns as $column) : ?>
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
        </td>
      </tr>
    </table>
  </div>


<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . '/css/prosCons.css'; ?>">

<!-- Include the Font Awesome library -->
<script src="your-font-awesome-kit.js" crossorigin="anonymous"></script>