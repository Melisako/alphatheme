

<?php get_header(); ?>
<div class="profile">
<div class="container">
<div class="bussines_profile">
<h1>  <?php the_title(); ?> </h1>

<?php $fotot = get_field('foto'); 
if($fotot) :?>

<?php foreach($fotot as $foto): ?>
<img src="<?php echo $foto; ?>" class='foto'>

<?php endforeach; ?>

<?php endif; ?>

<div class="emri_reviews">
<strong> Emri Biznesit : </strong> <?php the_field('emri'); ?> </strong>
<p> Reviews: </p> <?php the_field('reviews'); ?> </strong>
</div>
<div class="text">
<strong> Informata per biznes : </strong> <?php the_field('informata'); ?> 
</div>
<?php if(have_rows('komente')) : ?>

<?php 
while(have_rows('komente')): the_row();
$kom = get_sub_field('komentet'); ?>


<p>Komente :<?php echo $kom;  ?> 
<?php endwhile; ?>


<?php endif ?>
</div>
</div>
</div>
<?php get_footer(); ?>

