<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>

<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>

<!-- head-section moved to includes -->
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
<link rel="stylesheet" href="static/css/contact.css">
<title>Contact Kirby</title>

<!-- navbar moved to includes -->
<?php include( ROOT_PATH . '/includes/navbar.php') ?>

<div class="container">
  <form id="contact" action="" method="post">
    <h3>Connect with me</h3>
    <h4>Contact me today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>