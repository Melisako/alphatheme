
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