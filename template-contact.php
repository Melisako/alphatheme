<?php
/*
Template Name: Contact Template
*/

get_header(); ?>
<form action="<?php echo esc_url( admin_url('admin-ajax.php') ); ?>" method="post">

[contact-form-7 id="97" title="Contact form 1"]
<label> Your name
    [text* your-name autocomplete:name] </label>

<label> Your email
    [email* your-email autocomplete:email] </label>

<label> Subject
    [text* your-subject] </label>

<label> Your message (optional)
    [textarea your-message] </label>

[submit "Submit"]
</form>

<?php get_footer(); ?>
