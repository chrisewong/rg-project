<div class="header">
	<?php get_header(); ?>
</div>

<div class="single-page">
<?php
	while(have_posts()) {
	   the_post(); ?>
	<div class=”page”>
	<h1 class=”page-banner”><?php the_title(); ?></h1>
	</div>

	<!-- This code is the side links:
	<div class=”page-links”>
	<h2><a href=”#”>About Us</a></h2>
	<ul class=”min-list”>
		<li class=”current-page”><a href=”#”>Our History</a></li>
	</ul>
</div>	 -->

	<div class=”generic-content”>
	<?php the_content() ?>
	</div>
	</div>
	</div>
<?php }
	get_footer();
?>
