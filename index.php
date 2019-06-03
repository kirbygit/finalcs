<?php require_once('config.php') ?>

<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>

<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>

<!-- head-section moved to includes -->
<?php require_once( ROOT_PATH . '/includes/head_section.php') ?>

<body>
	<!-- container -->
	<div class="container">

		<!-- navbar moved to includes -->
			<?php include( ROOT_PATH . '/includes/navbar.php') ?>

		<!-- banner moved to includes -->
			<?php include( ROOT_PATH . '/includes/banner.php') ?>

		<!-- Page content -->
		<div class="content">
			<h2 class="content-title">Recent Articles</h2>
			<hr>
			<!-- more content still to come here ... -->
		</div>
		<!-- // end of Page content -->

		<!-- footer -->
			<?php include( ROOT_PATH . '/includes/footer.php') ?>

	</div>
	<!-- // end of container -->
</body>

</html>

<!--
		PROJECT BY KIRBY
		CS12, PROFESSOR GHYAM
		PHP, MYSQL, APACHE, PHPMYADMIN
-->