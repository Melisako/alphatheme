
<footer>

<div class="container">
        <div class="footer-section">
<div class="left-footer">

<img src="<?php echo get_stylesheet_directory_uri() . '/img/icon.svg'; ?>"  class="left">

<div class="text">
        <h3>About Alpha Theme </h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum tenetur voluptatem, alias animi magni ab, repudiandae, 
nihil voluptatibus voluptatum aperiam accusantium. Mollitia ab esse reprehenderit ullam, sunt fugiat odit nostrum? </p>
</div>
<div class="social">
<span> Follow Us </span>
<div class="logo">
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"> <i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"> <i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"> <i class="fa-brands fa-instagram"></i></a>


       
</div>
</div>
</div>
<div class="right-footer">
<div class="menu1">
        <h3>Site Links </h3>

<?php  wp_nav_menu(array('theme_location' => 'secondary'));?>
</div>
<div class="menu2">
<h3>Our Sites</h3>
<?php wp_nav_menu(array('theme_location' => 'third'));?>
</div>
</div>
</div>
</div>
<p class="footer-paragraf">2023. All rights reserved. </p>
</footer>



<div class="wrapper">
    <div class="content">
      <!-- Your page content here -->
    </div>
    <footer>
      <p>This is the footer</p>
      <?php wp_nav_menu(array('theme_location' => 'secondary'));?>
    </footer>
  </div>


</body>
<?php wp_footer(); ?>


<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() . '/css/footer.css'; ?>">

</html>

</html>

