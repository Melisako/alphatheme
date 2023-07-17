
<?php
get_header();
?>

<?php
$image = null; 
$title = null; 

if (have_rows('col')) {
    while (have_rows('col')) {
        the_row();
        $image = get_sub_field('image');
        $title = get_sub_field('title');
        break; 
    }
}
?>

<div class="container-image" style="background-image: url('<?php echo $image['url']; ?>'); ">


    <div class="overlay"></div>
    <div class="all">
    
    <div class="title">
        <?php echo $title; ?>
        <div class="p">
        <p style="color:white;">Search, Discover, and Review Range of Local Businesses and Services. Start now!</p>
</div>
    </div>

   
    

<div class="div">   
    <div class="input-container">
        <input type="text" name="custom-input" class="long">
        <input type="text" name="custom-input" >
        <input type="text" name="custom-input" >

        </div>
      
</div>
</div>
</div>



<?php get_footer();?>

