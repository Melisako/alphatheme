<?php 

function alpha_script() {
    wp_enqueue_style( 'customestyle', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'alpha_script' );

function alpha_theme_setup(){
    add_theme_support( 'menus');

    register_nav_menu( 'primary', 'Primary Nav Menu'); 
    register_nav_menu( 'secondary', 'Secondary Nav Menu');

}
add_action( 'init', 'alpha_theme_setup');

if (file_exists(get_stylesheet_directory() . '/acf-export/acf-data.php')) {
    include_once(get_stylesheet_directory() . '/acf-export/acf-data.php');
}
add_action( 'admin_post_nopriv_contact_form', 'handle_contact_form' );
add_action( 'admin_post_contact_form', 'handle_contact_form' );



     function post_type() {
        $etiketa = array(
            'name' => 'Business',
            'singular_name' => 'Business',
            'menu_name' => 'Business',
        );
    
        $args = array(
            'labels' => $etiketa,
            'public' => true,
            'has_archive' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields','comments' ),
            'capability_type' => 'post', 
        );
    
        register_post_type( 'bussines_pos', $args );
    }
    add_action( 'init', 'post_type' );
    


//JQUERY


function load_more_businesses() {
    $offset = isset($_POST['offset']) ? intval($_POST['offset']) : 0;
    $businessesPerPage = isset($_POST['businessesPerPage']) ? intval($_POST['businessesPerPage']) : 3;

    ob_start();

    $businesses = get_sub_field('business', false, false, $offset, $businessesPerPage);

    if ($businesses) {
        foreach ($businesses as $post) {
            setup_postdata($post);
            // Output the business item markup
            ?>
            <div class="business-item" data-business-id="<?php echo $post->ID; ?>">
                <!-- Existing business content here -->
            </div>
            <?php
        }
        wp_reset_postdata();
    }

    // Return the generated markup
    $markup = ob_get_clean();
    echo $markup;

    wp_die(); // This is required to terminate the AJAX request properly
}





add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');
function blog_scripts() {
    // Register the script
    wp_register_script( 'custom-script', get_stylesheet_directory_uri(). '/js/custom.js', array('jquery'), false, true );
 
    // Localize the script with new data
    $script_data_array = array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'security' => wp_create_nonce( 'load_more_posts' ),
    );
    wp_localize_script( 'custom-script', 'blog', $script_data_array );
 
    // Enqueued script with localized data.
    wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'blog_scripts' );




function load_posts_by_ajax_callback() {
    check_ajax_referer('load_more_posts', 'security');
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => '2',
        'paged' => $_POST['page'],
    );
    $blog_posts = new WP_Query( $args );
    ?>

<?php if ( $blog_posts->have_posts() ) : ?>
    <?php while ( $blog_posts->have_posts() ) : $blog_posts->the_post(); ?>
        <div class="post">
            <h2><?php the_title(); ?></h2>
            <div class="excerpt"><?php the_excerpt(); ?></div>
            <?php $textarea = get_field('textarea'); ?>
            <?php if ($textarea) : ?>
                <div class="textarea"><?php echo $textarea; ?></div>
            <?php endif; ?>
            <?php $imag = get_field('imag'); ?>
            <?php if ($imag) : ?>
                <img src="<?php echo $imag['url']; ?>" alt="<?php echo $imag['alt']; ?>" class="imag">
            <?php endif; ?>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php wp_die(); }?>
