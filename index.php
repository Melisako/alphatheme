<?php if (have_rows('content')) : ?>
    <?php while (have_rows('content')) : the_row(); ?>
        <?php if (get_row_layout() == 'columns_section'): 
            $columns = get_sub_field('columns');
        ?>

        <style>
            body {
                background-color: #606C5D;
                }
                .columns-section {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin-top: 50px;
    margin-left: 55px;
}

.column {
    padding: 20px;
    background-color: #f7e6c7;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
                border: 1px solid #e4cda2;
                border-radius: 8px;
                font-family: 'Courier New', monospace;
    width: 48%; /* Adjust the width as needed */
    margin-bottom: 20px; /* Add margin between columns */
}

           

            .column h3 {
                margin-top: 0;
                font-size: 20px;
                font-weight: bold;
                color: #bf744b;
                text-transform: uppercase;
            }

            .column p {
                margin-bottom: 0;
                font-size: 16px;
                line-height: 1.2;
                color: #5e4635;
            }
            h2 {margin-top: 40px;
                color:  #f7e6c7;
               display: flex;
               flex-direction: row;
            align-items: center;
               align-content: center;
                margin-left: 290px;
               font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
               
            }
        </style>
 <h2>PROS</h2>
        <div class="columns-section">
       
            <?php foreach($columns as $column): ?>
                <div class="column">
                    <h3><?php echo $column['title']; ?></h3>
                    <p><?php echo $column['content']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>

        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>





