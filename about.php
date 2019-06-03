<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>

<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>

<!-- head-section moved to includes -->
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>
<title>About Kirby</title>

<!-- navbar moved to includes -->
<?php include( ROOT_PATH . '/includes/navbar.php') ?>

<header class='masthead'>
  <p class='masthead-intro'>Hi I'm</p>
  <h1 class='masthead-heading'>Kirby!</h1>
</header>
<section class="introduction-section">
    <h1>Introduction</h1>
    <p>I am a student in Computer Science, Catholic, and a loving son. And I love technology.</p>
</section>
<section class="location-section">
    <h1>Where I'm From</h1>
    <p>I'm originally from Cebu, Philippines. </p>
</section>
<section class="questions-section">
    <h1>More About Me</h1>
    <h2>What are your favorite hobbies?</h2>
    <p>My favorite hobby is coding ang playing video games.</p>
    <h2>What's your dream job?</h2>
    <p>My dream job is a Software Developer or a Technical Project Manager.</p>
    <h2>Where do you live?</h2>
    <p>I live in Long Beach, California.</p>
    <h2>Why do you want to be a Software Developer?</h2>
    <p>Because programming is awesome and a good exercise for the mind is even more awesome.</p>
</section>

<footer class="content-footer">
    <ul class="social">
        <li><a class="css-is-deranged" href="https://github.com/kirbygit">GitHub</a></li>
        <li><a class="css-is-deranged" href="https://twitter.com/kirbyyjames">Twitter</a></li>
        <li><a class="css-is-deranged" href="https://angel.co/kboygit">AngelList</a></li>
    </ul>
</footer>

