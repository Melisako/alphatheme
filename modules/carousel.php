<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <title>Gallery Carousel</title>

    <style>
        
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap');

html,
body {
  background-color: #F8FAFC;
}

.gallery {
    display: flex;
    justify-content: center;
    align-items: center;
}

.container h1{
    padding:0px  50px 50px 0;
    color: #000;
    font-size: 32px;
    font-family: 'Inter', sans-serif;
    font-weight: 700;
    line-height: 27px;
}
.gallerycarousel {
    display: flex;
    width: 959.5px;
    height: 167px;
    justify-content: center;
    align-items: flex-start;
    gap: 15.5px;
    flex-shrink: 0;
}
.gallerycarousel1 img{
    
        width: 100%;
        height: auto;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    
}

</style>


</head>
<body>
<?php 

$images = array();
    if(have_rows('image_gallery')):
        while( have_rows('image_gallery') ) : the_row();
            $image = get_sub_field('gallerycarousel');
            $images[] = $image;
        endwhile;
    endif;
?>

<div class="gallery">
    <div class="container">
    <h1>Gallery Carousel</h1>
        <div class="gallerycarousel">
            <?php foreach($image as $image_item) { ?>
                <div class="gallerycarousel1">
                    <img src="<?php echo $image_item; ?>" alt="image">
                </div>
            <?php } ?>
        </div>
    </div>
</div

</body>
</html>