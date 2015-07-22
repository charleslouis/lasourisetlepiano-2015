<?php $member_id = $featured_post->ID; ?>
<?php $member_name = $featured_post->post_title; ?>
<?php $photo = get_field('thumbnail', $member_id); ?>
<?php $member_terms = wp_get_post_terms( $member_id, 'team-member-type'); ?>			
<?php $member_position = $member_terms[0]->name; //the last/lowest taxonomy level?>
<?php $member_terms = wp_get_post_terms( $member_id, 'job-title'); ?>			
<?php $job_title = $member_terms[0]->name; //the last/lowest taxonomy level?>
<li class="vignette">
	<a href="<?php echo get_permalink($member_id); ?>">
		<figure class="vignette-figure">
			<div class="vignette-photo-wrapper">
				<img class="vignette-photo" src="<?php echo $photo[sizes][square]; ?>" alt="<?php echo $photo[alt]; ?>" data-interchange="
				[<?php echo $photo[sizes][square-retina]; ?>, (retina))]" >
			</div>
			<figcaption class="vignette-caption">
				<h3 class="caption-t"><?php echo $member_name;?></h3>
				<p class="caption-subt"><?php echo $job_title;?></p>
				<p class="caption-meta"><?php echo $member_position;?></p>
			</figcaption>
		</figure>
	</a>
</li>