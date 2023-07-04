<?php
    $modules = get_field('modules_list');

    if( have_rows('modules_list') ):
        while ( have_rows('modules_list') ) : the_row();
        include(get_template_directory() . '/modules/prosCons.php');
        include(get_template_directory() . '/modules/quickFacts.php');

        endwhile;
    endif;
?>