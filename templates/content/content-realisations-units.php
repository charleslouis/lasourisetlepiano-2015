<?php $realisation_id = $featured_post->ID; ?>

<?php $realisation_name = $featured_post->post_title; ?>
<?php $photo = get_field('cover', $realisation_id); ?>
<?php // $realisation_terms = wp_get_post_terms( $realisation_id, 'realisation-type'); ?>			
<?php // $realisation_position = $realisation_terms[0]->name; //the last/lowest taxonomy level?>
<li class="realisation">
	<a href="<?php echo get_permalink($realisation_id); ?>">
		<h3 class="caption-t"><?php echo $realisation_name;?></h3>


		<?php if ( get_field('video', $realisation_id) ) : ?>

            <i aria-hidden="true" class=""></i>
            <?php while( has_sub_field( 'video', $realisation_id ) ): ?>

                <?php $image = get_sub_field('image_video'); ?>
                <?php $image_url = $image[sizes]['large']; ?>
                <?php if ( $image_url && get_sub_field( 'url_video' ) ) { ?>

				
				<div class="video-wrapper article-complet article block">
					
					<div class="video-player full" 
						id="video-<?php // echo( create_slug( get_sub_field( 'url_video' ))); ?>"
						data-source="<?php the_sub_field('url_video'); ?>"
						data-videohost="<?php the_sub_field('host_video'); ?>">
						
					  	<figure>
					    	<img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
						</figure>
						
					  <?php } ?>
					</div>
					
					<?php if ( get_sub_field('legende_video') ) { ?>
					<figcaption class="caption"><?php the_sub_field('legende_video'); ?></figcaption>
					<?php } ?>

				</div>

              <?php endwhile; ?>
          <?php endif; ?>
		
		<figure class="realisation-caption">
			<div class="realisation-photo-wrapper">
				<img class="realisation-photo" 
					src="<?php echo $photo[sizes][large]; ?>" 
					alt="<?php echo $photo[alt]; ?>">
			</div>
		</figure>
	</a>
</li>