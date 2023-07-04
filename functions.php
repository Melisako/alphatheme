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

    function handle_contact_form() {
        // Get the form data
        $name = $_POST['your-name'];
        $email = $_POST['your-email'];
        $message = $_POST['your-message'];
     
        // Prepare the email message
        $to = 'your-email@example.com'; // Replace with your email address
        $subject = 'New Contact Form Submission';
        $body = "Name: $name\n\nEmail: $email\n\nMessage: $message";
        $headers = "From: $name <$email>";
     
        // Send the email
        $success = wp_mail($to, $subject, $body, $headers);
     
        if ($success) {
           // Email sent successfully
           wp_redirect('thank-you-page'); // Replace with the URL of your thank you page
           exit;
        } else {
           // Failed to send email
           wp_die('Oops! Something went wrong.'); // Display an error message
        }
     }
     


?>