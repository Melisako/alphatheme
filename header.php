<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a1c656b99c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-xXTqyUJ7gvUo6WSK8LXjEp4u9ZoMBzgwbBbRWVZCh0s9TNOIN/6X0TXjMK5sKhdGg2m6ifldyA2VMyd+hGJSOQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link rel="stylesheet" href="css/style.css">
 <script src="your-font-awesome-kit.js" crossorigin="anonymous"></script>

    <title>Document</title>
    <?php wp_head(); ?>
    <style>
        /* Add your custom CSS styles here */
    </style>
</head>

<body <?php body_class(); ?>>

<section class="header">

<div class="container">
<div class="img">
<img src="<?php echo get_stylesheet_directory_uri() . '/img/foto1.svg'; ?>"  class="left">
</div>
    <div class="navmenu">
 <?php   wp_nav_menu(array('theme_location' => 'primary')) ;?>

</div>
</div>
</section>

    <div class="container">
        <div class="img">
            <img src="<?php echo get_stylesheet_directory_uri() . '/img/foto1.svg'; ?>" class="left">
            <img src="<?php echo get_stylesheet_directory_uri() . '/img/vector.svg'; ?>" class="right">
        </div>
        <div class="navmenu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class' => 'menu',
                'container' => 'ul',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li><a href="' . get_template_directory_uri() . '/modules/prosCons.php">Pros & Cons</a></li></ul>'
            ));
            ?>
        </div>
    </div>
</section>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . '/css/header.css'; ?>">


</body>
</html>

