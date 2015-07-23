<?php
/*
Default Template For bbPress
*/
?>
<?php get_template_part('templates/header'); ?>

<!-- Row for main content area -->
	<div class="main main-bbpress" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
		
<?php get_footer(); ?>