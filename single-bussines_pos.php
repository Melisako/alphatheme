<?php get_header(); ?>

<div class="business">
    <div class="business-cont">
<?php the_field('textarea'); ?>
</div>
<?php 
$im = get_field('im'); 
if ($im) :
    $image = $im['url']; // Get the URL of the image
    $alt = $im['alt']; // Get the alt text of the image
?>
<div class="business-img">
    <img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>" class="foto">
<?php endif; ?>
</div>
</div>