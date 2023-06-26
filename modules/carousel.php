<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>
    <title>Document</title>

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


    /* .gallerycarousel1 img {
        max-width: 100%;
        height: auto;
    }

    .carousel-btn {
        display: none;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 30px;
        height: 30px;
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        text-align: center;
        line-height: 30px;
        cursor: pointer;
    }

    .carousel-btn.left {
        left: 10px;
    }

    .carousel-btn.right {
        right: 10px;
    } */
      
      </style>
      
      
      </head>
      <body>
      <?php
$images = array();
if (have_rows('image_gallery')):
    while (have_rows('image_gallery')) : the_row();
        $image = get_sub_field('gallerycarousel');
        $images[] = $image;
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
        <!-- <div class="carousel-btn left">&lt;</div>
        <div class="carousel-btn right">&gt;</div> -->
    </div>
</div>

<!-- <script>
    window.addEventListener('load', function() {
        var gallery = document.querySelector('.gallerycarousel');
        var galleryItems = gallery.querySelectorAll('.gallerycarousel1');
        var containerWidth = gallery.offsetWidth;
        var itemWidth = galleryItems[0].offsetWidth;
        var totalWidth = itemWidth * galleryItems.length;
        var translateValue = 0;

        var carouselBtnLeft = document.querySelector('.carousel-btn.left');
        var carouselBtnRight = document.querySelector('.carousel-btn.right');

        if (totalWidth > containerWidth) {
            carouselBtnLeft.style.display = 'block';
            carouselBtnRight.style.display = 'block';
        }

        carouselBtnLeft.addEventListener('click', function() {
            if (translateValue < 0) {
                translateValue += itemWidth;
                gallery.style.transform = 'translateX(' + translateValue + 'px)';
            }
        });

        carouselBtnRight.addEventListener('click', function() {
            if (Math.abs(translateValue) < (totalWidth - containerWidth)) {
                translateValue -= itemWidth;
                gallery.style.transform = 'translateX(' + translateValue + 'px)';
            }
        });
    });
</script> -->

</body>
</html>