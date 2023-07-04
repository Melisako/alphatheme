<?php
/*
Template Name: contact
*/

get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}
?>
<div class="contact-container">
  <h1>Contact'Us</h1>
    <form id="contact-form" method="post" action="">
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
            <textarea name="message" id="message"  rows="6" cols="30" required></textarea>
        </div>
        <input type="submit" value="Submit">
    </form>
</div>

<style>
.contact-container {
  max-width: 600px;
  margin: 80px auto;
  padding: 23px;
  background-color: #f5f5f5;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.form-group {
  margin-bottom: 20px;
}
h1 {
  font-size: 48px;
  font-weight: bold;
  color: #2a2a2a;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: 20px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
}


label {
  display: block;
  margin-bottom: 5px;
  color: var(--kit-colors-slate-900, #0F172A);
  font-size: 20px;
  font-family: Inter;
  font-style: normal;
  font-weight: 400;
  line-height: 24px;
}

input[type="text"],
input[type="email"],
textarea {
  width: 97%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  transition: border-color 0.3s ease;
}

input[type="text"]:hover,
input[type="email"]:hover,
textarea:hover {
  border-color: #54D350;
  box-shadow: 0 0 8px rgba(84, 213, 80, 0.3);
}

#contact-form input[type="submit"] {
    display: flex;
    border-radius: 16px;
    border: none;
    background: var(--brand-colour-emerald-500-main, #54D577);
    width: 256px;
    padding: 10px 16px;
    justify-content: center;
    align-items: center;
    gap: 8px;
    color: var(--kit-colors-slate-900, #0F172A);
    font-size: 14px;
    font-family: Inter;
    font-style: normal;
    font-weight: 700;
    line-height: 21px;
    transition: background-color 0.3s ease;
}

#contact-form input[type="submit"]:hover {
  background-color: #54D350;
  cursor: pointer;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
  transform: scale(1.05);
  transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
}

#contact-form input[type="submit"]:focus {
  outline: none;
}
</style>