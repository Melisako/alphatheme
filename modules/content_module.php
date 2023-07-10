<?php 
    $modules = [];
    $fields = [];
    if(have_rows('content_module')):
        while( have_rows('content_module') ) : the_row();
            $modules[] = get_sub_field('content_module');
            $fields[] = get_sub_field('content_field');
        endwhile;
    endif;
?>
<div class="container">
<div class="content">
    <div class="content_modules">
        <div class="content__modules__title">Content Module:</div>
        <div class="content__modules__items">
            <?php foreach($modules as $module) { ?>
                <div class="content__modules__items__item">
                    <?= $module; ?>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="content__fields">
        <div class="content__fields__title">Content Field:</div>
            <div class="content__fields__items">
                <?php foreach($fields as $field) { ?>
                    <div class="content__fields__items__item">
                        <?= $field; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
               