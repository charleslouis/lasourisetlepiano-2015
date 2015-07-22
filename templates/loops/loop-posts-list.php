<?php 
// the page (ie team) enables featuring of posts (ie team-MEMBERS)
// here we loop through all the featured posts and require the template
?>

<?php if( get_field('posts_list', $post->ID) ): ?>	
<section class="columns">
	<ul class="<?php echo $basement_template_name; ?>-cpo vignette-list">
			<?php while( has_sub_field('posts_list') ) : ?>
			<?php $featured_post = get_sub_field('featured_post'); ?>
			<?php include(locate_template('templates/content/content-'. $basement_template_name .'-units.php')); ?>
		<?php endwhile; ?>
	</ul>
</section>
<?php endif; ?>		