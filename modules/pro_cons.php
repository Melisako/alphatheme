<h1 class="h1">PROS & CONS </h1>
  <div class="container">
  
    <table>
      <tr>
        <td>
          <div class="pros">
            <h2>PROS</h2>

      
                <?php if (get_row_layout() == 'pro_cons') :
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
            
           
          </div>
        </td>

        <td>
          <div class="cons">
            <h2>CONS</h2>

  
                <?php if (get_row_layout() == 'pro_cons') :
                  $columns_cons = get_sub_field('columns_cons');
                ?>

                  <div class="columns-section">
                    <?php foreach ($columns_cons as $column) : ?>
                      <div class="column">
                        <p><?php echo $column['contenti']; ?></p>
                        <i class="fas fa-thumbs-down"></i>
                      </div>
                    <?php endforeach; ?>
                  </div>

                <?php endif; ?>
          
           
          </div>
        </td>
      </tr>
    </table>
  </div>


<!-- Include the Font Awesome library -->
<script src="your-font-awesome-kit.js" crossorigin="anonymous"></script>