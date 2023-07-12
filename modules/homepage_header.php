
<?php
$image = null; 
$title = null; 

if (get_row_layout() === 'homepage_header') {

        $image = get_sub_field('image');
        $title = get_sub_field('title');
    }

?>

<div class="container-image" style="background-image: url('<?php echo $image['url']; ?>'); ">


    <div class="overlay"></div>
    <div class="container">
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
</div>


