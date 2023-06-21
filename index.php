<?php get_header(); ?>


<?php if(have_rows('faq')) : ?>
    <?php while (have_rows('faq')) : the_row(); ?>

<?php if(get_row_layout() == 'faq_section'): 
    $pytjet = get_sub_field('faq');
?>
<div class="ask">
    <ul class="list">
<?php foreach($pytjet as $pytja){
    echo "<li>" . $pytja['Pyetjet'] . "<br>" . "</li>"; 
     echo "<li>" . $pytja['pergjigjet'] . "<br>" . "</li>";
}
?>
</ul>
</div>
<?php endif; ?>
<?php endwhile; ?>

<?php endif; ?>
    

    
<?php get_footer(); ?>

