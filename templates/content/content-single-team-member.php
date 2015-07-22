<?php $photo = get_field('thumbnail'); ?>
<?php $member_terms = wp_get_post_terms('team-member-type'); ?>			
<?php $member_position = $member_terms[0]->name; //the last/lowest taxonomy level?>
<?php $member_terms = wp_get_post_terms('job-title'); ?>			
<?php $job_title = $member_terms[0]->name; //the last/lowest taxonomy level?>

<section class="team-member clearfix column large-10 left">

	<header class="infos--team-member column medium-8 large-8 right">
		<h1><?php the_title(); ?></h1>
		<hr>
	</header>
	<section class="infos--team-member column medium-8 large-8 right">
		<?php the_field('bio'); ?>
	</section>
	<section class="infos--team-member column medium-4 large-4 right">
		<figure class="realisation-caption">
				<img class="realisation-photo" src="<?php echo $photo[sizes][square]; ?>" alt="<?php echo $photo[alt]; ?>" data-interchange="
				[<?php echo $photo[sizes][square-retina]; ?>, (retina))]" >
			<figcaption class="realisation-caption">
				<p class="caption-subt"><?php echo $job_title;?></p>
				<p class="caption-meta"><?php echo $member_position;?></p>
			</figcaption>
		</figure>
		<?php include(locate_template('templates/content/content-contact-details.php')); ?>
	</section>

</section>
