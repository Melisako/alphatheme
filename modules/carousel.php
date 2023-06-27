<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <title>Document</title>

    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap');
      
      html,
      body {
        background-color: #F8FAFC;
      }
    
      
      .gallery {
  text-align: center;
}

.gallery h1 {
  font-size: 24px;
  margin-bottom: 20px;
}

.gallerycarousel {
  display: flex;
  justify-content: center;
  align-items: center;
}

.gallerycarousel1 {
  width: 300px;
  margin: 0 10px;
}

.gallerycarousel1 img {
  width: 100%;
  height: auto;
}

.slick-prev,
.slick-next {
  position: absolute;
  top: 120%;
  transform: translateY(-50%);
  background-color: #000;
  color: #fff;
  font-size: 18px;
  padding: 10px 15px;
  border: none;
  cursor: pointer;
  z-index: 1;
}

.slick-prev {
  left: 45%;
  border-radius: 50%;
  background-color: transparent;
  border: none;
  outline: none;
  cursor: pointer;
  width: 30px;
  height: 30px;
}

.slick-prev:before {
  content: "";
  display: block;
  width: 0;
  height: 0;
  border-top: 7px solid transparent;
  border-bottom: 7px solid transparent;
  border-right: 10px solid #000; /* Adjust color as needed */
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-40%, -50%);
}
.slick-next {
    right: 45%;
  border-radius: 50%;
  background-color: transparent;
  border: none;
  outline: none;
  cursor: pointer;
  width: 30px;
  height: 30px;
}

.slick-next:before {
  content: "";
  display: block;
  width: 0;
  height: 0;
  border-top: 7px solid transparent;
  border-bottom: 7px solid transparent;
  border-left: 10px solid #000; /* Adjust color as needed */
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-60%, -50%);
}

      
      </style>
      
      
      </head>
      <body>


 
      <?php
$images = array();
if (have_rows('image_gallery')):
    while (have_rows('image_gallery')) : the_row();
        $image = get_sub_field('gallerycarousel');
        $images[] = $image; // Ruajmë vetëm URL-në e imazhit në vargun e imazheve
    endwhile;
endif;
?>

<div class="gallery">
    <div class="container">
        <h1>Gallery Carousel</h1>
        <div class="gallerycarousel">
            <?php foreach ($image as $image_item) : ?>
                <div class="gallerycarousel1">
                    <img src="<?php echo $image_item; ?>" alt="image">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
$(document).ready(function(){
  $('.gallerycarousel').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
   
  });
});
</script>


</body>
</html>