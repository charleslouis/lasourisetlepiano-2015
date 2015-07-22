<?php $realisation_id = $featured_post->ID; ?>
<?php $realisation_name = $featured_post->post_title; ?>
<?php $photo = get_field('photo-small', $realisation_id); ?>
<?php $realisation_terms = wp_get_post_terms( $realisation_id, 'team-realisation-type'); ?>			
<?php $realisation_position = $realisation_terms[0]->name; //the last/lowest taxonomy level?>
<li class="realisation">
	<a href="<?php echo get_permalink($realisation_id); ?>">
		<figure class="realisation-caption">
			<div class="realisation-photo-wrapper">
				<img class="realisation-photo" src="<?php echo $photo[sizes][square]; ?>" alt="<?php echo $photo[alt]; ?>" data-interchange="[<?php echo $photo[sizes][square-retina]; ?>, (retina))]">				
			</div>
			<figcaption class="realisation-caption">
				<h3 class="caption-t"><?php echo $realisation_name;?></h3>
				<p class="caption-subt"><?php the_field('title', $realisation_id);?></p>
				<p class="caption-meta"><?php echo $realisation_position;?></p>
			</figcaption>
		</figure>
	</a>
</li>