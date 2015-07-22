<?php
/*
Template Name: Méthode
*/
?>
    <?php get_template_part('templates/header'); ?>
		<?php /* Start loop */ ?>
		<?php while (have_posts()) : the_post(); ?>
    <?php include(locate_template('templates/banners/banner-methode.php')); ?>
    <!--  Row for main content area -->
    <div class="main" role="main">
      <?php include(locate_template('templates/intro/intro-page.php')); ?>
      <?php include(locate_template('templates/loops/loop-methode.php')); ?>
    </div><!--  /.main -->    
      <?php include(locate_template('templates/banners/banner-tools.php')); ?>


	<?php endwhile; // End the loop ?>
		
<?php get_footer(); ?>