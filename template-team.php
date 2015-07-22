<?php
/*
Template Name: Team
*/
$basement_template_name = 'team';
?>
    <?php get_template_part('templates/header'); ?>
		<?php /* Start loop */ ?>
		<?php while (have_posts()) : the_post(); ?>
    <?php include(locate_template('templates/banners/banner-team.php')); ?>
    <!--  Row for main content area -->
    <div class="main main-team" role="main">   
      <?php include(locate_template('templates/intro/intro-page.php')); ?>
      <?php include(locate_template('templates/loops/loop-posts-list.php')); ?>
    </div><!--  /.main -->


	<?php endwhile; // End the loop ?>
		
<?php get_footer(); ?>