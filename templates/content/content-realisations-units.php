<?php $realisation_id = $featured_post->ID; ?>
<?php $realisation_name = $featured_post->post_title; ?>
<?php $photo = get_field('cover', $realisation_id); ?>
<?php // $realisation_terms = wp_get_post_terms( $realisation_id, 'realisation-type'); ?>			
<?php // $realisation_position = $realisation_terms[0]->name; //the last/lowest taxonomy level?>
<li class="realisation column medium-8 large-6 left">
	<h2 class="title--realisation"><?php echo $realisation_name;?></h2>

		<?php if ( get_field('video', $realisation_id) ) : ?>

            <?php while( has_sub_field( 'video', $realisation_id ) ): ?>

                <?php $image = get_sub_field('image_video'); ?>
                <?php $image_url = $image[sizes]['large']; ?>
                <?php if ( $image_url && get_sub_field( 'url_video' ) ) : ?>

				
				<div class="video-wrapper article-complet article block">
					
					<div class="video-player full" 
						style="background-image: url('<?php echo $image_url; ?>')"
						id="video-<?php echo( create_slug( get_sub_field( 'url_video' ))); ?>"
						data-source="<?php the_sub_field('url_video'); ?>"
						data-videohost="<?php the_sub_field('host_video'); ?>">
						<i aria-hidden="true" class="video-button-play"></i>
					</div>

				</div>

				<?php endif; ?>
            <?php endwhile; ?>
		<h5 class="desc--realisation"><?php the_field('short_description', $realisation_id);?></h5>
        <?php endif; ?>
</li>