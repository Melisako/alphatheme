<?php
/*
Template Name: template-contact
*/

get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        
      
        the_title('<h1>', '</h1>');

        the_content();
    }
}

// Shfaq formularin e kontaktit
?>
<div class="contact-container">
    <form id="contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
        <input type="hidden" name="action" value="submit_contact_form">
        <div class="form-group">
            <label for="fullname">Fullname:</label>
            <input type="text" name="fullname" id="fullname" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" id="message" required></textarea>
        </div>
        <input type="submit" value="Submit">
    </form>
</div>

<?php
get_footer();
?>





<style>

.contact-container {
  max-width: 600px;
  margin: 80px auto;
  padding: 20px;
  background-color: #f5f5f5;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

input[type="submit"] {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #0056b3;
}

/* Stilizimi i mesazhit për gabime */
.error-message {
  color: red;
  margin-top: 10px;
}



</style>