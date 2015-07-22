			<section class="page-intro">
        <header class="page-intro-header">
		    <?php if ( is_front_page() ) : // if this is home, we want a full width.  ?>
          <h1><?php the_field('title'); ?></h1>
				<?php else : ?>
          <h1 class="large-9"><?php the_field('title'); ?></h1>        
				<?php endif; ?>
          <h3><?php the_field('subtitle'); ?></h3>
          <hr>
        </header>
       	<p class="leader page-intro-prose"><?php the_field('paragraph_leader'); ?></p>        	
      </section><!--  /.page-intro -->