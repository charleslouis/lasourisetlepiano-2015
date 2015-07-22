<?php
/*
Template Name: Home
*/
?>
		<?php get_template_part('templates/header'); ?>
		<?php /* Start loop */ ?>
		<?php while (have_posts()) : the_post(); ?>
    <?php include(locate_template('templates/banners/banner-home.php')); ?>
    <!--  Row for main content area -->
    <div class="main main-home" role="main">
        <?php include(locate_template('templates/intro/intro-page.php')); ?>
    </div><!--  /.main --> 
	<?php endwhile; // End the loop ?>
		
<?php get_footer(); ?>